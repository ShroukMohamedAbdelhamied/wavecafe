<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\Frontpages;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BeverageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SpecialController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MessagesController;

use App\Models\Beverage;
use App\Models\Category;
use App\Models\Contact;
use App\Mail\ContactMail;
use App\Models\User;

// Categories
Route::prefix('categories')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('add', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('insert', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('{id}/update', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('{id}/delete', [CategoryController::class, 'destroy'])->name('categories.delete');
});

// Beverages
Route::prefix('beverages')->group(function () {
    Route::get('/', [BeverageController::class, 'index'])->name('beverages.index');
    Route::get('create', [BeverageController::class, 'create'])->name('beverages.create');
    Route::post('store', [BeverageController::class, 'store'])->name('beverages.store');
    Route::get('{id}/edit', [BeverageController::class, 'edit'])->name('beverages.edit');
    Route::put('{id}/update', [BeverageController::class, 'update'])->name('beverages.update');
    Route::delete('{id}/forceDelete', [BeverageController::class, 'forceDelete'])->name('beverages.forceDelete');
});

// Specific drink routes
// Iced Drinks 
Route::get('/icedDrinks', [BeverageController::class, 'icedDrinks'])->name('icedDrinks');
// Hot Drinks 
 Route::get('/hotDrinks', [BeverageController::class, 'hotDrinks'])->name('admin.hotDrinks');
// Fruit Juices
  Route::get('/fruitJuice', [BeverageController::class, 'fruitJuices'])->name('admin.fruitJuice');

// Users
Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('users.index');
    Route::get('add', [UserController::class, 'create'])->name('users.create');
    Route::post('insert', [UserController::class, 'store'])->name('users.store');
    Route::get('showUser/{id}', [UserController::class, 'show'])->name('showUser');
    Route::get('editUsers/{id}', [UserController::class, 'edit'])->name('editUser');
    Route::put('/{id}', [UserController::class, 'update'])->name('updateUser');
    Route::delete('/{id}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::delete('/{id}/forceDelete', [UserController::class, 'forceDelete'])->name('users.forceDelete');

});
//login,logout, register and email verification for admins
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('loginAdmin', [LoginController::class, 'credentials'])->name('loginAdmin');
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('insertAdmin', [RegisterController::class, 'register'])->name('insertAdmin');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('profile', [ProfileController::class, 'showProfile'])->name('profile');
Route::get('/email/verify', function () {return view('emails.emailVerificationEmail');});
    

//Messages
Route::prefix('messages')->group(function () {
    Route::get('/', [MessagesController::class, 'index'])->name('messages.index');
    Route::delete('{id}', [MessagesController::class, 'destroy'])->name('messages.destroy');
    Route::get('/{id}', [MessagesController::class, 'show'])->name('messages.show');
});

//contact
Route::prefix('contact')->group(function () {
    Route::get('/', [ContactController::class, 'showForm'])->name('contact.form');
    Route::post('submit', [ContactController::class, 'store'])->name('contact.submit');
    Route::post('send', [ContactController::class, 'send'])->name('contact.send');
    Route::get('show/{id}', [ContactController::class, 'show'])->name('contact.show');
});
