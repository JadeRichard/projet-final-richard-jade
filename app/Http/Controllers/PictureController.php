<?php

namespace App\Http\Controllers;

use App\Models\Picture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PictureController extends Controller
{
    public function index()
    {
        $this->authorize('is-admin', Picture::class);
        $pictures = Picture::all();
        return view('/back/pictures/all', compact('pictures'));
    }

    public function edit($id)
    {
        $this->authorize('is-admin', Picture::class);
        $pictures = Picture::find($id);
        return view('/back/pictures/edit', compact('pictures'));
    }

    public function update(Request $request, $id)
    {
        $pictures = Picture::find($id);
        $request->validate([
            'title' => 'required',
            'picture' => 'required',
        ]);
        $pictures->title = $request->title;
        $pictures->updated_at = now();
        $destination = "images/" . $pictures->picture;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $pictures->picture = $request->file("picture")->hashName();
        $request->file('picture')->storePublicly('images/', 'public');
        $pictures->save();
        return redirect()->route('pictures.index')->with('message', 'Element picture updated');

    }

    public function show($id)
    {
        $this->authorize('is-admin', Picture::class);
        $pictures = Picture::find($id);
        return view('/back/pictures/show', compact('pictures'));
    }

}
