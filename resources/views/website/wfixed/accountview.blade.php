@extends('welcome')
@section('content')
<div>
     <p>Name: {{$traveller->name}}</p>
    <p>Phone: {{$traveller->phone}}</p>
    <p>Email: {{$traveller->email}}</p>
    <p>Address: {{$traveller->address}}</p>
    <p>Package Name: {{$traveller->package_name}}</p>
</div>
@endsection



