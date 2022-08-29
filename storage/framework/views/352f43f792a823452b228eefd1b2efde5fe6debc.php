<main>

    <!-- Breadcrumb-area-start -->
    <div class="breadcrumb-area pt-10 pb-10">
       <div class="container">
          <div class="row">
             <div class="col-12">
                <div class="breadcrumb__list">
                   <span><a href="/">Home</a></span>
                   <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                   <span>Cart</span>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!-- Breadcrumb-area-end -->

    <!-- Cart area start  -->
    <section class="cart-area pt-110 pb-130">
       <div class="container small-container">
          <div class="row">
             <div class="col-12">
                <div class="table-content table-responsive">
                   <table class="table">
                      <thead>
                         <tr>
                            <th class="product-thumbnail">Images</th>
                            <th class="cart-product-name">Product</th>
                            <th class="product-price">Unit Price</th>
                            <th class="product-quantity">Quantity</th>
                            <th class="product-subtotal">Total</th>
                            <th class="product-remove">Remove</th>
                         </tr>
                      </thead>
                      <tbody>
                        <?php if(Session::has('success_massage')): ?>
                        <div class="alart alart-success">
                           <strong>Success</strong><?php echo e(Session::get('success_massage')); ?>

                        </div>
                        <?php endif; ?>
                        <?php if(Cart::count()>0): ?> 
                         <tr>
                           <?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              
                          
                            <td class="product-thumbnail"><a href="product-details.html"><img
                                     src="<?php echo e(('assets/img/product')); ?>/<?php echo e($item->model->image); ?>" alt="<?php echo e($item->model->name); ?>"></a></td>
                            <td class="product-name"><a href="<?php echo e(route('product.details',['slug'=>$item->model->slug])); ?>"><?php echo e($item->model->name); ?></a></td>
                            <td class="product-price"><span class="amount">$<?php echo e($item->model->regular_price); ?></span></td>
                            <td class="product-quantity text-center">
                               <div class="product-quantity mt-10 mb-10">
                                  <div class="product-quantity-form">
                                     <form action="#">
                                        <button class="cart-minus"wire:click.prevent="decreaseQiantity('<?php echo e($item->rowId); ?>')"><i class="far fa-minus"></i></button>
                                        <input class="cart-input" type="text" value="<?php echo e($item->qty); ?>">
                                        <button class="cart-plus" wire:click.prevent="increaseQiantity('<?php echo e($item->rowId); ?>')"><i class="far fa-plus"></i></button>
                                     </form>
                                  </div>
                               </div>
                            </td>
                            <td class="product-subtotal"><span class="amount">$<?php echo e($item->subtotal); ?></span></td>
                            <td class="product-remove"><a href="#" wire:click.prevent="destroy('<?php echo e($item->rowId); ?>')"><i class="fa fa-times"></i></a></td>
                         </tr>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         <?php else: ?>
                         <p>the cart is empty</p>
                         <?php endif; ?>
                      </tbody>
                   </table>
                </div>
                <div class="row">
                   <div class="col-12">
                      <div class="coupon-all">
                         <div class="coupon d-flex align-items-center">
                            <input id="coupon_code" class="input-text" name="coupon_code" value=""
                               placeholder="Coupon code" type="text">
                            <button class="bd-bd__coupon-btn" name="apply_coupon" type="submit">Apply
                               coupon</button>
                         </div>
                         <div class="coupon2">
                            <button onclick="window.location.reload()" class="bd-bd__coupon-btn" name="update_cart"
                               type="submit">Update cart</button>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="row">
                   <div class="col-md-5 ml-auto">
                     
                        
                    
                      <div class="cart-page-total">
                         <h2>Cart totals</h2>
                         <ul class="mb-20">
                            <li>Subtotal <span>$<?php echo e(Cart::subtotal()); ?></span></li>
                            <li>Tax <span>$<?php echo e(Cart::tax()); ?></span></li>
                            <li>Total <span>$<?php echo e(Cart::total()); ?></span></li>
                         </ul>
                         <a class="bd-border__btn" href="<?php echo e(route('checkout')); ?>" >Proceed to checkout</a>
                      </div>
                      
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- Cart area end  -->





 </main><?php /**PATH C:\xampp\htdocs\wworganic\resources\views/livewire/cart-component.blade.php ENDPATH**/ ?>