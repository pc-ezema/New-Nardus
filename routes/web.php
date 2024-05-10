<?php

use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomePageController::class, 'index'])->name('index');
Route::get('/about', [HomePageController::class, 'aboutUs'])->name('aboutUs');
Route::get('/scents', [HomePageController::class, 'scents'])->name('scents');
Route::get('/cosmetics', [HomePageController::class, 'cosmetics'])->name('cosmetics');
Route::get('/essential-oil', [HomePageController::class, 'essential_oil'])->name('essential_oil');
Route::get('/', [HomePageController::class, 'index'])->name('index');
