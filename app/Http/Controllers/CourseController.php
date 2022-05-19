<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('/back/courses/all', compact('courses'));
    }

    public function create()
    {
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
        $courses->updated_at = now();
        $destination = "images/" . $courses->picture;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $courses->picture = $request->file("picture")->hashName();
        $request->file('picture')->storePublicly('images/', 'public');
        $courses->save();

        /* $courses->categories()->attach($request->categories, ['course_id' => $courses->id]); */
        return redirect()->route('courses.index')->with('message', 'Element course created');
    
    }

    public function edit($id)
    {
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
        $courses->updated_at = now();
        $destination = "images/" . $courses->picture;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $courses->picture = $request->file("picture")->hashName();
        $request->file('picture')->storePublicly('images/', 'public');
        $courses->save();

        /* $courses->categories()->attach($request->categories, ['course_id' => $courses->id]); */
        return redirect()->route('courses.index')->with('message', 'Element course updated');

    }

    public function show($id)
    {
        $courses = Course::find($id);
        return view('/back/courses/show', compact('courses'));
    }

    public function destroy($id)
    {
        $courses = Course::find($id);
        /* $courses->categories()->detach(); */
        $courses->delete();
        return redirect()->route('courses.index')->with('message', 'Element course deleted');
    }
}
