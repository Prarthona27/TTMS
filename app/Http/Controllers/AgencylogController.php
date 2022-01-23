<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgencylogController extends Controller
{
    public function registration(Request $request)
    {
//        dd($request->all());
        Agency::create([
            'name'=>$request->agency_name,
            'email'=>$request->agency_email,
            'password'=>bcrypt($request->agency_password),
            'mobile'=>$request->agency_mobile,
        ]);

        return redirect()->back()->with('message','Registration successful.');


    }


    public function login(Request $request)
    {

        $userInfo=$request->except('_token');
//        $credentials['email']=$request->user_email;
//        $credentials['password']=$request->user_password;
//        dd($credentials);
//        $credentials=$request->only('user_email','user_password');


        if(Auth::attempt($agencyInfo)){
            return redirect()->back()->with('message','Login successful.');
        }
        return redirect()->back()->with('error','Invalid agency credentials');

    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('agency.login')->with('message','Logging out.');
    }
}
