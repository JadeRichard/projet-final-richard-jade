<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        
        $comments = Comment::all();
        return view('/back/comments/all', compact('comments'));
    } 

    public function create()
    {
        $comments = Comment::all();
        return view('/back/comments/create', compact('comments'));
    }

    public function store(Request $request)
    {
        $comments = new Comment();
        $request->validate([
             'content' => 'required',
        ]);
        $comments->article_id = $request->article_id;
        $comments->user_id = auth()->user()->id;
        $comments->name = auth()->user()->name;
        $comments->email = auth()->user()->email;
        $comments->content = $request->content;
        $comments->time = Carbon::now();
        $comments->updated_at = now();
        $comments->save();
        return redirect()->route('comments.index')->with('message', 'Element article created');
    }

     public function edit($id)
    {
        $comments = Comment::find($id);
        return view('/back/comments/edit', compact('comments'));
    }

    public function update(Request $request, $id)
    {
        $articles = Article::find($id);
        $comments = Comment::find($id);
        $request->validate([
             'content' => 'required',
        ]);
        $comments->article_id = $articles->id;
        $comments->user_id = auth()->user()->id;
        $comments->name = auth()->user()->name;
        $comments->email = auth()->user()->email;
        $comments->content = $request->content;
        $comments->time = Carbon::now();
        $comments->updated_at = now();
        $comments->save();
        return redirect()->route('comments.index')->with('message', 'Element comment updated');
    
    }

    public function show($id)
    {
        $comments = Comment::find($id);
        return view('/back/comments/show', compact('comments'));
    } 

    public function destroy($id)
    {
        $comments = Comment::find($id);
        $comments->delete();
        return redirect()->route('comments.index')->with('message', 'Element comment deleted');
    }


}
