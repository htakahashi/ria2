@extends ('layouts.master')

@section ('content')

<figure class="sliderContainer">
    <div class="mySlider">
        <div><img src="assets/slider/bg1.jpg" alt="Man wearing black shoes" /></div>
        <div><img src="assets/slider/bg2.jpg" alt="men and women shoes" /></div>
        <div><img src="assets/slider/bg3.jpg" alt="Girl with fitness shoes" /></div>
        <div><img src="assets/slider/bg4.jpg" alt="man with boots" /></div>
    </div>
</figure>

<div class="sliderText"><h1>Welcome to Blade Shoes</h1></div>


<div class="container">
    
    <h3>New Arrivals</h3>
    <span class="btn all-btn"><a href="/products">View All Products</a></span>

    <div class="row">

        @foreach ($products as $product)
             <div class="product-item-card col-xs-12 col-md-4 col-lg-3">
                <img src="/assets/images/{{ $product->thumbnail }}" alt="shoes">
                <div class="card-content">
                    <h4>{{ $product->title }}</h4>
                    <P><?php echo substr($product->description,0,73); ?></P>
                    <p><strong>{{ $product->price }}</strong></p>
                    <a href="/products/{{ $product->id }}" class="details-btn">See Details</a>
                    <a href="/checkout/{{ $product->id }}" class="cart-btn">Buy Now</a>
                </div>
            </div>
        @endforeach

    </div><!-- end of row -->



    <div class="row">

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        
    </div><!-- end of row -->

    <br>

    <div class="row icon-section">

        <div class="col-sm-12 col-md-4 section-box-3">
            <i class="fa fa-phone section-box-icon" ></i>
            <h4>(801)555-1288</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et.</p>
        </div>
        
        <div class="col-sm-12 col-md-4 section-box-3">
            <i class="fa fa-truck section-box-icon"></i>
            <h4>Free Shipping</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et.</p>
        </div>

        <div class="col-sm-12 col-md-4 section-box-3">
            <i class="fa fa-arrow-left section-box-icon"></i>
            <h4>Returns &amp; Exchanges</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et.</p>
        </div>

    </div><!-- end of row -->




    <div class="row quote-section">

        <h3>Our Customers</h3>

        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">

          <div class="carousel-inner">

            <div class="carousel-item active">
              <i class="fa fa-user-circle quote-icon"></i>
                <blockquote><i class="fa fa-quote-left"></i> Lorem ipsum doleprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <i class="fa fa-quote-right"></i></blockquote>
            </div>

             <div class="carousel-item">
              <i class="fa fa-user-circle quote-icon"></i>
                <blockquote><i class="fa fa-quote-left"></i> Loreluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint lpa qui officia deserunt mollit anim id est laborum. <i class="fa fa-quote-right"></i></blockquote>
            </div>

            <div class="carousel-item">
              <i class="fa fa-user-circle quote-icon"></i>
                <blockquote><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit ametation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <i class="fa fa-quote-right"></i></blockquote>
            </div>

          </div><!-- end of carousel inner -->

        </div><!-- end of carousel -->

    </div><!-- end of row -->

    <hr>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

</div><!-- end of container -->
@endsection

@section ('sliderFooter')
    <script src="js/slick.js" type="text/javascript"></script>
    <script>
    $(document).ready(function(){
      $('.mySlider').slick({
        arrows: false,
          autoplay: true,
          autoplaySpeed: 5000
      });
    });
</script>
@endsection