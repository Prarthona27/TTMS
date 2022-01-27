<?php

namespace App\Http\Controllers;
use App\Models\Eventlist;

use Illuminate\Http\Request;

class EventreportController extends Controller
{
    public function getreport(){
        $events=Eventlist::all();
        return view('admin.pages.WEvent.Eventreport',compact('events'));

    }
    public function Eventlist(){
        
    }
    public function searchreport(Request $request)
    {
        // dd($request->all());
        $events=Eventlist::whereBetween('created_at',[$request->from,$request->to])->get();
        // dd($event);
        // $event=Eventlist::find();
;
        return view('admin.pages.WEvent.Eventreport',compact('events'));

    }
}
