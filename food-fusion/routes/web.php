<?php

use App\Http\Controllers\CulinaryController;
use App\Http\Controllers\EducationalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\CookbookController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get(uri:'/culinary',action :[CulinaryController::class, 'index'])->name('culinary');
Route::get(uri:'/educational',action :[EducationalController::class, 'index'])->name('educational');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/recipes', [RecipeController::class, 'index'])->name('recipes');
Route::get('/cookbook', [CookbookController::class, 'index'])->name('cookbook');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');


Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
