<?php

namespace App\Http\Controllers\website;
use App\Models\User;
use App\Models\Feedback;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    //user feedback

    public function feedbackView(){
        $users=User::all();
        return view('website.feedback',compact('users'));
    }
    public function feedbackstore(Request $request){
       Feedback::create([
'user_id'=>$request->name,
'feedback'=>$request->feedback

       ]);
       return redirect()->back()->with('msg','your feedback added successfully.Wait for Admin Approval.');
        
    }
    public function feedbacklist(){
       $feedback=Feedback::with('user')->get();
        return view('website.feedbacklist',compact('feedback'));
    }

    public function feedbackApprove($feedback_id)
    {
      $feedback=Feedback::find($feedback_id);
      $feedback->update([
        'status'=>'approved'
      ]);
        return redirect()->back();
    }
}
