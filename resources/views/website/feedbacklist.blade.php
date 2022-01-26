@extends('welcome')
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
   
   
      <th scope="col">Name</th>
   
      <th scope="col">Feedback</th>
      <th scope="col">Action</th> 
      <th scope="col">status</th> 
    </tr>
  </thead>
  <tbody>
  
  @foreach ($feedback as $feedback)


                <tr>
                    <th>{{$feedback->id}}</th>
                    
                    <td>{{$feedback->user->email}}</td>
                    
                    <td>{{$feedback->feedback}}</td>

                    <td>
                
                         <a class="btn btn-warning" href="{{route('admin.feedback.approve',$feedback->id)}}">Approve</a>
                
                   
                
                         
                    </td>

                    <td>{{$feedback->status}}</td>
                </tr>
            @endforeach      
  </tbody>
</table>
@endsection