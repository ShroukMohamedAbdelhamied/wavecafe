<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Notifications\PostApproved;

class PostController extends Controller
{
    /**
     * Write code on Method
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $posts = Post::get();

        return view('posts.index', compact('posts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
             'title' => 'required',
             'body' => 'required'
        ]);
   
        $post = Post::create([
            'user_id' => auth()->id(),
            'title' => $request->title,
            'body' => $request->body
        ]);
   
        return back()->with('success','Post created successfully.');
    }

    /**
     * Approve the specified post.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function approve(Request $request, $id)
    {
        $post = Post::find($id);

        if (!$post) {
            return back()->with('error', 'Post not found.');
        }

        if (!$post->is_approved) {
            $post->is_approved = true;
            $post->save();

            // Notify the user
            $post->user->notify(new PostApproved($post));

            return back()->with('success', 'Post approved and user notified.');
        }

        return back()->with('info', 'Post already approved.');
    }

    /**
     * Mark the specified notification as read.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function markAsRead(Request $request, $id)
    {
        $notification = auth()->user()->unreadNotifications()->find($id);

        if (!$notification) {
            return back()->with('error', 'Notification not found.');
        }

        $notification->markAsRead();

        return back()->with('success', 'Notification marked as read.');
    }
}