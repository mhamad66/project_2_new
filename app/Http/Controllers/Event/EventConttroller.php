<?php

namespace App\Http\Controllers\Event;

use App\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventConttroller extends Controller
{
    public function index()
    {
        $events = Event::all();

        return view('Event.IndexEvent', compact('events'));
    }

    public function add(Request $request)
    {
        if ($request->isMethod('post')) {
            $event = new Event();
            $event->title = $request->input('title');
            $event->description = $request->input('description');
            $event->Date = $request->input('date');
            $event->place = $request->input('place');
            if (!is_null($request->input('image'))) {
                $file = $request->file('image');
                $new_name = time() . '.' . $file->getClientOriginalExtension();
                $des = public_path('/Event/Event');
                $request->image->move($des, $new_name);
                $event->image = $new_name;
            }
            $event->save();
            return redirect(route('IndexEvent'));

        } else {

            return view('Event.addEvent');
        }

    }

    public function delete(Request $request, $id)
    {
        $event = Event::find($id);
        $event->delete();
        return redirect(route('IndexEvent'));

    }


}
