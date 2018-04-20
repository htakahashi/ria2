@foreach($products_lists as $productsList)
<div class="col-sm-12 col-md-4 col-lg-3 items">
        <div class="card"> 
            <img class='card-img-top' src="{{$productsList->prod_image}}" alt="{{$productsList->prod_name}}">
            <div class="card-body">
                <h5 class="card-title"> {{ $productsList->prod_name}} </h5>
                <p class="card-text">Price:  $ {{ $productsList->prod_price }} </p>
                <a href="/cart/{{ $productsList->id }}" class="btn btn-primary">Learn More</a>
            </div> 
    <!-- ---------- END OF CARD BODY DIV ---------- -->
        </div>
</div>
@endforeach
