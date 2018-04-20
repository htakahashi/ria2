
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
        
		<div class="row">
            <div class="col-sm-12">
                <h2>{{ $item->prod_name}}</h2>
            </div>

            <div class="col-sm-12 col-md-6">
                <p>{{$item->prod_desc}}</p>
                <p>Price: {{$item->prod_price}}</p>
                <a href="/products/{{ $item->id }}" class="btn btn-secondary btn-lg btn-block">Add to Cart</a>
                <a href="/cart" class="btn btn-outline-danger btn-sm float-sm-right back">Back</a>

            </div>

            <div class="col-sm-12 col-md-6">
                <img class='card-img-top' src="{{$item->prod_image}}" alt="{{$item->prod_name}}">
            </div>

        </div>

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