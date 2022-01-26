<?php

namespace App\Http\Controllers;
use App\Models\Travellerlist;
use App\Models\User;
use Illuminate\Http\Request;

class TravellersController extends Controller
{
   //to view traveller form
   public function widgets(){
       $users=User::all();
       $agency=Agencylist::all();
    return view('website.accounts',compact('agency','users'));
}
//to view travellerlist
public function Travellerlist(){
    $travellers=Travellerlist::with('events')->get();

    return view('admin.pages.TravellerList',compact('travellers'));
}
public function TravellerStore(Request $request)
{

  
    Travellerlist::create([
        //dd($request->all());
        //database name:: form name
        'user_id'=>$request->email,
      
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
public function MyTourList(){
    {
        // dd($traveller_id);
        $traveller=Travellerlist::where('user_id',auth()->user()->id)->get();
        // dd( $traveller);
       return view('website.MyTour',compact('traveller'));
      }
    
}



}