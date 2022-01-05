@extends('welcome')


@section('content')

<h2>Edit destination</h2>

@if(session()->has('success'))
    <p class="alert alert-success">
        {{session()->get('success')}}
    </p>
@endif

<form action="{{route('admin.destination.update',$destination->id)}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Destination Name</label>
        <input name="name" value="{{$destination->name}}" placeholder="Enter Destination Name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Image</label>
        <input name="image" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Description</label>
        <input name="description" value="{{$destination->description}}" placeholder="Enter Destination Description"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Season</label>
        <input name="season" value="{{$destination->season}}" placeholder="Enter Destination Season"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Budget</label>
        <input name="budget" value="{{$destination->budget}}" placeholder="Enter Destination Budget"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Transport</label>
        <input name="transport" value="{{$destination->transport}}" placeholder="Enter Destination Transport"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <button type="submit" class="btn btn-success">Edit</button>
</form>

@endsection
