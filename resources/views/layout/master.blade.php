<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My site</title>

  	<link type="text/css" rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" >
	<!-- <link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}"> -->

 	<script src="{{asset('js/jquery.min.js')}}"></script>
 	<script src="{{asset('js/bootstrap.min.js')}}"></script>
 	 <!-- <script type="text/javascript" src="{{asset('js/script.js')}}"></script> -->

</head>
<body>
	@section('menu')

	<div class="container">
		<div class="row">
			<nav class="col-sm-12 col-md-12 col-lg-12">
				<ul class="nav nav-pills">
				<li><a href="{{url('topic')}}">Home</a></li>
				<li class="active"><a href="{{url('topic/create')}}">Add topic</a></li>
				</ul>	
			</nav>
		</div>


		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				@yield('content')
			</div>
		</div>

		
	</div>




	
</body>
</html>