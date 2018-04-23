@extends ('layout')

@section ('content')

      <div class="row">

        <div class="col-lg-12">

          <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="{{ asset('storage/rocks1.jpg') }}" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="{{ asset('storage/rocks2.jpg') }}" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="{{ asset('storage/rocks3.jpg') }}" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <div class="row">

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="/item1"><img class="card-img-top" src="{{ asset('storage/item1.jpg') }}" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="/item1">Rock Buddies</a>
                  </h4>
                  <h5>$34.99</h5>
                  <p class="card-text">These multi-colored rock friends come in groups of five, each with a unique color. Note: May become emotional if separated.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="/item2"><img class="card-img-top" src="{{ asset('storage/item2.jpg') }}" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="/item2">Best Friend Rocks</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">These best friend rocks are pretty dumb looking. They will work for cheap. Note: Do not speak English.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="item3"><img class="card-img-top" src="{{ asset('storage/item3.jpg') }}" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="item3">Custom Created Rocks</a>
                  </h4>
                  <h5>$14.99 - $100+</h5>
                  <p class="card-text">We can custom create orders for you! Put in your order now! We know what you want without even needing to ask!</p>
                </div>
              </div>
            </div>
         </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->
@endsection
