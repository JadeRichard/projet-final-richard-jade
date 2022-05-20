<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Course;
use App\Models\Picture;
use App\Models\Service;
use App\Models\Tag;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        $articles = Article::all();
        $categories = Category::all();
        $courses = Course::all();
        $tags = Tag::all();
        $users = User::all();
        $pictures = Picture::all();
        $services = Service::all();
        $teachers = Teacher::all();
        $favcourses = Course::where('popular', true)->get();
        $firstteacher = Teacher::first();
        $lastteacher = Teacher::all()->last();
        $randomteacher_1 = Teacher::all()->random(1)->first();
        $randomteacher_2 = Teacher::all()->random(1)->first();
        $lastarticles = Article::orderBy('id', 'desc')->take(2)->get();

        return view('welcome', compact('banners', 'articles', 'categories', 'courses', 'tags', 'users', 'pictures', 'services', 'teachers', 'favcourses', 'firstteacher', 'lastteacher', 'randomteacher_1', 'randomteacher_2', 'lastarticles'));
    }
}
