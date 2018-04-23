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
                           <div class="col-sm-2 hidden-xs"><img src=" {{ asset('storage/item2.jpg') }}" alt="..." class="img-responsive"/></div>
                           <div class="col-sm-10">
                              <h4 class="nomargin">Best Friend Rocks</h4>
                              <p>These best friend rocks are pretty dumb looking. They will work for cheap. Note: Do not speak English.</p>
                           </div>
                        </div>
                     </td>
                     <td data-th="Price"></td>
                     <td data-th="Subtotal" class="text-center"></td>
                     <td data-th-"Total">$24.99</td>
                  </tr>
               </tbody>
            </table>



@include ('layouts.checkout')

@endsection
