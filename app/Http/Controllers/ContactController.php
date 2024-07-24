<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'sender_name' => 'required|string|max:100',
            'sender_email' => 'required|string|max:100',
            'sender_message' =>'required|string|max:500',
        ]);
        
        Contact::create($data);
        
        return 'add';

    }
    
    public function sendMail(Request $request)
    {
        $data = [
            'sender_name' => $request->sender_name,
            'sender_email' => $request->sender_email,
            'sender_message' => $request->sender_message,
        ];
    
        Mail::to('shrouk_m88@yahoo.com')->send(new ContactMail($data));
    
        //return back()->with('success', 'Your message has been sent successfully!');
        return"mail send";
    }

    public function index()
    {
        $title = "Contact";
        $emails= Contact::get ();
        $messages = Contact::where('readable', 0)->take(3)->get();
    return view('messages', compact('title','emails','messages'));
    }
    

    public function show(string $id)
    {
        $title = "contact";
        $email = Contact::findOrFail($id);
        $messages = Contact::where('readable', 0)->take(3)->get();
    Contact::where('id',$id)->update(['readable'=> 1]);
    return view('showMessage', compact('email', 'title','messages'));

 }

}