<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\WebsiteController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', 'Website\WebsiteController@index')->name('home');
Route::get('/',[WebsiteController::class, 'index'])->name('home');
Route::get('/about-us',[WebsiteController::class, 'about'])->name('about');
Route::get('/services',[WebsiteController::class, 'services'])->name('services');
Route::get('/contact-us',[WebsiteController::class, 'contact'])->name('contact');