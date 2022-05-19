<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        return view('/back/banners/all', compact('banners'));
    }

    public function create()
    {
        $banners = Banner::all();
        return view('/back/banners/create', compact('banners'));
    }

    public function store(Request $request)
    {
        $banners = new Banner();
        $request->validate([
            'title' => 'required',
            'accent' => 'required',
            'description' => 'required',
            'button' => 'required',
        ]);
        $banners->title = $request->title;
        $banners->accent = $request->accent;
        $banners->description = $request->description;
        $banners->button = $request->button;
        $banners->updated_at = now();
        $destination = "images/" . $banners->picture;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $banners->picture = $request->file("picture")->hashName();
        $request->file('picture')->storePublicly('images/', 'public');
        $banners->save();
        return redirect()->route('banners.index')->with('message', 'Element banner created');
    
    }

    public function edit($id)
    {
        $banners = Banner::find($id);
        return view('/back/banners/edit', compact('banners'));
    }

    public function update(Request $request, $id)
    {
        $banners = Banner::find($id);
        $request->validate([
            'title' => 'required',
            'accent' => 'required',
            'description' => 'required',
            'button' => 'required',
        ]);
        $banners->title = $request->title;
        $banners->accent = $request->accent;
        $banners->description = $request->description;
        $banners->button = $request->button;
        $banners->updated_at = now();
        $destination = "images/" . $banners->picture;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $banners->picture = $request->file("picture")->hashName();
        $request->file('picture')->storePublicly('images/', 'public');
        $banners->save();
        return redirect()->route('banners.index')->with('message', 'Element banner updated');

    }

    public function show($id)
    {
        $banners = Banner::find($id);
        return view('/back/banners/show', compact('banners'));
    }

    public function destroy($id)
    {
        $banners = Banner::find($id);
        $banners->delete();
        return redirect()->route('banners.index')->with('message', 'Element banner deleted');
    }
}
