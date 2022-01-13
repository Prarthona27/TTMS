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
      <th scope="col">Place Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($events as $event)

  <td>
                        <a class="" href="{{route('admin.events.eventlist',$event->id)}}"> {{$event->name}}</a>
                    </td>
                <tr>
                    <th>{{$event->id}}</th>
                    <td>{{$event->Event_name}}</td>
                    <td>{{$event->Event_time}}</td>
                    <td>{{$event->Event_Description}}</td>
                    <td>{{$event->Event_Description1}}</td>
                    <td>{{$event->Event_Description2}}</td>
                    <td>{{$event->Event_Description3}}</td>
                    <td>{{$event->Event_Description4}}</td>
                    <td>{{$event->Place_Image}}</td>
                    <td>
                      <img width="100px" src="{{url('/uploads/'.$event->image)}}" alt="">
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{route('admin.event.view',$event->id)}}">View</a>
                        <a class="btn btn-info" href="{{route('admin.event.edit',$event->id)}}">Edit</a>
                        <a class="btn btn-danger" href="{{route('admin.event.delete',$event->id)}}">Delete</a>
                    </td>
                </tr>
            @endforeach      
  </tbody>
</table>

@endsection