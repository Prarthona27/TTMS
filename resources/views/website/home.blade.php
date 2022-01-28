 @extends('website.master')
 @section('home')
 <!-- services section start -->
 <div class="services_section layout_padding">
         <div class="container">
            <h1 class="services_taital">Packages </h1>
          
            <div class="services_section_1">
               <div class="row">
               @foreach ($package as $package)
                  <div class="col-md-4" style="padding: 24px;">
                     <div><img style="height: 250px;"src="{{url('/uploads/'.$package->image)}}" class="services_img"></div>
                     <div class="btn_main"><a href="{{route('website.event.view',$package->id)}}">Details</a></div>
                  </div>
               @endforeach 
                  
                  
               </div>
              
            </div>
         </div>
      </div>
      <!-- services section end -->

      <!-- services section start -->
 <div class="services_section layout_padding">
         <div class="container">
            <h1 class="services_taital">Destinations </h1>
          
            <div class="services_section_1">
               <div class="row">
               @foreach ($destination as $destination)
                  <div class="col-md-4" style="padding: 24px;">
                     <div><img style="height: 250px;"src="{{url('/uploads/'.$destination->image)}}" class="services_img"></div>
                     <div class="btn_main"><a href="{{route('website.destination.view',$destination->id)}}">Details</a></div>
                  </div>
                  @endforeach 
                  
                  
               </div>
            </div>
         </div>
      </div>
      <!-- services section end -->
 
 
 <!-- client section start -->
 <div class="client_section layout_padding">
         <div class="container">
            <h1 class="client_taital">Feedback</h1>
            
            <a href="{{route('view.feedback')}}"style="margin-left:32rem;">Add Feedback</a>
            <div class="client_section_2">
               <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  
                  <ol class="carousel-indicators">
                     <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  
                  <div class="carousel-inner">
                     @if(count($feedback)>0)
                     <div class="carousel-item active">
                     
                     <div class="client_main">
                        <div class="box_left">
                           <p class="lorem_text">{{$feedback[0]->feedback}}</p>
                        </div>
                        <div class="box_right">
                           <div class="client_taital_left">
                          
                              <div class="quick_icon"><img src="{{url('userp/images/quick-icon.png')}}"></div>
                           </div>
                           <div class="client_taital_right">
                              <h4 class="client_name">{{$feedback[0]->user->name}}</h4>
                              <p class="customer_text">{{$feedback[0]->user->email}}</p>
                           </div>
                        </div>
                     </div>
                     
                  </div>
               
                  @endif
               
                  @foreach($feedback as $feedback)
                     <div class="carousel-item">
                     
                        <div class="client_main">
                           <div class="box_left">
                              <p class="lorem_text">{{$feedback->feedback}}</p>
                           </div>
                           <div class="box_right">
                              <div class="client_taital_left">
                             
                                 <div class="quick_icon"><img src="{{url('userp/images/quick-icon.png')}}"></div>
                              </div>
                              <div class="client_taital_right">
                                 <h4 class="client_name">{{$feedback->user->name}}</h4>
                                 <p class="customer_text">{{$feedback->user->email}}</p>
                              </div>
                           </div>
                        </div>
                        
                     </div>
                  
                     @endforeach
                    
                     
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
            <p class="choose_text">We are especially proud of our selection of tours around Bangladesh because it has no analogues in the market.We are glad to offer our clients the best rates on our tours, transfers and other services. Due to direct contracts with all our suppliers, our prices are always relevant and affordable.</p>
            
            </div>
         </div>
      </div>
      <!-- choose section end -->
      @endsection