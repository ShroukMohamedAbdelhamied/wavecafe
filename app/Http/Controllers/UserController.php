<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\WelcomeEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function register(Request $request)
    {
        // Register user logic...
        $user = User::create([
            'full_name' => $request->input('full_name'),
            'user_name' => $request->input('user_name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);
        
        // Send welcome email
        Mail::to($user->email)->send(new WelcomeEmail($user));

        return redirect()->route('home')->with('success', 'User registered successfully.');
    }
}
