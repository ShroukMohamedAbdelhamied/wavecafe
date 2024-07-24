<?php

namespace App\Http\Controllers;

use App\Models\Contact; 
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function index()
    {
        $messages = Contact::all(); 
        return view('messages', compact('messages'));
    }

    public function show($id)
    {
        // Find the message by ID (Contact in this case)
        $message = Contact::findOrFail($id);
        
        // Mark the message as read (if applicable, adjust according to your logic)
        $message->update(['readable' => true]); 
        // Pass message data
        return view('showMessage', compact('message'));
    }

    public function destroy($id)
    {
        $message = Contact::findOrFail($id);
        $message->delete();
        return redirect()->route('messages.index')->with('success', 'Message deleted successfully');
    }

    public function getUnreadCount()
    {
        return Contact::where('readable', false)->count();
    }
}
