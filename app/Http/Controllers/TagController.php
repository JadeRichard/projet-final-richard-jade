<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        return view('/back/tags/all', compact('tags'));
    }

    public function create()
    {
        $tags = Tag::all();
        return view('/back/tags/create', compact('tags'));
    }

    public function store(Request $request)
    {
        $tags = new Tag();
        $request->validate([
            'name' => 'required',
        ]);
        $tags->name = $request->name;
        $tags->save();

        /* $tags->tags()->attach($request->tags, ['tag_id' => $tags->id]);
        $tags->tags()->attach($request->tags, ['tag_id' => $tags->id]); */

        return redirect()->route('tags.index')->with('message', 'Element tag created');
    
    }

    public function edit($id)
    {
        $tags = Tag::find($id);
        return view('/back/tags/edit', compact('tags'));
    }

    public function update(Request $request, $id)
    {
        $tags = Tag::find($id);
        $request->validate([
            'name' => 'required',
        ]);
        $tags->name = $request->name;
        $tags->save();

        $tags->articles()->attach($request->articles, ['tag_id' => $tags->id]);
        /* $tags->tags()->attach($request->tags, ['tag_id' => $tags->id]); */

        return redirect()->route('tags.index')->with('message', 'Element tag updated');

    }

    public function show($id)
    {
        $tags = Tag::find($id);
        return view('/back/tags/show', compact('tags'));
    }

    public function destroy($id)
    {
        $tags = Tag::find($id);
        $tags->articles()->detach();
        $tags->delete();
        return redirect()->route('tags.index')->with('message', 'Element tag deleted');
    }
}
