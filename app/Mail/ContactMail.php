<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showForm()
    {
        return view('frontPages.contact');
    }

    public function send(Request $request)
    {
        $request->validate([
            'sender_name' => 'required|string|max:500',
            'sender_email' => 'required|email|max:500',
            'sender_message' => 'required|string|max:500',
        ]);

        $contactData = $request->only('sender_name', 'sender_email', 'sender_message');
        
        // Send the email
        Mail::to('your_email@example.com')->send(new ContactFormMail($contactData));

        // Redirect with success message
        return redirect()->route('contact.form')->with('success', 'Your message has been sent!');
    }
}