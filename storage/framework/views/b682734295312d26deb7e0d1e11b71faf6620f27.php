<?php $__env->startSection('content'); ?>

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
                <img class="d-block img-fluid" src="img/pic1.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="img/pic2.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="img/pic3.jpg" alt="Third slide">
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
                <a href="/item1"><img class="card-img-top" src="img/labPups.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="/item1">Labrador Retriever</a>
                  </h4>
                  <h5>$250.00</h5>
                  <p class="card-text">Each one of the Labs will cheer you up. you know what they say if you have a Lab you have a best friend for life. </p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="/item2"><img class="card-img-top" src="img/shepherdPup.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="/item2">German Shepherd</a>
                  </h4>
                  <h5>$799.99</h5>
                  <p class="card-text">These dogs are loyal till the end they may seem a little stand offish at first but that is just because they are guaging the situation.</p> 
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="item3"><img class="card-img-top" src="img/pugPup.jpg" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="item3">Pugs</a>
                  </h4>
                  <h5>$25.00</h5>
                  <p class="card-text">What can we say except that they are some of the derpiest looking dogs out there.</p>
                </div>
              </div>
            </div>
         </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>