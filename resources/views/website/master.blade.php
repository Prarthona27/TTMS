
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>TTMS</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{url('userp/css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{url('userp/css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{url('userp/css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{url('userp/css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Righteous&display=swap" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="{{url('userp/css/owl.carousel.min.css')}}">
      <link rel="stylesheet" href="{{url('userp/css/owl.theme.default.min.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>

   @include('website.wfixed.wheader')
  
     
         
 @yield('home')
        

      
      @yield('content')

     
     
      @include('website.wfixed.wfooter')

      
     
      <!-- Javascript files-->
      <script src="{{url('userp/js/jquery.min.js')}}"></script>
      <script src="{{url('userp/js/popper.min.js')}}"></script>
      <script src="{{url('userp/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{url('userp/js/jquery-3.0.0.min.js')}}"></script>
      <script src="{{url('userp/js/plugin.js')}}"></script>
      <!-- sidebar -->
      <script src="{{url('userp/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{url('userp/js/custom.js')}}"></script>
      <!-- javascript --> 
      <script src="{{url('userp/js/owl.carousel.js')}}"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>    
   </body>
</html>