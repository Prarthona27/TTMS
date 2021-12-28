@extends('admin.master')


@section('content')

<h1>Edit event</h1>

@if(session()->has('success'))
    <p class="alert alert-success">
        {{session()->get('success')}}
    </p>
@endif

<form action="{{route('admin.event.update',$event->id)}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Event Name</label>
        <input name="name" value="{{$event->name}}" placeholder="Enter Event Name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Event Price</label>
        <input name="price" value="{{$event->price}}" placeholder="Enter Event Price"  type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="form-group">
    <label for="exampleFormControlSelect1">Event Category</label>
    <select name="category" class="form-control" id="exampleFormControlSelect1">

        @foreach ($all_categories as $category)
           <option
               @if($category->id==$event->category_id)
               selected
               @endif
           value="{{$category->id}}">{{$category->name}}</option>
        @endforeach

    </select>
  </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Event details</label>
        <input name="details" value="{{$event->details}}" placeholder="Enter Event details"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Event Image</label>
        <input name="event_image" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <button type="submit" class="btn btn-success">Update</button>
</form>

@endsection