
<!doctype html>
<html class="no-js" lang="zxx">
<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>FarmCraft</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Place favicon.ico in the root directory -->
   <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

   <!-- CSS here -->
   <link rel="stylesheet" href="<?php echo e(asset("assets/css/bootstrap.css")); ?>">
   <link rel="stylesheet" href="<?php echo e(asset("assets/css/meanmenu.css")); ?>">
   <link rel="stylesheet" href="<?php echo e(asset("assets/css/animate.css")); ?>">
   <link rel="stylesheet" href="<?php echo e(asset("assets/css/owl-carousel.css")); ?>">
   <link rel="stylesheet" href="<?php echo e(asset("assets/css/swiper-bundle.css")); ?>">
   <link rel="stylesheet" href="<?php echo e(asset("assets/css/backtotop.css")); ?>">
   <link rel="stylesheet" href="<?php echo e(asset("assets/css/ui-range-slider.css")); ?>">
   <link rel="stylesheet" href="<?php echo e(asset("assets/css/magnific-popup.css")); ?>">
   <link rel="stylesheet" href="<?php echo e(asset("assets/css/nice-select.css")); ?>">
   <link rel="stylesheet" href="<?php echo e(asset("assets/css/flaticon.css")); ?>">
   <link rel="stylesheet" href="<?php echo e(asset("assets/css/font-awesome-pro.css")); ?>">
   <link rel="stylesheet" href="<?php echo e(asset("assets/css/spacing.css")); ?>">
   <link rel="stylesheet" href="<?php echo e(asset("assets/css/main.css")); ?>">
   <?php echo \Livewire\Livewire::styles(); ?>

</head>

<body>

   <!--[if lte IE 9]>
   <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
   <![endif]-->

   <!-- Preloader -->
   <div id="preloader">
      <div class="preloader">
         <span></span>
         <span></span>
      </div>
   </div>
   <!-- Preloader end  -->

   <!-- Offcanvas area start -->
   <div class="offcanvas__area">
      <div class="modal fade" id="offcanvasmodal">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="offcanvas__wrapper">
                  <div class="offcanvas__content">
                     <div class="offcanvas__top mb-40 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo logo">
                           <a href="index.html">
                              <img src="assets/img/logo/logo-2.png" alt="logo">
                           </a>
                        </div>
                        <div class="offcanvas__close">
                           <button class="offcanvas__close-btn" data-bs-toggle="modal" data-bs-target="#offcanvasmodal">
                              <i class="fal fa-times"></i>
                           </button>
                        </div>
                     </div>
                     <div class="bd-utilize__buttons mb-25 d-xl-none">
                        <div class="bd-action__item">
                           <div class="bd-action__cart">
                              <div class="bd-action__cart-icon">
                                 <a href="#" data-bs-toggle="offcanvas" data-bs-target="#cartmini"
                                    aria-controls="cartmini">
                                    <svg id="shopping-bag" xmlns="http://www.w3.org/2000/svg" width="16.508"
                                       height="18.5" viewBox="0 0 16.508 18.5">
                                       <path id="Path_76" data-name="Path 76"
                                          d="M24.21,35.5H34.3a3.214,3.214,0,0,0,3.21-3.21v-9.6a.571.571,0,0,0-.569-.569H33.523v-.854a4.269,4.269,0,0,0-8.538,0v.854H21.569a.571.571,0,0,0-.569.569v9.6A3.214,3.214,0,0,0,24.21,35.5Zm1.913-14.231a3.131,3.131,0,0,1,6.262,0v.854H26.123Zm-3.985,1.992h2.846v1.423a.569.569,0,0,0,1.138,0V23.262h6.262v1.423a.569.569,0,0,0,1.138,0V23.262h2.846V32.29A2.076,2.076,0,0,1,34.3,34.362H24.21a2.076,2.076,0,0,1-2.072-2.072Z"
                                          transform="translate(-21 -17)" fill="#1c1d1b"></path>
                                    </svg>
                                 </a>
                                 <span class="bd-action__item-number cart-count">0</span>
                              </div>
                           </div>
                        </div>
                        <div class="bd-action__item">
                           <div class="bd-action__wishlist">
                              <div class="bd-action__wistlist-icon">
                                 <a href="#" data-bs-toggle="offcanvas" data-bs-target="#wishlist"
                                    aria-controls="wishlist">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.194" height="14.985"
                                       viewBox="0 0 16.194 14.985">
                                       <path id="Path_dfdf4" data-name="Path 4"
                                          d="M11.829,39.221a4.128,4.128,0,0,0-3.415,1.9c-.118.166-.224.331-.317.492-.093-.161-.2-.326-.317-.492a4.128,4.128,0,0,0-3.415-1.9C1.82,39.221,0,41.549,0,44.343c0,3.195,2.4,6.206,7.769,9.762a.587.587,0,0,0,.656,0c5.373-3.557,7.769-6.568,7.769-9.762C16.194,41.551,14.375,39.221,11.829,39.221Zm1.428,9.1A24,24,0,0,1,8.1,52.7a24,24,0,0,1-5.16-4.383,6.283,6.283,0,0,1-1.671-3.978c0-2.012,1.244-3.74,3.1-3.74A2.891,2.891,0,0,1,6.76,41.938a5.312,5.312,0,0,1,.734,1.445.618.618,0,0,0,1.208,0,5.308,5.308,0,0,1,.711-1.413A2.9,2.9,0,0,1,11.829,40.6c1.857,0,3.1,1.73,3.1,3.74A6.283,6.283,0,0,1,13.257,48.321Z"
                                          transform="translate(0 -39.221)" fill="#1c1d1b"></path>
                                    </svg>
                                 </a>
                                 <span class="bd-action__item-number wishlist-count">0</span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="offcanvas__search mb-25">
                        <form action="#">
                           <input type="text" placeholder="What are you searching for?">
                           <button type="submit"><i class="far fa-search"></i></button>
                        </form>
                     </div>
                     <div class="mobile-menu fix mb-40"></div>

                     <div class="offcanvas__color">
                        <h5>Choose your favorite color : </h5>
                        <input type="color" id="theme-color" value="#ff5e14">
                        <label for="theme-color"></label>
                     </div>
                     <div class="offcanvas__map d-none d-lg-block mb-15">
                        <iframe
                           src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29176.030811137334!2d90.3883827!3d23.924917699999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1605272373598!5m2!1sen!2sbd"></iframe>
                     </div>
                     <div class="offcanvas__contact mt-30 mb-20">
                        <h4>Contact Info</h4>
                        <ul>
                           <li class="d-flex align-items-center">
                              <div class="offcanvas__contact-icon mr-15">
                                 <i class="fal fa-map-marker-alt"></i>
                              </div>
                              <div class="offcanvas__contact-text">
                                 <a target="_blank"
                                    href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">
                                    Dhaka, Bangladesh</a>
                              </div>
                           </li>
                           <li class="d-flex align-items-center">
                              <div class="offcanvas__contact-icon mr-15">
                                 <i class="far fa-phone"></i>
                              </div>
                              <div class="offcanvas__contact-text">
                                 <a href="tel:+088889797697">+00000000</a>
                              </div>
                           </li>
                           <li class="d-flex align-items-center">
                              <div class="offcanvas__contact-icon mr-15">
                                 <i class="fal fa-envelope"></i>
                              </div>
                              <div class="offcanvas__contact-text">
                                 <a href="tel:+012-345-6789"><span
                                       class="mailto:support@mail.com"><span class="__cf_email__" data-cfemail="5f2c2a2f2f302d2b1f323e3633713c3032">[email&#160;protected]</span></span></a>
                              </div>
                           </li>
                        </ul>
                     </div>
                     <div class="offcanvas__social">
                        <ul>
                           <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                           <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                           <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                           <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- offcanvas area end -->

   <!-- Added to cart message  -->
   <div class="added-to-cart">
      <div class="added-to-cart-content d-flex align-items-center">
         <i class="fa-light fa-check"></i>
         <p>Successfully Added to cart</p>
      </div>
   </div>

   <!-- Added to wishlist message -->
   <div class="added-to-wishlist">
      <div class="added-to-cart-content d-flex align-items-center">
         <i class="fa-light fa-check"></i>
         <p>Successfully Added to wishlist</p>
      </div>
   </div>

   <!-- Add cart modal area start -->
   <div class="product__modal-sm modal fade" id="productmodal" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
            <div class="product__modal">
               <div class="product__modal-wrapper p-relative">
                  <button type="button" class="close product__modal-close" data-bs-dismiss="modal" aria-label="Close">
                     <i class="fal fa-times"></i>
                  </button>
                  <div class="modal__inner">
                     <div class="bd__shop-details-inner">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="product-details__thumb-inner p-relative">
                                 <div class="bd__shop-details-img-gallery mb-30">
                                    <div class="product-details-active swiper-container">
                                       <div class="swiper-wrapper">
                                          <div class="swiper-slide">
                                             <div class="bd-product__details-large-img w-img">
                                                <a href="img/product/1.html" data-rel="lightcase:myCollection">
                                                   <img src="<?php echo e(asset('assets/img/product/details/1.png')); ?>"
                                                      alt="product-details-img">
                                                </a>
                                             </div>
                                          </div>
                                          <div class="swiper-slide">
                                             <div class="bd-product__details-large-img w-img">
                                                <a href="img/product/1.html" data-rel="lightcase:myCollection">
                                                   <img src="<?php echo e(asset('assets/img/product/details/2.png')); ?>" alt="product-details-img">
                                                </a>
                                             </div>
                                          </div>
                                          <div class="swiper-slide">
                                             <div class="bd-product__details-large-img w-img">
                                                <a href="img/product/1.html" data-rel="lightcase:myCollection">
                                                   <img src="<?php echo e(asset('assets/img/product/details/3.png')); ?>"
                                                      alt="product-details-img">
                                                </a>
                                             </div>
                                          </div>
                                          <div class="swiper-slide">
                                             <div class="bd-product__details-large-img w-img">
                                                <a href="img/product/1.html" data-rel="lightcase:myCollection">
                                                   <img src="<?php echo e(asset('assets/img/product/details/4.png')); ?>"
                                                      alt="product-details-img">
                                                </a>
                                             </div>
                                          </div>
                                          <div class="swiper-slide">
                                             <div class="bd-product__details-large-img w-img">
                                                <a href="img/product/1.html" data-rel="lightcase:myCollection">
                                                   <img src="<?php echo e(asset('assets/img/product/details/5.png')); ?>"
                                                      alt="product-details-img">
                                                </a>
                                             </div>
                                          </div>
                                          <div class="swiper-slide">
                                             <div class="bd-product__details-large-img w-img">
                                                <a href="img/product/1.html" data-rel="lightcase:myCollection">
                                                   <img src="<?php echo e(asset('assets/img/product/details/6.png')); ?>"
                                                      alt="product-details-img">
                                                </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="bd-product__details-small-img">
                                    <div class="swiper-container product-details-nav">
                                       <div class="swiper-wrapper">
                                          <div class="swiper-slide m-img">
                                             <div class="product-small__img">
                                                <img src="<?php echo e(asset('assets/img/product/details/1.png')); ?>" alt="product-thumb">
                                             </div>
                                          </div>
                                          <div class="swiper-slide m-img">
                                             <div class="product-small__img">
                                                <img src="<?php echo e(asset('assets/img/product/details/2.png')); ?>" alt="product-thumb">
                                             </div>
                                          </div>
                                          <div class="swiper-slide m-img">
                                             <div class="product-small__img">
                                                <img src="<?php echo e(asset('assets/img/product/details/3.png')); ?>" alt="product-thumb">
                                             </div>
                                          </div>
                                          <div class="swiper-slide m-img">
                                             <div class="product-small__img">
                                                <img src="<?php echo e(asset('assets/img/product/details/4.png')); ?>" alt="product-thumb">
                                             </div>
                                          </div>
                                          <div class="swiper-slide m-img">
                                             <div class="product-small__img">
                                                <img src="<?php echo e(asset('assets/img/product/details/5.png')); ?>" alt="product-thumb">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="modal-product-info modal-product__details-content">
                                 <div class="product-ratting">
                                    <ul>
                                       <li><a href="#"><i class="fas fa-star"></i></a></li>
                                       <li><a href="#"><i class="fas fa-star"></i></a></li>
                                       <li><a href="#"><i class="fas fa-star"></i></a></li>
                                       <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                                       <li><a href="#"><i class="far fa-star"></i></a></li>
                                       <li class="review-total"> <a href="#"> ( 95 Reviews )</a></li>
                                    </ul>
                                 </div>
                                 <h3>Organic Fresh Honey</h3>
                                 <div class="product-price">
                                    <span>$39.00</span>
                                    <del>$59.00</del>
                                 </div>
                                 <div class="modal-product-meta bd__product-details-menu-1">
                                    <ul>
                                       <li>
                                          <strong>Products:</strong>
                                          <span>
                                             <a href="#">Vegetable</a>
                                             <a href="#">Fruits</a>
                                             <a href="#">Dairy Milk</a>
                                             <a href="#">Bakery</a>
                                          </span>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="product-quantity-cart mb-25">
                                    <div class="product-quantity-form">
                                       <form action="#">
                                          <button class="cart-minus"><i class="far fa-minus"></i></button>
                                          <input class="cart-input" type="text" value="1">
                                          <button class="cart-plus"><i class="far fa-plus"></i></button>
                                       </form>
                                    </div>
                                    <a class="cart-btn bd-fill__btn" href="javascript:void(0)" data-toggle="tooltip"
                                       data-placement="top" title="Add to Cart" data-bs-toggle="modal"><i
                                          class="fal fa-cart-arrow-down"></i>Add to Cart</a>
                                 </div>
                                 <div class="bd__product-details-menu-3">
                                    <ul>
                                       <li>
                                          <a href="javascript:void(0)" class="wishlist-btn" title="Wishlist"
                                             data-toggle="modal" data-target="#liton_wishlist_modal">
                                             <i class="far fa-heart"></i>
                                             <span>Add to Wishlist</span>
                                          </a>
                                       </li>
                                       <li>
                                          <a href="javascript:void(0)" class="wishlist-btn cart-btn" title="Compare"
                                             data-toggle="modal" data-target="#quick_view_modal">
                                             <i class="fas fa-exchange-alt"></i>
                                             <span>Compare</span>
                                          </a>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="bd__social-media">
                                    <ul>
                                       <li>Share:</li>
                                       <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                       <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                       <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                       <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                 </div>
                                 <div class="bd__safe-checkout">
                                    <h5>Guaranteed Safe Checkout</h5>
                                    <a href="#"><img src="<?php echo e(asset('assets/img/icon/discover.png')); ?>" alt="Payment Image"></a>
                                    <a href="#"><img src="<?php echo e(asset('assets/img/icon/mastercard.png')); ?>" alt="Payment Image"></a>
                                    <a href="#"><img src="<?php echo e(asset('assets/img/icon/paypal.png')); ?>" alt="Payment Image"></a>
                                    <a href="#"><img src="<?php echo e(asset('assets/img/icon/visa.png')); ?>" alt="Payment Image"></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Add cart modal area end -->

   <!-- Cartmini area start  -->
   <div class="offcanvas offcanvas-end" id="cartmini">
      <div class="cartmini__wrapper">
         <div class="cartmini__title">
            <h4>Shopping Cart</h4>
         </div>
         <div class="cartmini__close">
            <button type="button" class="cartmini__close-btn" data-bs-dismiss="offcanvas" aria-label="Close"><i
                  class="fal fa-times"></i></button>
         </div>
         <div class="cartmini__widget">
            <div class="cartmini__inner">
               <ul>
                  <li>
                     <div class="cartmini__thumb">
                        <a href="product-details.html">
                           <img src="<?php echo e(asset('assets/img/trending/populer-item/populer-thumb-01.png')); ?>" alt="product image">
                        </a>
                     </div>
                     <div class="cartmini__content">
                        <h5><a href="product-details.html">Organic Apple</a></h5>
                        <div class="product-quantity mt-10 mb-10">
                           <span class="cart-minus">-</span>
                           <input class="cart-input" type="text" value="1">
                           <span class="cart-plus">+</span>
                        </div>
                        <div class="product__sm-price-wrapper">
                           <span class="product__sm-price">$46.00</span>
                        </div>
                     </div>
                     <a href="#" class="cartmini__del"><i class="fal fa-times"></i></a>
                  </li>
                  <li>
                     <div class="cartmini__thumb">
                        <a href="product-details.html">
                           <img src="<?php echo e(asset('assets/img/trending/populer-item/populer-thumb-02.png')); ?>" alt="product image">
                        </a>
                     </div>
                     <div class="cartmini__content">
                        <h5><a href="product-details.html"> Organic bannna</a></h5>
                        <div class="product-quantity mt-10 mb-10">
                           <span class="cart-minus">-</span>
                           <input class="cart-input" type="text" value="1">
                           <span class="cart-plus">+</span>
                        </div>
                        <div class="product__sm-price-wrapper">
                           <span class="product__sm-price">$32.00</span>
                        </div>
                     </div>
                     <a href="#" class="cartmini__del"><i class="fal fa-times"></i></a>
                  </li>
                  <li>
                     <div class="cartmini__thumb">
                        <a href="product-details.html">
                           <img src="<?php echo e(asset('assets/img/trending/populer-item/populer-thumb-05.png')); ?>" alt="product image">
                        </a>
                     </div>
                     <div class="cartmini__content">
                        <h5><a href="product-details.html"> Orange Juice</a></h5>
                        <div class="product-quantity mt-10 mb-10">
                           <span class="cart-minus">-</span>
                           <input class="cart-input" type="text" value="1">
                           <span class="cart-plus">+</span>
                        </div>
                        <div class="product__sm-price-wrapper">
                           <span class="product__sm-price">$62.00</span>
                        </div>
                     </div>
                     <a href="product-details.html" class="cartmini__del"><i class="fal fa-times"></i></a>
                  </li>
               </ul>
            </div>
            <div class="cartmini__checkout">
               <div class="cartmini__checkout-title mb-30">
                  <h4>Subtotal:</h4>
                  <span>$113.00</span>
               </div>
               <div class="cartmini__checkout-btn">
                  <a href="cart.html" class="bd-fill__btn w-100"> <span></span> view cart</a>
                  <a href="checkout.html" class="bd-unfill__btn w-100"> <span></span> checkout</a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Cartmini area end -->

   <!-- Wishlist modal area start -->
   <div class="offcanvas offcanvas-end" id="wishlist">
      <div class="cartmini__wrapper">
         <div class="cartmini__title">
            <h4>Wishlist</h4>
         </div>
         <div class="cartmini__close">
            <button type="button" class="cartmini__close-btn" data-bs-dismiss="offcanvas" aria-label="Close"><i
                  class="fal fa-times"></i></button>
         </div>
         <div class="cartmini__widget">
            <div class="cartmini__inner">
               <ul>
                  <li>
                     <div class="cartmini__thumb">
                        <a href="product-details.html">
                           <img src="<?php echo e(asset('assets/img/trending/populer-item/populer-thumb-01.png')); ?>" alt="product image">
                        </a>
                     </div>
                     <div class="cartmini__content">
                        <h5><a href="product-details.html">Organic Apple</a></h5>
                        <div class="product-quantity mt-10 mb-10">
                           <span class="cart-minus">-</span>
                           <input class="cart-input" type="text" value="1">
                           <span class="cart-plus">+</span>
                        </div>
                        <div class="product__sm-price-wrapper">
                           <span class="product__sm-price">$46.00</span>
                        </div>
                     </div>
                     <a href="#" class="cartmini__del"><i class="fal fa-times"></i></a>
                  </li>
                  <li>
                     <div class="cartmini__thumb">
                        <a href="product-details.html">
                           <img src="<?php echo e(asset('assets/img/trending/populer-item/populer-thumb-05.png')); ?>" alt="product image">
                        </a>
                     </div>
                     <div class="cartmini__content">
                        <h5><a href="product-details.html"> Orange Juice</a></h5>
                        <div class="product-quantity mt-10 mb-10">
                           <span class="cart-minus">-</span>
                           <input class="cart-input" type="text" value="1">
                           <span class="cart-plus">+</span>
                        </div>
                        <div class="product__sm-price-wrapper">
                           <span class="product__sm-price">$62.00</span>
                        </div>
                     </div>
                     <a href="product-details.html" class="cartmini__del"><i class="fal fa-times"></i></a>
                  </li>
               </ul>
            </div>
            <div class="cartmini__checkout">
               <div class="cartmini__checkout-title mb-30">
                  <h4>Subtotal:</h4>
                  <span>$108.00</span>
               </div>
               <div class="cartmini__checkout-btn">
                  <a href="cart.html" class="bd-fill__btn w-100"> <span></span> view cart</a>
                  <a href="checkout.html" class="bd-unfill__btn w-100"> <span></span> checkout</a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Wishlist modal area end -->

   <!-- Header-area-start -->
   <header>
      <div class="bd-top__bar-area-2 grey-bg-3 d-none d-lg-block">
         <div class="container-fluid">
            <div class="bd-top__bar-main d-flex justify-content-end">
               <div class="col-xxl-10 col-xl-12 col-12">
                  <div class="row">
                     <div class="col-xxl-8 col-xl-8 col-lg-9">
                        <div class="bd-topbar__regtangle ">
                           <div class="bd-topbar__contact">
                              <ul>
                                 <li><a href="#"><i class="fa-regular fa-phone-flip"></i>+8800000</a></li>
                                 <li><a><i class="fa-regular fa-house-window"></i>Dhaka,Bangladesh</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-xxl-4 col-xl-4 col-lg-3">
                        <div class="bd-top__bar-social">
                           <ul>
                              <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                              <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                              <li><a href="#"><i class="fa-brands fa-pinterest-p"></i></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="header-sticky">
         <div class="bd-header__area-2 position-relative">
            <div class="container">
               <div class="bd-header__main-wrapper-2">
                  <div class="row align-items-center">
                     <div class="col-12">
                        <div class="bd-header__main-content">
                           <div class="bd-header__left-2">
                              <div class="bd-header__logo-2 p-relative">
                                 <a href="index.html">
                                    <img class="logo-white" src="<?php echo e(asset ('assets/img/logo/logo.png')); ?>" alt="logo">
                                    <img class="logo-black" src="<?php echo e(asset ('assets/img/logo/logo-2.png')); ?>" alt="logo">
                                 </a>
                                 <div class="bd-header__logo-bg">
                                    <img src="<?php echo e(asset('assets/img/logo/logo-bg.png')); ?>" alt="logo-bg">
                                 </div>
                              </div>
                              <div class="main-menu d-none d-none d-lg-block">
                                 <nav id="mobile-menu">
                                    <ul>
                                       <li class=" ">
                                          <a href="/">Home</a>
                                         
                                       </li>
                                       <li class="has-dropdown">
                                          <a href="/shop">Shop</a>
                                          <ul class="submenu">
                                             <li><a href="/shop">Shop</a></li>
                                             <li><a href="/product-details">Product Details</a></li>
                                             <li><a href="/wishlist">Wishlist</a></li>
                                             <li><a href="/cart">Cart</a></li>
                                             <li><a href="/checkout">Checkout</a></li>
                                          </ul>
                                       </li>
                                       <li class="has-dropdown">
                                          <a href="/about">Pages</a>
                                          <ul class="submenu">
                                             <li><a href="/about">About</a></li>
                                             <li><a href="/team">Team</a></li>
                                             
                                             <li><a href="/gallery">Gallery</a></li>
                                             <li><a href="/faq">FAQ</a></li>
                                             
                                          </ul>
                                       </li>
                                       <li >
                                          <a href="/news">News</a>
                                          
                                       </li>
                                       <li>
                                          <a href="/contact">Contact</a>
                                       </li>
                                       <?php if(Route::has('login')): ?>
                                         <?php if(auth()->guard()->check()): ?>
                                            <?php if(Auth::user()->utype === 'ADM'): ?>
                                            <li class="has-dropdown">
                                                 <a title = "My Acount "href="#">My Account(<?php echo e(Auth::user()->name); ?>)</a>
                                                  <ul class="submenu">
                                                   <li><a tittle = "Dashboard" href="<?php echo e(route('admin.dashboard')); ?>">Dashboard</a></li>
                                                   <li><a tittle = "Logout" href="<?php echo e(route('admin.dashboard')); ?>" onclick="event.preventDefault();
                                                   getElementById('logout-form').submit();">Logout</a></li>
                                                   <form method="POST" action="<?php echo e(('logout')); ?>">
                                                      <?php echo csrf_field(); ?>
                                                   
                                                </form>
                                                 </ul>
                                                </li>
                                               <!--\'admin.dashboard'-->
                                               
                                            <?php else: ?>
                                            <li class="has-dropdown">
                                          <a title = "My Acount "href="#">My Account(<?php echo e(Auth::user()->name); ?>)</a>
                                          <ul class="submenu">
                                             <li><a title = "Dashboard" href="<?php echo e(route('user.dashboard')); ?>">Dashboard</a></li>
                                             <li><a title = "Logout" href="<?php echo e(route('admin.dashboard')); ?>" onclick="event.preventDefault();
                                             getElementById('logout-form').submit();">Logout</a></li>
                                             <form id = "logout-form" method="POST" action="<?php echo e(('logout')); ?>">
                                                <?php echo csrf_field(); ?>
                                             
                                          </form>
                                             
                                          </ul>
                                       </li>
                                       </li>
                                        <?php endif; ?>
                                          <?php else: ?>
                                             
                                             <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
                                             <li><a href="<?php echo e(route('register')); ?>">Register</a></li>
                                      <?php endif; ?>
                                      
                                    <?php endif; ?>
                                    </ul>
                                   
                                 </nav>
                              </div>
                           </div>
                           <div class="bd-header__right header__right-2">
                              <div class="bd-action__cart-list justify-content-end">
                                 <div class="bd-action__item">
                                    <div class="bd-action__item">
                                       <div class="bd-action__search-icon p-relative">
                                          <a class="search-toggle bd-h-search" href="javascript:void(0)">
                                             <svg xmlns="http://www.w3.org/2000/svg" width="16.05" height="16.05"
                                                viewBox="0 0 16.05 16.05">
                                                <path id="magnifiying-glass"
                                                   d="M15.867,14.985,11.95,11.068a6.765,6.765,0,1,0-.883.882l3.917,3.917a.624.624,0,1,0,.882-.882ZM1.248,6.755a5.507,5.507,0,1,1,5.507,5.507A5.513,5.513,0,0,1,1.248,6.755Z"
                                                   fill="#1c1d1b" />
                                             </svg>
                                             <i class="fal fa-times"></i>
                                          </a>
                                          <!-- Search-toggle-start -->
                                          <div class="bd-search__toggle">
                                             <form action="#">
                                                <input type="text" placeholder="Search here...">
                                                <button type="submit"><i class="fal fa-search"></i></button>
                                             </form>
                                          </div>
                                          <!-- Search-toggle-end -->
                                       </div>
                                    </div>
                                 </div>
                                 <div class="bd-action__item">
                                    <div class="bd-action__cart">
                                       <div class="bd-action__cart-icon">
                                          <a href="#" data-bs-toggle="offcanvas" data-bs-target="#cartmini"
                                             aria-controls="cartmini">
                                             <svg id="shopping-bag-52145456" xmlns="http://www.w3.org/2000/svg"
                                                width="16.508" height="18.5" viewBox="0 0 16.508 18.5">
                                                <path id="Path_7655" data-name="Path 76"
                                                   d="M24.21,35.5H34.3a3.214,3.214,0,0,0,3.21-3.21v-9.6a.571.571,0,0,0-.569-.569H33.523v-.854a4.269,4.269,0,0,0-8.538,0v.854H21.569a.571.571,0,0,0-.569.569v9.6A3.214,3.214,0,0,0,24.21,35.5Zm1.913-14.231a3.131,3.131,0,0,1,6.262,0v.854H26.123Zm-3.985,1.992h2.846v1.423a.569.569,0,0,0,1.138,0V23.262h6.262v1.423a.569.569,0,0,0,1.138,0V23.262h2.846V32.29A2.076,2.076,0,0,1,34.3,34.362H24.21a2.076,2.076,0,0,1-2.072-2.072Z"
                                                   transform="translate(-21 -17)" fill="#1c1d1b" />
                                             </svg>
                                          </a>
                                          <span class="bd-action__item-number cart-count">0</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="bd-action__item">
                                    <div class="bd-action__wishlist">
                                       <div class="bd-action__wistlist-icon">
                                          <a href="#" data-bs-toggle="offcanvas" data-bs-target="#wishlist"
                                             aria-controls="wishlist">
                                             <svg xmlns="http://www.w3.org/2000/svg" width="16.194" height="14.985"
                                                viewBox="0 0 16.194 14.985">
                                                <path id="Path_4fdfdfg" data-name="Path 4"
                                                   d="M11.829,39.221a4.128,4.128,0,0,0-3.415,1.9c-.118.166-.224.331-.317.492-.093-.161-.2-.326-.317-.492a4.128,4.128,0,0,0-3.415-1.9C1.82,39.221,0,41.549,0,44.343c0,3.195,2.4,6.206,7.769,9.762a.587.587,0,0,0,.656,0c5.373-3.557,7.769-6.568,7.769-9.762C16.194,41.551,14.375,39.221,11.829,39.221Zm1.428,9.1A24,24,0,0,1,8.1,52.7a24,24,0,0,1-5.16-4.383,6.283,6.283,0,0,1-1.671-3.978c0-2.012,1.244-3.74,3.1-3.74A2.891,2.891,0,0,1,6.76,41.938a5.312,5.312,0,0,1,.734,1.445.618.618,0,0,0,1.208,0,5.308,5.308,0,0,1,.711-1.413A2.9,2.9,0,0,1,11.829,40.6c1.857,0,3.1,1.73,3.1,3.74A6.283,6.283,0,0,1,13.257,48.321Z"
                                                   transform="translate(0 -39.221)" fill="#1c1d1b" />
                                             </svg>
                                          </a>
                                          <span class="bd-action__item-number wishlist-count">0</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="bd-action__hotline d-none d-xl-block">
                                 <div class="bd-hotline__inner">
                                    <div class="bd-hotline__icon">
                                       <img src="<?php echo e(asset('assets/img/icon/action-hotline.png')); ?>" alt="hotline-icon">
                                    </div>
                                    <div class="bd-hotline__text">
                                       <span>Contact hotline</span>
                                       <a href="#">000000</a>
                                    </div>
                                 </div>
                              </div>
                              <div class="header__hamburger d-flex d-xl-none">
                                 <button type="button" data-bs-toggle="modal" data-bs-target="#offcanvasmodal"
                                    class="hamburger-btn">
                                    <span class="hamburger-icon">
                                       <span></span>
                                       <span></span>
                                       <span></span>
                                    </span>
                                 </button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- Header-area-end -->

   <!-- Body main wrapper start -->
 <?php echo e($slot); ?>

   <!-- Body main wrapper end -->

   <!-- Footer area start -->
   <footer>
      <section class="bd-footer__area grey-bg pt-100 pb-35">
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                  <div class="bd-footer__widget footer-col-1 mb-60">
                     <div class="bd-footer__info">
                        <div class="bd-footer__logo">
                           <a href="index.html">
                              <img src="<?php echo e(asset('assets/img/logo/footer-logo.png')); ?>" alt="footer-logo">
                           </a>
                        </div>
                        <p>Sed perspiciatis unde omnis natus error voluptatem accusan doloreqe laudantium totam aperiam
                           eaque sipsa quae abillo inventore</p>
                        <div class="bd-footer__contact">
                           <span><i class="fa-regular fa-envelope"></i><a href="#"><span class="__cf_email__" data-cfemail="0f466169604f6a776e627f636a216c6062">[email&#160;protected]</span></a></span>
                           <span><i class="fa-regular fa-house-chimney"></i>Dhaka, Bangladesh</span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                  <div class="bd-footer__widget footer-col-2 mb-60">
                     <div class="bd-footer__widget-title">
                        <h4>Quick Links</h4>
                     </div>
                     <div class="bd-footer__link">
                        <ul>
                           <li><a href="#">About Our Company</a></li>
                           <li><a href="#">Latest Services</a></li>
                           <li><a href="#">Payment Type</a></li>
                           <li><a href="#">Awards Winnings</a></li>
                           <li><a href="#">World Media Partner</a></li>
                           <li><a href="#">Flash Offers</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                  <div class="bd-footer__widget footer-col-3 mb-60">
                     <div class="bd-footer__widget-title">
                        <h4>Categories</h4>
                     </div>
                     <div class="bd-footer__link">
                        <ul>
                           <li><a href="#"> Cuts & Sprouts</a></li>
                           <li><a href="#">Exotic Fruits & Veggies</a></li>
                           <li><a href="#">Fresh Fruits</a></li>
                           <li><a href="#">Fresh Vegetables</a></li>
                           <li><a href="#">Herbs & Seasoning</a></li>
                           <li><a href="#">Collectionss</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                  <div class="bd-footer__widget mb-60">
                     <div class="bd-footer__widget-title">
                        <h4>Newsletter</h4>
                     </div>
                     <div class="bd-footer__subcribe p-relative mb-40">
                        <form action="#">
                           <input type="text" placeholder="Enter Your Email">
                           <button class="bd-footer__s-btn"><i class="fa-solid fa-arrow-right-long"></i></button>
                        </form>
                     </div>
                     <div class="bd-footer__support-wrapper">
                        <div class="bd-fotter__support-icon">
                           <img src="<?php echo e(asset('assets/img/icon/support.png')); ?>" alt="support-img">
                        </div>
                        <div class="bd-footer__support-inner">
                           <span>8:30 AM - 9:30 PM</span>
                           <h4><a href="tel:+58569502352">+000000000</a></h4>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <div class="bd-sub__fotter">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-6 col-lg-6">
                  <div class="bd-footer__copyright style-1">
                     <ul>
                        <li>All Rights Reserved</li>
                        <li>Copyrighted by ©2022 <span><a
                                 href="#">Mehedi Hasan</a></span></li>
                     </ul>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6">
                  <div class="bd-footer__payment">
                     <ul>
                        <li><span>We Support</span></li>
                        
                        <li><a href="#"><img src="<?php echo e(asset('assets/img/icon/mastercard.png')); ?>" alt="mastercard"></a></li>
                        
                        <li><a href="#"><img src="<?php echo e(asset('assets/img/icon/visa.png')); ?>" alt="visa"></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!-- Footer area end -->


   <!-- Back to top start -->
   <div class="progress-wrap">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
   </div>
   <!-- Back to top end -->

   <!-- JS here -->
   <script data-cfasync="false" src="<?php echo e(asset('../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')); ?>"></script><script src="<?php echo e(asset('assets/js/vendor/jquery.js')); ?>"></script>
   <script src="<?php echo e(asset('assets/js/vendor/waypoints.js')); ?>"></script>
   <script src="<?php echo e(asset('assets/js/bootstrap-bundle.js')); ?>"></script>
   <script src="<?php echo e(asset('assets/js/meanmenu.js')); ?>"></script>
   <script src="<?php echo e(asset('assets/js/swiper-bundle.js')); ?>"></script>
   <script src="<?php echo e(asset('assets/js/owl-carousel.js')); ?>"></script>
   <script src="<?php echo e(asset('assets/js/magnific-popup.js')); ?>"></script>
   <script src="<?php echo e(asset('assets/js/parallax.js')); ?>"></script>
   <script src="<?php echo e(asset('assets/js/backtotop.js')); ?>"></script>
   <script src="<?php echo e(asset('assets/js/nice-select.js')); ?>"></script>
   <script src="<?php echo e(asset('assets/js/counterup.js')); ?>"></script>
   <script src="<?php echo e(asset('assets/js/countdown.min.js')); ?>"></script>
   <script src="<?php echo e(asset('assets/js/wow.js')); ?>"></script>
   <script src="<?php echo e(asset('assets/js/ui-slider-range.js')); ?>"></script>
   <script src="<?php echo e(asset('assets/js/isotope-pkgd.js')); ?>"></script>
   <script src="<?php echo e(asset('assets/js/imagesloaded-pkgd.js')); ?>"></script>
   <script src="<?php echo e(asset('assets/js/ajax-form.js')); ?>"></script>
   <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
   <?php echo \Livewire\Livewire::scripts(); ?>

</body>
</html><?php /**PATH C:\xampp\htdocs\wworganic\resources\views/layouts/guest.blade.php ENDPATH**/ ?>