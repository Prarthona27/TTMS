@extends('welcome')
@section('content')
<form action="{{url('/agencies/AgencyStore')}}" method="POST">
    @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">id</label>
      <input name="id" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Agency Name</label>
      <input name="name" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Phone</label>
    <input name="phone" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress">Email</label>
    <input name="email" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input name="address" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>

  <div class="form-group">
    <div class="form-check">
      
      
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>
@endsection