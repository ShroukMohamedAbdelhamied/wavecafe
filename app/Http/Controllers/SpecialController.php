<?php

namespace App\Http\Controllers;

use App\Models\Special;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Traits\UploudFile;

class SpecialController extends Controller
{
    use UploadFile;

    private $columns = ['special_title', 'special_content', 'special_price', 'special_published', 'special_image'];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $specials = Special::all();
        return view('specials.index', compact('specials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('specials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation rules
        $messages = $this->errMsg(); 
        $rules = [
            'special_title' => 'required|max:100|min:5',
            'special_content' => 'required|min:10',
            'special_price' => 'required|numeric',
            'special_id' => 'required|in:cold,hot,juice',
            'special_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ];

        // Validate the input
        $data = $request->validate($rules, $messages);

        // Handle the file upload
        if ($request->hasFile('special_image')) { 
            $fileName = $this->upload($request->file('special_image'), 'assets/newFolder');
            $data['special_image'] = $fileName;
        }

        // Set the special_published status
        $data['special_published'] = $request->has('special_published');

        // Create the new special record
        Special::create($data);

        // Redirect to the specials page
        return redirect('specials.index');
    }

    // Other methods like show, edit, update, destroy should be implemented similarly

    /**
     * Error Custom Messages
     */
    public function errMsg()
    {
        return [
            'special_title.required' => 'The special title is required.',
            'special_content.min' => 'The special content should be at least 10 characters long.',
            'special_price.required' => 'The special price is required.',
            'special_id.required' => 'Please select a valid special category.',
            'special_image.required' => 'An image file is required.',
            'special_image.image' => 'The file you have chosen is not a valid image.',
            'special_image.mimes' => 'The file extension is not one of the specified types (jpeg, png, jpg, gif, svg).',
        ];
    }
}
