@extends('welcome')
@section('content')
<form action="{{url('/events/EventStore')}}" method="POST">
    @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">id</label>
      <input name="id" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Event Name</label>
      <input name="Event_name" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Event Time</label>
    <input name="Event_time" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress">Event Description</label>
    <input name="Event_Description" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  

  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
@endsection