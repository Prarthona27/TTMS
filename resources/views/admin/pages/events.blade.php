@extends('welcome')
@section('content')
<form action="{{route('event.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="form-row">
    <!-- <div class="form-group col-md-6">
      <label for="inputEmail4">id</label>
      <input type="" name="id" class="form-control" id="inputEmail4" placeholder="Email">
    </div> -->
    <div class="form-group ">
      <label for="inputPassword4">Package Name</label>
      <input type="text"  name="Event_name" class="form-control" id="inputPassword4" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Package Time</label>
    <input type="datetime-local" name="Event_time" class="form-control" id="inputAddress" placeholder="">
  </div>
  <div class="form-group">
    <label for="inputAddress">Package Description</label>
    <textarea type="text" name="Event_Description" class="form-control" id="inputAddress" placeholder=""></textarea>
  </div>
  <div class="form-group">
    <label for="inputAddress">Food menu</label>
    <textarea type="text" name="Event_Description1" class="form-control" id="inputAddress" placeholder=""></textarea>
  </div>
  <div class="form-group">
    <label for="inputAddress">Transport</label>
    <textarea type="text" name="Event_Description2" class="form-control" id="inputAddress" placeholder=""></textarea>
  </div>
  <div class="form-group">
    <label for="inputAddress">Included</label>
    <textarea type="text" name="Event_Description3" class="form-control" id="inputAddress" placeholder=""></textarea>
  </div>
  <div class="form-group">
    <label for="inputAddress">End Date</label>
    <input type="datetime-local" name="Event_Description4" class="form-control" id="inputAddress" placeholder="">
  </div>
  <div class="form-group">
    <label for="inputAddress">Agency Id</label>
    <textarea type="text" name="Agency_id" class="form-control" id="inputAddress" placeholder=""></textarea>
  </div>
  <div class="form-group">
    <label for="inputAddress">Place Image</label>
    <input type="file" name="image" class="form-control" id="inputAddress" placeholder=""></textarea>
  </div>
  
  <div class="form-group">
    <div class="form-check">
      
      
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection