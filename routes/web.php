<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\WebsiteController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\User\AccountController;

// Admin Controllers
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\NannyController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\SectionController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\PaymentController;

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
// Website Routes
Route::get('/',[WebsiteController::class, 'index'])->name('home');
Route::get('/about-us',[WebsiteController::class, 'about'])->name('about');
Route::get('/services',[WebsiteController::class, 'services'])->name('services');
Route::get('/contact-us',[WebsiteController::class, 'contact'])->name('contact');
Route::get('/login',[WebsiteController::class, 'login'])->name('login');
Route::get('/register',[WebsiteController::class, 'register'])->name('register');
Route::get('/reset',[WebsiteController::class, 'reset'])->name('reset');
Route::post('/message',[WebsiteController::class, 'mailSend'])->name('message');
Route::get('/denied',[WebsiteController::class, 'denied'])->name('denied');

//nanny
Route::get('/nanny/hire',[App\Http\Controllers\User\NannyController::class, 'index']);
Route::get('/nanny/hire/{id}',[App\Http\Controllers\User\NannyController::class, 'hire'])->middleware('auth');
Route::get('/nanny/hire/cancel/{id}',[App\Http\Controllers\User\NannyController::class, 'cancel'])->middleware('auth');
Route::get('/nanny/{id}',[App\Http\Controllers\User\NannyController::class, 'show']);
Route::post('/payment/store/{id}',[App\Http\Controllers\User\NannyController::class, 'store']);
Route::get('/account/payment',[App\Http\Controllers\User\PaymentController::class, 'index']);
Route::get('/payment/{id}',[App\Http\Controllers\User\PaymentController::class, 'show']);


//comment
Route::post('/comment/{id}',[App\Http\Controllers\User\CommentController::class, 'store'])->middleware('auth');
// Auth Routes
Route::post('/register',[AuthController::class, 'registration'])->name('register');
Route::post('/login',[AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/reset', [AuthController::class, 'resetPass'])->name('reset');

// User Account Routes
Route::group(['prefix'=>'account','as'=>'account.', 'middleware' => ['auth', 'userPermission']], function(){
    Route::get('/dashboard',[AccountController::class, 'dashboard'])->name('dashboard');
    Route::post('/baby-add',[AccountController::class, 'addBabyInfo'])->name('baby.add');
    Route::get('/baby-suggestion',[AccountController::class, 'babySuggestion'])->name('baby.suggestion');
    Route::get('/nanny/hire',[App\Http\Controllers\User\NannyController::class, 'own_nanny_list']);
});

// Admin Routes
Route::group(['prefix'=>'admin','as'=>'admin.', 'middleware' => ['auth', 'adminPermission']], function(){
    Route::get('/dashboard',[MainController::class, 'dashboard'])->name('dashboard');

    Route::resource('services', ServicesController::class);
    Route::resource('section', SectionController::class);
    Route::resource('team', TeamController::class);
    Route::resource('gallery', GalleryController::class);

    Route::get('/banner',[BannerController::class, 'index'])->name('banner.index');
    Route::get('/banner/create',[BannerController::class, 'create'])->name('banner.create');
    Route::post('/banner',[BannerController::class, 'store'])->name('banner.store');
    Route::delete('/banner/{id}',[BannerController::class, 'destroy'])->name('banner.destroy');

    //nanny
    Route::get('/nanny',[NannyController::class, 'index']);
    Route::get('/nanny/create',[NannyController::class, 'create']);
    Route::post('/nanny/store',[NannyController::class, 'store']);
    Route::get('/nanny/edit/{id}',[NannyController::class, 'edit']);
    Route::post('/nanny/update/{id}',[NannyController::class, 'update']);
    Route::get('/nanny/delete/{id}',[NannyController::class, 'destroy']);

    //payment
    Route::get('/payment',[PaymentController::class, 'index']);
    Route::get('/payment/{id}',[PaymentController::class, 'show']);
});