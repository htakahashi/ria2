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
                           <div class="col-sm-2 hidden-xs"><img src=" <?php echo e(asset('storage/item1.jpg')); ?>" alt="..." class="img-responsive"/></div>
                           <div class="col-sm-10">
                              <h4 class="nomargin">Labrador Retriever</h4>
                              <p>Each one of the Labs will cheer you up. you know what they say if you have a Lab you have a best friend for life. </p>
                                <p>They also make great service dogs.</p>
                           </div>
                        </div>
                     </td>
                     <td data-th="Price"></td>
                     <td data-th="Subtotal" class="text-center"></td>
                     <td data-th-"Total">$250.00</td>
                  </tr>
               </tbody>
            </table>
<?php echo $__env->make('layouts.checkout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>