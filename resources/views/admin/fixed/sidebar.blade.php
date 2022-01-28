@if(session()->has('message'))
        <p class="alert alert-success">
            {{session()->get('message')}}
        </p>
    @endif


<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="https://images.squarespace-cdn.com/content/v1/53b599ebe4b08a2784696956/1495767786612-YF1JF6XGTDRMS920068H/professional-photographer-08.jpg" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"style="text-transform: capitalize;">{{auth()->user()->role}}</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
		@if(auth()->user()->role=='agency')
			<li class="active"><a href="{{route('agency.events')}}"><em class="fa fa-calendar-check-o">&nbsp;</em> Events</a></li>
			@endif
			@if(auth()->user()->role=='admin')
			<li><a href="{{route('admin.agencies')}}"><em class="fa fa-users">&nbsp;</em> Agency</a></li>
			
			<li><a href="{{route('admin.destinations')}}"><em class="glyphicon glyphicon-tent">&nbsp;</em> Destination</a></li>
			<li><a href="{{route('admin.report')}}"><em class="fa fa-users">&nbsp;</em>Travellers Report</a></li>
			<li><a href="{{route('admin.eventreport')}}"><em class="fa fa-calendar-check-o">&nbsp;</em>Events Report</a></li>
			<li><a href="{{route('feedback.list')}}"><em class="fa fa-pencil-square-o">&nbsp;</em> Feedback</a></li>
			
			@endif
			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em> Multilevel <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
			
					<li><a class="" href="{{route('agency.events.eventlist')}}">
						<span class="fa fa-arrow-right">&nbsp;</span> Event List
					</a></li>
				
					@if(auth()->user()->role=='admin')
					<li><a class="" href="{{route('admin.agencies.agencylist')}}">
						<span class="fa fa-arrow-right">&nbsp;</span> Agencies
					</a></li>
					<li><a class="" href="{{route('admin.destinations.destinationlist')}}">
						<span class="fa fa-arrow-right">&nbsp;</span> Destination
					</a></li>
					@endif
					<li><a class="" href="{{route('admin.travellers.travellerlist')}}">
						<span class="fa fa-arrow-right">&nbsp;</span> Traveller
					</a></li>
					

				</ul>
			


			</li>

			
				
				



			</li>
			
			<li><a href="{{route('admin.logout')}}"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>

			
		</ul>
	</div><!--/.sidebar-->