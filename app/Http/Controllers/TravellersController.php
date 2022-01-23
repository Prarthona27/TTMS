<?php

namespace App\Http\Controllers;
use App\Models\Travellerlist;

use Illuminate\Http\Request;

class TravellersController extends Controller
{
   //to view traveller form
   public function widgets(){
       $agency=Agencylist::all();
    return view('website.accounts',compact('agency'));
}
//to view travellerlist
public function Travellerlist(){
    $travellers=Travellerlist::all();
    return view('admin.pages.TravellerList',compact('travellers'));
}
public function TravellerStore(Request $request)
{

  
    Travellerlist::create([
        //dd($request->all());
        //database name:: form name
        'name'=>$request->name,
        'phone'=>$request->phone,
        'email'=>$request->email,
        'address'=>$request->address,
        'package_id'=>$request->package_name
       
    ]);
    return redirect()->route('website');
}

public function travellerApprove($traveller_id){
    {
        // dd($traveller_id);
        $traveller=Travellerlist::find($traveller_id);
        $traveller->update([
          'status'=>'approved'
        ]);
          return redirect()->back();
      }
    
}
}