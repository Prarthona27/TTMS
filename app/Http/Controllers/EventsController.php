<?php

namespace App\Http\Controllers;
use App\Models\Eventlist;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    //to view event form
    public function widgets(){
        return view('admin.pages.events');
    }
    //to view eventlist
    public function Eventlist(){
        $events=Eventlist::all();
        return view('admin.pages.EventList',compact('events'));
    }
    public function EventStore(Request $request)
    {
        // dd(date('Ymdhms'));
        // dd($request->all());
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filename = date('Ymdhms').'.'.$file->getClientOriginalExtension();
            // dd($filename);
            $file->storeAs('/uploads',$filename);
        }

        Eventlist::create([
            //dd($request->all());
            //database name:: form name
           'Event_name'=>$request->Event_name,
            'Event_time'=>$request->Event_time,
            'Event_Description'=>$request->Event_Description,
            'image'=>$filename
        ]);
        return redirect()->back();
}
}