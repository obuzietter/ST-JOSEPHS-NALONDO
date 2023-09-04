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
Route::view('achievements', 'achievements' );


Route::get('/faculty', function () {
    return view('faculty');
});

Route::get('/projects', function () {
    return view('projects');
});