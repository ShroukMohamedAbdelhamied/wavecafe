<?php

namespace App\Http\Controllers;

use App\Models\Beverage;
use App\Models\Special;
use Illuminate\Http\Request;

class Frontpages extends Controller
{

// website of Wave Cafe
    public function home()
    {
        $title = "Wave Cafe - Home";
        return view('home', compact('title'));
    }

    public function aboutus()
    {
        $title = "About Us - Wave Cafe";
        return view('aboutus', compact('title'));
    }

    public function contactus()
    {
        $title = "Contact Us - Wave Cafe";
        return view('contactus', compact('title'));
    }

 // Drink Menu
    public function icedDrinks()
    {
        $icedDrinks = Beverage::where('category_id', 1)->get();
        return view('icedDrinks', compact('icedDrinks'));
    }
    
    public function hotDrinks()
    {
        $hotDrinks = Beverage::where('category_id', 2)->get();
        return view('hotDrinks', compact('hotDrinks'));
    }

    public function fruitJuice(){
        $title = "Fruit Juice";
        return view('fruitJuice', compact('title'));
    } 

 //Special of Wave Cafe
    public function specials(){
        $title = "Specials of Wave Cafe";
        $specials = Special::all();
        return view('specials', compact('title', 'specials'));
    } 

// Admin Dashboard of Wave Cafe

    public function users(){
        $title = "Users List";
        return view('users', compact('title'));
    }

    public function editUser(){
        $title = "Edit User";
        return view('editUser', compact('title'));
    }
    
 // Categories 
    public function addCategory(){
        $title = "Manage Categories";
        return view('addCategory', compact('title'));
    }

    public function categories(){
        $title = "Categories List";
        return view('categories', compact('title'));
    }
    
    public function editCategory(){
        $title = "Edit Category";
        return view('editCategory', compact('title'));
    }

 // Beverages

    public function addBeverage(){
        $title = "Manage Beverages";
        return view('addBeverage', compact('title'));
    }

 // Messages
 
    public function messages(){
        $title = "Messages List";
        return view('messages', compact('title'));
    }
    
    public function showMessage(){
        $title = "Show Message";
        return view('showMessage', compact('title'));
    }
}
