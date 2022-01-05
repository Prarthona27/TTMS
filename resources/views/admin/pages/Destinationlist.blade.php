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
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($destinations as $destination)
                <tr>
                    <th>{{$destination->id}}</th>
                    <td>{{$destination->name}}</td>
                    <td>
                      <img width="100px" src="{{url('/uploads/'.$destination->image)}}" alt="">
                    </td>
                    <td>{{$destination->description}}</td>
                    <td>{{$destination->season}}</td>
                    <td>{{$destination->budget}}</td>
                    <td>{{$destination->transport}}</td>
                    
                    <td>
                        <a class="btn btn-primary" href="{{route('admin.destination.view',$destination->id)}}">View</a>
                        <a class="btn btn-info" href="{{route('admin.destination.edit',$destination->id)}}">Edit</a>
                        <a class="btn btn-danger" href="{{route('admin.destination.delete',$destination->id)}}">Delete</a>
                    </td>
                </tr>
            @endforeach      
  </tbody>
</table>
@endsection
