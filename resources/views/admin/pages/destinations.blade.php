@extends('welcome')
@section('content')
<form action="{{url('/destinations/DestinationStore')}}" method="POST">
    @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">id</label>
      <input name="id" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Destination Name</label>
      <input name="name" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Image</label>
    <input name="image" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress">Description</label>
    <input name="description" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress">Season</label>
    <input name="season" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  
  <div class="form-group">
    <label for="inputAddress">Budget</label>
    <input name="budget" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress">Transport</label>
    <input name="transport" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>

  <div class="form-group">
    <div class="form-check">
      
      
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection