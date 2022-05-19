<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('/back/articles/all', compact('articles'));
    }

    public function create()
    {
        $articles = Article::all();
        $categories = Category::all();
        $tags = Tag::all();
        return view('/back/articles/create', compact('articles', 'categories', 'tags'));
    }

    public function store(Request $request)
    {
        $articles = new Article();
        $request->validate([
            'title' => 'required',
            'description_1' => 'required',
            'description_2' => 'required',
            'date' => 'required',
            'picture' => 'required',
        ]);
        $articles->title = $request->title;
        $articles->description_1 = $request->description_1;
        $articles->description_2 = $request->description_2;
        $articles->date = $request->date;
        $articles->updated_at = now();
        File::delete("images/". $articles->picture);
        $articles->picture = $request->file("picture")->hashName();
        $request->file('picture')->storePublicly('images/', 'public');
        $articles->save();

        /* $articles->categories()->attach($request->categories, ['article_id' => $articles->id]);
        $articles->tags()->attach($request->tags, ['article_id' => $articles->id]); */

        return redirect()->route('articles.index')->with('message', 'Element article created');
    
    }

    public function edit($id)
    {
        $articles = Article::find($id);
        $categories = Category::all();
        $tags = Tag::all();
        return view('/back/articles/edit', compact('articles', 'categories', 'tags'));
    }

    public function update(Request $request, $id)
    {
        $articles = Article::find($id);
        $request->validate([
            'title' => 'required',
            'description_1' => 'required',
            'description_2' => 'required',
            'date' => 'required',
            'picture' => 'required',
        ]);
        $articles->title = $request->title;
        $articles->description_1 = $request->description_1;
        $articles->description_2 = $request->description_2;
        $articles->date = $request->date;
        $articles->updated_at = now();
        File::delete("images/". $articles->picture);
        $articles->picture = $request->file("picture")->hashName();
        $request->file('picture')->storePublicly('images/', 'public');
        $articles->save();

        /* $articles->categories()->attach($request->categories, ['article_id' => $articles->id]);
        $articles->tags()->attach($request->tags, ['article_id' => $articles->id]); */

        return redirect()->route('articles.index')->with('message', 'Element article updated');

    }

    public function show($id)
    {
        $articles = Article::find($id);
        return view('/back/articles/show', compact('articles'));
    }

    public function destroy($id)
    {
        $articles = Article::find($id);
        /* $articles->categories()->detach();
        $articles->tags()->detach(); */
        $articles->delete();
        return redirect()->route('articles.index')->with('message', 'Element article deleted');
    }
}
