


   <!-- Body main wrapper start -->
   <main>
    <!-- Breadcrumb-area-start -->
    <div class="breadcrumb-area pt-10 pb-10">
       <div class="container">
          <div class="row">
             <div class="col-12">
                <div class="breadcrumb__list">
                   <span><a href="/">Home</a></span>
                   <span><i class="fa-regular fa-angle-right"></i></span>
                   <span>Product Category</span>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!-- Breadcrumb-area-end -->

    <!-- Shop-area-start -->
    <section class="bd-shop__area pt-110 pb-85">
       <div class="container">
          <div class="row">
             <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-8">
                <div class="bd-sidebar__widget-warpper mb-60">
                   <div class="bd-product__filters">
                      <div class="bd-filter__widget child-content-hidden">
                         <h4 class="bd-filter__widget-title drop-btn">Categories</h4>
                         <h4 class="bd-filter__widget-title drop-btn">{{ $category_name }}</h4>
                         <div class="bd-filter__content">
                            <div class="bd-product__check">
                               <ul>
                                  @foreach ($categories as $category )
                                     
                                  
                                  <li> 
                                        <a href="{{ route('product.category',['category_slug'=>$category->slug])}}" class="check-input" type="checkbox" id="s-01"> 
                                            <label class="check-label" for="s-01">{{ $category->name }}</label></a>
                                  </li>
                                  
                                  @endforeach
                               </ul>
                            </div>
                         </div>
                      </div>
                      <div class="bd-filter__widget child-content-hidden">
                         <h4 class="bd-filter__widget-title drop-btn">Price</h4>
                         <div class="bd-filter__price">
                            <div class="slider-range">
                               <div class="slider-range-bar"></div>
                               <p>
                                  <label for="s-amount">Price :</label>
                                  <input type="text" id="s-amount" class="amount" readonly>
                                  <span>Filter</span>
                               </p>
                            </div>
                         </div>
                      </div>
                      <div class="bd-filter__widget child-content-hidden">
                         <h4 class="bd-filter__widget-title drop-btn">Ratings</h4>
                         <div class="bd-filter__content">
                            <div class="bd-singel__rating">
                               <input class="radio-box" type="radio" id="s-st-1" name="rating">
                               <label class="radio-star" for="s-st-1">
                                  <i class="fa-solid fa-star"></i>
                                  <i class="fa-solid fa-star"></i>
                                  <i class="fa-solid fa-star"></i>
                                  <i class="fa-solid fa-star"></i>
                                  <i class="fa-light fa-star"></i>
                                  <span class="radio-item">(25)</span>
                               </label>
                            </div>
                            <div class="bd-singel__rating">
                               <input class="radio-box" type="radio" id="s-st-2" name="rating">
                               <label class="radio-star" for="s-st-2">
                                  <i class="fa-solid fa-star"></i>
                                  <i class="fa-solid fa-star"></i>
                                  <i class="fa-solid fa-star"></i>
                                  <i class="fa-light fa-star"></i>
                                  <i class="fa-light fa-star"></i>
                                  <span class="radio-item">(36)</span>
                               </label>
                            </div>
                            <div class="bd-singel__rating">
                               <input class="radio-box" type="radio" id="s-st-3" name="rating">
                               <label class="radio-star" for="s-st-3">
                                  <i class="fa-solid fa-star"></i>
                                  <i class="fa-solid fa-star"></i>
                                  <i class="fa-light fa-star"></i>
                                  <i class="fa-light fa-star"></i>
                                  <i class="fa-light fa-star"></i>
                                  <span class="radio-item">(12)</span>
                               </label>
                            </div>
                            <div class="bd-singel__rating">
                               <input class="radio-box" type="radio" id="s-st-4" name="rating">
                               <label class="radio-star" for="s-st-4">
                                  <i class="fa-solid fa-star"></i>
                                  <i class="fa-solid fa-star"></i>
                                  <i class="fa-light fa-star"></i>
                                  <i class="fa-light fa-star"></i>
                                  <i class="fa-light fa-star"></i>
                                  <span class="radio-item">(20)</span>
                               </label>
                            </div>
                            <div class="bd-singel__rating">
                               <input class="radio-box" type="radio" id="s-st-5" name="rating">
                               <label class="radio-star" for="s-st-5">
                                  <i class="fa-solid fa-star"></i>
                                  <i class="fa-light fa-star"></i>
                                  <i class="fa-light fa-star"></i>
                                  <i class="fa-light fa-star"></i>
                                  <i class="fa-light fa-star"></i>
                                  <span class="radio-item">(11)</span>
                               </label>
                            </div>
                         </div>
                      </div>
                      <div class="bd-filter__widget child-content-hidden">
                         <div class="bd-filter__content">
                            <a href="product-details.html">
                               <div class="bd-flash___banner-item p-relative">
                                  <div class="bd-flash__banner-thumb w-img">
                                     <img src="assets/img/flash/flash-banner-03.jpg" alt="flash-banner">
                                  </div>
                                  <div class="bd-flash__banner-content">
                                     <h4>Freshly</h4>
                                     <h3>Maitta Potato</h3>
                                     <h6>From<span class="price">$9.00</span></h6>
                                  </div>
                                  <div class="bd-flash__banner-shape">
                                     <div class="text">
                                        <span>Hot</span>Item
                                     </div>
                                  </div>
                               </div>
                            </a>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="col-xxl-9 col-xl-8 col-lg-8">
                <div class="row">
                   <div class="col-xl-4">
                      <div class="bd-top__filter-search p-relative mb-30">
                         <form class="bd-top__filter-input" action="#">
                            <input type="text" placeholder="Search keyword...">
                            <button><i class="fa-regular fa-magnifying-glass"></i></button>
                         </form>
                      </div>
                   </div>
                   <div class="col-xl-8">
                      <div class="bd-filter__tab-inner mb-30">
                         <div class="bd-top__filter">
                            <div class="bd-Product__tab pl-5">
                               <ul class="nav nav-tabs" id="myTab" role="tablist">
                                  <li class="nav-item" role="presentation">
                                     <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                        aria-selected="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15.001"
                                           viewBox="0 0 15 15.001">
                                           <path id="Path_12058" data-name="Path 12058"
                                              d="M-1362.125-3804a.626.626,0,0,1-.625-.625v-2.5a.626.626,0,0,1,.625-.625h2.5a.625.625,0,0,1,.625.625v2.5a.625.625,0,0,1-.625.625Zm-5.624,0a.626.626,0,0,1-.626-.625v-2.5a.626.626,0,0,1,.626-.625h2.5a.625.625,0,0,1,.625.625v2.5a.625.625,0,0,1-.625.625Zm-5.625,0a.625.625,0,0,1-.625-.625v-2.5a.625.625,0,0,1,.625-.625h2.5a.625.625,0,0,1,.625.625v2.5a.625.625,0,0,1-.625.625Zm11.249-5.625a.626.626,0,0,1-.625-.625v-2.5a.626.626,0,0,1,.625-.625h2.5a.626.626,0,0,1,.625.625v2.5a.625.625,0,0,1-.625.625Zm-5.624,0a.626.626,0,0,1-.626-.625v-2.5a.626.626,0,0,1,.626-.625h2.5a.626.626,0,0,1,.625.625v2.5a.625.625,0,0,1-.625.625Zm-5.625,0a.625.625,0,0,1-.625-.625v-2.5a.626.626,0,0,1,.625-.625h2.5a.626.626,0,0,1,.625.625v2.5a.625.625,0,0,1-.625.625Zm11.249-5.625a.626.626,0,0,1-.625-.625v-2.5a.626.626,0,0,1,.625-.626h2.5a.626.626,0,0,1,.625.626v2.5a.625.625,0,0,1-.625.625Zm-5.624,0a.626.626,0,0,1-.626-.625v-2.5a.627.627,0,0,1,.626-.626h2.5a.626.626,0,0,1,.625.626v2.5a.625.625,0,0,1-.625.625Zm-5.625,0a.625.625,0,0,1-.625-.625v-2.5a.626.626,0,0,1,.625-.626h2.5a.626.626,0,0,1,.625.626v2.5a.625.625,0,0,1-.625.625Z"
                                              transform="translate(1374 3819)" fill="#777" />
                                        </svg>

                                     </button>
                                  </li>
                                  <li class="nav-item" role="presentation">
                                     <button class="nav-link" id="shop-filter-bar" data-bs-toggle="tab"
                                        data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                                        aria-selected="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17.3" height="15"
                                           viewBox="0 0 17.3 15">
                                           <path id="Path_12057" data-name="Path 12057"
                                              d="M-2514-4232a1.5,1.5,0,0,1,1.5-1.5,1.5,1.5,0,0,1,1.5,1.5,1.5,1.5,0,0,1-1.5,1.5A1.5,1.5,0,0,1-2514-4232Zm6.179,1.328a1.236,1.236,0,0,1-1.236-1.235,1.236,1.236,0,0,1,1.236-1.236h9.885a1.235,1.235,0,0,1,1.236,1.236,1.235,1.235,0,0,1-1.236,1.235ZM-2514-4238a1.5,1.5,0,0,1,1.5-1.5,1.5,1.5,0,0,1,1.5,1.5,1.5,1.5,0,0,1-1.5,1.5A1.5,1.5,0,0,1-2514-4238Zm6.179,1.15a1.236,1.236,0,0,1-1.236-1.235,1.236,1.236,0,0,1,1.236-1.236h9.885a1.235,1.235,0,0,1,1.236,1.236,1.235,1.235,0,0,1-1.236,1.235ZM-2514-4244a1.5,1.5,0,0,1,1.5-1.5,1.5,1.5,0,0,1,1.5,1.5,1.5,1.5,0,0,1-1.5,1.5A1.5,1.5,0,0,1-2514-4244Zm6.179.971a1.236,1.236,0,0,1-1.236-1.235,1.236,1.236,0,0,1,1.236-1.236h9.885a1.235,1.235,0,0,1,1.236,1.236,1.235,1.235,0,0,1-1.236,1.235Z"
                                              transform="translate(2514 4245.5)" fill="#777" />
                                        </svg>

                                     </button>
                                  </li>
                               </ul>
                            </div>
                         </div>
                         <div class="bd-sort__type-filter" >
                            <select class="sorting-list" name="sorting-list" wire.model="sorting">
                               <option value="1">Default</option>
                               <option value="2">Newly published</option>
                               <option value="3">Most popular</option>
                               
                            </select>
                         </div>
                      </div>
                   </div>
                </div>
               
                   
                
                <div class="row">
                   <div class="col-xl-12">
                      <div class="bd-shop__wrapper">
                         <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel"
                               aria-labelledby="home-tab">
                               <div class="bd-trending__item-wrapper">
                                  
                                  <div class="row">

                                     @foreach ($products as $product )
                                     <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                        
                                        <div class="bd-trending__item text-center mb-30">
                                          
                                           <div class="bd-trending__product-thumb border-5">
                                              <a href="{{ route('product.details',['slug'=>$product->slug])}}"><img
                                                    src="{{ asset('assets/img/product') }}/{{ $product->image }}"
                                                    alt="{{ $product->name }}"></a>
                                              <div class="bd-product__tag">
                                                 <span class="tag-text theme-bg">New</span>
                                              </div>
                                              <div class="bd-product__action">
                                                 <a class="cart-btn" href="javascript:void(0)" data-toggle="tooltip"
                                                    data-placement="top" title="Quick View" data-bs-toggle="modal" wire:click.prevent="store({{ $product->id}},'{{$product->name}}',{{ $product->regular_price }})">

                                                    <i class="fal fa-cart-arrow-down"></i></a>
                                                 <a href="#" data-toggle="tooltip" data-placement="top"
                                                    title="Quick Shop" data-bs-toggle="modal"
                                                    data-bs-target="#productmodal"><i class="fal fa-eye"></i></a>
                                                 <a class="wishlist-btn" href="javascript:void(0)"
                                                    data-toggle="tooltip" data-placement="top" title="Quick Wishlist"
                                                    data-bs-toggle="modal"> <i class="fal fa-heart"></i></a>
                                              </div>
                                           </div>
                                           <div class="bd-trending__content">
                                              <h4 class="bd-product__title"><a href="product-details.html">{{ $product->name }}</a></h4>
                                              <div class="bd-product__price">
                                                 <span class="bd-product__old-price"><del>${{ $product->regular_price }}</del></span><span
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
                                     @endforeach
                                     </div>
                                    
                                  </div>
                                 
                               </div>
                            </div>
                            
                            
                         </div>
                      </div>
                   </div>
                </div>
             
                <div class="row justify-content-center">
                   <div class="col-xxl-12">
                      <div class="bd-basic__pagination d-flex justify-content-center mt-20  mb-45">
                         <nav>
                            <ul>
                               {{-- <li><a href="# ">1</a></li>
                               <li class="active"><a href="#">2</a></li>
                               <li><a href="#">3</a></li> --}}
                               <li><a href="#"><i class="fa-regular fa-angle-right"></i></a></li>
                            </ul>
                         </nav>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- Shop-area-ende -->

 </main>
 <!-- Body main wrapper end -->

 <!-- Footer area start -->
