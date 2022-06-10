<?php

namespace App\Http\Controllers;

use App\Models\Map;
use Illuminate\Http\Request;

class MapController extends Controller
{
    
    public function index()
    {
        $this->authorize('is-admin', Map::class);
        $maps = Map::all();
        return view('/back/maps/all', compact('maps'));
    }

    public function edit($id)
    {
        $this->authorize('is-admin', Map::class);
        $maps = Map::find($id);
        return view('/back/maps/edit', compact('maps'));
    }

    public function update(Request $request, $id)
    {
        $maps = Map::find($id);
        $request->validate([
            'location' => 'required',
        ]);
        $maps->location = $request->location;
        $maps->updated_at = now();
        $maps->save();
        return redirect()->route('map')->with('message', 'Element map updated');
    
    }



}
