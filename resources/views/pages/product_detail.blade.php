@extends('layout.app')

@section('content')

   <!-- Breadcrumb Area start -->
   <section class="breadcrumb-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="breadcrumb-content">
                                <h1 class="breadcrumb-hrading">Single Product</h1>
                                <ul class="breadcrumb-links">
                                    <li><a href="index.html">Home</a></li>
                                    <li>Single Product</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Breadcrumb Area End -->
            <!-- Shop details Area start -->
            <section class="product-details-area mtb-60px">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="product-details-img product-details-tab">
                                <div class="zoompro-wrap zoompro-2">
                                    <div class="zoompro-border zoompro-span">
                                        <img class="zoompro" src="{{asset('storage/'.$product->product_image)}}" data-zoom-image="{{asset('storage/'.$product->product_image)}}" alt="" />
                                    </div>
                                </div>
                                <div id="gallery" class="product-dec-slider-2">
                                    <a class="active" data-image="{{asset('storage/'.$product->product_image)}}" data-zoom-image="{{asset('storage/'.$product->product_image)}}">
                                        <img src="{{asset('storage/'.$product->product_image)}}" alt="" />
                                    </a>

                                    <a class="active" data-image="{{asset('storage/'.$product->product_image)}}" data-zoom-image="{{asset('storage/'.$product->product_image)}}">
                                        <img src="{{asset('storage/'.$product->product_image)}}" alt="" />
                                    </a>

                                    <a class="active" data-image="{{asset('storage/'.$product->product_image)}}" data-zoom-image="{{asset('storage/'.$product->product_image)}}">
                                        <img src="{{asset('storage/'.$product->product_image)}}" alt="" />
                                    </a>

                                    <a class="active" data-image="{{asset('storage/'.$product->product_image)}}" data-zoom-image="{{asset('storage/'.$product->product_image)}}">
                                        <img src="{{asset('storage/'.$product->product_image)}}" alt="" />
                                    </a>
                                    
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <div class="product-details-content">
                                <h2>{{$product->product_name}}</h2>
                                <p class="reference">Reference:<span>#0001</span></p>
                                <div class="pro-details-rating-wrap">
                                    <div class="rating-product">
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                    </div>
                                    <span class="read-review"><a class="reviews" href="#">Read reviews (1)</a></span>
                                </div>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="old-price not-cut">₵{{$product->current_price}}</li>
                                    </ul>
                                </div>
                                <p>{{$product->product_description}}</p>
                                <!-- <div class="pro-details-list">
                                    <ul>
                                        <li>1</li>
                                        <li>1</li>
                                        <li>1</li>
                                    </ul>
                                </div> -->
                                <div class="pro-details-quality mt-0px">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                    </div>
                                    <div class="pro-details-cart btn-hover">
                                        <a href="https://paystack.com/pay/kbs-payment"> Purchase Now</a>
                                    </div>
                                </div>
                                <!-- <div class="pro-details-wish-com">
                                    <div class="pro-details-wishlist">
                                        <a href="#"><i class="ion-android-favorite-outline"></i>Add to wishlist</a>
                                    </div>
                                    <div class="pro-details-compare">
                                        <a href="#"><i class="ion-ios-shuffle-strong"></i>Add to compare</a>
                                    </div>
                                </div> -->
                                <div class="pro-details-social-info">
                                    <span>Share</span>
                                    <div class="social-info">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="ion-social-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-social-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-social-google"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-social-instagram"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="pro-details-policy">
                                    <!-- <ul>
                                        <li><img src="assets/images/icons/policy.png" alt="" /><span>Security Policy (Edit With Customer Reassurance Module)</span></li>
                                        <li><img src="assets/images/icons/policy-2.png" alt="" /><span>Delivery Policy (Edit With Customer Reassurance Module)</span></li>
                                        <li><img src="assets/images/icons/policy-3.png" alt="" /><span>Return Policy (Edit With Customer Reassurance Module)</span></li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Shop details Area End -->
            <!-- product details description area start -->
            <div class="description-review-area mb-60px">
                <div class="container">
                    <div class="description-review-wrapper">
                        <div class="description-review-topbar nav">
                            <a data-toggle="tab" href="#des-details1">Description</a>
                            <a class="active" data-toggle="tab" href="#des-details2">Product Details</a>
                            <!-- <a data-toggle="tab" href="#des-details3">Reviews (2)</a> -->
                        </div>
                        <div class="tab-content description-review-bottom">
                            <div id="des-details2" class="tab-pane active">
                                <div class="product-anotherinfo-wrapper">
                                    <ul>
                                        <li>Product Details</li>
                                    </ul>
                                </div>
                            </div>
                            <div id="des-details1" class="tab-pane">
                                <div class="product-description-wrapper">
                                    <p>{{$product->product_description}}</p>
                                </div>
                            </div>
                            <!-- <div id="des-details3" class="tab-pane">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="review-wrapper">
                                            <div class="single-review">
                                                <div class="review-img">
                                                </div>
                                                <div class="review-content">
                                                    <div class="review-top-wrap">
                                                        <div class="review-left">
                                                            <div class="review-name">
                                                                <h4>Mark Kweku</h4>
                                                            </div>
                                                            <div class="rating-product">
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                                <i class="ion-android-star"></i>
                                                            </div>
                                                        </div>
                                                        <div class="review-left">
                                                            <a href="#">Reply</a>
                                                        </div>
                                                    </div>
                                                    <div class="review-bottom">
                                                        <p>
                                                        It is good product
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="ratting-form-wrapper pl-50">
                                            <h3>Add a Review</h3>
                                            <div class="ratting-form">
                                                <form action="#">
                                                    <div class="star-box">
                                                        <span>Your rating:</span>
                                                        <div class="rating-product">
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                            <i class="ion-android-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="rating-form-style mb-10">
                                                                <input placeholder="Name" type="text" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="rating-form-style mb-10">
                                                                <input placeholder="Email" type="email" />
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="rating-form-style form-submit">
                                                                <textarea name="Your Review" placeholder="Message"></textarea>
                                                                <input type="submit" value="Submit" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- product details description area end -->
            <!-- Recent Add Product Area Start -->
            <section class="recent-add-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Section Title -->
                            <div class="section-title">
                                <h2>You Might Also Like</h2>
                                <p>Add Related products to weekly line up</p>
                            </div>
                            <!-- Section Title -->
                        </div>
                    </div>
                    <!-- Recent Product slider Start -->
                    <div class="recent-product-slider owl-carousel owl-nav-style">
                        <!-- Single Item -->
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img" src="assets/images/product-image/organic/product-11.jpg" alt="" />
                                    <img class="second-img" src="assets/images/product-image/organic/product-12.jpg" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                        <i class="ion-ios-search-strong"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2><a href="single-product.html" class="product-link">Originals Kaval Windbr...</a></h2>
                                <div class="rating-product">
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                </div>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="old-price">€23.90</li>
                                        <li class="current-price">€21.51</li>
                                        <li class="discount-price">-10%</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                    <li>
                                        <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                    </li>
                                    <li>
                                        <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                        <!-- Single Item -->
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img" src="assets/images/product-image/organic/product-1.jpg" alt="" />
                                    <img class="second-img" src="assets/images/product-image/organic/product-1.jpg" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                        <i class="ion-ios-search-strong"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2><a href="single-product.html" class="product-link">Juicy Couture Juicy Quil...</a></h2>
                                <div class="rating-product">
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                </div>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="old-price">€35.90</li>
                                        <li class="current-price">€34.21</li>
                                        <li class="discount-price">-5%</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                    <li>
                                        <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                    </li>
                                    <li>
                                        <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                        <!-- Single Item -->
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img" src="assets/images/product-image/organic/product-3.jpg" alt="" />
                                    <img class="second-img" src="assets/images/product-image/organic/product-4.jpg" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                        <i class="ion-ios-search-strong"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                <h2><a href="single-product.html" class="product-link">Brixton Patrol All Terrai...</a></h2>
                                <div class="rating-product">
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                </div>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="old-price not-cut">€29.90</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                    <li>
                                        <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                    </li>
                                    <li>
                                        <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                        <!-- Single Item -->
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img" src="assets/images/product-image/organic/product-6.jpg" alt="" />
                                    <img class="second-img" src="assets/images/product-image/organic/product-6.jpg" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                        <i class="ion-ios-search-strong"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Spo...</a></h2>
                                <div class="rating-product">
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                </div>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="old-price not-cut">€29.90</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                    <li>
                                        <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                    </li>
                                    <li>
                                        <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                        <!-- Single Item -->
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img" src="assets/images/product-image/organic/product-22.jpg" alt="" />
                                    <img class="second-img" src="assets/images/product-image/organic/product-15.jpg" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                        <i class="ion-ios-search-strong"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                <h2><a href="single-product.html" class="product-link">Calvin Klein Jeans Refle...</a></h2>
                                <div class="rating-product">
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                </div>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="old-price not-cut">€29.90</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                    <li>
                                        <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                    </li>
                                    <li>
                                        <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                        <!-- Single Item -->
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img" src="assets/images/product-image/organic/product-14.jpg" alt="" />
                                    <img class="second-img" src="assets/images/product-image/organic/product-14.jpg" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                        <i class="ion-ios-search-strong"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2><a href="single-product.html" class="product-link">Madden by Steve Madd...</a></h2>
                                <div class="rating-product">
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                </div>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="old-price">€12.90</li>
                                        <li class="current-price">€10.21</li>
                                        <li class="discount-price">-10%</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                    <li>
                                        <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                    </li>
                                    <li>
                                        <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </div>
                    <!-- Recent product slider end -->
                </div>
            </section>
            <!-- Recent product area end -->
            <!-- Recent Add Product Area Start -->
            <section class="recent-add-area mt-30 mb-30px">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Section Title -->
                            <div class="section-title">
                                <h2>In The Same Category</h2>
                                <p>16 other products in the same category:</p>
                            </div>
                            <!-- Section Title -->
                        </div>
                    </div>
                    <!-- Recent Product slider Start -->
                    <div class="recent-product-slider owl-carousel owl-nav-style">
                        <!-- Single Item -->
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img" src="assets/images/product-image/organic/product-15.jpg" alt="" />
                                    <img class="second-img" src="assets/images/product-image/organic/product-15.jpg" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                        <i class="ion-ios-search-strong"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2><a href="single-product.html" class="product-link">Originals Kaval Windbr...</a></h2>
                                <div class="rating-product">
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                </div>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="old-price">€23.90</li>
                                        <li class="current-price">€21.51</li>
                                        <li class="discount-price">-10%</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                    <li>
                                        <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                    </li>
                                    <li>
                                        <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                        <!-- Single Item -->
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img" src="assets/images/product-image/organic/product-14.jpg" alt="" />
                                    <img class="second-img" src="assets/images/product-image/organic/product-14.jpg" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                        <i class="ion-ios-search-strong"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2><a href="single-product.html" class="product-link">Juicy Couture Juicy Quil...</a></h2>
                                <div class="rating-product">
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                </div>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="old-price">€35.90</li>
                                        <li class="current-price">€34.21</li>
                                        <li class="discount-price">-5%</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                    <li>
                                        <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                    </li>
                                    <li>
                                        <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                        <!-- Single Item -->
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img" src="assets/images/product-image/organic/product-22.jpg" alt="" />
                                    <img class="second-img" src="assets/images/product-image/organic/product-23.jpg" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                        <i class="ion-ios-search-strong"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                <h2><a href="single-product.html" class="product-link">Brixton Patrol All Terrai...</a></h2>
                                <div class="rating-product">
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                </div>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="old-price not-cut">€29.90</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                    <li>
                                        <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                    </li>
                                    <li>
                                        <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                        <!-- Single Item -->
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img" src="assets/images/product-image/organic/product-9.jpg" alt="" />
                                    <img class="second-img" src="assets/images/product-image/organic/product-9.jpg" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                        <i class="ion-ios-search-strong"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                <h2><a href="single-product.html" class="product-link">New Balance Arishi Spo...</a></h2>
                                <div class="rating-product">
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                </div>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="old-price not-cut">€29.90</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                    <li>
                                        <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                    </li>
                                    <li>
                                        <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                        <!-- Single Item -->
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img" src="assets/images/product-image/organic/product-18.jpg" alt="" />
                                    <img class="second-img" src="assets/images/product-image/organic/product-18.jpg" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                        <i class="ion-ios-search-strong"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>GRAPHIC CORNER</span></a>
                                <h2><a href="single-product.html" class="product-link">Calvin Klein Jeans Refle...</a></h2>
                                <div class="rating-product">
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                </div>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="old-price not-cut">€29.90</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                    <li>
                                        <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                    </li>
                                    <li>
                                        <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                        <!-- Single Item -->
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img" src="assets/images/product-image/organic/product-7.jpg" alt="" />
                                    <img class="second-img" src="assets/images/product-image/organic/product-8.jpg" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                        <i class="ion-ios-search-strong"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2><a href="single-product.html" class="product-link">Madden by Steve Madd...</a></h2>
                                <div class="rating-product">
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                </div>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="old-price">€12.90</li>
                                        <li class="current-price">€10.21</li>
                                        <li class="discount-price">-10%</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                    <li>
                                        <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                    </li>
                                    <li>
                                        <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                        <!-- Single Item -->
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img" src="assets/images/product-image/organic/product-17.jpg" alt="" />
                                    <img class="second-img" src="assets/images/product-image/organic/product-16.jpg" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                        <i class="ion-ios-search-strong"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2><a href="single-product.html" class="product-link">Trans-Weight Hooded...</a></h2>
                                <div class="rating-product">
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                </div>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="old-price not-cut">€11.90</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                    <li>
                                        <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                    </li>
                                    <li>
                                        <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                        <!-- Single Item -->
                        <article class="list-product">
                            <div class="img-block">
                                <a href="single-product.html" class="thumbnail">
                                    <img class="first-img" src="assets/images/product-image/organic/product-9.jpg" alt="" />
                                    <img class="second-img" src="assets/images/product-image/organic/product-9.jpg" alt="" />
                                </a>
                                <div class="quick-view">
                                    <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                        <i class="ion-ios-search-strong"></i>
                                    </a>
                                </div>
                            </div>
                            <ul class="product-flag">
                                <li class="new">New</li>
                            </ul>
                            <div class="product-decs">
                                <a class="inner-link" href="shop-4-column.html"><span>STUDIO DESIGN</span></a>
                                <h2><a href="single-product.html" class="product-link">Water and Wind Resist...</a></h2>
                                <div class="rating-product">
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                </div>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="old-price not-cut">€11.90</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="add-to-link">
                                <ul>
                                    <li class="cart"><a class="cart-btn" href="#">ADD TO CART </a></li>
                                    <li>
                                        <a href="wishlist.html"><i class="ion-android-favorite-outline"></i></a>
                                    </li>
                                    <li>
                                        <a href="compare.html"><i class="ion-ios-shuffle-strong"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                        <!-- Single Item -->
                    </div>
                    <!-- Recent product slider end -->
                </div>
            </section>
            <!-- Recent product area end -->

@endsection