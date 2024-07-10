<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontpages;

// website of Wave Cafe
Route::get('/', [Frontpages::class,'home'])->name('home');
Route::get('/aboutus', [Frontpages::class,'aboutus'])->name('aboutus');
Route::get('/contactus', [Frontpages::class,'contactus'])->name('contactus');

// Drink Menu
Route::get('/icedDrinkes', [Frontpages::class,'icedDrinkes'])->name('icedDrinkes');
Route::get('/hotDrinks', [Frontpages::class,'hotDrinks'])->name('hotDrinks');
Route::get('/fruitJuice', [Frontpages::class,'fruitJuice'])->name('fruitJuice');

//Special of Wave Cafe
Route::get('/special', [Frontpages::class,'special'])->name('special');