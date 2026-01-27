<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
class LandingPageController extends Controller
{
    public function index()
    {
        return view('admin.landing_page');
    }

    public function data(Request $request)
    {
        // Select all fields for the table, including those hidden in modal
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
        $id = $request->item_db_id;
        $existingItem = $id ? DB::table('page_items')->where('id', $id)->first() : null;
        $itemType = $existingItem ? $existingItem->item_type : 'section';

        $data = [
            'text' => $request->text,
            'updated_at' => now(),
        ];

        // 1. Handle Card Images Logic
        if ($itemType === 'card' && $request->has('card_titles')) {
            $cards = [];
            // Decode old cards to find files to delete
            $oldCards = $existingItem ? json_decode($existingItem->card_json, true) : [];

            foreach ($request->card_titles as $index => $title) {
                $cardImage = $request->existing_card_images[$index] ?? null;

                if ($request->hasFile("card_images.$index")) {
                    // DELETE OLD CARD IMAGE
                    if (isset($oldCards[$index]['image'])) {
                        $this->deleteFileByUrl($oldCards[$index]['image']);
                    }

                    $file = $request->file("card_images.$index");
                    $path = $file->store('uploads/cards', 'public');
                    $cardImage = asset('storage/' . $path);
                }

                $cards[] = [
                    'title' => $title,
                    'desc' => $request->card_descs[$index] ?? '',
                    'image' => $cardImage
                ];
            }
            $data['card_json'] = json_encode($cards);
        }

        // 2. Handle main "image_url"
        if ($request->hasFile('image_file')) {
            if ($existingItem && $existingItem->image_url) {
                $this->deleteFileByUrl($existingItem->image_url);
            }
            $path = $request->file('image_file')->store('uploads/items', 'public');
            $data['image_url'] = asset('storage/' . $path);
        }

        // 3. Handle main "item_image"
        if ($request->hasFile('change_image_file')) {
            if ($existingItem && $existingItem->item_image) {
                $this->deleteFileByUrl($existingItem->item_image);
            }
            $path = $request->file('change_image_file')->store('uploads/items', 'public');
            $data['item_image'] = asset('storage/' . $path);
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

    /**
     * Helper to delete file from public storage via URL
     */
    private function deleteFileByUrl($url)
    {
        if (!$url)
            return;

        // Convert URL back to relative path:
        // From: http://domain.com/storage/uploads/file.jpg
        // To: uploads/file.jpg
        $path = str_replace(asset('storage/'), '', $url);

        if (Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
        }
    }
}