@extends('welcome')
@section('content')

<div class="form-row">
  
<div class="form-group col-md-6">
    <form action="{{route('admin.report')}}" method="post">
        @csrf
        <label for="inputPassword4">From date</label>
        <input name="from" class="form-control" id="inputPassword4"  type="date" placeholder="">
        </div>
        <div class="form-group col-md-6">
        <label for="inputPassword4">To date</label>
        <input name="to" class="form-control" id="inputPassword4"  type="date" placeholder="">
        </div>
        <button type="submit" class="btn btn-info">Submit</button>
    </form>
    
  </div>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>

      <th scope="col">Email</th>
  
      <th scope="col">Package Name</th>
    </tr>
  </thead> 
  <tbody>
  @foreach($travellers as $traveller)
      <tr>
        <th>{{$traveller->id}}</th>

          <td>{{$traveller->user->email}}</td>

          <td>{{optional($traveller->events)->Event_name}}</td>
       
      </tr>
     @endforeach
  </tbody>
</table>
 
  </div>

@endsection