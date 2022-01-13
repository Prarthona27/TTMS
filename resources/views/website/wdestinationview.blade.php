@extends('website.master')
@section('content')
<div>
     <p>Name: {{$destination->name}}</p>
    <p>Image: <img width="100px" src="{{url('/uploads/'.$destination->image)}}" alt=""></p>
    <p>Description: {{$destination->description}}</p>
    <p>Season: {{$destination->season}}</p>
    <p>Budget: {{$destination->budget}}</p>
    <p>Transport: {{$destination->transport}}</p>
</div>
@endsection