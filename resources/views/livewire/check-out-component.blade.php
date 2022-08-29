<main>

    <!-- Breadcrumb-area-start -->
    <div class="breadcrumb-area pt-10 pb-10">
       <div class="container">
          <div class="row">
             <div class="col-12">
                <div class="breadcrumb__list">
                   <span><a href="/">Home</a></span>
                   <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                   <span>Checkout</span>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!-- Breadcrumb-area-end -->

    <!-- coupon-area start -->
    <section class="coupon-area pt-110 pb-30">
       <div class="container small-container">
          <div class="row">
             <div class="col-md-6">
                <div class="coupon-accordion">
                   <!-- ACCORDION START -->
                   <h3>Returning customer? <span id="showlogin">Click here to login</span></h3>
                   <div id="checkout-login" class="coupon-content">
                      <div class="coupon-info">
                         <p class="coupon-text">Quisque gravida turpis sit amet nulla posuere lacinia. Cras
                            sed est
                            sit amet ipsum luctus.</p>
                         <form action="#">
                            <p class="form-row-first">
                               <label>Username or email <span class="required">*</span></label>
                               <input type="text" />
                            </p>
                            <p class="form-row-last">
                               <label>Password <span class="required">*</span></label>
                               <input type="text" />
                            </p>
                            <p class="form-row d-flex align-items-center flex-wrap">
                               <button class="bd-fill__btn" type="submit">Login</button>
                               <label>
                                  <input class="e-check-input" id="cbox" type="checkbox">
                                  Remember me
                               </label>
                            </p>
                            <p class="lost-password">
                               <a href="#">Lost your password?</a>
                            </p>
                         </form>
                      </div>
                   </div>
                   <!-- ACCORDION END -->
                </div>
             </div>
             <div class="col-md-6">
                <div class="coupon-accordion">
                   <!-- ACCORDION START -->
                   <h3>Have a coupon? <span id="showcoupon">Click here to enter your code</span></h3>
                   <div id="checkout_coupon" class="coupon-checkout-content">
                      <div class="coupon-info">
                         <form action="#">
                            <p class="checkout-coupon">
                               <input type="text" placeholder="Coupon Code" />
                               <button class="bd-fill__btn" type="submit">Apply Coupon</button>
                            </p>
                         </form>
                      </div>
                   </div>
                   <!-- ACCORDION END -->
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- coupon-area end -->

    <!-- checkout-area start -->
    <section class="checkout-area pb-100">
     
       <div class="container small-container">
          
             <div class="row">
                <div class="col-lg-6">
                   <div class="checkbox-form">
                      <h3>Billing Details</h3>
                      <form  method="POST" wire:submit.prevent="placeOrder">
                      <div class="row">
                         <div class="col-md-12">
                            <div class="country-select" wire.model="country">
                               <label>Country <span class="required">*</span></label>
                               <select>
                                  <option value="volvo">Bangladesh</option>
                                  <option value="saab">Algeria</option>
                                  <option value="mercedes">Afghanistan</option>
                                  <option value="audi">Ghana</option>
                                  <option value="audi2">Albania</option>
                                  <option value="audi3">Bahrain</option>
                                  <option value="audi4">Colombia</option>
                                  <option value="audi5">Dominican Republic</option>
                               </select>
                               @error('country') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                         </div>
                         <div class="col-md-6">
                            <div class="checkout-form-list">
                             
                               <label> Name <span >*</span></label>
                               <input   type="text" name = "firstname" placeholder="" wire.model="firstname"/>
                               @error('firstname') <span class="text-danger">{{ $message }}</span>
                                  
                               @enderror
                            </div>
                         </div>
                         
{{--                          
                         <div class="col-md-12">
                            <div class="checkout-form-list">
                               <label>Address <span class="required">*</span></label>
                               <input type="text" placeholder="Street address" wire.model="address" />
                               @error('address') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                         </div> --}}
                         
                         <div class="col-md-12">
                            <div class="checkout-form-list">
                               <label>Town / City <span class="required">*</span></label>
                               <input class="city" type="text" name ="city" placeholder="Town / City" wire.model="city"/>
                               @error('city') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                         </div>
                         <div class="col-md-6">
                            <div class="checkout-form-list">
                               <label>State / County <span class="required">*</span></label>
                               <input type="text" name ="province"  placeholder="" wire.model="province" />
                               @error('province') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                         </div>
                         <div class="col-md-6">
                            <div class="checkout-form-list">
                               <label>Postcode / Zip <span class="required">*</span></label>
                               <input type="text"  name ="zipcode" placeholder="Postcode / Zip" wire.model="zipcode" />
                               @error('zipcode') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                         </div>
                         <div class="col-md-6">
                            <div class="checkout-form-list">
                               <label>Email Address <span class="required">*</span></label>
                               <input type="email" name ="email"  placeholder=""  wire.model="email"/>
                               @error('email') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                         </div>
                         <div class="col-md-6">
                            <div class="checkout-form-list">
                               <label>Phone <span class="required">*</span></label>
                               <input type="text"  name ="mobile"  placeholder=" " wire.model="mobile"/>
                               @error('mobile') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                         </div>
                         
                      </div>
                      
                   </div>
                </div>
                <div class="col-lg-6">
                   <div class="your-order mb-30 ">
                      <h3>Your order</h3>
                      <div class="your-order-table table-responsive">
                         <table>
                            <thead>
                               <tr>
                                  <th class="product-name">Product</th>
                                  <th class="product-total">Total</th>
                               </tr>
                            </thead>
                            <tfoot>
                               <tr class="cart-subtotal">
                                 @if (Session::has('checkout'))
                                  <th>Cart Subtotal</th>
                                  
                                  <td><span class="amount">${{ Cart::total() }}</span></td>
                                  @endif
                               </tr>
                               <tr class="shipping">
                                  <th>Shipping</th>
                                  <td>
                                     <ul>
                                        <li>
                                           <input type="radio" />
                                           <label>
                                              Flat Rate: <span class="amount">$7.00</span>
                                           </label>
                                        </li>
                                        <li>
                                           <input type="radio" />
                                           <label>Free Shipping:</label>
                                        </li>
                                        <li></li>
                                     </ul>
                                  </td>
                               </tr>
                               <tr class="order-total">
                                 @if (Session::has('checkout'))
                                 <th>Order Total</th>
                                 <td><strong><span class="amount">${{ Session::get('checkout')['total'] }}</span></strong>
                                 </td>
                                 @endif
                                  
                               </tr>
                            </tfoot>
                         </table>
                      </div>

                      <div class="payment-method">
                         <div class="accordion" id="checkoutAccordion">
                            <div class="accordion-item">
                               <h2 class="accordion-header" id="checkoutOne">
                                  <button name="payment-method" class="accordion-button" type="button" data-bs-toggle="collapse"
                                     data-bs-target="#bankOne" aria-expanded="true" aria-controls="bankOne" value="cod" wire.model='paymentmode'>
                                     Cash On Delivery
                                  </button>
                               </h2>
                               <div id="bankOne" class="accordion-collapse collapse show"
                                  aria-labelledby="checkoutOne" data-bs-parent="#checkoutAccordion">
                                  <div class="accordion-body"   >
                                     Make your payment directly .
                                  </div>
                                  @error('paymentmode') <span class="text-danger">{{ $message }}</span>@enderror
                               </div>
                            </div>
                            <div class="accordion-item">
                               <h2 class="accordion-header" id="paypalThree">
                                  <button name="payment-method" class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                     data-bs-target="#paypal" aria-expanded="false" aria-controls="paypal" wire.model='paymentmode'>
                                     Card
                                  </button>
                               </h2>
                               <div id="paypal" class="accordion-collapse collapse" aria-labelledby="paypalThree"
                                  data-bs-parent="#checkoutAccordion">
                                  <div class="accordion-body">
                                    you can pay with your credit card.
                                  </div>
                                  @error('paymentmode') <span class="text-danger">{{ $message }}</span>@enderror
                               </div>
                            </div>
                            <div class="accordion-item">
                               <h2 class="accordion-header" id="paypalThree">
                                  <button  name="payment-method" class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                     data-bs-target="#paypal" aria-expanded="false" aria-controls="paypal" wire.model='paymentmode'>
                                     PayPal
                                  </button>
                               </h2>
                               <div id="paypal" class="accordion-collapse collapse" aria-labelledby="paypalThree"
                                  data-bs-parent="#checkoutAccordion">
                                  <div class="accordion-body">
                                     Pay via PayPal; you can pay with your credit card if you don’t have
                                     a
                                     PayPal account.
                                  </div>
                                  
                               </div>
                            </div>

                         </div>
                         <div class="order-button-payment mt-20">
                            <button type="submit" class="bd-fill__btn" href={{route('thankyou')  }}>Place order</button>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </form>
       </div>
    </section>
    <!-- checkout-area end -->

 </main>
