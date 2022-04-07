@extends('layouts.user.webapp')
@section('usercontent')
<div class="main-container col1-layout content-color color">
    <div class="alo-block-slide">
        <div class="container-none flex-index">
            <div class="flexslider">
                <div id="slider-index" class="slides">
                    <div class="item"> 
                        <a  href="#"><img src="assets/images/slider1.jpg" alt="magicslider"></a>
                        <div class="bx-caption start play">
                            <div class="container">
                                <div class="text-slide">
                                    <h3 class="caption1">Sale</h3>
                                    <h3 class="caption2">Extra<strong>30%</strong>off</h3>
                                    <h2 class="caption3">When you buy from 2 or more...</h2>
                                    <p class="icon-anchor icons caption6"><span class="hidden">hidden</span></p>
                                    <a href="{{ url('/products') }}" class="btn-shop caption4">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item"> 
                        <a  href="#"><img src="assets/images/slider2.jpg" alt="magicslider"></a>
                        <div class="bx-caption ">
                            <div class="container">	
                                <div class="text-slide text-slide2">
                                    <h3 class="caption1">Men’s</h3>
                                    <h3 class="caption2">looks</h3>
                                    <h2 class="caption3">Summer</h2>
                                    <h2 class="caption5">2015</h2>
                                    <h3 class="caption4"><a href="{{ url('/products') }}" class="btn-shop">Shop Now</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <a  href="#"> <img src="assets/images/slider3.jpg" alt="magicslider"> </a>
                        <div class="bx-caption ">
                            <div class="container">
                                <div class="text-slide text-slide3">
                                    <h3 class="caption1">Mid-Season</h3>
                                    <h3 class="caption2">Must have for Women 2015</h3>
                                    <h3 class="caption4"><a href="{{ url('/products') }}" class="btn-shop">Shop Womens</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--- #slider-indexs-->
            </div> 
        </div>
    </div><!--- .alo-block-slide-->
    {{-- <div class="container">
        <div class="main">
            <div class="row">
                <div class="col-main col-lg-12">
                    <div class="block block-subscribe popup" style="display:none;">
                        <div id="popup-newsletter"> 
                            <a href="assets/images/popup-newletter.jpg"></a>
                            <form action="#" method="post" id="popup-newsletter-validate-detail">
                                <div class="block-content">
                                    <img src="assets/images/logo-newletter.png" alt=""/>
                                    <div class="form-subscribe-header block-title">
                                        <label for="newsletter">Subscribe</label>
                                    </div>
                                    <p>For all the latest news, products, collection...</p>
                                    <p>Subscribe now to get 20% off</p>
                                    <div class="newsletter-new clearfix">
                                        <div class="input-box"> 
                                            <input type="text" name="email" id="pnewsletter" title="Sign up for our newsletter" class="input-text required-entry validate-email" placeholder="Your email adress ..."/>
                                        </div>
                                        <div class="actions">
                                            <button type="submit" title="Subscribe" class="button">
                                                <span><i class="fa fa-play"></i></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="subscribe-bottom"> <input type="checkbox" />Don’t show this popup again</div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="std">
                        <div class="row">
                            <div class="pa-lines">
                                <div class="banner-top banner1">
                                    <div class="banner-inner size1of5">
                                        <div class="banner1-1">
                                            <div class="banner-inner-mall size1of2">
                                                <div class="banner-inner-content">
                                                    <a href="#"> 
                                                        <img class="img-responsive-normal" alt="Banner" src="http://placehold.it/270x270" /> 
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="banner-inner-big size1of3 no-margin">
                                                <div class="banner-inner-content">
                                                    <a href="#"> 
                                                        <img class="img-responsive-normal" alt="Banner" src="http://placehold.it/410x270" /> 
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="banner1-2">
                                            <div class="banner-inner-mall size1of3">
                                                <div class="banner-inner-content">
                                                    <a href="#"> <img class="img-responsive-normal" alt="Banner" src="http://placehold.it/410x270" /> </a>
                                                </div>
                                            </div>
                                            <div class="banner-inner-big size1of2 no-margin">
                                                <div class="banner-inner-content">
                                                    <a href="#"> <img class="img-responsive-normal" alt="Banner" src="http://placehold.it/270x270" /> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner-top banner2">
                                    <div class="banner-inner size1of4">
                                        <div class="banner-inner-content">
                                            <a href="#"> <img class="img-responsive-normal" alt="Banner" src="http://placehold.it/470x550" /> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-custom block-custom1">
                            <div class="block-title">
                                <h2><span class="title-top">New Arrival</span></h2>
                            </div>
                            <div class="featured-product-tab">
                                <div class="magicproduct">
                                    <div class="block-title-tabs">
                                        <ul class="magictabs">
                                            <li class="item active" data-type ="mc-featured"><span class ="title">Featured</span></li>
                                            <li class="item" data-type ="mc-bestseller"><span class ="title">Top Rated</span></li>
                                            <li class="item" data-type ="mc-latest"><span class ="title">Latest</span></li>
                                        </ul>
                                    </div>
                                    <div class="content-products">
                                        <div class="mage-magictabs mc-featured active">
                                            <div class="flexisel-content products-grid featured zoomOut play">
                                                <ul class="products-grid-rows">
                                                    <li class="item item-animate">
                                                        <div class="per-product">
                                                            <div class="images-container">
                                                                <div class="product-hover"> 
                                                                    <a href="#" title="Clemence Blouse" class="product-image">
                                                                        <img class="img-responsive" src="http://placehold.it/278x355" width="278" height="355" alt="Clemence Blouse" /> 
                                                                    </a>
                                                                </div>
                                                                <div class="actions-no hover-box">
                                                                    <div class="actions"> 
                                                                        <button type="button" title="Add to Cart" class="button btn-cart pull-left"><span><i class="icon-handbag icons"></i><span>Add to Cart</span></span></button>
                                                                        <ul class="add-to-links pull-left">
                                                                            <li class="pull-left">
                                                                                <a href="#" title="Add to Wishlist" class="link-wishlist"><i class="icon-heart icons"></i>Add to Wishlist</a>
                                                                            </li>
                                                                            <li class="pull-left">
                                                                                <span class="separator">|</span>
                                                                                <a href="#" title="Add to Compare" class="link-compare"><i class="icon-Files icon-stroke icons"></i>Add to Compare</a>
                                                                            </li>
                                                                            <li class="link-view pull-left"> 
                                                                                <a title="Quick View" href="#" class="link-quickview"><i class="icon-Search icon-stroke icons"></i>Quick View</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="products-textlink clearfix">
                                                                <h2 class="product-name">
                                                                    <a href="#">Clemence Blouse</a>
                                                                </h2>
                                                                <div class="price-box"> 
                                                                    <p class="regular-price" >
                                                                        <span class="price">$229.00</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item item-animate">
                                                        <div class="per-product">
                                                            <div class="images-container">
                                                                <div class="product-hover"> 
                                                                    <span class="sticker top-right">
                                                                        <span class="labelnew">New</span>
                                                                    </span>
                                                                    <a href="#" title="Short Sleeve Dress" class="product-image"> 
                                                                        <img class="img-responsive" src="http://placehold.it/278x355" width="278" height="355" alt="Short Sleeve Dress" /> 
                                                                    </a>
                                                                </div>
                                                                <div class="actions-no hover-box">
                                                                    <div class="actions"> 
                                                                        <button type="button" title="Add to Cart" class="button btn-cart pull-left">
                                                                            <span><i class="icon-handbag icons"></i><span>Add to Cart</span></span>
                                                                        </button>
                                                                        <ul class="add-to-links pull-left">
                                                                            <li class="pull-left">
                                                                                <a href="#" title="Add to Wishlist" class="link-wishlist"><i class="icon-heart icons"></i>Add to Wishlist</a>
                                                                            </li>
                                                                            <li class="pull-left">
                                                                                <span class="separator">|</span> 
                                                                                <a href="#" title="Add to Compare" class="link-compare"><i class="icon-Files icon-stroke icons"></i>Add to Compare</a>
                                                                            </li>
                                                                            <li class="link-view pull-left"> 
                                                                                <a title="Quick View" href="#" class="link-quickview"><i class="icon-Search icon-stroke icons"></i>Quick View</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="products-textlink clearfix">
                                                                <h2 class="product-name">
                                                                    <a href="#" title="Short Sleeve Dress">Short Sleeve Dress</a>
                                                                </h2>
                                                                <div class="price-box">
                                                                    <p class="old-price"> 
                                                                        <span class="price-label">Regular Price:</span>
                                                                        <span class="price"> $229.00 </span>
                                                                    </p>
                                                                    <p class="special-price">
                                                                        <span class="price-label">Special Price</span> 
                                                                        <span class="price"> $200.00 </span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item item-animate">
                                                        <div class="per-product">
                                                            <div class="images-container">
                                                                <div class="product-hover"> 
                                                                    <a href="#" title="Rocha Sleeve Sweater" class="product-image"> 
                                                                        <img class="img-responsive" src="http://placehold.it/278x355" width="278" height="355" alt="Rocha Sleeve Sweater" /> 
                                                                        <span class="product-img-back">
                                                                            <img class="img-responsive" src="http://placehold.it/278x355?text=hover" width="278" height="355" alt="Rocha Sleeve Sweater" />
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="actions-no hover-box">
                                                                    <div class="actions">
                                                                        <button type="button" title="Add to Cart" class="button btn-cart pull-left">
                                                                            <span><i class="icon-handbag icons"></i><span>Add to Cart</span></span>
                                                                        </button>
                                                                        <ul class="add-to-links pull-left">
                                                                            <li class="pull-left">
                                                                                <a href="#" title="Add to Wishlist" class="link-wishlist"><i class="icon-heart icons"></i>Add to Wishlist</a>
                                                                            </li>
                                                                            <li class="pull-left">
                                                                                <span class="separator">|</span> 
                                                                                <a href="#" title="Add to Compare" class="link-compare"><i class="icon-Files icon-stroke icons"></i>Add to Compare</a>
                                                                            </li>
                                                                            <li class="link-view pull-left">
                                                                                <a title="Quick View" href="#" class="link-quickview"><i class="icon-Search icon-stroke icons"></i>Quick View</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="products-textlink clearfix">
                                                                <h2 class="product-name"> 
                                                                    <a href="#" title="Rocha Sleeve Sweater">Rocha Sleeve Sweater</a>
                                                                </h2>
                                                                <div class="price-box"> 
                                                                    <p class="regular-price" >
                                                                        <span class="price">$229.00</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item item-animate">
                                                        <div class="per-product">
                                                            <div class="images-container">
                                                                <div class="product-hover">
                                                                    <span class="sticker top-right">
                                                                        <span class="labelhot">Hot</span>
                                                                    </span>
                                                                    <a href="#" title="Super Skinny in Tiger Camo" class="product-image"> 
                                                                        <img class="img-responsive" src="http://placehold.it/278x355" width="278" height="355" alt="Super Skinny in Tiger Camo" /> 
                                                                    </a>
                                                                </div>
                                                                <div class="actions-no hover-box">
                                                                    <div class="actions">
                                                                        <button type="button" title="Add to Cart" class="button btn-cart pull-left">
                                                                            <span>
                                                                                <i class="icon-handbag icons"></i><span>Add to Cart</span>
                                                                            </span>
                                                                        </button>
                                                                        <ul class="add-to-links pull-left">
                                                                            <li class="pull-left">
                                                                                <a href="#" title="Add to Wishlist" class="link-wishlist"><i class="icon-heart icons"></i>Add to Wishlist</a>
                                                                            </li>
                                                                            <li class="pull-left">
                                                                                <span class="separator">|</span> 
                                                                                <a href="#" title="Add to Compare" class="link-compare"><i class="icon-Files icon-stroke icons"></i>Add to Compare</a>
                                                                            </li>
                                                                            <li class="link-view pull-left"> 
                                                                                <a title="Quick View" href="#" class="link-quickview"><i class="icon-Search icon-stroke icons"></i>Quick View</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="products-textlink clearfix">
                                                                <h2 class="product-name"> 
                                                                    <a href="#" title="Super Skinny in Tiger Camo">Super Skinny in Tiger Camo</a>
                                                                </h2>
                                                                <div class="price-box"> 
                                                                    <p class="regular-price" >
                                                                        <span class="price">$229.00</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item item-animate">
                                                        <div class="per-product">
                                                            <div class="images-container">
                                                                <div class="product-hover">
                                                                    <a href="#" title="Peace Pot Broochea" class="product-image"> 
                                                                        <img class="img-responsive" src="http://placehold.it/278x355" width="278" height="355" alt="Peace Pot Broochea" />
                                                                    </a>
                                                                </div>
                                                                <div class="actions-no hover-box">
                                                                    <div class="actions"> 
                                                                        <button type="button" title="Add to Cart" class="button btn-cart pull-left">
                                                                            <span><i class="icon-handbag icons"></i><span>Add to Cart</span></span>
                                                                        </button>
                                                                        <ul class="add-to-links pull-left">
                                                                            <li class="pull-left">
                                                                                <a href="#" title="Add to Wishlist" class="link-wishlist"><i class="icon-heart icons"></i>Add to Wishlist</a>
                                                                            </li>
                                                                            <li class="pull-left">
                                                                                <span class="separator">|</span>
                                                                                <a href="#" title="Add to Compare" class="link-compare"><i class="icon-Files icon-stroke icons"></i>Add to Compare</a>
                                                                            </li>
                                                                            <li class="link-view pull-left"> 
                                                                                <a title="Quick View" href="#" class="link-quickview"><i class="icon-Search icon-stroke icons"></i>Quick View</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="products-textlink clearfix">
                                                                <h2 class="product-name"> 
                                                                    <a href="#" title="Peace Pot Broochea">Peace Pot Broochea</a>
                                                                </h2>
                                                                <div class="price-box">
                                                                    <p class="regular-price" >
                                                                        <span class="price">$229.00</span> 
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item item-animate">
                                                        <div class="per-product">
                                                            <div class="images-container">
                                                                <div class="product-hover"> 
                                                                    <a href="#" title="Achieve Zip Hoody" class="product-image">
                                                                        <img class="img-responsive" src="http://placehold.it/278x355" width="278" height="355" alt="Achieve Zip Hoody" /> 
                                                                    </a>
                                                                </div>
                                                                <div class="actions-no hover-box">
                                                                    <div class="actions">
                                                                        <button type="button" title="Add to Cart" class="button btn-cart pull-left">
                                                                            <span><i class="icon-handbag icons"></i><span>Add to Cart</span></span>
                                                                        </button>
                                                                        <ul class="add-to-links pull-left">
                                                                            <li class="pull-left">
                                                                                <a href="#" title="Add to Wishlist" class="link-wishlist"><i class="icon-heart icons"></i>Add to Wishlist</a>
                                                                            </li>
                                                                            <li class="pull-left">
                                                                                <span class="separator">|</span>
                                                                                <a href="#" title="Add to Compare" class="link-compare"><i class="icon-Files icon-stroke icons"></i>Add to Compare</a>
                                                                            </li>
                                                                            <li class="link-view pull-left"> 
                                                                                <a title="Quick View" href="#" class="link-quickview"><i class="icon-Search icon-stroke icons"></i>Quick View</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="products-textlink clearfix">
                                                                <h2 class="product-name"> 
                                                                    <a href="#" title="Achieve Zip Hoody">Achieve Zip Hoody</a>
                                                                </h2>
                                                                <div class="price-box"> 
                                                                    <p class="regular-price" >
                                                                        <span class="price">$229.00</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item item-animate">
                                                        <div class="per-product">
                                                            <div class="images-container">
                                                                <div class="product-hover">
                                                                    <a href="#" title="Brown Arrows Cushion" class="product-image">
                                                                        <img class="img-responsive" src="http://placehold.it/278x355" width="278" height="355" alt="Brown Arrows Cushion" /> 
                                                                    </a>
                                                                </div>
                                                                <div class="actions-no hover-box">
                                                                    <div class="actions"> 
                                                                        <button type="button" title="Add to Cart" class="button btn-cart pull-left">
                                                                            <span>
                                                                                <i class="icon-handbag icons"></i>
                                                                                <span>Add to Cart</span>
                                                                            </span>
                                                                        </button>
                                                                        <ul class="add-to-links pull-left">
                                                                            <li class="pull-left">
                                                                                <a href="#" title="Add to Wishlist" class="link-wishlist"><i class="icon-heart icons"></i>Add to Wishlist</a>
                                                                            </li>
                                                                            <li class="pull-left">
                                                                                <span class="separator">|</span>
                                                                                <a href="#" title="Add to Compare" class="link-compare"><i class="icon-Files icon-stroke icons"></i>Add to Compare</a>
                                                                            </li>
                                                                            <li class="link-view pull-left">
                                                                                <a title="Quick View" href="#" class="link-quickview"><i class="icon-Search icon-stroke icons"></i>Quick View</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="products-textlink clearfix">
                                                                <h2 class="product-name"> 
                                                                    <a href="#" title="Brown Arrows Cushion">Brown Arrows Cushion</a>
                                                                </h2>
                                                                <div class="price-box"> 
                                                                    <p class="regular-price" > 
                                                                        <span class="price">$229.00</span> 
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item item-animate">
                                                        <div class="per-product">
                                                            <div class="images-container">
                                                                <div class="product-hover"> 
                                                                    <span class="sticker top-right">
                                                                        <span class="labelsale">Sale</span>
                                                                    </span>
                                                                    <a href="#" title="Product Color" class="product-image">
                                                                        <img class="img-responsive" src="http://placehold.it/278x355" width="278" height="355" alt="Product Color" /> 
                                                                    </a>
                                                                </div>
                                                                <div class="actions-no hover-box">
                                                                    <div class="actions"> 
                                                                        <button type="button" title="Add to Cart" class="button btn-cart pull-left">
                                                                            <span>
                                                                                <i class="icon-handbag icons"></i>
                                                                                <span>Add to Cart</span>
                                                                            </span>
                                                                        </button>
                                                                        <ul class="add-to-links pull-left">
                                                                            <li class="pull-left">
                                                                                <a href="#" title="Add to Wishlist" class="link-wishlist"><i class="icon-heart icons"></i>Add to Wishlist</a>
                                                                            </li>
                                                                            <li class="pull-left">
                                                                                <span class="separator">|</span> 
                                                                                <a href="#" title="Add to Compare" class="link-compare"><i class="icon-Files icon-stroke icons"></i>Add to Compare</a>
                                                                            </li>
                                                                            <li class="link-view pull-left"> 
                                                                                <a title="Quick View" href="#" class="link-quickview"><i class="icon-Search icon-stroke icons"></i>Quick View</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="products-textlink clearfix">
                                                                <h2 class="product-name">
                                                                    <a href="#" title="Product Color">Product Color</a>
                                                                </h2>
                                                                <div class="price-box">
                                                                    <p class="old-price"> 
                                                                        <span class="price-label">Regular Price:</span>
                                                                        <span class="price"> $220.00 </span>
                                                                    </p>
                                                                    <p class="special-price">
                                                                        <span class="price-label">Special Price</span> 
                                                                        <span class="price"> $180.00 </span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!-- .mc-featured -->
                                        <div class="mage-magictabs mc-latest">
                                            <div class="flexisel-content products-grid featured zoomOut play">
                                                <ul class="products-grid-rows">
                                                    <li class="item item-animate">
                                                        <div class="per-product">
                                                            <div class="images-container">
                                                                <div class="product-hover"> 
                                                                    <span class="sticker top-left">
                                                                        <span class="labelnew">New</span>
                                                                    </span>
                                                                    <span class="sticker top-right">
                                                                        <span class="labelsale">Sale</span>
                                                                    </span> 
                                                                    <a href="#" title="Short Sleeve Dress" class="product-image"> 
                                                                        <img class="img-responsive" src="http://placehold.it/278x355" width="278" height="355" alt="Short Sleeve Dress" /> 
                                                                        <span class="product-img-back">
                                                                            <img class="img-responsive" src="http://placehold.it/278x355?text=hover" width="278" height="355" alt="Short Sleeve Dress" />
                                                                        </span> 
                                                                    </a>
                                                                </div>
                                                                <div class="actions-no hover-box">
                                                                    <div class="actions"> 
                                                                        <button type="button" title="Add to Cart" class="button btn-cart pull-left">
                                                                            <span><i class="icon-handbag icons"></i><span>Add to Cart</span></span>
                                                                        </button>
                                                                        <ul class="add-to-links pull-left">
                                                                            <li class="pull-left">
                                                                                <a href="#" title="Add to Wishlist" class="link-wishlist"><i class="icon-heart icons"></i>Add to Wishlist</a>
                                                                            </li>
                                                                            <li class="pull-left">
                                                                                <span class="separator">|</span> 
                                                                                <a href="#" title="Add to Compare" class="link-compare"><i class="icon-Files icon-stroke icons"></i>Add to Compare</a>
                                                                            </li>
                                                                            <li class="link-view pull-left"> 
                                                                                <a title="Quick View" href="#" class="link-quickview"><i class="icon-Search icon-stroke icons"></i>Quick View</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="products-textlink clearfix">
                                                                <h2 class="product-name">
                                                                    <a href="#" title="Short Sleeve Dress">Short Sleeve Dress</a>
                                                                </h2>
                                                                <div class="price-box">
                                                                    <p class="old-price"> 
                                                                        <span class="price-label">Regular Price:</span>
                                                                        <span class="price"> $229.00 </span>
                                                                    </p>
                                                                    <p class="special-price">
                                                                        <span class="price-label">Special Price</span> 
                                                                        <span class="price"> $200.00 </span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item item-animate">
                                                        <div class="per-product">
                                                            <div class="images-container">
                                                                <div class="product-hover"> 
                                                                    <a href="#" title="Rocha Sleeve Sweater" class="product-image"> 
                                                                        <img class="img-responsive" src="http://placehold.it/278x355" width="278" height="355" alt="Rocha Sleeve Sweater" /> 
                                                                        <span class="product-img-back">
                                                                            <img class="img-responsive" src="http://placehold.it/278x355?text=hover" width="278" height="355" alt="Rocha Sleeve Sweater" />
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="actions-no hover-box">
                                                                    <div class="actions">
                                                                        <button type="button" title="Add to Cart" class="button btn-cart pull-left">
                                                                            <span><i class="icon-handbag icons"></i><span>Add to Cart</span></span>
                                                                        </button>
                                                                        <ul class="add-to-links pull-left">
                                                                            <li class="pull-left">
                                                                                <a href="#" title="Add to Wishlist" class="link-wishlist"><i class="icon-heart icons"></i>Add to Wishlist</a>
                                                                            </li>
                                                                            <li class="pull-left">
                                                                                <span class="separator">|</span> 
                                                                                <a href="#" title="Add to Compare" class="link-compare"><i class="icon-Files icon-stroke icons"></i>Add to Compare</a>
                                                                            </li>
                                                                            <li class="link-view pull-left">
                                                                                <a title="Quick View" href="#" class="link-quickview"><i class="icon-Search icon-stroke icons"></i>Quick View</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="products-textlink clearfix">
                                                                <h2 class="product-name"> 
                                                                    <a href="#" title="Rocha Sleeve Sweater">Rocha Sleeve Sweater</a>
                                                                </h2>
                                                                <div class="price-box"> 
                                                                    <p class="regular-price" >
                                                                        <span class="price">$229.00</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item item-animate">
                                                        <div class="per-product">
                                                            <div class="images-container">
                                                                <div class="product-hover">
                                                                    <a href="#" title="Peace Pot Broochea" class="product-image"> 
                                                                        <img class="img-responsive" src="http://placehold.it/278x355" width="278" height="355" alt="Peace Pot Broochea" />
                                                                    </a>
                                                                </div>
                                                                <div class="actions-no hover-box">
                                                                    <div class="actions"> 
                                                                        <button type="button" title="Add to Cart" class="button btn-cart pull-left">
                                                                            <span><i class="icon-handbag icons"></i><span>Add to Cart</span></span>
                                                                        </button>
                                                                        <ul class="add-to-links pull-left">
                                                                            <li class="pull-left">
                                                                                <a href="#" title="Add to Wishlist" class="link-wishlist"><i class="icon-heart icons"></i>Add to Wishlist</a>
                                                                            </li>
                                                                            <li class="pull-left">
                                                                                <span class="separator">|</span>
                                                                                <a href="#" title="Add to Compare" class="link-compare"><i class="icon-Files icon-stroke icons"></i>Add to Compare</a>
                                                                            </li>
                                                                            <li class="link-view pull-left"> 
                                                                                <a title="Quick View" href="#" class="link-quickview"><i class="icon-Search icon-stroke icons"></i>Quick View</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="products-textlink clearfix">
                                                                <h2 class="product-name"> 
                                                                    <a href="#" title="Peace Pot Broochea">Peace Pot Broochea</a>
                                                                </h2>
                                                                <div class="price-box">
                                                                    <p class="regular-price" >
                                                                        <span class="price">$229.00</span> 
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item item-animate">
                                                        <div class="per-product">
                                                            <div class="images-container">
                                                                <div class="product-hover"> 
                                                                    <a href="#" title="Achieve Zip Hoody" class="product-image">
                                                                        <img class="img-responsive" src="http://placehold.it/278x355" width="278" height="355" alt="Achieve Zip Hoody" /> 
                                                                    </a>
                                                                </div>
                                                                <div class="actions-no hover-box">
                                                                    <div class="actions">
                                                                        <button type="button" title="Add to Cart" class="button btn-cart pull-left">
                                                                            <span><i class="icon-handbag icons"></i><span>Add to Cart</span></span>
                                                                        </button>
                                                                        <ul class="add-to-links pull-left">
                                                                            <li class="pull-left">
                                                                                <a href="#" title="Add to Wishlist" class="link-wishlist"><i class="icon-heart icons"></i>Add to Wishlist</a>
                                                                            </li>
                                                                            <li class="pull-left">
                                                                                <span class="separator">|</span>
                                                                                <a href="#" title="Add to Compare" class="link-compare"><i class="icon-Files icon-stroke icons"></i>Add to Compare</a>
                                                                            </li>
                                                                            <li class="link-view pull-left"> 
                                                                                <a title="Quick View" href="#" class="link-quickview"><i class="icon-Search icon-stroke icons"></i>Quick View</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="products-textlink clearfix">
                                                                <h2 class="product-name"> 
                                                                    <a href="#" title="Achieve Zip Hoody">Achieve Zip Hoody</a>
                                                                </h2>
                                                                <div class="price-box"> 
                                                                    <p class="regular-price" >
                                                                        <span class="price">$229.00</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item item-animate">
                                                        <div class="per-product">
                                                            <div class="images-container">
                                                                <div class="product-hover">
                                                                    <a href="#" title="Brown Arrows Cushion" class="product-image">
                                                                        <img class="img-responsive" src="http://placehold.it/278x355" width="278" height="355" alt="Brown Arrows Cushion" /> 
                                                                    </a>
                                                                </div>
                                                                <div class="actions-no hover-box">
                                                                    <div class="actions"> 
                                                                        <button type="button" title="Add to Cart" class="button btn-cart pull-left">
                                                                            <span>
                                                                                <i class="icon-handbag icons"></i>
                                                                                <span>Add to Cart</span>
                                                                            </span>
                                                                        </button>
                                                                        <ul class="add-to-links pull-left">
                                                                            <li class="pull-left">
                                                                                <a href="#" title="Add to Wishlist" class="link-wishlist"><i class="icon-heart icons"></i>Add to Wishlist</a>
                                                                            </li>
                                                                            <li class="pull-left">
                                                                                <span class="separator">|</span>
                                                                                <a href="#" title="Add to Compare" class="link-compare"><i class="icon-Files icon-stroke icons"></i>Add to Compare</a>
                                                                            </li>
                                                                            <li class="link-view pull-left">
                                                                                <a title="Quick View" href="#" class="link-quickview"><i class="icon-Search icon-stroke icons"></i>Quick View</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="products-textlink clearfix">
                                                                <h2 class="product-name"> 
                                                                    <a href="#" title="Brown Arrows Cushion">Brown Arrows Cushion</a>
                                                                </h2>
                                                                <div class="price-box"> 
                                                                    <p class="regular-price" > 
                                                                        <span class="price">$229.00</span> 
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item item-animate">
                                                        <div class="per-product">
                                                            <div class="images-container">
                                                                <div class="product-hover"> 
                                                                    <span class="sticker top-right">
                                                                        <span class="labelsale">Sale</span>
                                                                    </span>
                                                                    <a href="#" title="Product Color" class="product-image">
                                                                        <img class="img-responsive" src="http://placehold.it/278x355" width="278" height="355" alt="Product Color" /> 
                                                                    </a>
                                                                </div>
                                                                <div class="actions-no hover-box">
                                                                    <div class="actions"> 
                                                                        <button type="button" title="Add to Cart" class="button btn-cart pull-left">
                                                                            <span>
                                                                                <i class="icon-handbag icons"></i>
                                                                                <span>Add to Cart</span>
                                                                            </span>
                                                                        </button>
                                                                        <ul class="add-to-links pull-left">
                                                                            <li class="pull-left">
                                                                                <a href="#" title="Add to Wishlist" class="link-wishlist"><i class="icon-heart icons"></i>Add to Wishlist</a>
                                                                            </li>
                                                                            <li class="pull-left">
                                                                                <span class="separator">|</span> 
                                                                                <a href="#" title="Add to Compare" class="link-compare"><i class="icon-Files icon-stroke icons"></i>Add to Compare</a>
                                                                            </li>
                                                                            <li class="link-view pull-left"> 
                                                                                <a title="Quick View" href="#" class="link-quickview"><i class="icon-Search icon-stroke icons"></i>Quick View</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="products-textlink clearfix">
                                                                <h2 class="product-name">
                                                                    <a href="#" title="Product Color">Product Color</a>
                                                                </h2>
                                                                <div class="price-box">
                                                                    <p class="old-price"> 
                                                                        <span class="price-label">Regular Price:</span>
                                                                        <span class="price"> $220.00 </span>
                                                                    </p>
                                                                    <p class="special-price">
                                                                        <span class="price-label">Special Price</span> 
                                                                        <span class="price"> $180.00 </span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item item-animate">
                                                        <div class="per-product">
                                                            <div class="images-container">
                                                                <div class="product-hover"> 
                                                                    <span class="sticker top-left">
                                                                        <span class="labelnew">New</span>
                                                                    </span>
                                                                    <a href="#" title="Swatches product" class="product-image">
                                                                        <img class="img-responsive" src="http://placehold.it/278x355" width="278" height="355" alt="Swatches product" /> 
                                                                        <span class="product-img-back"> 
                                                                            <img class="img-responsive" src="http://placehold.it/278x355?text=hover-it" width="278" height="355" alt="Swatches product" />
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="actions-no hover-box">
                                                                    <div class="actions">
                                                                        <button type="button" title="Add to Cart" class="button btn-cart pull-left">
                                                                            <span>
                                                                                <i class="icon-handbag icons"></i><span>Add to Cart</span>
                                                                            </span>
                                                                        </button>
                                                                        <ul class="add-to-links pull-left">
                                                                            <li class="pull-left">
                                                                                <a href="#" title="Add to Wishlist" class="link-wishlist"><i class="icon-heart icons"></i>Add to Wishlist</a>
                                                                            </li>
                                                                            <li class="pull-left">
                                                                                <span class="separator">|</span> 
                                                                                <a href="#" title="Add to Compare" class="link-compare"><i class="icon-Files icon-stroke icons"></i>Add to Compare</a>
                                                                            </li>
                                                                            <li class="link-view pull-left"> 
                                                                                <a title="Quick View" href="#" class="link-quickview"><i class="icon-Search icon-stroke icons"></i>Quick View</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="products-textlink clearfix">
                                                                <h2 class="product-name"> 
                                                                    <a href="#" title="Swatches product">Swatches product</a>
                                                                </h2>
                                                                <div class="price-box">
                                                                    <p class="regular-price" > 
                                                                        <span class="price">$234.00</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item item-animate">
                                                        <div class="per-product">
                                                            <div class="images-container">
                                                                <div class="product-hover"> 
                                                                    <a href="#" title="Senderos Riaculis" class="product-image">
                                                                        <img class="img-responsive" src="http://placehold.it/278x355" width="278" height="355" alt="Senderos Riaculis" />
                                                                    </a>
                                                                </div>
                                                                <div class="actions-no hover-box">
                                                                    <div class="actions">
                                                                        <button type="button" title="Add to Cart" class="button btn-cart pull-left">
                                                                            <span>
                                                                                <i class="icon-handbag icons"></i>
                                                                                <span>Add to Cart</span>
                                                                            </span>
                                                                        </button>
                                                                        <ul class="add-to-links pull-left">
                                                                            <li class="pull-left">
                                                                                <a href="#" title="Add to Wishlist" class="link-wishlist"><i class="icon-heart icons"></i>Add to Wishlist</a>
                                                                            </li>
                                                                            <li class="pull-left">
                                                                                <span class="separator">|</span> 
                                                                                <a href="#" title="Add to Compare" class="link-compare"><i class="icon-Files icon-stroke icons"></i>Add to Compare</a>
                                                                            </li>
                                                                            <li class="link-view pull-left"> 
                                                                                <a title="Quick View" href="#" class="link-quickview"><i class="icon-Search icon-stroke icons"></i>Quick View</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="products-textlink clearfix">
                                                                <h2 class="product-name"> 
                                                                    <a href="#" title="Senderos Riaculis">Senderos Riaculis</a>
                                                                </h2>
                                                                <div class="price-box"> 
                                                                    <p class="regular-price" >
                                                                        <span class="price">$126.00</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item item-animate">
                                                        <div class="per-product">
                                                            <div class="images-container">
                                                                <div class="product-hover"> 
                                                                    <span class="sticker top-right">
                                                                        <span class="labelsale">Sale</span>
                                                                    </span>
                                                                    <a href="#" title="Party Hat Cushion" class="product-image"> 
                                                                        <img class="img-responsive" src="http://placehold.it/278x355" width="278" height="355" alt="Party Hat Cushion" /> 
                                                                    </a>
                                                                </div>
                                                                <div class="actions-no hover-box">
                                                                    <div class="actions">
                                                                        <button type="button" title="Add to Cart" class="button btn-cart pull-left">
                                                                            <span>
                                                                                <i class="icon-handbag icons"></i>
                                                                                <span>Add to Cart</span>
                                                                            </span>
                                                                        </button>
                                                                        <ul class="add-to-links pull-left">
                                                                            <li class="pull-left">
                                                                                <a href="#" title="Add to Wishlist" class="link-wishlist"><i class="icon-heart icons"></i>Add to Wishlist</a>
                                                                            </li>
                                                                            <li class="pull-left">
                                                                                <span class="separator">|</span>
                                                                                <a href="#" title="Add to Compare" class="link-compare"><i class="icon-Files icon-stroke icons"></i>Add to Compare</a>
                                                                            </li>
                                                                            <li class="link-view pull-left">
                                                                                <a title="Quick View" href="#" class="link-quickview"><i class="icon-Search icon-stroke icons"></i>Quick View</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="products-textlink clearfix">
                                                                <h2 class="product-name"><a href="#" title="Party Hat Cushion">Party Hat Cushion</a></h2>
                                                                <div class="price-box">
                                                                    <p class="old-price">
                                                                        <span class="price-label">Regular Price:</span> 
                                                                        <span class="price"> $234.00 </span>
                                                                    </p>
                                                                    <p class="special-price"> 
                                                                        <span class="price-label">Special Price</span> 
                                                                        <span class="price"> $124.00 </span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item item-animate">
                                                        <div class="per-product">
                                                            <div class="images-container">
                                                                <div class="product-hover">
                                                                    <span class="sticker top-right">
                                                                        <span class="labelsale">Sale</span>
                                                                    </span>
                                                                    <a href="#" title="Swatches Size" class="product-image">
                                                                        <img class="img-responsive" src="http://placehold.it/278x355" width="278" height="355" alt="Swatches Size" />
                                                                        <span class="product-img-back"> 
                                                                            <img class="img-responsive" src="http://placehold.it/278x355?text=hover" width="278" height="355" alt="Swatches Size" />
                                                                        </span> 
                                                                    </a>
                                                                </div>
                                                                <div class="actions-no hover-box">
                                                                    <div class="actions"> 
                                                                        <button type="button" title="Add to Cart" class="button btn-cart pull-left">
                                                                            <span>
                                                                                <i class="icon-handbag icons"></i>
                                                                                <span>Add to Cart</span>
                                                                            </span>
                                                                        </button>
                                                                        <ul class="add-to-links pull-left">
                                                                            <li class="pull-left">
                                                                                <a href="#" title="Add to Wishlist" class="link-wishlist"><i class="icon-heart icons"></i>Add to Wishlist</a>
                                                                            </li>
                                                                            <li class="pull-left">
                                                                                <span class="separator">|</span>
                                                                                <a href="#" title="Add to Compare" class="link-compare"><i class="icon-Files icon-stroke icons"></i>Add to Compare</a>
                                                                            </li>
                                                                            <li class="link-view pull-left"> 
                                                                                <a title="Quick View" href="#" class="link-quickview"><i class="icon-Search icon-stroke icons"></i>Quick View</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="products-textlink clearfix">
                                                                <h2 class="product-name">
                                                                    <a href="#" title="Swatches Size">Swatches Size</a>
                                                                </h2>
                                                                <div class="price-box">
                                                                    <p class="old-price">
                                                                        <span class="price-label">Regular Price:</span> 
                                                                        <span class="price"> $239.00 </span>
                                                                    </p>
                                                                    <p class="special-price">
                                                                        <span class="price-label">Special Price</span>
                                                                        <span class="price"> $225.00 </span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!-- .mc-bestseller -->
                                        <div class="mage-magictabs mc-bestseller">
                                            <div class="flexisel-content products-grid featured zoomOut play">
                                                <ul class="products-grid-rows">
                                                    <li class="item item-animate">
                                                        <div class="per-product">
                                                            <div class="images-container">
                                                                <div class="product-hover"> 
                                                                    <a href="#" title="Clemence Blouse" class="product-image">
                                                                        <img class="img-responsive" src="http://placehold.it/278x355" width="278" height="355" alt="Clemence Blouse" /> 
                                                                    </a>
                                                                </div>
                                                                <div class="actions-no hover-box">
                                                                    <div class="actions"> 
                                                                        <button type="button" title="Add to Cart" class="button btn-cart pull-left"><span><i class="icon-handbag icons"></i><span>Add to Cart</span></span></button>
                                                                        <ul class="add-to-links pull-left">
                                                                            <li class="pull-left">
                                                                                <a href="#" title="Add to Wishlist" class="link-wishlist"><i class="icon-heart icons"></i>Add to Wishlist</a>
                                                                            </li>
                                                                            <li class="pull-left">
                                                                                <span class="separator">|</span>
                                                                                <a href="#" title="Add to Compare" class="link-compare"><i class="icon-Files icon-stroke icons"></i>Add to Compare</a>
                                                                            </li>
                                                                            <li class="link-view pull-left"> 
                                                                                <a title="Quick View" href="#" class="link-quickview"><i class="icon-Search icon-stroke icons"></i>Quick View</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="products-textlink clearfix">
                                                                <h2 class="product-name">
                                                                    <a href="#">Clemence Blouse</a>
                                                                </h2>
                                                                <div class="price-box"> 
                                                                    <p class="regular-price" >
                                                                        <span class="price">$229.00</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item item-animate">
                                                        <div class="per-product">
                                                            <div class="images-container">
                                                                <div class="product-hover"> 
                                                                    <span class="sticker top-left">
                                                                        <span class="labelnew">New</span>
                                                                    </span>
                                                                    <span class="sticker top-right">
                                                                        <span class="labelsale">Sale</span>
                                                                    </span> 
                                                                    <a href="#" title="Short Sleeve Dress" class="product-image"> 
                                                                        <img class="img-responsive" src="http://placehold.it/278x355" width="278" height="355" alt="Short Sleeve Dress" /> 
                                                                        <span class="product-img-back">
                                                                            <img class="img-responsive" src="http://placehold.it/278x355?text=hover" width="278" height="355" alt="Short Sleeve Dress" />
                                                                        </span> 
                                                                    </a>
                                                                </div>
                                                                <div class="actions-no hover-box">
                                                                    <div class="actions"> 
                                                                        <button type="button" title="Add to Cart" class="button btn-cart pull-left">
                                                                            <span><i class="icon-handbag icons"></i><span>Add to Cart</span></span>
                                                                        </button>
                                                                        <ul class="add-to-links pull-left">
                                                                            <li class="pull-left">
                                                                                <a href="#" title="Add to Wishlist" class="link-wishlist"><i class="icon-heart icons"></i>Add to Wishlist</a>
                                                                            </li>
                                                                            <li class="pull-left">
                                                                                <span class="separator">|</span> 
                                                                                <a href="#" title="Add to Compare" class="link-compare"><i class="icon-Files icon-stroke icons"></i>Add to Compare</a>
                                                                            </li>
                                                                            <li class="link-view pull-left"> 
                                                                                <a title="Quick View" href="#" class="link-quickview"><i class="icon-Search icon-stroke icons"></i>Quick View</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="products-textlink clearfix">
                                                                <h2 class="product-name">
                                                                    <a href="#" title="Short Sleeve Dress">Short Sleeve Dress</a>
                                                                </h2>
                                                                <div class="price-box">
                                                                    <p class="old-price"> 
                                                                        <span class="price-label">Regular Price:</span>
                                                                        <span class="price"> $229.00 </span>
                                                                    </p>
                                                                    <p class="special-price">
                                                                        <span class="price-label">Special Price</span> 
                                                                        <span class="price"> $200.00 </span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item item-animate">
                                                        <div class="per-product">
                                                            <div class="images-container">
                                                                <div class="product-hover"> 
                                                                    <a href="#" title="Rocha Sleeve Sweater" class="product-image"> 
                                                                        <img class="img-responsive" src="http://placehold.it/278x355" width="278" height="355" alt="Rocha Sleeve Sweater" /> 
                                                                        <span class="product-img-back">
                                                                            <img class="img-responsive" src="http://placehold.it/278x355?text=hover-it" width="278" height="355" alt="Rocha Sleeve Sweater" />
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="actions-no hover-box">
                                                                    <div class="actions">
                                                                        <button type="button" title="Add to Cart" class="button btn-cart pull-left">
                                                                            <span><i class="icon-handbag icons"></i><span>Add to Cart</span></span>
                                                                        </button>
                                                                        <ul class="add-to-links pull-left">
                                                                            <li class="pull-left">
                                                                                <a href="#" title="Add to Wishlist" class="link-wishlist"><i class="icon-heart icons"></i>Add to Wishlist</a>
                                                                            </li>
                                                                            <li class="pull-left">
                                                                                <span class="separator">|</span> 
                                                                                <a href="#" title="Add to Compare" class="link-compare"><i class="icon-Files icon-stroke icons"></i>Add to Compare</a>
                                                                            </li>
                                                                            <li class="link-view pull-left">
                                                                                <a title="Quick View" href="#" class="link-quickview"><i class="icon-Search icon-stroke icons"></i>Quick View</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="products-textlink clearfix">
                                                                <h2 class="product-name"> 
                                                                    <a href="#" title="Rocha Sleeve Sweater">Rocha Sleeve Sweater</a>
                                                                </h2>
                                                                <div class="price-box"> 
                                                                    <p class="regular-price" >
                                                                        <span class="price">$229.00</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item item-animate">
                                                        <div class="per-product">
                                                            <div class="images-container">
                                                                <div class="product-hover">
                                                                    <a href="#" title="Super Skinny in Tiger Camo" class="product-image"> 
                                                                        <img class="img-responsive" src="http://placehold.it/278x355" width="278" height="355" alt="Super Skinny in Tiger Camo" /> 
                                                                    </a>
                                                                </div>
                                                                <div class="actions-no hover-box">
                                                                    <div class="actions">
                                                                        <button type="button" title="Add to Cart" class="button btn-cart pull-left">
                                                                            <span>
                                                                                <i class="icon-handbag icons"></i><span>Add to Cart</span>
                                                                            </span>
                                                                        </button>
                                                                        <ul class="add-to-links pull-left">
                                                                            <li class="pull-left">
                                                                                <a href="#" title="Add to Wishlist" class="link-wishlist"><i class="icon-heart icons"></i>Add to Wishlist</a>
                                                                            </li>
                                                                            <li class="pull-left">
                                                                                <span class="separator">|</span> 
                                                                                <a href="#" title="Add to Compare" class="link-compare"><i class="icon-Files icon-stroke icons"></i>Add to Compare</a>
                                                                            </li>
                                                                            <li class="link-view pull-left"> 
                                                                                <a title="Quick View" href="#" class="link-quickview"><i class="icon-Search icon-stroke icons"></i>Quick View</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="products-textlink clearfix">
                                                                <h2 class="product-name"> 
                                                                    <a href="#" title="Super Skinny in Tiger Camo">Super Skinny in Tiger Camo</a>
                                                                </h2>
                                                                <div class="price-box"> 
                                                                    <p class="regular-price" >
                                                                        <span class="price">$229.00</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item item-animate">
                                                        <div class="per-product">
                                                            <div class="images-container">
                                                                <div class="product-hover">
                                                                    <a href="#" title="Peace Pot Broochea" class="product-image"> 
                                                                        <img class="img-responsive" src="http://placehold.it/278x355" width="278" height="355" alt="Peace Pot Broochea" />
                                                                    </a>
                                                                </div>
                                                                <div class="actions-no hover-box">
                                                                    <div class="actions"> 
                                                                        <button type="button" title="Add to Cart" class="button btn-cart pull-left">
                                                                            <span><i class="icon-handbag icons"></i><span>Add to Cart</span></span>
                                                                        </button>
                                                                        <ul class="add-to-links pull-left">
                                                                            <li class="pull-left">
                                                                                <a href="#" title="Add to Wishlist" class="link-wishlist"><i class="icon-heart icons"></i>Add to Wishlist</a>
                                                                            </li>
                                                                            <li class="pull-left">
                                                                                <span class="separator">|</span>
                                                                                <a href="#" title="Add to Compare" class="link-compare"><i class="icon-Files icon-stroke icons"></i>Add to Compare</a>
                                                                            </li>
                                                                            <li class="link-view pull-left"> 
                                                                                <a title="Quick View" href="#" class="link-quickview"><i class="icon-Search icon-stroke icons"></i>Quick View</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="products-textlink clearfix">
                                                                <h2 class="product-name"> 
                                                                    <a href="#" title="Peace Pot Broochea">Peace Pot Broochea</a>
                                                                </h2>
                                                                <div class="price-box">
                                                                    <p class="regular-price" >
                                                                        <span class="price">$229.00</span> 
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item item-animate">
                                                        <div class="per-product">
                                                            <div class="images-container">
                                                                <div class="product-hover"> 
                                                                    <a href="#" title="Achieve Zip Hoody" class="product-image">
                                                                        <img class="img-responsive" src="http://placehold.it/278x355" width="278" height="355" alt="Achieve Zip Hoody" /> 
                                                                    </a>
                                                                </div>
                                                                <div class="actions-no hover-box">
                                                                    <div class="actions">
                                                                        <button type="button" title="Add to Cart" class="button btn-cart pull-left">
                                                                            <span><i class="icon-handbag icons"></i><span>Add to Cart</span></span>
                                                                        </button>
                                                                        <ul class="add-to-links pull-left">
                                                                            <li class="pull-left">
                                                                                <a href="#" title="Add to Wishlist" class="link-wishlist"><i class="icon-heart icons"></i>Add to Wishlist</a>
                                                                            </li>
                                                                            <li class="pull-left">
                                                                                <span class="separator">|</span>
                                                                                <a href="#" title="Add to Compare" class="link-compare"><i class="icon-Files icon-stroke icons"></i>Add to Compare</a>
                                                                            </li>
                                                                            <li class="link-view pull-left"> 
                                                                                <a title="Quick View" href="#" class="link-quickview"><i class="icon-Search icon-stroke icons"></i>Quick View</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="products-textlink clearfix">
                                                                <h2 class="product-name"> 
                                                                    <a href="#" title="Achieve Zip Hoody">Achieve Zip Hoody</a>
                                                                </h2>
                                                                <div class="price-box"> 
                                                                    <p class="regular-price" >
                                                                        <span class="price">$229.00</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item item-animate">
                                                        <div class="per-product">
                                                            <div class="images-container">
                                                                <div class="product-hover">
                                                                    <a href="#" title="Brown Arrows Cushion" class="product-image">
                                                                        <img class="img-responsive" src="http://placehold.it/278x355" width="278" height="355" alt="Brown Arrows Cushion" /> 
                                                                    </a>
                                                                </div>
                                                                <div class="actions-no hover-box">
                                                                    <div class="actions"> 
                                                                        <button type="button" title="Add to Cart" class="button btn-cart pull-left">
                                                                            <span>
                                                                                <i class="icon-handbag icons"></i>
                                                                                <span>Add to Cart</span>
                                                                            </span>
                                                                        </button>
                                                                        <ul class="add-to-links pull-left">
                                                                            <li class="pull-left">
                                                                                <a href="#" title="Add to Wishlist" class="link-wishlist"><i class="icon-heart icons"></i>Add to Wishlist</a>
                                                                            </li>
                                                                            <li class="pull-left">
                                                                                <span class="separator">|</span>
                                                                                <a href="#" title="Add to Compare" class="link-compare"><i class="icon-Files icon-stroke icons"></i>Add to Compare</a>
                                                                            </li>
                                                                            <li class="link-view pull-left">
                                                                                <a title="Quick View" href="#" class="link-quickview"><i class="icon-Search icon-stroke icons"></i>Quick View</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="products-textlink clearfix">
                                                                <h2 class="product-name"> 
                                                                    <a href="#" title="Brown Arrows Cushion">Brown Arrows Cushion</a>
                                                                </h2>
                                                                <div class="price-box"> 
                                                                    <p class="regular-price" > 
                                                                        <span class="price">$229.00</span> 
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item item-animate">
                                                        <div class="per-product">
                                                            <div class="images-container">
                                                                <div class="product-hover"> 
                                                                    <span class="sticker top-right">
                                                                        <span class="labelsale">Sale</span>
                                                                    </span>
                                                                    <a href="#" title="Product Color" class="product-image">
                                                                        <img class="img-responsive" src="http://placehold.it/278x355" width="278" height="355" alt="Product Color" /> 
                                                                    </a>
                                                                </div>
                                                                <div class="actions-no hover-box">
                                                                    <div class="actions"> 
                                                                        <button type="button" title="Add to Cart" class="button btn-cart pull-left">
                                                                            <span>
                                                                                <i class="icon-handbag icons"></i>
                                                                                <span>Add to Cart</span>
                                                                            </span>
                                                                        </button>
                                                                        <ul class="add-to-links pull-left">
                                                                            <li class="pull-left">
                                                                                <a href="#" title="Add to Wishlist" class="link-wishlist"><i class="icon-heart icons"></i>Add to Wishlist</a>
                                                                            </li>
                                                                            <li class="pull-left">
                                                                                <span class="separator">|</span> 
                                                                                <a href="#" title="Add to Compare" class="link-compare"><i class="icon-Files icon-stroke icons"></i>Add to Compare</a>
                                                                            </li>
                                                                            <li class="link-view pull-left"> 
                                                                                <a title="Quick View" href="#" class="link-quickview"><i class="icon-Search icon-stroke icons"></i>Quick View</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="products-textlink clearfix">
                                                                <h2 class="product-name">
                                                                    <a href="#" title="Product Color">Product Color</a>
                                                                </h2>
                                                                <div class="price-box">
                                                                    <p class="old-price"> 
                                                                        <span class="price-label">Regular Price:</span>
                                                                        <span class="price"> $220.00 </span>
                                                                    </p>
                                                                    <p class="special-price">
                                                                        <span class="price-label">Special Price</span> 
                                                                        <span class="price"> $180.00 </span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item item-animate">
                                                        <div class="per-product">
                                                            <div class="images-container">
                                                                <div class="product-hover"> 
                                                                    <span class="sticker top-left">
                                                                        <span class="labelnew">New</span>
                                                                    </span>
                                                                    <a href="#" title="Swatches product" class="product-image">
                                                                        <img class="img-responsive" src="http://placehold.it/278x355" width="278" height="355" alt="Swatches product" /> 
                                                                        <span class="product-img-back"> 
                                                                            <img class="img-responsive" src="http://placehold.it/278x355?text=hover-it" width="278" height="355" alt="Swatches product" />
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="actions-no hover-box">
                                                                    <div class="actions">
                                                                        <button type="button" title="Add to Cart" class="button btn-cart pull-left">
                                                                            <span>
                                                                                <i class="icon-handbag icons"></i><span>Add to Cart</span>
                                                                            </span>
                                                                        </button>
                                                                        <ul class="add-to-links pull-left">
                                                                            <li class="pull-left">
                                                                                <a href="#" title="Add to Wishlist" class="link-wishlist"><i class="icon-heart icons"></i>Add to Wishlist</a>
                                                                            </li>
                                                                            <li class="pull-left">
                                                                                <span class="separator">|</span> 
                                                                                <a href="#" title="Add to Compare" class="link-compare"><i class="icon-Files icon-stroke icons"></i>Add to Compare</a>
                                                                            </li>
                                                                            <li class="link-view pull-left"> 
                                                                                <a title="Quick View" href="#" class="link-quickview"><i class="icon-Search icon-stroke icons"></i>Quick View</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="products-textlink clearfix">
                                                                <h2 class="product-name"> 
                                                                    <a href="#" title="Swatches product">Swatches product</a>
                                                                </h2>
                                                                <div class="price-box">
                                                                    <p class="regular-price" > 
                                                                        <span class="price">$234.00</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item item-animate">
                                                        <div class="per-product">
                                                            <div class="images-container">
                                                                <div class="product-hover"> 
                                                                    <a href="#" title="Senderos Riaculis" class="product-image">
                                                                        <img class="img-responsive" src="http://placehold.it/278x355" width="278" height="355" alt="Senderos Riaculis" />
                                                                    </a>
                                                                </div>
                                                                <div class="actions-no hover-box">
                                                                    <div class="actions">
                                                                        <button type="button" title="Add to Cart" class="button btn-cart pull-left">
                                                                            <span>
                                                                                <i class="icon-handbag icons"></i>
                                                                                <span>Add to Cart</span>
                                                                            </span>
                                                                        </button>
                                                                        <ul class="add-to-links pull-left">
                                                                            <li class="pull-left">
                                                                                <a href="#" title="Add to Wishlist" class="link-wishlist"><i class="icon-heart icons"></i>Add to Wishlist</a>
                                                                            </li>
                                                                            <li class="pull-left">
                                                                                <span class="separator">|</span> 
                                                                                <a href="#" title="Add to Compare" class="link-compare"><i class="icon-Files icon-stroke icons"></i>Add to Compare</a>
                                                                            </li>
                                                                            <li class="link-view pull-left"> 
                                                                                <a title="Quick View" href="#" class="link-quickview"><i class="icon-Search icon-stroke icons"></i>Quick View</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="products-textlink clearfix">
                                                                <h2 class="product-name"> 
                                                                    <a href="#" title="Senderos Riaculis">Senderos Riaculis</a>
                                                                </h2>
                                                                <div class="price-box"> 
                                                                    <p class="regular-price" >
                                                                        <span class="price">$126.00</span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item item-animate">
                                                        <div class="per-product">
                                                            <div class="images-container">
                                                                <div class="product-hover"> 
                                                                    <span class="sticker top-right">
                                                                        <span class="labelsale">Sale</span>
                                                                    </span>
                                                                    <a href="#" title="Party Hat Cushion" class="product-image"> 
                                                                        <img class="img-responsive" src="http://placehold.it/278x355" width="278" height="355" alt="Party Hat Cushion" /> 
                                                                    </a>
                                                                </div>
                                                                <div class="actions-no hover-box">
                                                                    <div class="actions">
                                                                        <button type="button" title="Add to Cart" class="button btn-cart pull-left">
                                                                            <span>
                                                                                <i class="icon-handbag icons"></i>
                                                                                <span>Add to Cart</span>
                                                                            </span>
                                                                        </button>
                                                                        <ul class="add-to-links pull-left">
                                                                            <li class="pull-left">
                                                                                <a href="#" title="Add to Wishlist" class="link-wishlist"><i class="icon-heart icons"></i>Add to Wishlist</a>
                                                                            </li>
                                                                            <li class="pull-left">
                                                                                <span class="separator">|</span>
                                                                                <a href="#" title="Add to Compare" class="link-compare"><i class="icon-Files icon-stroke icons"></i>Add to Compare</a>
                                                                            </li>
                                                                            <li class="link-view pull-left">
                                                                                <a title="Quick View" href="#" class="link-quickview"><i class="icon-Search icon-stroke icons"></i>Quick View</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="products-textlink clearfix">
                                                                <h2 class="product-name"><a href="#" title="Party Hat Cushion">Party Hat Cushion</a></h2>
                                                                <div class="price-box">
                                                                    <p class="old-price">
                                                                        <span class="price-label">Regular Price:</span> 
                                                                        <span class="price"> $234.00 </span>
                                                                    </p>
                                                                    <p class="special-price"> 
                                                                        <span class="price-label">Special Price</span> 
                                                                        <span class="price"> $124.00 </span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="item item-animate">
                                                        <div class="per-product">
                                                            <div class="images-container">
                                                                <div class="product-hover">
                                                                    <span class="sticker top-right">
                                                                        <span class="labelsale">Sale</span>
                                                                    </span>
                                                                    <a href="#" title="Swatches Size" class="product-image">
                                                                        <img class="img-responsive" src="http://placehold.it/278x355" width="278" height="355" alt="Swatches Size" />
                                                                        <span class="product-img-back"> 
                                                                            <img class="img-responsive" src="http://placehold.it/278x355?text=hover" width="278" height="355" alt="Swatches Size" />
                                                                        </span> 
                                                                    </a>
                                                                </div>
                                                                <div class="actions-no hover-box">
                                                                    <div class="actions"> 
                                                                        <button type="button" title="Add to Cart" class="button btn-cart pull-left">
                                                                            <span>
                                                                                <i class="icon-handbag icons"></i>
                                                                                <span>Add to Cart</span>
                                                                            </span>
                                                                        </button>
                                                                        <ul class="add-to-links pull-left">
                                                                            <li class="pull-left">
                                                                                <a href="#" title="Add to Wishlist" class="link-wishlist"><i class="icon-heart icons"></i>Add to Wishlist</a>
                                                                            </li>
                                                                            <li class="pull-left">
                                                                                <span class="separator">|</span>
                                                                                <a href="#" title="Add to Compare" class="link-compare"><i class="icon-Files icon-stroke icons"></i>Add to Compare</a>
                                                                            </li>
                                                                            <li class="link-view pull-left"> 
                                                                                <a title="Quick View" href="#" class="link-quickview"><i class="icon-Search icon-stroke icons"></i>Quick View</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="products-textlink clearfix">
                                                                <h2 class="product-name">
                                                                    <a href="#" title="Swatches Size">Swatches Size</a>
                                                                </h2>
                                                                <div class="price-box">
                                                                    <p class="old-price">
                                                                        <span class="price-label">Regular Price:</span> 
                                                                        <span class="price"> $239.00 </span>
                                                                    </p>
                                                                    <p class="special-price">
                                                                        <span class="price-label">Special Price</span>
                                                                        <span class="price"> $225.00 </span>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!-- .mc-latest -->
                                    </div><!-- .content-products -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--- .main-->
    </div><!--- .container-->
    <div class="block-static block_deal">
        <div class="deal-of">
            <img class="img-responsive" alt="" src="assets/images/img-dea.png" />
            <div class="deal">
                <div class="container">
                    <div class="heading">
                        <h2 class="title">Deal of the day</h2>
                        <span class="intro">Elegant products many people waiting and crave</span>
                    </div>
                    <div class="per-product">
                        <div class="images-container">
                            <div class="product-hover"><div id="countbox_index" class="count_down_box timer-view" data-date-now="07/15/15 11:53:25 PM" data-date-then="04/26/16 11:59:00 PM"></div></div>
                        </div>
                        <div class="products-textlink clearfix">
                            <div class="price-box">
                                <p class="special-price">
                                    <span class="price-label">Special Price</span>
                                    <span class="price"> $180.00 </span>
                                </p>
                                <p class="old-price">
                                    <span class="price-label">Regular Price:</span> 
                                    <span class="price"> $220.00 </span>
                                </p>
                                <p class="discounts">
                                    Discount: 4%
                                </p>
                            </div>
                            <div class="shop-now"><a href="#" > Shop Now </a></div>
                        </div>
                    </div>
                </div>
            </div><!--- .deal-->
        </div><!-- .deal-of -->
    </div><!--- .block_deal-->
    <div class="block-static block_trending">
        <div class="container">
            <div class="main">
                <div class="row">
                    <div class="trending col-lg-12">
                        <div class="block-custom block-custom2">
                            <div class="block-title">
                                <h2>
                                    <span class="title-top">New Trending</span>
                                    <span class="title-backgruond icon-badge icons">
                                        <span class=" hidden">owesome</span>
                                    </span>
                                </h2>
                            </div>
                            <div>
                                <div class="magicproduct_trending magicproduct">
                                    <div class="block-title-tabs">
                                        <ul class="magictabs">
                                            <li class="item active loaded single" data-type ="newproduct">
                                                <span class ="title">New Products</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="content-products" data-margin="20" data-slider='null' data-options='{"480":"1","640":"2","768":"3","992":"4","993":"5"}'>
                                        <div class="mage-magictabs mc-newproduct">
                                            <ul class="flexisel-content products-grid newproduct zoomOut play">
                                                <li class="item item-animate">
                                                    <div class="per-product">
                                                        <div class="images-container">
                                                            <div class="product-hover">
                                                                <a href="#" title="Mauris tincidunt" class="product-image">
                                                                    <img class="img-responsive" src="http://placehold.it/212x270" width="212" height="270" alt="Mauris tincidunt" /> 
                                                                </a>
                                                            </div>
                                                            <div class="actions-no hover-box">
                                                                <div class="actions"> 
                                                                    <button type="button" title="Add to Cart" class="button btn-cart pull-left">
                                                                        <span>
                                                                            <i class="icon-handbag icons"></i><span>Add to Cart</span>
                                                                        </span>
                                                                    </button>
                                                                    <ul class="add-to-links pull-left"></ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="products-textlink clearfix">
                                                            <h2 class="product-name">
                                                                <a href="#" title="Mauris tincidunt">Mauris tincidunt</a>
                                                            </h2>
                                                            <div class="price-box"> 
                                                                <p class="regular-price" > 
                                                                    <span class="price">$389.00</span> 
                                                                </p>
                                                            </div>
                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:40%"></div>
                                                                </div>
                                                                <span class="amount">
                                                                    <a href="#">1 Review(s)</a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            
                                                <li class="item item-animate">
                                                    <div class="per-product">
                                                        <div class="images-container">
                                                            <div class="product-hover">
                                                                <a href="#" title="Crew Neck Jumper" class="product-image">
                                                                    <img class="img-responsive" src="http://placehold.it/212x270" width="212" height="270" alt="Crew Neck Jumper" /> 
                                                                    <span class="product-img-back">
                                                                        <img class="img-responsive" src="http://placehold.it/212x270?text=hover" width="212" height="270" alt="Crew Neck Jumper" /> 
                                                                    </span> 
                                                                </a>
                                                            </div>
                                                            <div class="actions-no hover-box">
                                                                <div class="actions"> 
                                                                    <button type="button" title="Add to Cart" class="button btn-cart pull-left">
                                                                        <span>
                                                                            <i class="icon-handbag icons"></i><span>Add to Cart</span>
                                                                        </span>
                                                                    </button>
                                                                    <ul class="add-to-links pull-left"></ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="products-textlink clearfix">
                                                            <h2 class="product-name">
                                                                <a href="#" title="Crew Neck Jumper">Crew Neck Jumper</a>
                                                            </h2>
                                                            <div class="price-box">
                                                                <p class="old-price"> 
                                                                    <span class="price-label">Regular Price:</span> 
                                                                    <span class="price"> $245.00 </span>
                                                                </p>
                                                                <p class="special-price">
                                                                    <span class="price-label">Special Price</span>
                                                                    <span class="price"> $134.00 </span>
                                                                </p>
                                                            </div>
                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:100%"></div>
                                                                </div>
                                                                <span class="amount">
                                                                    <a href="#">1 Review(s)</a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                
                                                <li class="item item-animate">
                                                    <div class="per-product">
                                                        <div class="images-container">
                                                            <div class="product-hover">
                                                                <a href="#" title="Knitted T-Shirt" class="product-image"> 
                                                                    <img class="img-responsive" src="http://placehold.it/212x270" width="212" height="270" alt="Knitted T-Shirt" /> 
                                                                </a>
                                                            </div>
                                                            <div class="actions-no hover-box">
                                                                <div class="actions"> 
                                                                    <button type="button" title="Add to Cart" class="button btn-cart pull-left">
                                                                        <span>
                                                                            <i class="icon-handbag icons"></i><span>Add to Cart</span>
                                                                        </span>
                                                                    </button>
                                                                    <ul class="add-to-links pull-left"></ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="products-textlink clearfix">
                                                            <h2 class="product-name"> 
                                                                <a href="#" title="Knitted T-Shirt">Knitted T-Shirt</a>
                                                            </h2>
                                                            <div class="price-box">	
                                                                <p class="regular-price" >
                                                                    <span class="price">$24.00</span>
                                                                </p>
                                                            </div>
                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:60%"></div>
                                                                </div> 
                                                                <span class="amount">
                                                                    <a href="#">1 Review(s)</a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                
                                                
                                                
                                                <li class="item item-animate">
                                                    <div class="per-product">
                                                        <div class="images-container">
                                                            <div class="product-hover">
                                                                <a href="#" title="Crew Neck Jumper color" class="product-image"> 
                                                                    <img class="img-responsive" src="http://placehold.it/212x270" width="212" height="270" alt="Crew Neck Jumper color" /> 
                                                                    <span class="product-img-back">
                                                                        <img class="img-responsive" src="http://placehold.it/212x270?text=hover" width="212" height="270" alt="Crew Neck Jumper color" /> 
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="actions-no hover-box">
                                                                <div class="actions"> 
                                                                    <button type="button" title="Add to Cart" class="button btn-cart pull-left">
                                                                        <span>
                                                                            <i class="icon-handbag icons"></i><span>Add to Cart</span>
                                                                        </span>
                                                                    </button>
                                                                    <ul class="add-to-links pull-left"></ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="products-textlink clearfix">
                                                            <h2 class="product-name"> 
                                                                <a href="#" title="Crew Neck Jumper color">Crew Neck Jumper color</a>
                                                            </h2>
                                                            <div class="price-box">
                                                                <p class="regular-price" >
                                                                    <span class="price">$35.00</span>
                                                                </p>
                                                            </div>
                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:80%"></div>
                                                                </div> 
                                                                <span class="amount">
                                                                    <a href="#">1 Review(s)</a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                
                                                <li class="item item-animate">
                                                    <div class="per-product">
                                                        <div class="images-container">	
                                                            <div class="product-hover">
                                                                <a href="#" title="fermentum suscipit." class="product-image">
                                                                    <img class="img-responsive" src="http://placehold.it/212x270" width="212" height="270" alt="fermentum suscipit." />
                                                                </a>
                                                            </div>
                                                            <div class="actions-no hover-box">
                                                                <div class="actions">
                                                                    <button type="button" title="Add to Cart" class="button btn-cart pull-left">
                                                                        <span>
                                                                            <i class="icon-handbag icons"></i><span>Add to Cart</span>
                                                                        </span>
                                                                    </button>
                                                                    <ul class="add-to-links pull-left"></ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="products-textlink clearfix">
                                                            <h2 class="product-name">
                                                                <a href="#" title="fermentum suscipit.">fermentum suscipit.</a>
                                                            </h2>
                                                            <div class="price-box">
                                                                <p class="regular-price" >
                                                                    <span class="price">$345.00</span>
                                                                </p>
                                                            </div>
                                                            <div class="ratings">
                                                                <div class="rating-box">
                                                                    <div class="rating" style="width:60%"></div>
                                                                </div>
                                                                <span class="amount">
                                                                    <a href="#">1 Review(s)</a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                
                                            </ul><!-- .mc-newproduct -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .trending -->
                </div>
            </div><!--- .main-->
        </div><!-- .container-->
    </div><!-- .block_trending -->
    <div class="block-static block_policy">
        <div class="policy">
            <div class="container">
                <div class="support-policy">
                    <div class="support-footer-inner row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="row-normal">
                                <div class="col-icon">
                                    <div class="support-icon square-round"><i class="icon-stroke icon-Truck icons"></i></div>
                                </div>
                                <div class="col-text">
                                    <div class="support-info">
                                        <div class="info-title">Free Delivery Worldwide</div>
                                        <div class="info-details">We are free shipping worldwide, you can buy and receive goods anywhere. Fast and safe</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="row-normal">
                                <div class="col-icon">
                                    <div class="support-icon square-round"><i class="icon-wallet icons"></i></div>
                                </div>
                                <div class="col-text">
                                    <div class="support-info">
                                        <div class="info-title">100% Money Back</div>
                                        <div class="info-details">If you are not satisfied with the quality of products, our services, you can return the goods &amp; receive a 100% money back</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="row-normal">
                                <div class="col-icon">
                                    <div class="support-icon square-round"><i class="icon-Users icon-stroke icons"></i></div>
                                </div>
                                <div class="col-text">
                                    <div class="support-info">
                                        <div class="info-title">Member Discount</div>
                                        <div class="info-details">Please register with us to receive friendly member gifts and discounts on purchases weekly</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--- .policy-->
    </div><!-- .block_policy -->
    <div class="block-static alo-blog">
        <div class="container">
            <div class="main">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="block-custom block-custom3">
                            <div class="block-title">
                                <h2>
                                    <span class="title-top">News &amp; Blog</span>
                                    <span class="title-backgruond icon-note icons">
                                        <span class=" hidden">owesome</span>
                                    </span>
                                </h2>
                            </div>
                            <div class="magicproduct_news">
                                <div class="blogtabs block-title-tabs">
                                    <h3 class="item active loaded section-title title_left" data-type ="blog">
                                        <span>Latest Posts Blog</span>
                                    </h3>
                                </div>
                                <div class="content-blog" data-margin="60" data-slider='{"moveSlides":2,"infiniteLoop":0,"maxSlides":"2","slideWidth":"555","slideMargin":60,"pager":1,"controls":0,"speed":800,"visibleItems":2,"responsiveBreakpoints":{"480":1,"640":1,"768":1,"992":2}}' data-options='{"480":"1","640":"1","768":"1","992":"2","993":"2"}'>
                                    <div class="mc-blog">
                                        <ul class="flexisel-content">
                                            <li class="item">
                                                <div class="postcontent">
                                                    <div class="blog-image image-container">
                                                        <a href="#" >
                                                            <img  class="img-responsive" src="http://placehold.it/540x290" alt="imgBlog"/>
                                                        </a>
                                                    </div>
                                                    <div class="blog_short_text clearfix">
                                                        <div class="icon-blog">
                                                            <i class="icon-camera icons"></i>
                                                        </div>
                                                        <div class="blog_text"> 
                                                            <a href="#">
                                                                <span class="title">Rulam phareta</span>
                                                            </a>
                                                            <div class="post-date">
                                                                <span>21 Feb 2015</span>-By<span class="title">nouthemes alo</span>
                                                                <i class="icon-speech icons"></i>
                                                                <span class="comments"> comments</span>
                                                            </div>
                                                            <div class="shortcontent-text">
                                                                <p class="short-text">Donec commodo finibus massa, in malesuada arcu tincidunt tristique! In rutrum non nisi id volutpat. Integer rhoncus...</p>
                                                            </div> 
                                                            <a class="read-more-blog" href="#">read more</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="item">
                                                <div class="postcontent">
                                                    <div class="blog-image image-container"> 
                                                        <a href="#" ><img  class="img-responsive" src="http://placehold.it/540x290" alt="imgBlog"/></a>
                                                    </div>
                                                    <div class="blog_short_text clearfix">
                                                        <div class="icon-blog"> <i class="icon-control-play icons"></i></div>
                                                        <div class="blog_text"> 
                                                            <a href="#" >
                                                                <span class="title">Duis bibendum</span>
                                                            </a>
                                                            <div class="post-date"> 
                                                                <span>07 Apr 2015</span>-By<span class="title">admin</span>
                                                                <i class="icon-speech icons"></i>
                                                                <span class="comments"> comments</span>
                                                            </div>
                                                            <div class="shortcontent-text">
                                                                <p class="short-text">Donec commodo finibus massa, in malesuada arcu tincidunt tristique! In rutrum non nisi id volutpat. Integer rhoncus...</p>
                                                            </div>
                                                            <a class="read-more-blog" href="#">read more</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div> <!-- .magicproduct_news -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .alo-blog -->
    <div class="block-static block_bottom">
        <div class="container">
            <div class="main">
                <div class="row">
                    <div class="bottom">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class= "magicproduct_bottom magicproduct mage-custom">
                                <div class="block-title-tabs">
                                    <ul class="magictabs">
                                        <li class="item active loaded single" data-type ="mostviewed">
                                            <span class ="title">Most Viewed</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="content-products" data-margin="30" data-slider='null' data-options='{"480":"1","640":"1","768":"1","992":"1","993":"1"}'>
                                    <div class="mage-magictabs mc-mostviewed">
                                        <ul class="flexisel-content products-grid mostviewed zoomOut play">
                                            <li class="item item-animate">
                                                <div class="per-product clearfix">
                                                    <div class="images-container col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                        <div class="product-hover">
                                                            <a href="#" title="Configurable Product" class="product-image">
                                                                <img class="img-responsive" src="http://placehold.it/100x128" width="100" height="128" alt="Configurable Product" /> 
                                                            </a>
                                                        </div>
                                                        <div class="actions-no hover-box"> 
                                                            <a class="detail_links" href="#"></a>
                                                            <div class="actions">
                                                                <ul class="add-to-links"></ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="products-textlink col-lg-8 col-md-8 col-sm-8 col-xs-8 product-featured-custom clearfix">
                                                        <h2 class="product-name"> 
                                                            <a href="#" title="Configurable Product">Configurable Product</a>
                                                        </h2>
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:80%"></div>
                                                            </div> 
                                                            <span class="amount">
                                                                <a href="#">1 Review(s)</a>
                                                            </span>
                                                        </div>
                                                        <div class="price-box"> 
                                                            <p class="regular-price" >
                                                                <span class="price">$180.00</span> 
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="item item-animate">
                                                <div class="per-product clearfix">
                                                    <div class="images-container col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                        <div class="product-hover">
                                                            <a href="#" title="Product Color" class="product-image"> 
                                                                <img class="img-responsive" src="http://placehold.it/100x128" width="100" height="128" alt="Product Color" /> 
                                                            </a>
                                                        </div>
                                                        <div class="actions-no hover-box"> 
                                                            <a class="detail_links" href="#"></a>
                                                            <div class="actions">
                                                                <ul class="add-to-links"></ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="products-textlink col-lg-8 col-md-8 col-sm-8 col-xs-8 product-featured-custom clearfix">
                                                        <h2 class="product-name">
                                                            <a href="#" title="Product Color">Product Color</a>
                                                        </h2>
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:80%"></div>
                                                            </div> 
                                                            <span class="amount">
                                                                <a href="#">1 Review(s)</a>
                                                            </span>
                                                        </div>
                                                        <div class="price-box">
                                                            <p class="old-price"> 
                                                                <span class="price-label">Regular Price:</span>
                                                                <span class="price"> $220.00 </span>
                                                            </p>
                                                            <p class="special-price">
                                                                <span class="price-label">Special Price</span> 
                                                                <span class="price"> $180.00 </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="item item-animate">
                                                <div class="per-product clearfix">
                                                    <div class="images-container col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                        <div class="product-hover">
                                                            <a href="#" title="Clemence Blouse" class="product-image"> 
                                                                <img class="img-responsive" src="http://placehold.it/100x128" width="100" height="128" alt="Clemence Blouse" /> 
                                                            </a>
                                                        </div>
                                                        <div class="actions-no hover-box"> 
                                                            <a class="detail_links" href="#"></a>
                                                            <div class="actions">
                                                                <ul class="add-to-links"></ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="products-textlink col-lg-8 col-md-8 col-sm-8 col-xs-8 product-featured-custom clearfix">
                                                        <h2 class="product-name"> 
                                                            <a href="#" title="Clemence Blouse">Clemence Blouse</a>
                                                        </h2>
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:60%"></div>
                                                            </div> 
                                                            <span class="amount">
                                                                <a href="#">1 Review(s)</a>
                                                            </span>
                                                        </div>
                                                        <div class="price-box"> 
                                                            <p class="regular-price" >
                                                                <span class="price">$229.00</span> 
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .magicproduct_bottom -->
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class= "magicproduct_bottom magicproduct mage-custom">
                                <div class="block-title-tabs">
                                    <ul class="magictabs">
                                        <li class="item active loaded single" data-type ="bestseller"><span class ="title">Bestseller</span></li>
                                    </ul>
                                </div>
                                <div class="content-products" data-margin="30" data-slider='null' data-options='{"480":"1","640":"1","768":"1","992":"1","993":"1"}'>
                                    <div class="mage-magictabs mc-bestseller">
                                        <ul class="flexisel-content products-grid bestseller zoomOut play">
                                            <li class="item item-animate">
                                                <div class="per-product clearfix">
                                                    <div class="images-container col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                        <div class="product-hover"> 
                                                            <a href="#" title="Short Sleeve Dress" class="product-image">
                                                                <img class="img-responsive" src="http://placehold.it/100x128" width="100" height="128" alt="Short Sleeve Dress" /> 
                                                            </a>
                                                        </div>
                                                        <div class="actions-no hover-box">
                                                            <a class="detail_links" href="#"></a>
                                                            <div class="actions">
                                                                <ul class="add-to-links"></ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="products-textlink col-lg-8 col-md-8 col-sm-8 col-xs-8 product-featured-custom clearfix">
                                                        <h2 class="product-name">
                                                            <a href="#" title="Short Sleeve Dress">Short Sleeve Dress</a>
                                                        </h2>
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:60%"></div>
                                                            </div> 
                                                            <span class="amount">
                                                                <a href="#">1 Review(s)</a>
                                                            </span>
                                                        </div>
                                                        <div class="price-box">
                                                            <p class="old-price">
                                                                <span class="price-label">Regular Price:</span> 
                                                                <span class="price"> $229.00 </span>
                                                            </p>
                                                            <p class="special-price">
                                                                <span class="price-label">Special Price</span>
                                                                <span class="price"> $200.00 </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="item item-animate">
                                                <div class="per-product clearfix">
                                                    <div class="images-container col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                        <div class="product-hover"> 
                                                            <a href="#" title="Super Skinny in Tiger Camo" class="product-image"> 
                                                                <img class="img-responsive" src="http://placehold.it/100x128" width="100" height="128" alt="Super Skinny in Tiger Camo" /> 
                                                            </a>
                                                        </div>
                                                        <div class="actions-no hover-box"> 
                                                            <a class="detail_links" href="#"></a>
                                                            <div class="actions">	
                                                                <ul class="add-to-links"></ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="products-textlink col-lg-8 col-md-8 col-sm-8 col-xs-8 product-featured-custom clearfix">
                                                        <h2 class="product-name"> 
                                                            <a href="#" title="Super Skinny in Tiger Camo">Super Skinny in Tiger Camo</a>
                                                        </h2>
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:40%"></div>
                                                            </div>
                                                            <span class="amount">
                                                                <a href="#">1 Review(s)</a>
                                                            </span>
                                                        </div>
                                                        <div class="price-box"> 
                                                            <p class="regular-price" >
                                                                <span class="price">$229.00</span> 
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="item item-animate">
                                                <div class="per-product clearfix">
                                                    <div class="images-container col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                        <div class="product-hover"> 
                                                            <a href="#" title="Mauris tincidunt" class="product-image">	
                                                                <img class="img-responsive" src="http://placehold.it/100x128" width="100" height="128" alt="Mauris tincidunt" /> 
                                                            </a>
                                                        </div>
                                                        <div class="actions-no hover-box"> 
                                                            <a class="detail_links" href="#"></a>
                                                            <div class="actions">
                                                                <ul class="add-to-links"></ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="products-textlink col-lg-8 col-md-8 col-sm-8 col-xs-8 product-featured-custom clearfix">	
                                                        <h2 class="product-name"> <a href="#" title="Mauris tincidunt">Mauris tincidunt</a></h2>
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:40%"></div>
                                                            </div>
                                                            <span class="amount"><a href="#">1 Review(s)</a></span>
                                                        </div>
                                                        <div class="price-box"> 
                                                            <p class="regular-price" > <span class="price">$389.00</span> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class= "magicproduct_lastest_product magicproduct mage-custom">
                                <div class="block-title-tabs">
                                    <ul class="magictabs">
                                        <li class="item active loaded single" data-type ="latest">
                                            <span class ="title">Latest Products</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="content-products" data-margin="30" data-slider='null' data-options='{"480":"1","640":"1","768":"1","992":"1","993":"1"}'>
                                    <div class="mage-magictabs mc-latest">
                                        <ul class="flexisel-content products-grid latest zoomOut play">
                                            <li class="item item-animate">
                                                <div class="per-product clearfix">
                                                    <div class="images-container col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                        <div class="product-hover"> 
                                                            <a href="#" title="fermentum suscipit." class="product-image"> 
                                                                <img class="img-responsive" src="http://placehold.it/100x128" width="100" height="128" alt="fermentum suscipit." /> 
                                                            </a>
                                                        </div>
                                                        <div class="actions-no hover-box"> 
                                                            <a class="detail_links" href="#"></a>
                                                            <div class="actions">
                                                                <ul class="add-to-links"></ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="products-textlink col-lg-8 col-md-8 col-sm-8 col-xs-8 product-featured-custom clearfix">
                                                        <h2 class="product-name">
                                                            <a href="#" title="fermentum suscipit.">fermentum suscipit.</a>
                                                        </h2>
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:60%"></div>
                                                            </div> 
                                                            <span class="amount">
                                                                <a href="#">1 Review(s)</a>
                                                            </span>
                                                        </div>
                                                        <div class="price-box">
                                                            <p class="regular-price" > 
                                                                <span class="price">$345.00</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="item item-animate">
                                                <div class="per-product clearfix">
                                                    <div class="images-container col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                        <div class="product-hover">
                                                            <a href="#" title="Cras sed rutrum" class="product-image">
                                                                <img class="img-responsive" src="http://placehold.it/100x128" width="100" height="128" alt="Cras sed rutrum" />
                                                            </a>
                                                        </div>
                                                        <div class="actions-no hover-box">
                                                            <a class="detail_links" href="#"></a>
                                                            <div class="actions">
                                                                <ul class="add-to-links"></ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="products-textlink col-lg-8 col-md-8 col-sm-8 col-xs-8 product-featured-custom clearfix">
                                                        <h2 class="product-name">
                                                            <a href="#" title="Cras sed rutrum">Cras sed rutrum</a>
                                                        </h2>
                                                        <div class="price-box">
                                                            <p class="regular-price" > <span class="price">$489.00</span> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="item item-animate">
                                                <div class="per-product clearfix">
                                                    <div class="images-container col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                        <div class="product-hover"> 
                                                            <a href="#" title="Mauris tincidunt" class="product-image">	
                                                                <img class="img-responsive" src="http://placehold.it/100x128" width="100" height="128" alt="Mauris tincidunt" /> 
                                                            </a>
                                                        </div>
                                                        <div class="actions-no hover-box"> 
                                                            <a class="detail_links" href="#"></a>
                                                            <div class="actions">
                                                                <ul class="add-to-links"></ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="products-textlink col-lg-8 col-md-8 col-sm-8 col-xs-8 product-featured-custom clearfix">	
                                                        <h2 class="product-name"> <a href="#" title="Mauris tincidunt">Mauris tincidunt</a></h2>
                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:40%"></div>
                                                            </div>
                                                            <span class="amount"><a href="#">1 Review(s)</a></span>
                                                        </div>
                                                        <div class="price-box"> 
                                                            <p class="regular-price" > <span class="price">$389.00</span> </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div> <!-- .magicproduct_lastest_news -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .block_bottom --> --}}
    
    {{-- <div class="alo-brands">
        <div class="container">
            <div class="main">
                <div class="row">
                    <div class="col-lg-12">
                        <div id="footer-brand">
                            <ul class="magicbrand">
                                <li> <a href="#"> <img class="brand img-responsive" src="http://placehold.it/190x80/ffffff" alt="brands_01" title="brands_01" /> </a></li>
                                <li> <a href="#"> <img class="brand img-responsive" src="http://placehold.it/190x80/ffffff" alt="brands_02" title="brands_02" /> </a></li>
                                <li> <a href="#"> <img class="brand img-responsive" src="http://placehold.it/190x80/ffffff" alt="brands_03" title="brands_03" /> </a></li>
                                <li> <a href="#"> <img class="brand img-responsive" src="http://placehold.it/190x80/ffffff" alt="brands_04" title="brands_04" /> </a></li>
                                <li> <a href="#"> <img class="brand img-responsive" src="http://placehold.it/190x80/ffffff" alt="brands_05" title="brands_05" /> </a></li>
                                <li> <a href="#"> <img class="brand img-responsive" src="http://placehold.it/190x80/ffffff" alt="brands_06" title="brands_06" /> </a></li>
                            </ul>
                        </div><!-- #footer-brand -->									
                    </div>
                </div>
            </div>
        </div><!-- .container-->
    </div><!-- .alo-brands -->	 --}}
</div><!--- .main-container -->
@endsection