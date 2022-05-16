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

//PAGES

Route::get('/', function () {
    return view('welcome');
})->name('/');

Route::get('/courses', function () {
    return view('front.pages.courses');
})->name('courses');

Route::get('/courses/singlecourse', function () {
    return view('front.pages.single-course');
})->name('single-course');

Route::get('/events', function () {
    return view('front.pages.events');
})->name('events');

Route::get('/teachers', function () {
    return view('front.pages.teachers');
})->name('teachers');

Route::get('/teachers/singleteacher', function () {
    return view('front.pages.single-teacher');
})->name('single-teacher');

Route::get('/news', function () {
    return view('front.pages.news');
})->name('news');

Route::get('/news/singlepost', function () {
    return view('front.pages.single-post');
})->name('single-post');


Route::get('/contact', function () {
    return view('front.pages.contact');
})->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// CRUD
