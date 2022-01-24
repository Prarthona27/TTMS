@extends('welcome')
@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Event Name</th>
      <th scope="col">Event Time</th>
      <th scope="col">Event Description</th>
      <th scope="col">Event Description1</th>
      <th scope="col">Event Description2</th>
      <th scope="col">Event Description3</th>
      <th scope="col">Event Description4</th>
      <th scope="col">Agency Name</th>
      <th scope="col">Place Image</th>
    
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($events as $key=>$event)

  
                <tr>
                    <th>{{$key+1}}</th>
                    <td>{{$event->Event_name}}</td>
                    <td>{{$event->Event_time}}</td>
                    <td>{{$event->Event_Description}}</td>
                    <td>{{$event->Event_Description1}}</td>
                    <td>{{$event->Event_Description2}}</td>
                    <td>{{$event->Event_Description3}}</td>
                    <td>{{$event->Event_Description4}}</td>
                    <td>{{$event->Agency_name}}</td>
                    <td>
                      <img width="100px" src="{{url('/uploads/'.$event->image)}}" alt="">
                    </td>

                

                    <td>
                        <a class="btn btn-primary" href="{{route('agency.event.view',$event->id)}}">View</a>
                        <a class="btn btn-info" href="{{route('agency.event.edit',$event->id)}}">Edit</a>
                        <a class="btn btn-danger" href="{{route('agency.event.delete',$event->id)}}">Delete</a>
                        <a class="btn btn-warning" href="{{route('admin.event.approve',$event->id)}}">Approve</a>
                    </td>
                </tr>
            @endforeach      
  </tbody>
</table>

@endsection