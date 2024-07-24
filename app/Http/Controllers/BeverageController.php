<?php

namespace App\Http\Controllers;

use App\Models\Beverage;
use App\Models\Category;
use Illuminate\Http\Request;

class BeverageController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Manage Beverages";
        $categories = Category::all();
        return view('addBeverage', compact('title', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'beverage_title' => 'required|string|max:255',
            'beverage_content' => 'nullable|string',
            'beverage_price' => 'required|numeric',
            'published' => 'required|in:yes,no',
            'special' => 'required|in:yes,no',
            'category_id' => 'required|exists:categories,id',
            'beverage_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $beverage = new Beverage();
        $beverage->beverage_title = $validatedData['beverage_title'];
        $beverage->beverage_content = $validatedData['beverage_content'];
        $beverage->beverage_price = $validatedData['beverage_price'];
        $beverage->published = $validatedData['published'];
        $beverage->special = $validatedData['special'];
        $beverage->category_id = $validatedData['category_id'];

        if ($request->hasFile('beverage_image')) {
            $image = $request->file('beverage_image');
            $imageName = time().'.'.$image->extension();
            $image->move(public_path('images'), $imageName);
            $beverage->beverage_image = 'images/' . $imageName;
        }

        $beverage->save();

        return redirect()->route('beverages.index')->with('success', 'Beverage created successfully.');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $title = "Show Beverage";
        $beverage = Beverage::findOrFail($id);
        return view('beverageList', compact('beverage', 'title'));
    }
    /**
     * Display a listing of the iced drinks.
     */
    public function icedDrinks()
    {
        $icedDrinks = Beverage::where('category_id', 1)->get();
        return view('icedDrinks', compact('icedDrinks'));
    }

    /**
     * Display a listing of the hot drinks.
     */
    public function hotDrinks()
    {
        $hotDrinks = Beverage::where('category_id', 2)->get();
        return view('hotDrinks', compact('hotDrinks'));
    }

    /**
     * Display a listing of the fruit juices.
     */
    public function fruitJuices()
    {
        $fruitJuices = Beverage::where('category_id', 3)->get();
        return view('fruitJuice', compact('fruitJuices'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "Edit Beverage";
        $beverage = Beverage::findOrFail($id);
        return view('dashboard.editBeverage', compact('beverage', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'beverage_title' => 'required|max:100|min:5',
            'beverage_content' => 'required|max:255|min:5',
            'beverage_price' => 'required|numeric',
            'published' => 'nullable|in:yes,no', // Accept only 'yes' or 'no'
            'special' => 'nullable|in:yes,no', // Accept only 'yes' or 'no'
            'category_id' => 'required|exists:categories,id',
        ]);

        if ($request->hasFile('beverage_image')) {
            $fileName = $request->file('beverage_image')->store('public/images');
            $data['beverage_image'] = basename($fileName);
        }

        $beverage = Beverage::findOrFail($id);
        $beverage->update([
            'beverage_title' => $data['beverage_title'],
            'beverage_content' => $data['beverage_content'],
            'beverage_price' => $data['beverage_price'],
            'published' => $data['published'],
            'special' => $data['special'],
            'category_id' => $data['category_id'],
            'beverage_image' => $data['beverage_image'] ?? $beverage->beverage_image,
        ]);

        return redirect()->route('beverages.index')->with('success', 'Beverage updated successfully.');
    }
    /**
     * Force delete the specified resource from storage.
     */
    public function forceDelete(Request $request)
    {
        $id = $request->id;
        Beverage::where('id', $id)->forceDelete();
        return redirect()->route('beverages.index')->with('success', 'Beverage deleted successfully.');
    }
}
