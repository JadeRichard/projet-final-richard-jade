<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('/back/roles/all', compact('roles'));
    }

    public function create()
    {
        $users = User::all();
        $roles = Role::all();
        return view('/back/roles/create', compact('users', 'roles'));
    }

    public function store(Request $request)
    {
        $roles = new Role();
        $request->validate([
            'name' => 'required',
        ]);
        $roles->name = $request->name;
        $roles->updated_at = now();
        $roles->save();
        return redirect()->route('roles.index')->with('message', 'Element role created');
    
    }

    public function edit($id)
    {
        $roles = Role::find($id);
        return view('/back/roles/edit', compact('roles'));
    }

    public function update(Request $request, $id)
    {
        $roles = Role::find($id);
        $request->validate([
            'name' => 'required',
        ]);
        $roles->name = $request->name;
        $roles->updated_at = now();
        $roles->save();
        return redirect()->route('roles.index')->with('message', 'Element role updated');

    }

    public function show($id)
    {
        $roles = Role::find($id);
        return view('/back/roles/show', compact('roles'));
    }

    public function destroy($id)
    {
        $roles = Role::find($id);
        $roles->users()->detach();
        $roles->delete();
        return redirect()->route('roles.index')->with('message', 'Element role deleted');
    }
}
