@extends('welcome')


@section('content')

<h1>Edit event</h1>

@if(session()->has('success'))
    <p class="alert alert-success">
        {{session()->get('success')}}
    </p>
@endif

<form action="{{route('admin.event.update',$event->id)}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Event Name</label>
        <input name="name" value="{{$event->Event_name}}" placeholder="Enter Event Name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Event Time</label>
        <input name="time" value="{{$event->Event_time}}" placeholder="Enter Event Time"  type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Event details</label>
        <input name="details" value="{{$event->Event_Description}}" placeholder="Enter Event details"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <!-- <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Event Image</label>
        <input name="event_image" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div> -->

    <button type="submit" class="btn btn-success">Edit</button>
</form>

@endsection