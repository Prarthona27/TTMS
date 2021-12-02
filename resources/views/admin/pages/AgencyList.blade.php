@extends('welcome')
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($agencies as $agency)
                <tr>
                    <th>{{$agency->id}}</th>
                    <td>{{$agency->name}}</td>
                    <td>{{$agency->phone}}</td>
                    <td>{{$agency->email}}</td>
                    <td>{{$agency->addess}}</td>
                </tr>
            @endforeach      
  </tbody>
</table>
@endsection