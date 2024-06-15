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
Route::get('/health', [HomePageController::class, 'health'])->name('health');
Route::get('/contact-us', [HomePageController::class, 'contactUs'])->name('contactUs');
Route::post('/submit/contact-us', [HomePageController::class, 'submitContact'])->name('submitContact');
Route::get('/faqs', [HomePageController::class, 'faqs'])->name('faqs');
Route::get('/our-outlets', [HomePageController::class, 'ourOutlet'])->name('ourOutlet');
Route::get('/testimonial', [HomePageController::class, 'testimonial'])->name('testimonial');
