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
      <th scope="col">Package Name</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($travellers as $traveller)
                <tr>
                    <th>{{$traveller->id}}</th>
                    <td>{{$traveller->name}}</td>
                    <td>{{$traveller->phone}}</td>
                    <td>{{$traveller->email}}</td>
                    <td>{{$traveller->address}}</td>
                    <td>{{$traveller->package_name}}</td>

                    <td>
                
                         <a class="btn btn-warning" href="{{route('admin.traveller.approve',$traveller->id)}}">Approve</a>
                    </td>


                </tr>
            @endforeach      
  </tbody>
</table>
@endsection