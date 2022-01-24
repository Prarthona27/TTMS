@extends('welcome')


@section('content')

<h2>Edit event</h2>

@if(session()->has('success'))
    <p class="alert alert-success">
        {{session()->get('success')}}
    </p>
@endif

<form action="{{route('agency.event.update',$event->id)}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Package Name</label>
        <input name="Event_name" value="{{$event->Event_name}}" placeholder="Enter Event Name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Package Time</label>
        <input name="Event_time" value="{{$event->Event_time}}" placeholder="Enter Event Time"  type="dateTime-local" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Package details</label>
        <input name="Event_Description" value="{{$event->Event_Description}}" placeholder="Enter Event details"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Food Menu</label>
        <input name="Event_Description1" value="{{$event->Event_Description1}}" placeholder="Enter Event details"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Transport</label>
        <input name="Event_Description2" value="{{$event->Event_Description2}}" placeholder="Enter Event details"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Included</label>
        <input name="Event_Description3" value="{{$event->Event_Description3}}" placeholder="Enter Event details"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">End Date</label>
        <input name="Event_Description4" value="{{$event->Event_Description4}}" placeholder="Enter Event details"  type="dateTime-local" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Agency Id</label>
        <select class="form-control"name="Agency_name">
      @foreach($agency as $agency)
      <option value="{{$agency->id}}">{{$agency->name}}</option>
      @endforeach
    </select>
    </div>
     <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Event Image</label>
        <input name="event_image" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div> 
   

    <button type="submit" class="btn btn-success">Update</button>
   
</form>

@endsection