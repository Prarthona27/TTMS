@extends('welcome')
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
   
   
      <th scope="col">Email</th>
   
      <th scope="col">Package Name</th>
      <th scope="col">Action</th> 
      <th scope="col">status</th> 
    </tr>
  </thead>
  <tbody>
  
  @foreach ($travellers as $traveller)


                <tr>
                    <th>{{$traveller->id}}</th>
                    
                    <td>{{$traveller->user->email}}</td>
                    
                    <td>{{optional($traveller->events)->Event_name}}</td>

                    <td>
                
                         <a class="btn btn-warning" href="{{route('admin.traveller.approve',$traveller->id)}}">Approve</a>
                         <a class="btn btn-danger" href="{{route('admin.traveller.cancel',$traveller->id)}}">Cancel</a>
                   
                
                         
                    </td>

                    <td>{{$traveller->status}}</td>
                </tr>
            @endforeach      
  </tbody>
</table>
@endsection