@extends('website.master')
@section('content')
<div class="container">
<p>Event Name: {{$event->agency->name}}</p>
<p>Event Name: {{$event->agency->id}}</p>
    <p>Event Name: {{$event->Event_name}}</p>
    <p>Event Time: {{$event->Event_time}}</p>
    <p>Package Description: {{$event->Event_Description}}</p>
    <!-- <p>Food Menu: {{$event->Event_Description1}}</p>
    <p>Transport: {{$event->Event_Description2}}</p>
    <p>Included: {{$event->Event_Description3}}</p>
    <p>End Date: {{$event->Event_Description4}}</p> -->

    <ul style="margin-left:30px;">
    <li style="list-style-type: circle;">Food Menu: {{$event->Event_Description1}}</li>
    <li style="list-style-type: circle;">Transport: {{$event->Event_Description2}}</li>
    <li style="list-style-type: circle;">Included: {{$event->Event_Description3}}</li>
    <li style="list-style-type: circle;">End Date: {{$event->Event_Description4}}</li> 
    </ul>
    <p>Place Image: <img width="400px" src="{{url('/uploads/'.$event->image)}}" alt=""></p>
</div>
<div class="btn_main"><a href="{{route('book.tour',$event->id)}}">Book This Tour</a></div>
@endsection