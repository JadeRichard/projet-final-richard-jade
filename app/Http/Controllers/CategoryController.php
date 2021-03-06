<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Faker\Core\File;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $this->authorize('is-admin', Category::class);
        $categories = Category::all();
        return view('/back/categories/all', compact('categories'));
    }

    public function create()
    {
        $this->authorize('is-admin', Category::class);
        $categories = Category::all();
        return view('/back/categories/create', compact('categories'));
    }

    public function store(Request $request)
    {
        $categories = new Category();
        $request->validate([
            'name' => 'required',
        ]);
        $categories->name = $request->name;
        $categories->save();

        /* $categories->categories()->attach($request->categories, ['categorie_id' => $categories->id]);
        $categories->tags()->attach($request->tags, ['categorie_id' => $categories->id]); */

        return redirect()->route('categories.index')->with('message', 'Element categorie created');
    
    }

    public function edit($id)
    {
        $this->authorize('is-admin', Category::class);
        $categories = Category::find($id);
        return view('/back/categories/edit', compact('categories'));
    }

    public function update(Request $request, $id)
    {
        $categories = Category::find($id);
        $request->validate([
            'name' => 'required',
        ]);
        $categories->name = $request->name;
        $categories->save();

        $categories->articles()->attach($request->articles, ['category_id' => $categories->id]);
        $categories->courses()->attach($request->courses, ['category_id' => $categories->id]);
        /* $categories->tags()->attach($request->tags, ['categorie_id' => $categories->id]); */

        return redirect()->route('categories.index')->with('message', 'Element categorie updated');

    }

    public function show($id)
    {
        $this->authorize('is-admin', Category::class);
        $categories = Category::find($id);
        return view('/back/categories/show', compact('categories'));
    }

    public function destroy($id)
    {
        $this->authorize('is-admin', Category::class);
        $categories = Category::find($id);
        $categories->articles()->detach();
        $categories->courses()->detach();
        $categories->delete();
        return redirect()->route('categories.index')->with('message', 'Element categorie deleted');
    }
}
