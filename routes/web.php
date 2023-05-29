<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\LoginController;
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

Route::get('/', [LoginController::class,'index'])->name("index");

Route::get("/brands",[BrandController::class,"index"])->name("brands.index");

Route::get("/brands/create",[BrandController::class,"create"])->name("brands.create");

Route::post("/brands",[BrandController::class,"store"])->name("brands.store");

Route::get('/brands/{brand}',[BrandController::class,"show"])->name("brands.show");

Route::get('/brands/{brand}/edit',[BrandController::class,"edit"])->name("brands.edit");

Route::patch('/brands/{brand}',[BrandController::class,"update"])->name("brands.update");

Route::delete('/brands/{brand}',[BrandController::class,"destroy"])->name("brands.destroy");

Route::resource('stores',StoreController::class);

Route::get('/stores/create/{brand_id}', [StoreController::class,"createWithBrand"])->name("stores.createWithBrand");

Route::get('/register',[LoginController::class,'register'])->name('register');

Route::post('/store',[LoginController::class,'store'])->name('store_user');

Route::get('/login',[LoginController::class,'showLoginForm'])->name('login');

Route::post('/check',[LoginController::class,'login'])->name('check_user');

Route::get('/logout',[LoginController::class,'logout'])->name('logout');

//Route::get('/stores/{id}',[BrandController::class,"show"])->name("brands.stores");
