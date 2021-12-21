@extends('welcome')
@section('content')
<form action="{{url('/events/EventStore')}}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="form-row">
    <!-- <div class="form-group col-md-6">
      <label for="inputEmail4">id</label>
      <input type="" name="id" class="form-control" id="inputEmail4" placeholder="Email">
    </div> -->
    <div class="form-group ">
      <label for="inputPassword4">Event Name</label>
      <input type="text"  name="Event_name" class="form-control" id="inputPassword4" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Event Time</label>
    <input type="datetime-local" name="Event_time" class="form-control" id="inputAddress" placeholder="">
  </div>
  <div class="form-group">
    <label for="inputAddress">Event Description</label>
    <textarea type="text" name="Event_Description" class="form-control" id="inputAddress" placeholder=""></textarea>
  </div>
  
  <div class="form-group">
    <label for="inputAddress">Place Image</label>
    <input type="file" name="image" class="form-control" id="inputAddress" placeholder="">
  </div>

  <div class="form-group">
    <div class="form-check">
      
      
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection