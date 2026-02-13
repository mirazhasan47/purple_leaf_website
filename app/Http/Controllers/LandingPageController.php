<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class LandingPageController extends Controller
{
    public function index()
    {
        return view('admin.landing_page');
    }

    public function data(Request $request)
    {
        $items = DB::table('page_items')
            ->select('id', 'page_name', 'item_type', 'item_image', 'image_url', 'text', 'card_json', 'created_at')
            ->get();

        return response()->json(['data' => $items]);
    }

    public function edit($id)
    {
        $item = DB::table('page_items')->where('id', $id)->first();
        return response()->json($item);
    }

    public function save(Request $request)
    {
        // Ensure public storage works
        $this->ensurePublicStorage();

        // Make sure folders exist
        Storage::disk('public')->makeDirectory('uploads/items');
        Storage::disk('public')->makeDirectory('uploads/cards');

        $id = $request->item_db_id;
        $existingItem = $id ? DB::table('page_items')->where('id', $id)->first() : null;
        $itemType = $existingItem ? $existingItem->item_type : 'section';

        $data = [
            'text' => $request->text,
            'updated_at' => now(),
        ];

        // 1. Card Images
        if ($itemType === 'Card' && $request->has('card_titles')) {
            $cards = [];
            $oldCards = $existingItem ? json_decode($existingItem->card_json, true) : [];

            foreach ($request->card_titles as $index => $title) {
                $cardImage = $request->existing_card_images[$index] ?? null;

                if ($request->hasFile("card_images.$index")) {
                    if (isset($oldCards[$index]['image'])) {
                        $this->deleteFileByUrl($oldCards[$index]['image']);
                    }

                    $path = $request->file("card_images.$index")->store('uploads/cards', 'public');

                    // Copy file to public/storage immediately for Windows/XAMPP
                    $this->copyToPublicStorage($path);

                    $cardImage = asset(Storage::url($path));
                }

                $cards[] = [
                    'title' => $title,
                    'desc'  => $request->card_descs[$index] ?? '',
                    'image' => $cardImage,
                ];
            }

            $data['card_json'] = json_encode($cards);
        }

        // 2. image_url
        if ($request->hasFile('image_file')) {
            if ($existingItem && $existingItem->image_url) {
                $this->deleteFileByUrl($existingItem->image_url);
            }

            $path = $request->file('image_file')->store('uploads/items', 'public');

            // Copy file for Windows/XAMPP
            $this->copyToPublicStorage($path);

            $data['image_url'] = asset(Storage::url($path));
        }

        // 3. item_image
        if ($request->hasFile('change_image_file')) {
            if ($existingItem && $existingItem->item_image) {
                $this->deleteFileByUrl($existingItem->item_image);
            }

            $path = $request->file('change_image_file')->store('uploads/items', 'public');

            // Copy file for Windows/XAMPP
            $this->copyToPublicStorage($path);

            $data['item_image'] = asset(Storage::url($path));
        }

        // DB Operations
        if ($id) {
            DB::table('page_items')->where('id', $id)->update($data);
            return response()->json(['success' => 'Item updated successfully!']);
        } else {
            $data['created_at'] = now();
            $data['page_name'] = 'Home Page';
            $data['item_type'] = 'section';
            $data['item_id'] = 'section_' . time();

            DB::table('page_items')->insert($data);
            return response()->json(['success' => 'Item created successfully!']);
        }
    }

    // Ensure public storage works (symlink Linux / copy fallback Windows)
    private function ensurePublicStorage()
    {
        $publicStorage = public_path('storage');
        $storagePublic = storage_path('app/public');

        if (!file_exists($publicStorage)) {
            try {
                symlink($storagePublic, $publicStorage); // Linux / VPS
            } catch (\Throwable $e) {
                // Copy folder if symlink fails (Windows / XAMPP)
                File::copyDirectory($storagePublic, $publicStorage);
            }
        }
    }

    // Copy uploaded file to public/storage for immediate access (Windows/XAMPP)
    private function copyToPublicStorage($relativePath)
    {
        $source = storage_path('app/public/' . $relativePath);
        $destination = public_path('storage/' . $relativePath);

        // Ensure destination folder exists
        $destDir = dirname($destination);
        if (!file_exists($destDir)) {
            File::makeDirectory($destDir, 0755, true);
        }

        // Copy file
        File::copy($source, $destination);
    }

    // Delete file from storage and public copy
    private function deleteFileByUrl($url)
    {
        if (!$url) return;

        $path = ltrim(parse_url($url, PHP_URL_PATH), '/');
        $path = str_replace('storage/', '', $path);

        Storage::disk('public')->delete($path);

        $publicFile = public_path('storage/' . $path);
        if (file_exists($publicFile)) {
            @unlink($publicFile);
        }
    }
}
