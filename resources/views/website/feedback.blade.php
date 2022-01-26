<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>


<div class="container">
  <div style="text-align:center">
    <h2>Feedback</h2>
    <p>give your feedback:</p>
  </div>
  @if(session()->has('msg'))
  <p class="alert alert-success">{{session()->get('msg')}}</p>
  @endif
  <div class="row">
    <div class="column">
      <img src="{{url('/image/feedback.jpeg')}}" style="width:100%">
    </div>
    <div class="column">
      <form action="{{route('store.feedback')}}"method="POST">
        @csrf
        <label for="name">Name</label>
        <select id="name" name="name">
            @foreach($users as $user)
            @if($user->role=='user')
          <option value="{{$user->id}}">{{$user->name}}</option>
          @endif
         @endforeach
        </select>
        <label for="subject">feedback</label>
        <textarea id="subject" name="feedback" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>

</body>
</html>