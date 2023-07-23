<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;

use App\Http\Controllers\auth\RestPasswordController;


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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard.index');

//authentication
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'login'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::get('/register',[RegisterController::class,'index'])->name('register');
Route::post('/register',[RegisterController::class,'register'])->name('register');
Route::get('/request_password',[RestPasswordController::class,'index'])->name('password.request');
Route::post('/request_password',[RestPasswordController::class,'sendEmail'])->name('password.request');
///////after return from email//////
Route::get('/reset_password/{token}',[RestPasswordController::class,'resetForm'])->name('password.reset');
Route::post('/reset_password',[RestPasswordController::class,'resetPassword'])->name('password.update');
