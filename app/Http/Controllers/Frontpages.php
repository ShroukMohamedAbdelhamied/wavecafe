<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Frontpages extends Controller
{

// website of Wave Cafe
    public function home(){
        $title = "Wave Cafe";
        return view('home', compact('title'));
    }   

    public function aboutus(){
        $title = "About Wave Cafe";
        return view('aboutus', compact('title'));
    } 
    
    public function contactus(){
        $title = "Contact of Wave Cafe";
        return view('contactus', compact('title'));
    }

 // Drink Menu
    public function icedDrinkes(){
        $title = "Iced Drinkes";
        return view('icedDrinkes', compact('title'));
    }  
    
    public function hotDrinks(){
        $title = "Hot Drinks";
        return view('hotDrinks', compact('title'));
    } 

    public function fruitJuice(){
        $title = "Fruit Juice";
        return view('fruitJuice', compact('title'));
    } 

 //Special of Wave Cafe
    public function special(){
        $title = "Special of Wave Cafe";
        return view('special', compact('title'));
    } 

// Admin Dashboard of Wave Cafe

 // Users
    public function addUser(){
        $title = "Manage Users";
        return view('addUser', compact('title'));
    }

    public function usersList(){
        $title = "Users List";
        return view('usersList', compact('title'));
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

    public function categoriesList(){
        $title = "Categories List";
        return view('categoriesList', compact('title'));
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
 
    public function messagesList(){
        $title = "Messages List";
        return view('messagesList', compact('title'));
    }
    
    public function showMessage(){
        $title = "Show Message";
        return view('showMessage', compact('title'));
    }
}
