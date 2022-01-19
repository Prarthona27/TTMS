
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TTMS - Dashboard</title>
	<link href="{{url('adminp/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{url('adminp/css/font-awesome.min.css')}}" rel="stylesheet">
	<link href="{{url('adminp/css/datepicker3.css')}}" rel="stylesheet">
	<link href="{{url('adminp/css/styles.css')}}" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>


@include('admin.fixed.header')

@include('admin.fixed.sidebar')

		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Welcome Admin</h1>
			</div>
		</div><!--/.row-->
		
	
	
		
		
		
		
		
					
			@yield('content')	
			
			
			
	
	<script src="{{url('adminp/js/jquery-1.11.1.min.js')}}"></script>
	<script src="{{url('adminp/js/bootstrap.min.js')}}"></script>
	<script src="{{url('adminp/js/chart.min.js')}}"></script>
	<script src="{{url('adminp/js/chart-data.js')}}"></script>
	<script src="{{url('adminp/js/easypiechart.js')}}"></script>
	<script src="{{url('adminp/js/easypiechart-data.js')}}"></script>
	<script src="{{url('adminp/js/bootstrap-datepicker.js')}}"></script>
	<script src="{{url('adminp/js/custom.js')}}"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>
</html>

