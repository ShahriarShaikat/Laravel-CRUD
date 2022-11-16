<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class userController extends Controller
{
    public function create(Request $request)
    {
        return view('event.create.index');
    }
    
    public function store(Request $request)
    {
        $event=new Event();
        $event->event_name=$request->eventName;                             //event_name (db table element)
        $event->event_details=$request->eventDetails;                       //eventName form element
        $event->importance=$request->importance;
        $event->username=session('username');
        $event->save();
        
        return redirect()->route('home.index');
    }
    
    public function show(Request $request,$id)
    {
        $event=Event::find($id);
        return view ('event.show.index')->with('event',$event);
    }
    
   
    
    public function edit(Request $request,$id)
    {
        $event=Event::find($id);
        return view('event.edit.index')->with('event',$event);
    }

    public function update(Request $request,$id)
    {
        $event=Event::find($id);
        $event->event_name=$request->eventName;
        $event->event_details=$request->eventDetails;
        $event->importance=$request->importance;

        $event->save();

        return redirect()->route('home.index');
    }

    public function destroy(Request $request,$id)
    {
        Event::destroy($id);
        return redirect()->route('home.index');
    }
}
