<?php

namespace App\Http\Controllers;

use App\Models\Panel;
use Illuminate\Http\Request;

class PanelController extends Controller
{
    public function index()
    {
        $panels = Panel::all();
        return view('/back/panels/all', compact('panels'));
    }

    public function store(Request $request)
    {
        $panels = new Panel();
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        $panels->request = $request->request;
        $panels->name = $request->name;
        $panels->email = $request->email;
        $panels->teacher = $request->teacher;
        $panels->course = $request->course;
        $panels->date = $request->date;
        $panels->time = $request->time;
        $panels->is_validated = $request->is_validated;
        $panels->save();

        return redirect()->route('panels.index')->with('message', 'Element panel created');

    }

    public function submitRequest(Request $request)
    {
        $panels = new Panel();
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'teacher' => 'required',
            'course' => 'required',
        ]);
        $panels->request = 'Demande de rendez-vous';
        $request->name = auth()->user()->name;
        $request->email = auth()->user()->email;
        $panels->name = $request->name;
        $panels->email = $request->email;
        $panels->teacher = $request->teacher;
        $panels->course = $request->course;
        $panels->date = 'XX-XX-XXXX';
        $panels->time = 'XX.XX';
        $panels->is_validated = false;
        $panels->save();

        return redirect()->route('/');

    }

    public function edit($id)
    {
        $this->authorize('is-teacher', Panel::class);
        $panels = Panel::find($id);
        return view('/back/panels/edit', compact('panels'));
    }

    public function update(Request $request, $id)
    {
        $panels = Panel::find($id);
        $panels->date = $request->date;
        $panels->time = $request->time;
        $panels->is_validated = $request->is_validated;
        $panels->save();

        return redirect()->route('panels.index')->with('message', 'Element panel updated');
    }

    public function destroy($id)
    {
        $this->authorize('is-admin', Panel::class);
        $panels = Panel::find($id);
        $panels->delete();
        return redirect()->route('panels.index')->with('message', 'Element panel deleted');
    }

    public function show($id)
    {
        $this->authorize('is-teacher', Panel::class);
        $panels = Panel::find($id);
        return view('/back/panels/show', compact('panels'));
    }

    
    
}
