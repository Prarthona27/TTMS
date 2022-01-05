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
public function destinationDelete($destination_id)
    {
       Destination::find($destination_id)->delete();
       return redirect()->back()->with('success','Destination Deleted.');
    }

    public function destinationEdit($destination_id)
    {

        $destination=DestinationList::find($destination_id);
//        $destination=Destination::where('user_id',$id)->first();

//        dd($destination);
    
//        dd($all_categories);
        return view('admin.pages.edit-destination',compact('destination'));

    }

    public function destinationUpdate(Request $request,$destination_id)
    {
// dd($request->all());

        $destination=DestinationList::find($destination_id);

    //    Destination::where('column','value')->udpate([
    //        'column'=>'request form field name'
    //    ]);
//DB table er image er column er name
        $destination_image=$destination->image;
//              step 1: check image exist in this request blade image column name.
        if($request->hasFile('image'))
        {
            // step 2: generate file name
            $destination_image=date('Ymdhis') .'.'. $request->file('image')->getClientOriginalExtension();

            //step 3 : store into project directory

            $request->file('image')->storeAs('/uploads',$destination_image);

        }
   


        $destination->update([
            
            // field name from db || field name from form
            'Name'=>$request->name,
            'Image'=>$destination_image,
            'Description'=>$request->description,
            'Season'=>$request->season,
            'Budget'=>$request->budget,
            'Transport'=>$request->transport,

        ]);
        return redirect()->route('admin.destinations.destinationlist')->with('success','Destination Updated Successfully.');

    }
    public function destinationView($destination_id)
    {

//        collection= get(), all()====== read with loop (foreach)
//       object= first(), find(), findOrFail(),======direct
      $destination=Destinationlist::find($destination_id);
//      $product=Product::where('id',$product_id)->first();
        return view('admin.pages.WEvent.destination_view',compact('destination'));
    }
}
