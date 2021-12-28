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
        public function eventDelete($event_id)
    {
       Event::find($product_id)->delete();
       return redirect()->back()->with('success','Event Deleted.');
    }

    public function eventEdit($id)
    {

        $event=Event::find($id);
//        $event=Event::where('user_id',$id)->first();

//        dd($event);
        $all_categories=Category::all();
//        dd($all_categories);
        return view('admin.pages.edit-event',compact('all_categories','event'));

    }

    public function eventUpdate(Request $request,$id)
    {


        $event=Event::find($id);

//        Event::where('column','value')->udpate([
//            'column'=>'request form field name'
//        ]);

        $image_name=$event->image;
//              step 1: check image exist in this request.
        if($request->hasFile('event_image'))
        {
            // step 2: generate file name
            $image_name=date('Ymdhis') .'.'. $request->file('event_image')->getClientOriginalExtension();

            //step 3 : store into project directory

            $request->file('event_image')->storeAs('/events',$image_name);

        }


        $event->update([
            // field name from db || field name from form
            'name'=>$request->name,
            'price'=>$request->price,
            'category_id'=>$request->category,
            'details'=>$request->details,
            'image'=>$image_name,

        ]);
        return redirect()->route('admin.event.list')->with('success','Event Updated Successfully.');

    }
}
