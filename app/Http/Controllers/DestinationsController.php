<?php

namespace App\Http\Controllers;
use App\Models\Destinationlist;
use Illuminate\Http\Request;

class DestinationsController extends Controller
{
    //to view destination form
   public function widgets(){
    return view('admin.pages.destinations');
}
//to view destinationlist
public function Destinationlist(){
    $destinations=Destinationlist::all();
    return view('admin.pages.DestinationList',compact('destinations'));
}
public function DestinationStore(Request $request)
{

        // dd($request->all());
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $filename = date('Ymdhms').'.'.$file->getClientOriginalExtension();
            // dd($filename);
            $file->storeAs('/uploads',$filename);
        }



    Destinationlist::create([
        //dd($request->all());
        //database name:: form name
        'name'=>$request->name,
        'image'=>$filename,
        'description'=>$request->description,
        'season'=>$request->season,
        'budget'=>$request->budget,
        'transport'=>$request->transport
    ]);
    return redirect()->back();
}
}
