<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\coursescontroller;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [StaticController::class,'home'])->name('welcome');
Route::get('/about', [StaticController::class,'aboutus'])->name('about');
Route::get('/info', [StaticController::class,'info'])->name('info');
Route::get('/contact', [StaticController::class,'contactus'])->name('contact');
Route::get('/programs', [StaticController::class,'programs'])->name('programs');
Route::resource('/course',coursescontroller::class) ;
Route::resource('/profile', ProfileController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
