<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    
    public function index()
    {
        return view('messages.index');
    }
    
    public function store(Request $request)
    {
        $message = new Message();
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'teacher' => 'required',
            'message' => 'required',
        ]);
        $message->name = auth()->user()->name;
        $message->email = auth()->user()->email;
        $message->teacher = $request->teacher;
        $message->message = $request->message;

        $message->save();
    }
    

    public function show(Message $message)
    {
        return view('messages.show', compact('message'));
    }

    public function destroy(Message $message)
    {
        $message->delete();

        return redirect()->route('messages.index');
    }

}
