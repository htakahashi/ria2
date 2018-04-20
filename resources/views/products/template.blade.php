<!DOCTYPE html>
<html>
<head>
	
	<title>Lovely Quilts</title>
	
	
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$(".nav-button").click(function () {
			$(".nav-button,.primary-nav").toggleClass("open");
			});    
		});
	</script>
	
	<link href="/img/quilt.png" type="img/png" rel="icon">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="/css/main.css" type="text/css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway" rel="stylesheet">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>



	
	
</head>
<body>
<div class="wrapper">
<div class="container">
	<div id="header">


		@include('template.nav')

	</div>

	<div id="home-page">
	<img src="/img/logo.png" alt="logo" class="logo">
		<h1>Lovely Quilts</h1>
	
		<div class="heroimage"><img src="/img/Hero.jpg" alt="Quilt on Bench"></div>
		@yield('content')
		</div>
	</div>
	<div class="clearFix"></div>
	<div id="footer">

		</div><!--end of homepage -->
	</div>
	</div><!-- end of container -->
	</div><!--end of wrapper div -->
</body>
</html>