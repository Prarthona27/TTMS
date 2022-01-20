<?php

namespace App\Http\Controllers\website;
use App\Models\Eventlist;
use App\Models\Destinationlist;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $package=Eventlist::where('status','approved')->get();
        $destination=Destinationlist::all();
        return view('website.home',compact('package','destination'));
    }
}
 