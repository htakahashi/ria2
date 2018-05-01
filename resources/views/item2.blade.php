@extends ('layout')

@section('content')

<table id="cart" class="table table-hover table-condensed">
               <thead>
                  <tr>
                     <th style="width:58%">Product</th>
                     <th style="width:10%"></th>
                     <th style="width:22%" class="text-center"></th>
                     <th style="width:10%">Total</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td data-th="Product">
                        <div class="row">
                           <div class="col-sm-2 hidden-xs"><img src="img/shepherdPup.jpg" alt="..." class="img-responsive"/></div>
                           <div class="col-sm-10">
                              <h4 class="nomargin">German Shepherd</h4>
                              <p>These dogs are loyal till the end they may seem a little stand offish at first but that is just because they are guaging the situation.</p> 
                              <p>Make great guard dogs.</p>
                           </div>
                        </div>
                     </td>
                     <td data-th="Price"></td>
                     <td data-th="Subtotal" class="text-center"></td>
                     <td data-th-"Total">$799.99</td>
                  </tr>
               </tbody>
            </table>



@include ('layouts.checkout')

@endsection