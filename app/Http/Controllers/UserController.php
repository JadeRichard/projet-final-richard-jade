<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('/back/users/all', compact('users'));
    }

    public function create()
    {
        $users = User::all();
        $roles = Role::all();
        return view('/back/users/create', compact('users', 'roles'));
    }

    public function store(Request $request)
    {
        $users = new User();
        $teachers = new Teacher();
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        
        
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        $users->updated_at = now();
        $destination = "images/" . $users->picture;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $users->picture = $request->file("picture")->hashName();
        $request->file('picture')->storePublicly('images/', 'public');
        $users->save();

        /* $teachers->user_id = $users->id; */
        $teachers->name = $request->name;
        $teachers->email = $request->email;
        $teachers->description = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae fugiat sit non eum amet ipsa commodi iusto, animi praesentium adipisci neque veritatis architecto laboriosam! Quaerat placeat in voluptates eos eius, blanditiis optio iure fugit odit, sint alias accusantium totam enim!';
        $teachers->telephone = '0X-XX-XX-XX';
        $teachers->skype = 'skype';
        $teachers->role = '///// Teacher';
        $teachers->updated_at = now();
        $teachers->picture = $request->file("picture")->hashName();
        $teachers->save();

        $users->roles()->attach($request->roles, ['user_id' => $users->id]);

        // if user role is teacher, create teacher model with default values 

        if ($request->roles == 'teacher') {
            $teachers = new Teacher();
            $teachers->user_id = $users->id;
            $teachers->name = $users->name;
            $teachers->email = $users->email;
            $teachers->password = $users->password;
            $teachers->save();
        }

        return redirect()->route('users.index')->with('message', 'Element user created');
    
    }

    public function edit($id)
    {
        $users = User::find($id);
        $roles = Role::all();
        return view('/back/users/edit', compact('users', 'roles'));
    }

    public function update(Request $request, $id)
    {
        $users = User::find($id);
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        $users->updated_at = now();
        $destination = "images/" . $users->picture;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $users->picture = $request->file("picture")->hashName();
        $request->file('picture')->storePublicly('images/', 'public');
        $users->save();

        $users->roles()->sync($request->roles, [
            'user_id' => $users->id,
        ]);

        

        return redirect()->route('users.index')->with('message', 'Element user updated');

    }

    public function show($id)
    {
        $users = User::find($id);
        return view('/back/users/show', compact('users'));
    }

    public function destroy($id)
    {
        $users = User::find($id);
        $teachers = Teacher::where('name', '=', $users->name)->first();

        if ($users->id == 1){
            return redirect()->route('users.index')->with('message', 'Cannot delete the admin');
        } else if ($users->roles->first()->name == 'teacher') {
            $users->roles()->detach();
            $teachers->delete();
            $users->delete();
        }
        else {
            $users->roles()->detach();
            $users->delete();
        }
        return redirect()->route('users.index')->with('message', 'Element user deleted');
    }
}
