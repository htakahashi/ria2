<?php $__env->startSection('content'); ?>

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
                           <div class="col-sm-2 hidden-xs"><img src="img/pugPup.jpg" alt="..." class="img-responsive"/></div>
                           <div class="col-sm-10">
                              <h4 class="nomargin">Pugs</h4>
                              <p>What can we say except that they are some of the derpiest looking dogs out there.</p>
                           </div>
                        </div>
                     </td>
                     <td data-th="Price"></td>
                     <td data-th="Subtotal" class="text-center"></td>
                     <td data-th-"Total">$25.00</td>
                  </tr>
               </tbody>
            </table>



<?php echo $__env->make('layouts.checkout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>