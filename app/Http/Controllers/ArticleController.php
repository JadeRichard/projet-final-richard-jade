<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Tag;
use Carbon\Carbon;
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
        $articles->user_id = auth()->user()->id;
        $articles->is_published = $request->is_published;
        $request->is_published = false;
        $articles->updated_at = now();
        $destination = "images/" . $articles->picture;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $articles->picture = $request->file("picture")->hashName();
        $request->file('picture')->storePublicly('images/', 'public');
        $articles->save();

        $articles->categories()->attach($request->categories, ['article_id' => $articles->id]);
        $articles->tags()->attach($request->tags, ['article_id' => $articles->id]);

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
        $articles->is_published = $request->is_published;
        $articles->updated_at = now();
        $destination = "images/" . $articles->picture;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $articles->picture = $request->file("picture")->hashName();
        $request->file('picture')->storePublicly('images/', 'public');
        $articles->save();

        $articles->categories()->attach($request->categories, ['article_id' => $articles->id]);
        $articles->tags()->attach($request->tags, ['article_id' => $articles->id]);

        return redirect()->route('articles.index')->with('message', 'Element article updated');

    }

    public function show($id)
    {
        $articles = Article::find($id);
        return view('/back/articles/show', compact('articles'));
    }

    public function singlepost($id)
    {
        /* dd($id); */
        $articles = Article::find($id);
        return view('/front/pages/single-post', compact('articles'));
    }

    public function singlepostcreate(Request $request, $id){
        $articles = Article::find($id);
        $comments = new Comment();
        /* $request->validate([
             'content' => 'required',
        ]); */
        $comments->article_id = $articles->id;
        if(auth()->check()){
            $comments->user_id = auth()->user()->id;
            $comments->name = auth()->user()->name;
            $comments->email = auth()->user()->email;
            $comments->picture = auth()->user()->picture;
        }else{
            $comments->name = $request->name;
            $comments->email = $request->email;
            $comments->picture = "courses-icon.png";
        }
        $comments->content = $request->content;
        $comments->time = \Carbon\Carbon::parse($comments->created_at)->diffForHumans();
        $comments->updated_at = now();
        $comments->save();
        return redirect()->route('singlepost', $articles->id);
    }

    public function destroy($id)
    {
        $articles = Article::find($id);
        $articles->categories()->detach();
        $articles->tags()->detach();
        $articles->delete();
        return redirect()->route('articles.index')->with('message', 'Element article deleted');
    }

    public function news_search_ajax(Request $request)
    {
        if($request->ajax()){
            $search = $request->get('search');
            $search = str_replace(' ', '%', $search);
            $articles = Article::where('title', 'like', '%' . $search . '%')
            ->orWhere('description_1', 'like', '%' . $search . '%')
            ->paginate(4);
            return view('/front.pages.search.search_data', compact('articles'));
        }

    }

    public function newspage()
    {
        $articles = Article::paginate(4);
        $articlescount = Article::all();
        return view('front.pages.news', compact('articles', 'articlescount'));
    }

}
