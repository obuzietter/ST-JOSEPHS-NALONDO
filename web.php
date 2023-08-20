<?php

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

Route::get('/', function () {
    return view('home');
});
Route::view('about', 'about');


use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentLifeController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('home');    
Route::get('/student-life', [StudentLifeController::class, 'index'])->name('student-life');
Route::get('/contact', [ContactController::class])->name('contact');
