<?php

namespace App\Http\Controllers;
use App\Models\Eventlist;
use App\Models\User;
use App\Models\Agencylist;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    //to view event form
    public function widgets(){
        $agency=Agencylist::all();
        return view('admin.pages.events',compact('agency'));
    }
    //to view eventlist
    public function Eventlist(){
        $events=Eventlist::all();
        $agency=Agencylist::all();
        return view('admin.pages.EventList',compact('events','agency'));
    }
    public function EventStore(Request $request)
    {
        // dd(date('Ymdhms'));
       // dd($request->all());
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filename = date('Ymdhms').'.'.$file->getClientOriginalExtension();
           //dd($filename);
            $file->storeAs('/uploads',$filename);
        }

        Eventlist::create([
            //dd($request->all());
            //database name:: form name
           'Event_name'=>$request->Event_name,
            'Event_time'=>$request->Event_time,
            'Event_Description'=>$request->Event_Description,
            'Event_Description1'=>$request->Event_Description1,
            'Event_Description2'=>$request->Event_Description2,
            'Event_Description3'=>$request->Event_Description3,
            'Event_Description4'=>$request->Event_Description4,
            'image'=>$filename,
            'Agency_id'=>$request->Agency_name
        ]);
        return redirect()->back();
    }
        public function eventDelete($event_id)
    {
       EventList::find($event_id)->delete();
       return redirect()->back()->with('success','Event Deleted.');
    }

    public function eventEdit($event_id)
    {
        $agency=Agencylist::all();
        $event=EventList::find($event_id);
//        $event=Event::where('user_id',$id)->first();

//        dd($event);
    
//        dd($all_categories);
        return view('admin.pages.edit-event',compact('event','agency'));

    }

    public function eventUpdate(Request $request,$event_id)
    {
// dd($request->all());

        $event=EventList::find($event_id);

    //    Event::where('column','value')->udpate([
    //        'column'=>'request form field name'
    //    ]);

        $filename=$event->image;
//              step 1: check image exist in this request.
        if($request->hasFile('event_image'))
        {
            // step 2: generate file name
            $filename=date('Ymdhis') .'.'. $request->file('event_image')->getClientOriginalExtension();

            //step 3 : store into project directory

            $request->file('event_image')->storeAs('/uploads',$filename);

        }
   


        $event->update([
            
            // field name from db || field name from form
            'Event_name'=>$request->Event_name,
            'Event_time'=>$request->Event_time,
            'Event_Description'=>$request->Event_Description,
            'Event_Description1'=>$request->Event_Description1,
            'Event_Description2'=>$request->Event_Description2,
            'Event_Description3'=>$request->Event_Description3,
            'Event_Description4'=>$request->Event_Description4,
            'image'=>$filename,
           

        ]);
        return redirect()->route('agency.events.eventlist')->with('success','Event Updated Successfully.');

    }
    public function eventView($event_id)
    {

//        collection= get(), all()====== read with loop (foreach)
//       object= first(), find(), findOrFail(),======direct
      $event=Eventlist::find($event_id);
//      $product=Product::where('id',$product_id)->first();
        return view('admin.pages.WEvent.event_view',compact('event'));
    }

    
    public function W_eventView($event_id)
    {

//        collection= get(), all()====== read with loop (foreach)
//       object= first(), find(), findOrFail(),======direct
      $event=Eventlist::find($event_id);
//      $product=Product::where('id',$product_id)->first();
        return view('website.weventview',compact('event'));
    }

    public function bookTour($package_id)
    {
        // dd(auth()->user());
        $users=User::all();
        $package=Eventlist::find($package_id);
        return view('website.accounts',compact('package','users'));
    }
    public function eventApprove($event_id)
    {
      $event=Eventlist::find($event_id);
      $event->update([
        'status'=>'approved'
      ]);
        return redirect()->back();
    }

}
