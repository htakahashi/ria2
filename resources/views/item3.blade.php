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
                           <div class="col-sm-2 hidden-xs"><img src=" {{ asset('storage/item3.jpg') }}" alt="..." class="img-responsive"/></div>
                           <div class="col-sm-10">
                              <h4 class="nomargin">Custom Created Rocks</h4>
                              <p>We can custom create orders for you! Put in your order now! We know what you want without even needing to ask!</p>
                           </div>
                        </div>
                     </td>
                     <td data-th="Price"></td>
                     <td data-th="Subtotal" class="text-center"></td>
                     <td data-th-"Total">$100</td>
                  </tr>
               </tbody>
            </table>



@include ('layouts.checkout')

@endsection
