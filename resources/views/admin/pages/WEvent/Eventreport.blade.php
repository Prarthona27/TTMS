@extends('welcome')
@section('content')

<div class="form-row">

<div class="form-group col-md-6">
    <form action="{{route('admin.eventreport')}}" method="post">
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
    <div id="divToPrint">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>

      <th scope="col">Event Name</th>
  
      <th scope="col">Event Time</th>

      <th scope="col">Agency Name</th>

    </tr>
  </thead> 
  <tbody>
  @foreach($events as $event)
      <tr>
        <th>{{$event->id}}</th>

          <td>{{$event->Event_name}}</td>

          <td>{{$event->Event_time}}</td>

          <td>{{$event->agency->name}}</td>
       
      </tr>
     @endforeach
  </tbody>
</table>
</div>
<input class="btn btn-warning" type="button" onClick="PrintDiv('divToPrint');" value="Print">
  </div>

@endsection
<script language="javascript">
    function PrintDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>