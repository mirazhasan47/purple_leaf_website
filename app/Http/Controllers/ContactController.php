<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        // Validate input
        $request->validate([
            'fullName' => 'required|string|max:255',
            'businessName' => 'required|string|max:255',
            'email' => 'required|email',
            'projectIdea' => 'required|string',
        ]);

        // Send the email
        Mail::to('recipient@example.com')->send(new TestMail($request->all()));

        return redirect()->back()->with('success', true);
    }
}
