<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('/back/services/all', compact('services'));
    }

    public function create()
    {
        $services = Service::all();
        return view('/back/services/create', compact('services'));
    }

    public function store(Request $request)
    {
        $services = new Service();
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'icon' => 'required',
        ]);
        $services->title = $request->title;
        $services->description = $request->description;
        $services->icon = $request->icon;
        $services->updated_at = now();
        $services->save();
        return redirect()->route('services.index')->with('message', 'Element service created');
    
    }

    public function edit($id)
    {
        $services = Service::find($id);
        return view('/back/services/edit', compact('services'));
    }

    public function update(Request $request, $id)
    {
        $services = Service::find($id);
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'icon' => 'required',
        ]);
        $services->title = $request->title;
        $services->description = $request->description;
        $services->icon = $request->icon;
        $services->updated_at = now();
        $services->save();
        return redirect()->route('services.index')->with('message', 'Element service updated');

    }

    public function show($id)
    {
        $services = Service::find($id);
        return view('/back/services/show', compact('services'));
    }

    public function destroy($id)
    {
        $services = Service::find($id);
        $services->delete();
        return redirect()->route('services.index')->with('message', 'Element service deleted');
    }
}
