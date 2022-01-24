<?php

namespace App\Http\Controllers;
use App\Models\Travellerlist;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function getreport(){
        $travellers=Travellerlist::all();
        return view('admin.pages.Agency.report',compact('travellers'));

    }
    public function Travellerlist(){
        
    }
    public function searchreport(Request $request)
    {
        // dd($request->all());
        $travellers=Travellerlist::whereBetween('created_at',[$request->from,$request->to])->get();
        // dd($traveller);
        // $traveller=Travellerlist::find();
;
        return view('admin.pages.Agency.report',compact('travellers'));

    }
}
