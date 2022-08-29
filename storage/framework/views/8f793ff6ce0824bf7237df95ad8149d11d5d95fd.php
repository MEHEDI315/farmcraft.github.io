<main>
    <!-- Breadcrumb-area-start -->
    <div class="breadcrumb-area pt-10 pb-10">
       <div class="container">
          <div class="row">
             <div class="col-12">
                <div class="breadcrumb__list">
                   <span><a href="/">Home</a></span>
                   <span><i class="fa-regular fa-angle-right"></i></span>
                   <span>Product Deatils</span>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!-- Breadcrumb-area-end -->

    <!-- Shop-details-area-start -->
    <div class="bd__shop-details-area pt-110 pb-75">
       <div class="container small-container">
          <div class="row">
             <div class="col-lg-12 col-md-12">
                <div class="bd__shop-details-inner mb-55">
                   <div class="row">
                      <div class="col-md-6">
                         <div class="product-details__thumb-inner small-device p-relative">
                            <div class="bd__shop-details-img-gallery mb-30">
                               <div class="product-details-active swiper-container">
                                  <div class="swiper-wrapper">
                                     <div class="swiper-slide">
                                        <div class="bd-product__details-large-img w-img">
                                           <img src="<?php echo e(asset('assets/img/trending/product')); ?>/<?php echo e($product->image); ?>" alt="<?php echo e($product->name); ?>">
                                        </div>
                                     </div>
                                     
                                  </div>
                               </div>
                            </div>
                            <div class="bd-product__details-small-img">
                               <div class="swiper-container product-details-nav">
                                 
                                    
                                
                                  <div class="swiper-wrapper">
                                    <?php $__currentLoopData = $popular_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                     <div class="swiper-slide m-img">
                                        <div class="product-small__img">
                                          <a href="<?php echo e(route('product.details',['slug'=>$p_product->slug])); ?>"></a>
                                           <img src="<?php echo e(asset('assets/img/product/details')); ?>/<?php echo e($p_product->image); ?>" alt="<?php echo e($p_product->name); ?>">
                                        </div>
                                     </div>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </div>
                                 
                               </div>
                            </div>
                            <!-- If we need navigation buttons -->
                            <div class="bd-product__details-nav">
                               <button class="product-details__button-prev"><i
                                     class="fa-regular fa-angle-left"></i></button>
                               <button class="product-details__button-next"><i
                                     class="fa-regular fa-angle-right"></i></button>
                            </div>
                         </div>
                      </div>
                      <div class="col-md-6">
                         <div class="modal-product-info shop-details-info">
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
                            <h3><?php echo e($product->name); ?></h3>
                            <div class="product-price">
                               <span>$100</span>
                               <del><?php echo e($product->regular_price); ?></del>
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
                               <a class="cart-btn bd-fill__btn" href="<?php echo e(route('product.details',['slug'=>$product->slug])); ?>" data-toggle="tooltip"
                                  data-placement="top" title="Add to Cart" data-bs-toggle="modal" wire:click.prevent="store(<?php echo e($product->id); ?>,'<?php echo e($product->name); ?>',<?php echo e($product->regular_price); ?>)"><i
                                     class="fal fa-cart-arrow-down"  ></i>Add to Cart</a>
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
                <!-- Shop Tab Start -->
                <div class="product_info-faq-area pt-50">
                   <nav class="product-details-tab">
                      <div class="nav nav-tabs" id="nav-tab" role="tablist">
                         <a class="nav-item nav-link show" id="nav-general-tab" data-bs-toggle="tab"
                            href="#nav-general" role="tab" aria-selected="false">Description</a>
                         <a class="nav-item nav-link active" id="nav-seller-tab" data-bs-toggle="tab"
                            href="#nav-seller" role="tab" aria-selected="true">Reviews</a>
                      </div>
                   </nav>
                   <div class="tab-content product-details-content" id="nav-tabContent">
                      <div class="tab-pane fade" id="nav-general" role="tabpanel">
                         <div class="tabs-wrapper mt-35 mb-40">
                            <div class="product__details-des">
                               <p><?php echo e($product->description); ?></p>
                            </div>
                         </div>
                      </div>
                      <div class="tab-pane fade active show" id="nav-seller" role="tabpanel">
                         <div class="tabs-wrapper mt-35 mb-50">
                            <div class="course-review-item mb-30">
                               <div class="course-reviews-img">
                                  <a href="#"><img src="<?php echo e(asset('assets/img/testimonial/1.jpg')); ?>" alt="image not found"></a>
                               </div>
                               <div class="course-review-list">
                                  <h5><a href="#">Sotapdi Kunda</a></h5>
                                  <div class="course-start-icon">
                                     <i class="fas fa-star"></i>
                                     <i class="fas fa-star"></i>
                                     <i class="fas fa-star"></i>
                                     <i class="fas fa-star"></i>
                                     <i class="fas fa-star"></i>
                                     <span>55 min ago</span>
                                  </div>
                                  <p>Very clean and organized with easy to follow tutorials, Exercises, and
                                     solutions.
                                     This course does start from the beginning with very little knowledge and
                                     gives a
                                     great overview of common tools used for data science and progresses into
                                     more
                                     complex concepts and ideas.</p>
                               </div>
                            </div>
                            <div class="course-review-item mb-30">
                               <div class="course-reviews-img">
                                  <a href="#"><img src="<?php echo e(asset('assets/img/testimonial/2.jpg')); ?>" alt="image not found"></a>
                               </div>
                               <div class="course-review-list">
                                  <h5><a href="#">Samantha</a></h5>
                                  <div class="course-start-icon">
                                     <i class="fas fa-star"></i>
                                     <i class="fas fa-star"></i>
                                     <i class="fas fa-star"></i>
                                     <i class="fas fa-star"></i>
                                     <i class="fas fa-star"></i>
                                     <span>45 min ago</span>
                                  </div>
                                  <p>The course is good at explaining very basic intuition of the concepts. It
                                     will get
                                     you scratching the surface so to say. where this course is unique is the
                                     implementation methods are so well defined Thank you to the team !.</p>
                               </div>
                            </div>
                            <div class="course-review-item mb-30">
                               <div class="course-reviews-img">
                                  <a href="#"><img src="<?php echo e(asset('assets/img/testimonial/3.jpg')); ?>" alt="image not found"></a>
                               </div>
                               <div class="course-review-list">
                                  <h5><a href="#">Michell Mariya</a></h5>
                                  <div class="course-start-icon">
                                     <i class="fas fa-star"></i>
                                     <i class="fas fa-star"></i>
                                     <i class="fas fa-star"></i>
                                     <i class="fas fa-star"></i>
                                     <i class="fas fa-star"></i>
                                     <span>30 min ago</span>
                                  </div>
                                  <p>This course is amazing..!
                                     I started this course as a beginner and learnt a lot. Instructors are great.
                                     Query
                                     handling can be improved.Overall very happy with the course.</p>
                               </div>
                            </div>
                            <div class="product__details-comment ">
                               <div class="comment-title mb-20">
                                  <h3>Add a review</h3>
                                  <p>Your email address will not be published. Required fields are marked *</p>
                               </div>
                               <div class="comment-rating mb-20">
                                  <span>Overall ratings</span>
                                  <ul>
                                     <li><a href="#"><i class="fas fa-star"></i></a></li>
                                     <li><a href="#"><i class="fas fa-star"></i></a></li>
                                     <li><a href="#"><i class="fas fa-star"></i></a></li>
                                     <li><a href="#"><i class="fas fa-star"></i></a></li>
                                     <li><a href="#"><i class="fal fa-star"></i></a></li>
                                  </ul>
                               </div>
                               <div class="comment-input-box mb-20">
                                  <form action="#">
                                     <div class="row">
                                        <div class="col-xxl-12">
                                           <textarea placeholder="Your review"
                                              class="comment-input comment-textarea mb-20"></textarea>
                                        </div>
                                        <div class="col-xxl-6 col-md-6">
                                           <div class="comment-input mb-20">
                                              <input type="text" placeholder="Your Name">
                                           </div>
                                        </div>
                                        <div class="col-xxl-6 col-md-6">
                                           <div class="comment-input mb-20">
                                              <input type="email" placeholder="Your Email">
                                           </div>
                                        </div>
                                        <div class="col-xxl-12">
                                           <div class="comment-submit">
                                              <button type="submit" class="bd-fill__btn">Submit</button>
                                           </div>
                                        </div>
                                     </div>
                                  </form>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <!-- Shop Tab End -->
             </div>
          </div>
       </div>
    </div>
    <!-- Shop-details-area-end -->

    <!-- Related-Product start -->
    <div class="bd-related-Product__area mb-95">
       <div class="small-container container">
          <div class="col-xxl-12 col-xl-12 col-lg-12">
             <div class="row align-items-center">
                <div class="col-xxl-4 col-xl-5 col-lg-4">
                   <div class="bd-section__title-wrapper mb-40">
                      <div class="bd-sm__section-title">
                         <h3>Related Product</h3>
                      </div>
                   </div>
                </div>
                <div class="col-xxl-8 col-xl-7 col-lg-8">
                   <div class="bd-trending__tab-wrapper mb-40 p-relative">
                      <div class="bd-tending-nav">
                         <nav>
                            <div class="nav nav-tabs" id="nav-tab-item" role="tablist">
                               <button class="nav-link active" id="nav-tab-1-tab" data-bs-toggle="tab"
                                  data-bs-target="#nav-tab-1" type="button" role="tab" aria-controls="nav-tab-1"
                                  aria-selected="true">View All</button>
                               <button class="nav-link" id="nav-tab-2-tab" data-bs-toggle="tab"
                                  data-bs-target="#nav-tab-2" type="button" role="tab" aria-controls="nav-tab-2"
                                  aria-selected="false">New Arrival</button>
                               <button class="nav-link" id="nav-tab-3-tab" data-bs-toggle="tab"
                                  data-bs-target="#nav-tab-3" type="button" role="tab" aria-controls="nav-tab-3"
                                  aria-selected="false">Best Sale</button>
                               <button class="nav-link" id="nav-tab-4-tab" data-bs-toggle="tab"
                                  data-bs-target="#nav-tab-4" type="button" role="tab" aria-controls="nav-tab-4"
                                  aria-selected="false">Featured</button>
                            </div>
                         </nav>
                      </div>
                      <!-- If we need navigation buttons -->
                      <div class="bd-trending__navigation">
                         <button class="trending-button-prev"><i class="fa-regular fa-angle-left"></i></button>
                         <button class="trending-button-next"><i class="fa-regular fa-angle-right"></i></button>
                      </div>
                   </div>
                </div>
             </div>
             <div class="bd-trending__item-wrapper">
                <div class="tab-content" id="nav-tabContent-2">
                   <div class="tab-pane fade show active" id="nav-tab-1" role="tabpanel"
                      aria-labelledby="nav-tab-1-tab">
                      
                      <div class="bd-trending-active swiper-container">
                        
                            
                        
                         <div class="swiper-wrapper">
                           <?php $__currentLoopData = $related_product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r_product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="swiper-slide">
                              
                               <div class="bd-trending__item text-center mb-30">
                                  <div class="bd-trending__product-thumb">
                                     <a href="<?php echo e(route('product.details',['slug'=>$r_product->slug])); ?>">
                                       <img
                                           src="<?php echo e(asset('assets/img/trending/fruits')); ?>/<?php echo e($r_product->image); ?>" alt="<?php echo e($r_product->name); ?>">
                                          </a>
                                     <div class="bd-product__tag">
                                        <span class="tag-text theme-bg">New</span>
                                     </div>
                                     <div class="bd-product__action">
                                        <a class="cart-btn" href="javascript:void(0)" data-toggle="tooltip"
                                           data-placement="top" title="Quick View" data-bs-toggle="modal"><i
                                              class="fal fa-cart-arrow-down"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Quick Shop"
                                           data-bs-toggle="modal" data-bs-target="#productmodal"><i
                                              class="fal fa-eye"></i></a>
                                        <a class="wishlist-btn" href="javascript:void(0)" data-toggle="tooltip"
                                           data-placement="top" title="Quick Wishlist" data-bs-toggle="modal"> <i
                                              class="fal fa-heart"></i></a>
                                     </div>
                                  </div>
                                  <div class="bd-teanding__content">
                                     <h4 class="bd-product__title"><a href="<?php echo e(route('product.details',['slug'=>$r_product->slug])); ?>"><?php echo e($r_product->name); ?></a></h4>
                                     <div class="bd-product__price">
                                        <span class="bd-product__old-price"><del>$<?php echo e($r_product->regular_price); ?></del></span><span
                                           class="bd-product__new-price">$9.00</span>
                                     </div>
                                     <div class="bd-product__icon">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                     </div>
                                  </div>
                               </div>
                               
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         </div>
                        
                      </div>
                   </div>
                   <div class="tab-pane fade" id="nav-tab-2" role="tabpanel" aria-labelledby="nav-tab-2-tab">
                      <div class="bd-trending-active swiper-container">
                         <div class="swiper-wrapper">
                            <div class="swiper-slide">
                               <div class="bd-trending__item text-center mb-30">
                                  <div class="bd-trending__product-thumb">
                                     <a href="product-details.html"><img
                                           src="assets/img/trending/fruits/fruits-13.png')}}" alt="fruits-thumb"></a>
                                     <div class="bd-product__tag">
                                        <span class="tag-text theme-bg">New</span>
                                     </div>
                                     <div class="bd-product__action">
                                        <a class="cart-btn" href="javascript:void(0)" data-toggle="tooltip"
                                           data-placement="top" title="Quick View" data-bs-toggle="modal"><i
                                              class="fal fa-cart-arrow-down"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Quick Shop"
                                           data-bs-toggle="modal" data-bs-target="#productmodal"><i
                                              class="fal fa-eye"></i></a>
                                        <a class="wishlist-btn" href="javascript:void(0)" data-toggle="tooltip"
                                           data-placement="top" title="Quick Wishlist" data-bs-toggle="modal"> <i
                                              class="fal fa-heart"></i></a>
                                     </div>
                                  </div>
                                  <div class="bd-teanding__content">
                                     <h4 class="bd-product__title"><a href="product-details.html">Kach Kogozi Labu</a>
                                     </h4>
                                     <div class="bd-product__price">
                                        <span class="bd-product__old-price"><del>$9.00</del></span><span
                                           class="bd-product__new-price">$9.00</span>
                                     </div>
                                     <div class="bd-product__icon">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="swiper-slide">
                               <div class="bd-trending__item text-center mb-30">
                                  <div class="bd-trending__product-thumb">
                                     <a href="product-details.html"><img
                                           src="assets/img/trending/fruits/fruits-16.png')}}" alt="fruits-thumb"></a>
                                     <div class="bd-product__action">
                                        <a class="cart-btn" href="javascript:void(0)" data-toggle="tooltip"
                                           data-placement="top" title="Quick View" data-bs-toggle="modal"><i
                                              class="fal fa-cart-arrow-down"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Quick Shop"
                                           data-bs-toggle="modal" data-bs-target="#productmodal"><i
                                              class="fal fa-eye"></i></a>
                                        <a class="wishlist-btn" href="javascript:void(0)" data-toggle="tooltip"
                                           data-placement="top" title="Quick Wishlist" data-bs-toggle="modal"> <i
                                              class="fal fa-heart"></i></a>
                                     </div>
                                  </div>
                                  <div class="bd-teanding__content">
                                     <h4 class="bd-product__title"><a href="product-details.html">Organic Tomato</a>
                                     </h4>
                                     <div class="bd-product__price">
                                        <span class="bd-product__old-price"><del>$9.00</del></span><span
                                           class="bd-product__new-price">$9.00</span>
                                     </div>
                                     <div class="bd-product__icon">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="swiper-slide">
                               <div class="bd-trending__item text-center mb-30">
                                  <div class="bd-trending__product-thumb">
                                     <a href="product-details.html"><img
                                           src="assets/img/trending/fruits/fruits-15.png')}}" alt="fruits-thumb"></a>
                                     <div class="bd-product__tag">
                                        <span class="tag-text danger-bg">50%</span>
                                     </div>
                                     <div class="bd-product__action">
                                        <a class="cart-btn" href="javascript:void(0)" data-toggle="tooltip"
                                           data-placement="top" title="Quick View" data-bs-toggle="modal"><i
                                              class="fal fa-cart-arrow-down"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Quick Shop"
                                           data-bs-toggle="modal" data-bs-target="#productmodal"><i
                                              class="fal fa-eye"></i></a>
                                        <a class="wishlist-btn" href="javascript:void(0)" data-toggle="tooltip"
                                           data-placement="top" title="Quick Wishlist" data-bs-toggle="modal"> <i
                                              class="fal fa-heart"></i></a>
                                     </div>
                                  </div>
                                  <div class="bd-teanding__content">
                                     <h4 class="bd-product__title"><a href="product-details.html">Hisma Green Tea</a>
                                     </h4>
                                     <div class="bd-product__price">
                                        <span class="bd-product__old-price"><del>$9.00</del></span><span
                                           class="bd-product__new-price">$9.00</span>
                                     </div>
                                     <div class="bd-product__icon">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="swiper-slide">
                               <div class="bd-trending__item text-center mb-30">
                                  <div class="bd-trending__product-thumb">
                                     <a href="product-details.html"><img
                                           src="assets/img/trending/fruits/fruits-14.png')}}" alt="fruits-thumb"></a>
                                     <div class="bd-product__tag">
                                        <span class="tag-text color-black yellow-bg">Sale</span>
                                     </div>
                                     <div class="bd-product__action">
                                        <a class="cart-btn" href="javascript:void(0)" data-toggle="tooltip"
                                           data-placement="top" title="Quick View" data-bs-toggle="modal"><i
                                              class="fal fa-cart-arrow-down"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Quick Shop"
                                           data-bs-toggle="modal" data-bs-target="#productmodal"><i
                                              class="fal fa-eye"></i></a>
                                        <a class="wishlist-btn" href="javascript:void(0)" data-toggle="tooltip"
                                           data-placement="top" title="Quick Wishlist" data-bs-toggle="modal"> <i
                                              class="fal fa-heart"></i></a>
                                     </div>
                                  </div>
                                  <div class="bd-teanding__content">
                                     <h4 class="bd-product__title"><a href="product-details.html">Fresh Payaz Milk</a>
                                     </h4>
                                     <div class="bd-product__price">
                                        <span class="bd-product__old-price"><del>$9.00</del></span><span
                                           class="bd-product__new-price">$9.00</span>
                                     </div>
                                     <div class="bd-product__icon">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="swiper-slide">
                               <div class="bd-trending__item text-center mb-30">
                                  <div class="bd-trending__product-thumb">
                                     <a href="product-details.html"><img
                                           src="assets/img/trending/fruits/fruits-15.png')}}" alt="fruits-thumb"></a>
                                     <div class="bd-product__tag">
                                        <span class="tag-text color-black yellow-bg">Sale</span>
                                     </div>
                                     <div class="bd-product__action">
                                        <a class="cart-btn" href="javascript:void(0)" data-toggle="tooltip"
                                           data-placement="top" title="Quick View" data-bs-toggle="modal"><i
                                              class="fal fa-cart-arrow-down"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Quick Shop"
                                           data-bs-toggle="modal" data-bs-target="#productmodal"><i
                                              class="fal fa-eye"></i></a>
                                        <a class="wishlist-btn" href="javascript:void(0)" data-toggle="tooltip"
                                           data-placement="top" title="Quick Wishlist" data-bs-toggle="modal"> <i
                                              class="fal fa-heart"></i></a>
                                     </div>
                                  </div>
                                  <div class="bd-teanding__content">
                                     <h4 class="bd-product__title"><a href="product-details.html">Fresh Payaz Milk</a>
                                     </h4>
                                     <div class="bd-product__price">
                                        <span class="bd-product__old-price"><del>$9.00</del></span><span
                                           class="bd-product__new-price">$9.00</span>
                                     </div>
                                     <div class="bd-product__icon">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="tab-pane fade" id="nav-tab-3" role="tabpanel" aria-labelledby="nav-tab-3-tab">
                      <div class="bd-trending-active swiper-container">
                         <div class="swiper-wrapper">
                            <div class="swiper-slide">
                               <div class="bd-trending__item text-center mb-30">
                                  <div class="bd-trending__product-thumb">
                                     <a href="product-details.html"><img
                                           src="assets/img/trending/fruits/fruits-07.png')}}" alt="fruits-thumb"></a>
                                     <div class="bd-product__tag">
                                        <span class="tag-text theme-bg">New</span>
                                     </div>
                                     <div class="bd-product__action">
                                        <a class="cart-btn" href="javascript:void(0)" data-toggle="tooltip"
                                           data-placement="top" title="Quick View" data-bs-toggle="modal"><i
                                              class="fal fa-cart-arrow-down"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Quick Shop"
                                           data-bs-toggle="modal" data-bs-target="#productmodal"><i
                                              class="fal fa-eye"></i></a>
                                        <a class="wishlist-btn" href="javascript:void(0)" data-toggle="tooltip"
                                           data-placement="top" title="Quick Wishlist" data-bs-toggle="modal"> <i
                                              class="fal fa-heart"></i></a>
                                     </div>
                                  </div>
                                  <div class="bd-teanding__content">
                                     <h4 class="bd-product__title"><a href="product-details.html">Kach Kogozi Labu</a>
                                     </h4>
                                     <div class="bd-product__price">
                                        <span class="bd-product__old-price"><del>$9.00</del></span><span
                                           class="bd-product__new-price">$9.00</span>
                                     </div>
                                     <div class="bd-product__icon">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="swiper-slide">
                               <div class="bd-trending__item text-center mb-30">
                                  <div class="bd-trending__product-thumb">
                                     <a href="product-details.html"><img
                                           src="assets/img/trending/fruits/fruits-08.png')}}" alt="fruits-thumb"></a>
                                     <div class="bd-product__action">
                                        <a class="cart-btn" href="javascript:void(0)" data-toggle="tooltip"
                                           data-placement="top" title="Quick View" data-bs-toggle="modal"><i
                                              class="fal fa-cart-arrow-down"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Quick Shop"
                                           data-bs-toggle="modal" data-bs-target="#productmodal"><i
                                              class="fal fa-eye"></i></a>
                                        <a class="wishlist-btn" href="javascript:void(0)" data-toggle="tooltip"
                                           data-placement="top" title="Quick Wishlist" data-bs-toggle="modal"> <i
                                              class="fal fa-heart"></i></a>
                                     </div>
                                  </div>
                                  <div class="bd-teanding__content">
                                     <h4 class="bd-product__title"><a href="product-details.html">Organic Tomato</a>
                                     </h4>
                                     <div class="bd-product__price">
                                        <span class="bd-product__old-price"><del>$9.00</del></span><span
                                           class="bd-product__new-price">$9.00</span>
                                     </div>
                                     <div class="bd-product__icon">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="swiper-slide">
                               <div class="bd-trending__item text-center mb-30">
                                  <div class="bd-trending__product-thumb">
                                     <a href="product-details.html"><img
                                           src="assets/img/trending/fruits/fruits-09.png')}}" alt="fruits-thumb"></a>
                                     <div class="bd-product__tag">
                                        <span class="tag-text danger-bg">50%</span>
                                     </div>
                                     <div class="bd-product__action">
                                        <a class="cart-btn" href="javascript:void(0)" data-toggle="tooltip"
                                           data-placement="top" title="Quick View" data-bs-toggle="modal"><i
                                              class="fal fa-cart-arrow-down"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Quick Shop"
                                           data-bs-toggle="modal" data-bs-target="#productmodal"><i
                                              class="fal fa-eye"></i></a>
                                        <a class="wishlist-btn" href="javascript:void(0)" data-toggle="tooltip"
                                           data-placement="top" title="Quick Wishlist" data-bs-toggle="modal"> <i
                                              class="fal fa-heart"></i></a>
                                     </div>
                                  </div>
                                  <div class="bd-teanding__content">
                                     <h4 class="bd-product__title"><a href="product-details.html">Hisma Green Tea</a>
                                     </h4>
                                     <div class="bd-product__price">
                                        <span class="bd-product__old-price"><del>$9.00</del></span><span
                                           class="bd-product__new-price">$9.00</span>
                                     </div>
                                     <div class="bd-product__icon">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="swiper-slide">
                               <div class="bd-trending__item text-center mb-30">
                                  <div class="bd-trending__product-thumb">
                                     <a href="product-details.html"><img
                                           src="assets/img/trending/fruits/fruits-10.png')}}" alt="fruits-thumb"></a>
                                     <div class="bd-product__tag">
                                        <span class="tag-text color-black yellow-bg">Sale</span>
                                     </div>
                                     <div class="bd-product__action">
                                        <a class="cart-btn" href="javascript:void(0)" data-toggle="tooltip"
                                           data-placement="top" title="Quick View" data-bs-toggle="modal"><i
                                              class="fal fa-cart-arrow-down"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Quick Shop"
                                           data-bs-toggle="modal" data-bs-target="#productmodal"><i
                                              class="fal fa-eye"></i></a>
                                        <a class="wishlist-btn" href="javascript:void(0)" data-toggle="tooltip"
                                           data-placement="top" title="Quick Wishlist" data-bs-toggle="modal"> <i
                                              class="fal fa-heart"></i></a>
                                     </div>
                                  </div>
                                  <div class="bd-teanding__content">
                                     <h4 class="bd-product__title"><a href="product-details.html">Fresh Payaz Milk</a>
                                     </h4>
                                     <div class="bd-product__price">
                                        <span class="bd-product__old-price"><del>$9.00</del></span><span
                                           class="bd-product__new-price">$9.00</span>
                                     </div>
                                     <div class="bd-product__icon">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="swiper-slide">
                               <div class="bd-trending__item text-center mb-30">
                                  <div class="bd-trending__product-thumb">
                                     <a href="product-details.html"><img
                                           src="assets/img/trending/fruits/fruits-14.png')}}" alt="fruits-thumb"></a>
                                     <div class="bd-product__tag">
                                        <span class="tag-text color-black yellow-bg">Sale</span>
                                     </div>
                                     <div class="bd-product__action">
                                        <a class="cart-btn" href="javascript:void(0)" data-toggle="tooltip"
                                           data-placement="top" title="Quick View" data-bs-toggle="modal"><i
                                              class="fal fa-cart-arrow-down"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Quick Shop"
                                           data-bs-toggle="modal" data-bs-target="#productmodal"><i
                                              class="fal fa-eye"></i></a>
                                        <a class="wishlist-btn" href="javascript:void(0)" data-toggle="tooltip"
                                           data-placement="top" title="Quick Wishlist" data-bs-toggle="modal"> <i
                                              class="fal fa-heart"></i></a>
                                     </div>
                                  </div>
                                  <div class="bd-teanding__content">
                                     <h4 class="bd-product__title"><a href="product-details.html">Fresh Payaz Milk</a>
                                     </h4>
                                     <div class="bd-product__price">
                                        <span class="bd-product__old-price"><del>$9.00</del></span><span
                                           class="bd-product__new-price">$9.00</span>
                                     </div>
                                     <div class="bd-product__icon">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                   <div class="tab-pane fade" id="nav-tab-4" role="tabpanel" aria-labelledby="nav-tab-4-tab">
                      <div class="bd-trending-active swiper-container">
                         <div class="swiper-wrapper">
                            <div class="swiper-slide">
                               <div class="bd-trending__item text-center mb-30">
                                  <div class="bd-trending__product-thumb">
                                     <a href="product-details.html"><img
                                           src="assets/img/trending/fruits/fruits-02.png')}}" alt="trending-thumb"></a>
                                     <div class="bd-product__tag">
                                        <span class="tag-text theme-bg">New</span>
                                     </div>
                                     <div class="bd-product__action">
                                        <a class="cart-btn" href="javascript:void(0)" data-toggle="tooltip"
                                           data-placement="top" title="Quick View" data-bs-toggle="modal"><i
                                              class="fal fa-cart-arrow-down"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Quick Shop"
                                           data-bs-toggle="modal" data-bs-target="#productmodal"><i
                                              class="fal fa-eye"></i></a>
                                        <a class="wishlist-btn" href="javascript:void(0)" data-toggle="tooltip"
                                           data-placement="top" title="Quick Wishlist" data-bs-toggle="modal"> <i
                                              class="fal fa-heart"></i></a>
                                     </div>
                                  </div>
                                  <div class="bd-teanding__content">
                                     <h4 class="bd-product__title"><a href="product-details.html">Kach Kogozi Labu</a>
                                     </h4>
                                     <div class="bd-product__price">
                                        <span class="bd-product__old-price"><del>$9.00</del></span><span
                                           class="bd-product__new-price">$9.00</span>
                                     </div>
                                     <div class="bd-product__icon">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="swiper-slide">
                               <div class="bd-trending__item text-center mb-30">
                                  <div class="bd-trending__product-thumb">
                                     <a href="product-details.html"><img
                                           src="assets/img/trending/fruits/fruits-14.png')}}" alt="product-thumb"></a>
                                     <div class="bd-product__action">
                                        <a class="cart-btn" href="javascript:void(0)" data-toggle="tooltip"
                                           data-placement="top" title="Quick View" data-bs-toggle="modal"><i
                                              class="fal fa-cart-arrow-down"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Quick Shop"
                                           data-bs-toggle="modal" data-bs-target="#productmodal"><i
                                              class="fal fa-eye"></i></a>
                                        <a class="wishlist-btn" href="javascript:void(0)" data-toggle="tooltip"
                                           data-placement="top" title="Quick Wishlist" data-bs-toggle="modal"> <i
                                              class="fal fa-heart"></i></a>
                                     </div>
                                  </div>
                                  <div class="bd-teanding__content">
                                     <h4 class="bd-product__title"><a href="product-details.html">Organic Tomato</a>
                                     </h4>
                                     <div class="bd-product__price">
                                        <span class="bd-product__old-price"><del>$9.00</del></span><span
                                           class="bd-product__new-price">$9.00</span>
                                     </div>
                                     <div class="bd-product__icon">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="swiper-slide">
                               <div class="bd-trending__item text-center mb-30">
                                  <div class="bd-trending__product-thumb">
                                     <a href="product-details.html"><img
                                           src="assets/img/trending/fruits/fruits-15.png')}}" alt="product-thumb"></a>
                                     <div class="bd-product__tag">
                                        <span class="tag-text danger-bg">50%</span>
                                     </div>
                                     <div class="bd-product__action">
                                        <a class="cart-btn" href="javascript:void(0)" data-toggle="tooltip"
                                           data-placement="top" title="Quick View" data-bs-toggle="modal"><i
                                              class="fal fa-cart-arrow-down"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Quick Shop"
                                           data-bs-toggle="modal" data-bs-target="#productmodal"><i
                                              class="fal fa-eye"></i></a>
                                        <a class="wishlist-btn" href="javascript:void(0)" data-toggle="tooltip"
                                           data-placement="top" title="Quick Wishlist" data-bs-toggle="modal"> <i
                                              class="fal fa-heart"></i></a>
                                     </div>
                                  </div>
                                  <div class="bd-teanding__content">
                                     <h4 class="bd-product__title"><a href="product-details.html">Hisma Green Tea</a>
                                     </h4>
                                     <div class="bd-product__price">
                                        <span class="bd-product__old-price"><del>$9.00</del></span><span
                                           class="bd-product__new-price">$9.00</span>
                                     </div>
                                     <div class="bd-product__icon">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="swiper-slide">
                               <div class="bd-trending__item text-center mb-30">
                                  <div class="bd-trending__product-thumb">
                                     <a href="product-details.html"><img
                                           src="assets/img/trending/fruits/fruits-16.png')}}" alt="product-thumb"></a>
                                     <div class="bd-product__tag">
                                        <span class="tag-text color-black yellow-bg">Sale</span>
                                     </div>
                                     <div class="bd-product__action">
                                        <a class="cart-btn" href="javascript:void(0)" data-toggle="tooltip"
                                           data-placement="top" title="Quick View" data-bs-toggle="modal"><i
                                              class="fal fa-cart-arrow-down"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Quick Shop"
                                           data-bs-toggle="modal" data-bs-target="#productmodal"><i
                                              class="fal fa-eye"></i></a>
                                        <a class="wishlist-btn" href="javascript:void(0)" data-toggle="tooltip"
                                           data-placement="top" title="Quick Wishlist" data-bs-toggle="modal"> <i
                                              class="fal fa-heart"></i></a>
                                     </div>
                                  </div>
                                  <div class="bd-teanding__content">
                                     <h4 class="bd-product__title"><a href="product-details.html">Fresh Payaz Milk</a>
                                     </h4>
                                     <div class="bd-product__price">
                                        <span class="bd-product__old-price"><del>$9.00</del></span><span
                                           class="bd-product__new-price">$9.00</span>
                                     </div>
                                     <div class="bd-product__icon">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="swiper-slide">
                               <div class="bd-trending__item text-center mb-30">
                                  <div class="bd-trending__product-thumb">
                                     <a href="product-details.html"><img
                                           src="assets/img/trending/fruits/fruits-10.png')}}" alt="fruits-thumb"></a>
                                     <div class="bd-product__tag">
                                        <span class="tag-text color-black yellow-bg">Sale</span>
                                     </div>
                                     <div class="bd-product__action">
                                        <a class="cart-btn" href="javascript:void(0)" data-toggle="tooltip"
                                           data-placement="top" title="Quick View" data-bs-toggle="modal"><i
                                              class="fal fa-cart-arrow-down"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Quick Shop"
                                           data-bs-toggle="modal" data-bs-target="#productmodal"><i
                                              class="fal fa-eye"></i></a>
                                        <a class="wishlist-btn" href="javascript:void(0)" data-toggle="tooltip"
                                           data-placement="top" title="Quick Wishlist" data-bs-toggle="modal"> <i
                                              class="fal fa-heart"></i></a>
                                     </div>
                                  </div>
                                  <div class="bd-teanding__content">
                                     <h4 class="bd-product__title"><a href="product-details.html">Fresh  Milk</a>
                                     </h4>
                                     <div class="bd-product__price">
                                        <span class="bd-product__old-price"><del>$9.00</del></span><span
                                           class="bd-product__new-price">$9.00</span>
                                     </div>
                                     <div class="bd-product__icon">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-regular fa-star"></i>
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
    </div>
    <!-- Related-Product end -->
 </main><?php /**PATH C:\xampp\htdocs\wworganic\resources\views/livewire/shop-details-component.blade.php ENDPATH**/ ?>