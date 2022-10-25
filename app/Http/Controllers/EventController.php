<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all(); //declared variable to store all the elements of the db
        return view("pages.home")->with("events", $events);
    }

    public function create()
    {
        return view("pages.add");
    }

    public function store(Request $request)
    {
        $event = new Event();
        $event->event_name = $request->eventname;
        $event->event_date = $request->eventdate;
        $event->event_venue = $request->eventvenue;
        $event->event_incharge = $request->eventincharge;

        $event->save();

        return redirect()->route('events.index');
    }

    public function show($id)
    {
        $event = Event::find($id);

        return view('pages.event')->with("event", $event);
    }

    public function edit($id)
    {
        $event = Event::find($id);

        return view('pages.edit')->with("event", $event);
    }

    public function update(Request $request, $id)
    {
        $event = Event::find($id); //update
        $event->event_name = $request->eventname;
        $event->event_date = $request->eventdate;
        $event->event_venue = $request->eventvenue;
        $event->event_incharge = $request->eventincharge;
        $event->save();

        return redirect()->route('events.index');
    }

    public function destroy($id)
    {
        $event = Event::find($id);
        $event->delete(); //delete a column

        return redirect()->route('events.index');
    }
}
