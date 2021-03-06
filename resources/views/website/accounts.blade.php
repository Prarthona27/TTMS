
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>

<div class="container" style="margin-top:30px;">

<form action="{{route('store.traveller')}}" method="POST">
    @csrf
  
  
  
    
 
  <div class="form-group">
    <label for="inputAddress" style="font-weight: bold;">Email:</label>
    <select name="email" class="form-control">
   @foreach($users as $user)
   
   @if($user->role=='user' && auth()->user()->id == $user->id)
   <option value="{{$user->id}}">{{$user->email}}</option>
   @endif
@endforeach
 </select>
   
  </div>
  
 

  <div class="form-group">
    <label for="inputAddress" style="font-weight: bold;">Package Name:</label>
    <select name="package_name" class="form-control">
   
      <option value="{{$package->id}}">{{$package->Event_name}}</option>
   
    </select>
    </div>
    
 
  
  
  <button type="submit" class="btn btn-primary">Confirm</button>
  </ul>
</form>


</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
</body>
</html>





