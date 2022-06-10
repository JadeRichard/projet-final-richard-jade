<?php

namespace App\Http\Controllers;

use App\Mail\Newevent;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('/back/events/all', compact('events'));
    }

    public function create()
    {
        $events = Event::all();
        return view('/back/events/create', compact('events'));
    }

    public function store(Request $request)
    {
        $events = new Event();
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
            'picture' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'location' => 'required',
        ]);
        $events->title = $request->title;
        $events->description = $request->description;
        $events->date = $request->date;
        $events->start_time = $request->start_time;
        $events->end_time = $request->end_time;
        $events->location = $request->location;
        $events->updated_at = now();
        File::delete("images/". $events->picture);
        $events->picture = $request->file("picture")->hashName();
        $request->file('picture')->storePublicly('images/', 'public');
        $events->save();
        /* $users = User::where('role', 'member')->get(); */
        /* foreach ($users as $user) {
            Mail::to($user->email)->send(new Newevent($events));
            /* Mail::to($user->email)->send(new Event($events)); 
        } */
        return redirect()->route('events.index')->with('message', 'Element event created');
    
    }

    public function edit($id)
    {
        $events = Event::find($id);
        return view('/back/events/edit', compact('events'));
    }

    public function update(Request $request, $id)
    {
        $events = Event::find($id);
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'date' => 'required',
            'picture' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'location' => 'required',
        ]);
        $events->title = $request->title;
        $events->description = $request->description;
        $events->date = $request->date;
        $events->start_time = $request->start_time;
        $events->end_time = $request->end_time;
        $events->location = $request->location;
        $events->updated_at = now();
        File::delete("images/". $events->picture);
        $events->picture = $request->file("picture")->hashName();
        $request->file('picture')->storePublicly('images/', 'public');
        $events->save();
        return redirect()->route('events.index')->with('message', 'Element event updated');

    }

    public function show($id)
    {
        $events = Event::find($id);
        return view('/back/events/show', compact('events'));
    }

    public function destroy($id)
    {
        $events = Event::find($id);
        $events->delete();
        return redirect()->route('events.index')->with('message', 'Element event deleted');
    }
}
