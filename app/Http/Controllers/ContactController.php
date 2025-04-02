<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Form validatsiyasi
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Email yuborish
        Mail::send([], [], function ($message) use ($request) {
            $message->to('recipient_email@example.com') // Qabul qiluvchi email
                ->subject('New Contact Form Submission')
                ->setBody(
                    "Name: {$request->name}<br>Email: {$request->email}<br>Message: {$request->message}",
                    'text/html'
                );
        });

        // Javob qaytarish
        return back()->with('success', 'Your message has been sent successfully!');
    }
}
