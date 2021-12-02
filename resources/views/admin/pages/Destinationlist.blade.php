@extends('welcome')
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Description</th>
      <th scope="col">Season</th>
      <th scope="col">Budget</th>
      <th scope="col">Transport</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($destinations as $destination)
                <tr>
                    <th>{{$destination->id}}</th>
                    <td>{{$destination->name}}</td>
                    <td>{{$destination->image}}</td>
                    <td>{{$destination->description}}</td>
                    <td>{{$destination->season}}</td>
                    <td>{{$destination->budget}}</td>
                    <td>{{$destination->transport}}</td>
                </tr>
            @endforeach      
  </tbody>
</table>
@endsection
