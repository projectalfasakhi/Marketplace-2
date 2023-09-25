<?php

  

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

  

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
    return view('auth.login');
});

Route::get('lope', function () {
    return view('index');
});
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [ProductController::class, 'index']);  
Route::get('cart', [ProductController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [ProductController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart');

Auth::routes();


  

/*------------------------------------------

--------------------------------------------

All Normal Users Routes List

--------------------------------------------

--------------------------------------------*/

Route::middleware(['auth', 'user-access:user'])->group(function () {



});

  

/*------------------------------------------

--------------------------------------------

All Admin Routes List

--------------------------------------------

--------------------------------------------*/

Route::middleware(['auth', 'user-access:admin'])->group(function () {

  

    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');

});

  

/*------------------------------------------

--------------------------------------------

All Admin Routes List

--------------------------------------------

--------------------------------------------*/

Route::middleware(['auth', 'user-access:manager'])->group(function () {

  

    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');

});