<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CookieController extends Controller
{
    public function status(Request $request)
    {
        $exists = DB::table('cookie_consents')
            ->where('ip_address', $request->ip())
            ->exists();

        return response()->json([
            'accepted' => $exists
        ]);
    }

    public function store(Request $request)
    {
        $ip = $request->ip();

        $exists = DB::table('cookie_consents')
            ->where('ip_address', $ip)
            ->exists();

        if (!$exists) {
            DB::table('cookie_consents')->insert([
                'ip_address' => $ip,
                'user_agent' => $request->userAgent(),
                'accepted' => 1,
                'created_at' => now(),
            ]);
        }

        cookie()->queue(
            cookie('cookie_accepted', 'true', 525600)
        );

        return response()->json(['status' => 'ok']);
    }
}
