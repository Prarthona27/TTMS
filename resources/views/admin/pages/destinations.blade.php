@extends('welcome')
@section('content')
<form action="{{route('destination.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="form-row">
    
    <div class="form-group">
      <label for="inputPassword4">Destination Name</label>
      <input name="name" class="form-control" id="inputPassword4" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Image</label>
    <input type="file" name="image" class="form-control" id="inputAddress" placeholder="">
  </div>
  <div class="form-group">
    <label for="inputAddress">Description</label>
    <input name="description" class="form-control" id="inputAddress" placeholder="">
  </div>
  <div class="form-group">
    <label for="inputAddress">Season</label>
    <input name="season" class="form-control" id="inputAddress" placeholder="">
  </div>
  
  <div class="form-group">
    <label for="inputAddress">Budget</label>
    <input name="budget" class="form-control" id="inputAddress" placeholder="">
  </div>
  <div class="form-group">
    <label for="inputAddress">Transport</label>
    <input name="transport" class="form-control" id="inputAddress" placeholder="">
  </div>

  <div class="form-group">
    <div class="form-check">
      
      
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection