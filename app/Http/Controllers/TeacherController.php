<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;

class TeacherController extends Controller
{
    public function index()
    {
        Gate::authorize('is-teacher', Teacher::class);
        $teachers = Teacher::all();
        return view('/back/teachers/all', compact('teachers'));
    }

    public function create()
    {
        Gate::authorize('is-admin', Teacher::class);
        $teachers = Teacher::all();
        return view('/back/teachers/create', compact('teachers'));
    }


    public function edit($id)
    {
        Gate::authorize('is-teacher', Teacher::class);
        $teachers = Teacher::find($id);
        return view('/back/teachers/edit', compact('teachers'));
    }

    public function update(Request $request, $id)
    {
        $teachers = Teacher::find($id);
        $user = User::where('name', $teachers->name)->first();
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
        $destination = "images/" . $teachers->picture;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $teachers->picture = $request->file("picture")->hashName();
        $request->file('picture')->storePublicly('images/', 'public');
        $teachers->save();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect()->route('teachers.index')->with('message', 'Element teacher updated');
    }

    public function show($id)
    {
        Gate::authorize('is-teacher', Teacher::class);
        $teachers = Teacher::find($id);
        return view('/back/teachers/show', compact('teachers'));
    }

    public function destroy($id)
    {
        Gate::authorize('is-admin', Teacher::class);
        $teachers = Teacher::find($id);
        $user = User::where('name', $teachers->name)->first();
        $teachers->delete();
        $user->delete();
        return redirect()->route('teachers.index')->with('message', 'Element teacher deleted');
    }

    public function singleteacher($id)
    {
        $teachers = Teacher::find($id);
        $messages = Message::all();
        return view('/front/pages/single-teacher', compact('teachers', 'messages'));
    }

    public function sendMessage(Request $request, $id)
    {
        $messages = new Message();
        $teachers = Teacher::find($id);
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);
        if(auth()->check()){
            $messages->name = auth()->user()->name;
            $messages->email = auth()->user()->email;
        } else {
            $messages->name = $request->name;
            $messages->email = $request->email;
        }
        $messages->teacher_id = $teachers->id;
        $messages->message = $request->message;
        $messages->to = $messages->teacher->name;

        $messages->save();
        return redirect()->back();
    }
}
