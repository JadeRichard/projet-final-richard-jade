<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('/back/teachers/all', compact('teachers'));
    }

    public function create()
    {
        $teachers = Teacher::all();
        return view('/back/teachers/create', compact('teachers'));
    }

    public function store(Request $request)
    {
        $teachers = new Teacher();
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'description' => 'required',
            'picture' => 'required',
            'telephone' => 'required',
            'skype' => 'required',
            'role' => 'required',
        ]);
        $teachers->name = $request->name;
        $teachers->email = $request->email;
        $teachers->description = $request->description;
        $teachers->telephone = $request->telephone;
        $teachers->skype = $request->skype;
        $teachers->role = $request->role;
        $teachers->updated_at = now();
        File::delete("images/". $teachers->picture);
        $teachers->picture = $request->file("picture")->hashName();
        $request->file('picture')->storePublicly('images/', 'public');
        $teachers->save();
        return redirect()->route('teachers.index')->with('message', 'Element teacher created');
    
    }

    public function edit($id)
    {
        $teachers = Teacher::find($id);
        return view('/back/teachers/edit', compact('teachers'));
    }

    public function update(Request $request, $id)
    {
        $teachers = Teacher::find($id);
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'description' => 'required',
            'picture' => 'required',
            'telephone' => 'required',
            'skype' => 'required',
            'role' => 'required',
        ]);
        $teachers->name = $request->name;
        $teachers->email = $request->email;
        $teachers->description = $request->description;
        $teachers->telephone = $request->telephone;
        $teachers->skype = $request->skype;
        $teachers->role = $request->role;
        $teachers->updated_at = now();
        File::delete("images/". $teachers->picture);
        $teachers->picture = $request->file("picture")->hashName();
        $request->file('picture')->storePublicly('images/', 'public');
        $teachers->save();
        return redirect()->route('teachers.index')->with('message', 'Element teacher updated');
    }

    public function show($id)
    {
        $teachers = Teacher::find($id);
        return view('/back/teachers/show', compact('teachers'));
    }

    public function destroy($id)
    {
        $teachers = Teacher::find($id);
        $teachers->categories()->detach();
        $teachers->tags()->detach();
        $teachers->delete();
        return redirect()->route('teachers.index')->with('message', 'Element teacher deleted');
    }
}
