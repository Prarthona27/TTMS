@extends('website.master')
@section('content')
<div>
    <ul style="margin-left:35px;">
     <p>Name: {{$destination->name}}</p>
    <p>Image: <img width="400px" src="{{url('/uploads/'.$destination->image)}}" alt=""></p>
    <p>Description: {{$destination->description}}</p>
    <p>Season: {{$destination->season}}</p>
    <p>Budget: {{$destination->budget}}</p>
    <p>Transport: {{$destination->transport}}</p>
    </ul>
</div>
@endsection