@extends('welcome')
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Event Name</th>
      <th scope="col">Event Time</th>
      <th scope="col">Event Description</th>
      <th scope="col">Place Image</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($events as $event)
                <tr>
                    <th>{{$event->id}}</th>
                    <td>{{$event->Event_name}}</td>
                    <td>{{$event->Event_time}}</td>
                    <td>{{$event->Event_Description}}</td>
                    <td>{{$event->Place_Image}}</td>
                    <td>
                      <img width="100px" src="{{url('/uploads/'.$event->image)}}" alt="">
                    </td>
                </tr>
            @endforeach      
  </tbody>
</table>
@endsection