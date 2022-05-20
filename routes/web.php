<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PictureController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use App\Models\Article;
use App\Models\Course;
use App\Models\Event;
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

Route::get('/', [HomeController::class, 'index'])->name('/');

Route::get('/courses', function () {
    $courses = Course::paginate(9);
    $coursescount = Course::all();
    return view('front.pages.courses', compact('courses', 'coursescount'));
})->name('courses');

Route::get('/courses/singlecourse', function () {
    return view('front.pages.single-course');
})->name('single-course');

Route::get('/events', function () {
    $events = Event::paginate(9);
    $eventscount = Event::all();
    return view('front.pages.events' , compact('events', 'eventscount')); 
})->name('events');

Route::get('/teachers', function () {
    return view('front.pages.teachers');
})->name('teachers');

Route::get('/teachers/singleteacher', function () {
    return view('front.pages.single-teacher');
})->name('single-teacher');

Route::get('/news', function () {
    $articles = Article::paginate(4);
    $articlescount = Article::all();
    return view('front.pages.news', compact('articles', 'articlescount'));
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

// ----- CRUD ----- //

// Users 
Route::resource('/dashboard/users', UserController::class);
// Roles 
Route::resource('/dashboard/roles', RoleController::class);
// Banners 
Route::resource('/dashboard/banners', BannerController::class);
// Services 
Route::resource('/dashboard/services', ServiceController::class);
// Courses 
Route::resource('/dashboard/courses', CourseController::class);
// Teachers 
Route::resource('/dashboard/teachers', TeacherController::class);
// Events 
Route::resource('/dashboard/events', EventController::class);
// Articles 
Route::resource('/dashboard/articles', ArticleController::class);
// Pictures 
Route::resource('/dashboard/pictures', PictureController::class);
// Categories 
Route::resource('/dashboard/categories', CategoryController::class);
// Tags 
Route::resource('/dashboard/tags', TagController::class);