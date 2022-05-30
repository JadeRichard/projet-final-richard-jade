<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
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
use App\Models\Teacher;
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
    $coursesfree = Course::where('price', 0)->get();
    $coursesoldest = Course::orderBy('created_at', 'asc')->get();

    // if select option 'category' is 'free', then show only free courses

    if (request()->has('free')) {
        $courses = Course::where('price', 0)->paginate(9);
    }

    // if select option is 'oldest', then show only oldest courses

    if (request()->has('oldest')) {
        $courses = Course::orderBy('created_at', 'asc')->paginate(9);
    }
    
    return view('front.pages.courses', compact('courses', 'coursescount', 'coursesfree', 'coursesoldest'));
})->name('courses');

Route::get('/courses/{id}/singlecourse', [CourseController::class, 'singlecourse'])->name('singlecourse');

Route::get('/events', function () {
    $events = Event::paginate(9);
    $eventscount = Event::all();
    return view('front.pages.events' , compact('events', 'eventscount')); 
})->name('events');

Route::get('/teachers', function () {
    
    $teachers = Teacher::paginate(9);
    $teacherscount = Teacher::all();
    return view('front.pages.teachers', compact('teachers', 'teacherscount'));
})->name('teachers');

Route::get('/teachers/singleteacher', function () {
    return view('front.pages.single-teacher', compact('teachers', 'teacherscount'));
})->name('single-teacher');

Route::get('/news', function () {
    $articles = Article::paginate(4);
    $articlescount = Article::all();
    return view('front.pages.news', compact('articles', 'articlescount'));
})->name('news');


Route::get('/news/{id}/singlepost', [ArticleController::class, 'singlepost'])->name('singlepost');
Route::post('/news/{id}', [ArticleController::class, 'singlepostcreate'])->name('singlepostcreate');


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
// Comments 
Route::resource('/dashboard/comments', CommentController::class);