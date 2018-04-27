@extends ('layouts.master')

@section('contentTitle', 'Products')

@section('wrapper')

 <div class="grid-container">
  <div class="grid-item">
  	<p class="title"><h2>RED BURST Bag</h2></p>
  	<p class="img"><img src="img/red-burst.jpg"></p>
  	<p class="price">$.50</p>
    <p class="description">A sugary, fruit tasting snack!</p>
  	<p class="pButton"><a href="/redCheckout"><button>BUY NOW</button></a></p>
  </div>

  <div class="grid-item">
  	<p class="title"><h2>Yellow BURST Bag</h2></p>
  	<p class="img"><img src="img/yellow-burst.jpg"></p>
  	<p class="price">$1.00</p>
    <p class="description">A sugary, fruit tasting snack!</p>
  	<p class="pButton"><a href="/yellowCheckout"><button>BUY NOW</button></a></p>
  </div>

  <div class="grid-item">
  	<p class="title"><h2>Orange BURST Bag</h2></p>
  	<p class="img"><img src="img/orange-burst.jpg"></p>
  	<p class="price">$1.50</p>
    <p class="description">A sugary, fruit tasting snack!</p>
  	<p class="pButton"><a href="/orangeCheckout"><button>BUY NOW</button></a></p>
  </div>

  <div class="grid-item">
  	<p class="title"><h2>Pink BURST Bag</h2></p>
  	<p class="img"><img src="img/pink-burst.jpg"></p>
  	<p class="price">$2.00</p>
    <p class="description">A sugary, fruit tasting snack!</p>
  	<p class="pButton"><a href="/pinkCheckout"><button>BUY NOW</button></a></p>
  </div>
</div> 

@endsection