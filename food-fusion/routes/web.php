<?php

use App\Http\Controllers\CulinaryController;
use App\Http\Controllers\EducationalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\CookbookController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get(uri:'/culinary',action :[CulinaryController::class, 'index'])->name('culinary');
Route::get(uri:'/educational',action :[EducationalController::class, 'index'])->name('educational');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/recipes', [RecipeController::class, 'index'])->name('recipes');
Route::get('/cookbook', [CookbookController::class, 'index'])->name('cookbook');
Route::post('/cookbook', [CookbookController::class, 'store'])->name('cookbook.store');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [PageController::class, 'store'])->name('contact.store');
