<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    
    public function index()
    {
        $messages = Message::all();
        return view('/back/messages/all', compact('messages'));
    }

    public function show(Message $message)
    {
        return view('messages.show', compact('message'));
    }

    public function destroy(Message $message)
    {
        $message->delete();
        return redirect()->route('messages.index')->with('message', 'Message deleted.');
    }

    public function sendMessage(Request $request, $id)
    { 
        
        $messages = new Message();
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);
        if(auth()->check()){
            $messages->name = auth()->user()->name;
            $messages->email = auth()->user()->email;
        } else {
            $messages->name = $request->name;
            $messages->email = $request->email;
        }
        $messages->teacher_id = null;
        $messages->user_id = $id;
        $messages->user->id = $id;
        $messages->message = $request->message;
        $messages->to = $messages->user->name;

        $messages->save();
        return redirect()->back();
    }

}
