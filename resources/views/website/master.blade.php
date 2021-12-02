
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
      <title>A World</title>
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
  
     
         
     
      <!-- services section start -->
      <div class="services_section layout_padding">
         <div class="container">
            <h1 class="services_taital">Services </h1>
            <p class="services_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
            <div class="services_section_2">
               <div class="row">
                  <div class="col-md-4">
                     <div><img src="{{url('userp/images/img-1.png')}}" class="services_img"></div>
                     <div class="btn_main"><a href="#">Rafting</a></div>
                  </div>
                  <div class="col-md-4">
                     <div><img src="{{url('userp/images/img-2.png')}}" class="services_img"></div>
                     <div class="btn_main active"><a href="#">Hiking</a></div>
                  </div>
                  <div class="col-md-4">
                     <div><img src="{{url('userp/images/img-3.png')}}" class="services_img"></div>
                     <div class="btn_main"><a href="#">Camping</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- services section end -->
      
      

      <!-- client section start -->
      <div class="client_section layout_padding">
         <div class="container">
            <h1 class="client_taital">Feedback</h1>
            <div class="client_section_2">
               <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                     <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="client_main">
                           <div class="box_left">
                              <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugia</p>
                           </div>
                           <div class="box_right">
                              <div class="client_taital_left">
                                 <div class="client_img"><img src="{{url('userp/images/client-img.png')}}"></div>
                                 <div class="quick_icon"><img src="{{url('userp/images/quick-icon.png')}}"></div>
                              </div>
                              <div class="client_taital_right">
                                 <h4 class="client_name">Dame</h4>
                                 <p class="customer_text">Customer</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="client_main">
                           <div class="box_left">
                              <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugia</p>
                           </div>
                           <div class="box_right">
                              <div class="client_taital_left">
                                 <div class="client_img"><img src="{{url('userp/images/client-img.png')}}"></div>
                                 <div class="quick_icon"><img src="{{url('userp/images/quick-icon.png')}}"></div>
                              </div>
                              <div class="client_taital_right">
                                 <h4 class="client_name">Dame</h4>
                                 <p class="customer_text">Customer</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="client_main">
                           <div class="box_left">
                              <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugia</p>
                           </div>
                           <div class="box_right">
                              <div class="client_taital_left">
                                 <div class="client_img"><img src="{{url('userp/images/client-img.png')}}"></div>
                                 <div class="quick_icon"><img src="{{url('userp/images/quick-icon.png')}}"></div>
                              </div>
                              <div class="client_taital_right">
                                 <h4 class="client_name">Dame</h4>
                                 <p class="customer_text">Customer</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- client section start -->
      <!-- choose section start -->
      <div class="choose_section layout_padding">
         <div class="container">
            <h1 class="choose_taital">Why Choose Us</h1>
            <p class="choose_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All </p>
            <div class="read_bt_1"><a href="#">Read More</a></div>
            <div class="newsletter_box">
               <h1 class="let_text">Let Start Talk with Us</h1>
               <div class="getquote_bt"><a href="#">Questionnaire</a></div>
            </div>
         </div>
      </div>
      <!-- choose section end -->
     
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