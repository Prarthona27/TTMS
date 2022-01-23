<?php

namespace App\Http\Controllers;
use App\Models\Agencylist;
use App\Models\User;

use Illuminate\Http\Request;

class AgenciesController extends Controller
{
    //to view agency form
    public function widgets(){
        
        return view('admin.pages.agencies');
    }
     //to view agency form website
     public function WagencyList(){
        $agencies=Agencylist::all();
        return view('admin.pages.Agency.Wagencylist',compact('agencies'));
       
    }
    //to view agencylist
    public function Agencylist(){
        $agencies=Agencylist::all();
        return view('admin.pages.AgencyList',compact('agencies'));
    }
    public function AgencyStore(Request $request)
    {
        // dd($request->all());

        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->pass),
            'mobile'=>$request->phone,
            'role'=>$request->role
        ]);
        Agencylist::create([
            //dd($request->all());
            //database name:: form name
            'user_id'=>$user->id,
           'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'address'=>$request->address,
            'password'=>bcrypt($request->pass),
        ]);
        return redirect()->back();
}
}
