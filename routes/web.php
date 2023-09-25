<?php
<<<<<<< HEAD
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
=======



use Illuminate\Support\Facades\Route;



use App\Http\Controllers\HomeController;



>>>>>>> a6b95b478af15e95a5f25a7f8e1a834cd4241507
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
<<<<<<< HEAD
=======



>>>>>>> a6b95b478af15e95a5f25a7f8e1a834cd4241507
Route::get('/', function () {
    return view('auth.login');
});
Route::get('/lope', function () {
    return view('index');
});

Auth::routes();
/*------------------------------------------

--------------------------------------------

All Normal Users Routes List

--------------------------------------------

--------------------------------------------*/

Route::middleware(['auth', 'user-access:user'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
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