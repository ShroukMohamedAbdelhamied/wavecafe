<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Manage categories";
        $categories = Category::all();
        return view('addCategory', compact('title', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'cold' => 'required|max:100|min:5',
            'hot' => 'required|max:100|min:5',
            'juice' => 'required|max:100|min:5',
        ]);

        Category::create($data);
        return redirect()->route('categories.add')->with('success', 'Category added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $title = "Show Category";
        $category = Category::findOrFail($id);
        return view('showCategory', compact('category', 'title'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::with('beverages')->get();
        $title = "Manage categories";
        return view('categories', compact('categories', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $title = "Edit Category";
        return view('editCategory', compact('category', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'cold' => 'required|max:100|min:5',
            'hot' => 'required|max:100|min:5',
            'juice' => 'required|max:100|min:5',
        ]);

        $category = Category::findOrFail($id);
        $category->update($data);
        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        if ($category->canDelete()) {
            $category->delete();
            return redirect()->route('categories.index')->with('success', 'Category deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Category cannot be deleted as it contains beverages');
        }
    }
}