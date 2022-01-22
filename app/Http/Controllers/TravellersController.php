<?php

namespace App\Http\Controllers;
use App\Models\Travellerlist;

use Illuminate\Http\Request;

class TravellersController extends Controller
{
   //to view traveller form
   public function widgets(){
    return view('website.accounts');
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
        'package_name'=>$request->package_name,
        'Agency_id'=>$request->Agency_id
    ]);
    return redirect()->back();
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