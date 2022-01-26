@extends('website.master')
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      
      <th scope="col">Email</th>
     
      <th scope="col">Package Name</th>
      <th scope="col">status</th>
    </tr>
  </thead>
  <tbody>
  
  
  @foreach($traveller as $key=>$data)

                <tr>
                 
                    <th>{{$key+1}}</th>
                  
                  
                    <td>{{$data->user->email}}</td>
                    
                    <td>{{$data->events->Event_name}}</td>
                    <td>{{$data->status}}</td>
                    


                </tr>
                @endforeach    
  </tbody>
</table>
@endsection