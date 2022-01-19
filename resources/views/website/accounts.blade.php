@extends('website.master')
@section('content')
<form action="{{route('traveller.store')}}" method="POST">
    @csrf
    <ul style="margin-left:40px;">
  <div class="form-row">
  
    <div class="form-group col-md-6">
      <label for="inputPassword4">Traveller Name</label>
      <input name="name" class="form-control" id="inputPassword4" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Phone</label>
    <input name="phone" class="form-control" id="inputAddress" placeholder="">
  </div>
  <div class="form-group">
    <label for="inputAddress">Email</label>
    <input name="email" class="form-control" id="inputAddress" placeholder="">
  </div>
  
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input name="address" class="form-control" id="inputAddress" placeholder="">
  </div>

  <div class="form-group">
    <label for="inputAddress">Package_Name</label>
    <input name="package_name" class="form-control" id="inputAddress" placeholder="">
  </div>
  <div class="form-group">
    <label for="inputAddress">Agency_Id</label>
    <input name="Agency_id" class="form-control" id="inputAddress" placeholder="">
  </div>
  <div class="form-group">
    <div class="form-check">
         
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Confirm</button>
  </ul>
</form>
@endsection