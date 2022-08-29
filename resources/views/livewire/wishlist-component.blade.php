<main>

    <!-- Breadcrumb-area-start -->
    <div class="breadcrumb-area pt-10 pb-10">
       <div class="container">
          <div class="row">
             <div class="col-12">
                <div class="breadcrumb__list">
                   <span><a href="/">Home</a></span>
                   <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                   <span>Wishlist</span>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!-- Breadcrumb-area-end -->

    <!-- Cart area start  -->
    <div class="cart-area pt-110 pb-130">
       <div class="container small-container">
          <div class="row">
             <div class="col-12">
                <form action="#">
                   <div class="table-content table-responsive">
                      <table class="table">
                         <thead>
                            <tr>
                               <th class="product-thumbnail">Images</th>
                               <th class="cart-product-name">Product</th>
                               <th class="product-price">Unit Price</th>
                               <th class="product-quantity">Add to cart</th>
                               <th class="product-subtotal">Total</th>
                               <th class="product-remove">Remove</th>
                            </tr>
                         </thead>
                         <tbody>
                            <tr>
                               <td class="product-thumbnail"><a href="product-details.html"><img
                                        src="{{ asset('assets/img/product/details/1.png" alt="img')}}"></a></td>
                               <td class="product-name"><a href="product-details.html">Vegetables Juices</a></td>
                               <td class="product-price"><span class="amount">$20.00</span></td>
                               <td class="product-quantity">
                                  <a href="cart.html" class="bd-border__btn">Add to Cart</a>
                               </td>
                               <td class="product-subtotal"><span class="amount">$20.00</span></td>
                               <td class="product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                            </tr>
                            <tr>
                               <td class="product-thumbnail"><a href="product-details.html"><img
                                        src="{{ asset('assets/img/product/details/2.png" alt="img')}}"></a></td>
                               <td class="product-name"><a href="product-details.html">Orange Sliced Mix
                                  </a></td>
                               <td class="product-price"><span class="amount">$24.00</span></td>
                               <td class="product-quantity">
                                  <a href="cart.html" class="bd-border__btn">Add to Cart</a>
                               </td>
                               <td class="product-subtotal"><span class="amount">$24.00</span></td>
                               <td class="product-remove"><a href="#"><i class="fa fa-times"></i></a></td>
                            </tr>
                         </tbody>
                      </table>
                   </div>
                </form>
             </div>
          </div>
       </div>
    </div>
    <!-- Cart area end  -->


 </main>