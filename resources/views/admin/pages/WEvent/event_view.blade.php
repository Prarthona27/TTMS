@extends('welcome')
@section('content')
<div>
    <p>Event Name: {{$event->Event_name}}</p>
    <p>Event Time: {{$event->Event_time}}</p>
    <p>Event Description: {{$event->Event_Description}}</p>
    <p>Place Image: <img width="100px" src="{{url('/uploads/'.$event->image)}}" alt=""></p>
</div>
@endsection