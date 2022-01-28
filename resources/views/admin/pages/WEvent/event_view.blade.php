@extends('welcome')
@section('content')

<div>
    <p>Event Name: {{$event->Event_name}}</p>
    <p>Event Time: {{$event->Event_time}}</p>
    <p>Event Description: {{$event->Event_Description}}</p>
    <p>Event Description: {{$event->Event_Description1}}</p>
    <p>Event Description: {{$event->Event_Description2}}</p>
    <p>Event Description: {{$event->Event_Description3}}</p>
    <p>Event Description: {{$event->Event_Description4}}</p>
    <p>Agency Id: {{$event->agency->id}}</p>
    <p>Agency Name: {{$event->agency->name}}</p>
    <p>Place Image: <img width="100px" src="{{url('/uploads/'.$event->image)}}" alt=""></p>
    
</div>
@endsection
