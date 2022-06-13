<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;

class CourseController extends Controller
{
    public function index()
    {
        $this->authorize('is-redactor', Course::class);
        $courses = Course::all();
        return view('/back/courses/all', compact('courses'));
    }

    public function create()
    {
        $this->authorize('is-redactor', Course::class);
        $courses = Course::all();
        $categories = Category::all();
        return view('/back/courses/create', compact('courses', 'categories'));
    }

    public function store(Request $request)
    {
        $courses = new Course();
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'picture' => 'required',
            'date' => 'required',
            'duration' => 'required',
            'price' => 'required',
            'study_level' => 'required',
            'discipline' => 'required',
        ]);
        $courses->title = $request->title;
        $courses->description = $request->description;
        $courses->date = $request->date;
        $courses->duration = $request->duration;
        $courses->price = $request->price;
        $courses->study_level = $request->study_level;
        $courses->discipline = $request->discipline;
        $courses->is_published = $request->is_published;
        $request->is_published = false;
        $courses->updated_at = now();
        $destination = "images/" . $courses->picture;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $destination_2 = "images/" . $courses->picture_2;
        if (File::exists($destination_2)) {
            File::delete($destination_2);
        }
        $destination_3 = "images/" . $courses->picture_3;
        if (File::exists($destination_3)) {
            File::delete($destination_3);
        }
        $destination_4 = "images/" . $courses->picture_4;
        if (File::exists($destination_4)) {
            File::delete($destination_4);
        }
        $courses->picture = $request->file("picture")->hashName();
        $request->file('picture')->storePublicly('images/', 'public');
        $courses->picture_2 = $request->file("picture_2")->hashName();
        $request->file('picture_2')->storePublicly('images/', 'public');
        $courses->picture_3 = $request->file("picture_3")->hashName();
        $request->file('picture_3')->storePublicly('images/', 'public');
        $courses->picture_4 = $request->file("picture_4")->hashName();
        $request->file('picture_4')->storePublicly('images/', 'public');
        $courses->save();

        $courses->categories()->attach($request->categories, ['course_id' => $courses->id]);
        return redirect()->route('courses.index')->with('message', 'Element course created');
    
    }

    public function edit($id)
    {
        $this->authorize('is-redactor', Course::class);
        $courses = Course::find($id);
        $categories = Category::all();
        return view('/back/courses/edit', compact('courses', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $courses = Course::find($id);
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'picture' => 'required',
            'date' => 'required',
            'duration' => 'required',
            'price' => 'required',
            'study_level' => 'required',
            'discipline' => 'required',
        ]);
        $courses->title = $request->title;
        $courses->description = $request->description;
        $courses->date = $request->date;
        $courses->duration = $request->duration;
        $courses->price = $request->price;
        $courses->study_level = $request->study_level;
        $courses->discipline = $request->discipline;
        $courses->is_published = $request->is_published;
        $courses->updated_at = now();
        $destination = "images/" . $courses->picture;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $destination_2 = "images/" . $courses->picture_2;
        if (File::exists($destination_2)) {
            File::delete($destination_2);
        }
        $destination_3 = "images/" . $courses->picture_3;
        if (File::exists($destination_3)) {
            File::delete($destination_3);
        }
        $destination_4 = "images/" . $courses->picture_4;
        if (File::exists($destination_4)) {
            File::delete($destination_4);
        }
        $courses->picture = $request->file("picture")->hashName();
        $request->file('picture')->storePublicly('images/', 'public');
        $courses->picture_2 = $request->file("picture_2")->hashName();
        $request->file('picture_2')->storePublicly('images/', 'public');
        $courses->picture_3 = $request->file("picture_3")->hashName();
        $request->file('picture_3')->storePublicly('images/', 'public');
        $courses->picture_4 = $request->file("picture_4")->hashName();
        $request->file('picture_4')->storePublicly('images/', 'public');
        $courses->save();

        $courses->categories()->attach($request->categories, ['course_id' => $courses->id]);
        return redirect()->route('courses.index')->with('message', 'Element course updated');

    }

    public function show($id)
    {
        $this->authorize('is-redactor', Course::class);
        $courses = Course::find($id);
        return view('/back/courses/show', compact('courses'));
    }

    public function singlecourse($id)
    {
        $courses = Course::find($id);
        return view('/front/pages/single-course', compact('courses'));
    }

    public function destroy($id)
    {
        $this->authorize('is-admin', Course::class);
        $courses = Course::find($id);
        $courses->categories()->detach();
        $courses->delete();
        return redirect()->route('courses.index')->with('message', 'Element course deleted');
    }



}
