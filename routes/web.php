<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('teacher', function () {
    return view('teacher');
})->name('teacher');

Route::get('/student-login', function () {
    return view('student-login');
})->name('student-login');

Route::get('/student-subject', function () {
    return view('student-subject');
})->name('student-subject');

Route::get('/student-feedback', function () {
    return view('student-feedback');
})->name('student-feedback');