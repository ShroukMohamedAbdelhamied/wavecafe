<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Beverage;

class BeverageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   // public function index()
    //{
     //   $beverages = Beverage::get();
   //     return view('beveragesList', compact('beverages'));
   // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Manage Beverages";
        return view('addBeverage', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation rules
        $data = $request->validate([
            'beverage_title' => 'required|max:100|min:5',
            'beverage_content' => 'required|max:500|min:5',
            'beverage_price' => 'required|numeric',
            'beverage_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'category_id' => 'required|in:Iced Coffee,Hot Coffee,Fruit Juice',
            'published' => 'boolean',
            'special' => 'boolean',
        ]);

        // Handle file upload
        if ($request->hasFile('beverage_image')) {
            $fileName = $request->file('beverage_image')->store('public/images');
            $data['beverage_image'] = basename($fileName);
        }

        // Store in database
        Beverage::create($data);
        return redirect('insertBeverage');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $title = "Show Beverages";
        $beverage = Beverage::findOrFail($id);
        return view('beverageList', compact('beverage', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $id = $request->id;
        Beverage:: where('id', $id)->delete();
        return redirect('beverageList');
    }
}
