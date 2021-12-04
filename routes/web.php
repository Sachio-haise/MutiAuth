<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaptopController;
use App\Http\Controllers\DesktopController;
use App\Http\Controllers\PTController;
use App\Http\Controllers\AccessoryController;

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

Route::get('/', function () {
    return view('mywelcome');

});

Auth::routes();




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/product/{id}/add-card',[\App\Http\Controllers\HomeController::class,'add'])->name('addToCard');

Route::get('/product/show',[\App\Http\Controllers\HomeController::class,'show'])->name('show-cart');
Route::get('product',[\App\Http\Controllers\HomeController::class,'show'])->name('showProduct');
Route::prefix('admin')->group(function(){
    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/login',[\App\Http\Controllers\Auth\AdminLoginController::class,'showLoginForm'])->name('admin.login');
    Route::post('/login',[\App\Http\Controllers\Auth\AdminLoginController::class,'login'])->name('admin.login.submit');


    Route::get('/laptop-create',[LaptopController::class,'create'])->name('admin.laptop-create');
    Route::get('/laptop-edit/{id}',[LaptopController::class,'edit'])->name('admin.laptop-edit');
    Route::post('/laptop-update/{id}',[LaptopController::class,'update'])->name('admin.laptop-update');
    Route::post('/laptop-store',[LaptopController::class,'store'])->name('admin.laptop-store');
    Route::get('/laptop-delete/{id}',[LaptopController::class,'destroy'])->name('admin.laptop-delete');

    Route::get('/desktop-create',[DesktopController::class,'create'])->name('admin.desktop-create');
    Route::get('/desktop-edit/{id}',[DesktopController::class,'edit'])->name('admin.desktop-edit');
    Route::post('/desktop-update/{id}',[DesktopController::class,'update'])->name('admin.desktop-update');
    Route::get('/desktop-delete/{id}',[DesktopController::class,'destroy'])->name('admin.desktop-delete');
    Route::post('/desktop-store',[DesktopController::class,'store'])->name('admin.desktop-store');

    Route::get('/PT-create',[PTController::class,'create'])->name('admin.PT-create');
    Route::get('/PT-edit/{id}',[PTController::class,'edit'])->name('admin.PT-edit');
    Route::post('/PT-update/{id}',[PTController::class,'update'])->name('admin.PT-update');
    Route::get('/PT-delete/{id}',[PTController::class,'destroy'])->name('admin.PT-delete');
    Route::post('/PT-store',[PTController::class,'store'])->name('admin.PT-store');

    Route::get('/accessory-create',[AccessoryController::class,'create'])->name('admin.accessory-create');
    Route::get('/accessory-edit/{id}',[AccessoryController::class,'edit'])->name('admin.accessory-edit');
    Route::post('/accessory-update/{id}',[AccessoryController::class,'update'])->name('admin.accessory-update');
    Route::get('/accessory-delete/{id}',[AccessoryController::class,'destroy'])->name('admin.accessory-delete');
    Route::post('/accessory-store',[AccessoryController::class,'store'])->name('admin.accessory-store');

});


