<?php

namespace App\Http\Controllers;
use App\Models\Agencylist;
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
        Agencylist::create([
            //dd($request->all());
            //database name:: form name
           'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'addess'=>$request->address
        ]);
        return redirect()->back();
}
}
