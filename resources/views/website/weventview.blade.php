@extends('website.master')
@section('content')
<div>
    <p>Event Name: {{$event->Event_name}}</p>
    <p>Event Time: {{$event->Event_time}}</p>
    <p>Event Description: {{$event->Event_Description}}</p>
    <p>Event Description: {{$event->Event_Description1}}</p>
    <p>Event Description: {{$event->Event_Description2}}</p>
    <p>Event Description: {{$event->Event_Description3}}</p>
    <p>Event Description: {{$event->Event_Description4}}</p>
    <p>Place Image: <img width="300px" src="{{url('/uploads/'.$event->image)}}" alt=""></p>
</div>
@endsection