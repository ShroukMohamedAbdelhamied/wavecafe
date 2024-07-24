<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontpages;
use App\Http\Controllers\HomeController;

// website of Wave Cafe
Route::get('/', [Frontpages::class, 'home'])->name('home');
Route::get('/aboutus', [Frontpages::class, 'aboutus'])->name('aboutus');
Route::get('/contactus', [Frontpages::class, 'contactus'])->name('contactus');

// Drink Menu
Route::get('/icedDrinks', [Frontpages::class, 'icedDrinks'])->name('icedDrinks'); // Ensure this route is defined correctly
Route::get('/hotDrinks', [Frontpages::class, 'hotDrinks'])->name('hotDrinks');
Route::get('/fruitJuice', [Frontpages::class, 'fruitJuices'])->name('fruitJuice');

//Specials of Wave Cafe
Route::get('/specials', [Frontpages::class, 'specials'])->name('specials');
