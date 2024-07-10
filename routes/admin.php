<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontpages;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BeverageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SpecialController;

// Users
Route::get('addUser', [UserController::class, 'create'])->name('addUser');
Route::post('insertUser', [UserController::class, 'store'])->name('insertUser');

//Route::get('/addUser', [Frontpages::class,'addUser'])->name('addUser');
//Route::get('/usersList', [Frontpages::class,'usersList'])->name('usersList');
//Route::get('/editUser', [Frontpages::class,'editUser'])->name('editUser');
//Route::delete('delUser', [StudentController::class,'destroy'])->name('delUser');


// Categories
//Route::get('/addCategory', [Frontpages::class,'addCategory'])->name('addCategory');
//Route::get('/categoriesList', [BeverageController::class,'categoriesList'])->name('categoriesList');
//Route::get('/editCategory', [BeverageController::class,'editCategory'])->name('editCategory');
//Route::delete('forceDeleteCategory',[Frontpages::class,'forceDelete'])->name('forceDeleteCategory');

// Beverages
//Route::post('insertBeverage',[BeverageController::class,'store'])->name('insertBeverage');
//Route::get('addBeverage', [BeverageController::class,'create'])->name('addBeverage');
//Route::get('beveragesList', [BeverageController::class, 'index'])->middleware('verified')->name('beveragesList');

//Route::post('/insertBeverage', [BeverageController::class, 'store'])->name('insertBeverage');
//Route::get('/addBeverage', [BeverageController::class, 'create'])->name('addBeverage');
//Route::get('/beveragesList', [BeverageController::class, 'index'])->name('beverageList');
//Route::get('/beveragesList', [BeverageController::class, 'index'])->middleware('verified')->name('beveragesList');
//Route::get('/editBeverage', [Frontpages::class, 'editBeverage'])->name('editBeverage');


//Messages
//Route::get('/messagesList', [Frontpages::class,'messagesList'])->name('messagesList');
//Route::get('/showMessage', [Frontpages::class,'showMessage'])->name('showMessage');