@extends('layouts.user.webapp')
@section('usercontent')
    <div class="main-container col2-left-layout ">
        <div class="breadcrumbs">
            <div class="container">
                <ul>
                    <li class="home"> <a href="{{ url('/') }}" title="Go to Home Page">Home</a></li>
                    <li class="category4"> <strong>Bikes</strong></li>
                </ul>
            </div>
        </div>
        <!--- .breadcrumbs-->
        <div class="container">
            <div class="main">
                <div class="row">
                    <div class="col-left sidebar col-lg-3 col-md-3 col-sm-3 left-color color">
                        <div class="anav-container">
                            <div class="block block-anav">
                                <div class="block-title"> <strong><span>Categories</span></strong></div>
                                <ul style="" class="nav-accordion">
                                    @foreach ($category as $c)
                                        <li class="level0 nav-1 first active level-top parent">
                                            <input type="checkbox" name="category_checkbox" id="category_checkbox" value="{{ $c->id }}" class="categorybox">
                                            <span>&nbsp;{{ $c->category }}</span><br><br><br>
                                            {{-- <ul style="display: block;" class="level0">
                                                <li class="level1 nav-1-1 first last parent">
                                                    <a href="#"><span>Dresses</span></a>
                                                    <ul class="level1">
                                                        <li class="level2 nav-1-1-1 first"><a
                                                                href="#"><span>Cocktail</span></a></li>
                                                        <li class="level2 nav-1-1-2"><a href="#"><span>Day</span></a></li>
                                                        <li class="level2 nav-1-1-3"><a href="#"><span>Evening</span></a>
                                                        </li>
                                                        <li class="level2 nav-1-1-4 last"><a
                                                                href="#"><span>Sports</span></a></li>
                                                    </ul>
                                                </li>
                                            </ul> --}}
                                        </li>
                                    @endforeach
                                    {{-- <li class="level0 nav-2 level-top parent">
                                        <a href="#" class="level-top"><span>Women</span></a>
                                        <ul style="" class="level0">
                                            <li class="level1 nav-2-1 first parent">
                                                <a href="#"><span>New Arrivals</span></a>
                                                <ul class="level1">
                                                    <li class="level2 nav-2-1-1 first"><a href="#"><span>Shirts</span></a>
                                                    </li>
                                                    <li class="level2 nav-2-1-2"><a href="#"><span>Shirts &amp;
                                                                Tops</span></a></li>
                                                    <li class="level2 nav-2-1-3"><a href="#"><span>Sweaters</span></a></li>
                                                    <li class="level2 nav-2-1-4"><a href="#"><span>Outerwear</span></a></li>
                                                    <li class="level2 nav-2-1-5"><a href="#"><span>Bottoms</span></a></li>
                                                    <li class="level2 nav-2-1-6 last"><a href="#"><span>Shoes</span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="level1 nav-2-2 parent">
                                                <a href="#"><span>Outerwear</span></a>
                                                <ul class="level1">
                                                    <li class="level2 nav-2-2-1 first"><a href="#"><span>Jackets</span></a>
                                                    </li>
                                                    <li class="level2 nav-2-2-2"><a href="#"><span>Coats</span></a></li>
                                                    <li class="level2 nav-2-2-3"><a href="#"><span>Blazers</span></a></li>
                                                    <li class="level2 nav-2-2-4"><a href="#"><span>Vests</span></a></li>
                                                    <li class="level2 nav-2-2-5"><a href="#"><span>Vests New Bags</span></a>
                                                    </li>
                                                    <li class="level2 nav-2-2-6 last"><a href="#"><span>Sweaters</span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="level1 nav-2-3 last parent">
                                                <a href="#"><span>Accessories</span></a>
                                                <ul class="level1">
                                                    <li class="level2 nav-2-3-1 first"><a href="#"><span>Tights &amp;
                                                                Socks</span></a></li>
                                                    <li class="level2 nav-2-3-2"><a href="#"><span>Undergarments</span></a>
                                                    </li>
                                                    <li class="level2 nav-2-3-3"><a href="#"><span>Sunglasses</span></a>
                                                    </li>
                                                    <li class="level2 nav-2-3-4"><a href="#"><span>Watches</span></a></li>
                                                    <li class="level2 nav-2-3-5"><a href="#"><span>Cosmetics</span></a></li>
                                                    <li class="level2 nav-2-3-6 last"><a href="#"><span>Leather</span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="level0 nav-3 level-top parent">
                                        <a href="#" class="level-top"><span>Footwear</span></a>
                                        <ul style="" class="level0">
                                            <li class="level1 nav-3-1 first parent">
                                                <a href="#"><span>Women’s Clothing</span></a>
                                                <ul class="level1">
                                                    <li class="level2 nav-3-1-1 first"><a href="#"><span>Cocktail</span></a>
                                                    </li>
                                                    <li class="level2 nav-3-1-2"><a href="#"><span>Day</span></a></li>
                                                    <li class="level2 nav-3-1-3"><a href="#"><span>Evening</span></a></li>
                                                    <li class="level2 nav-3-1-4"><a href="#"><span>Sports</span></a></li>
                                                    <li class="level2 nav-3-1-5 last"><a href="#"><span>Jeans</span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="level1 nav-3-2 parent">
                                                <a href="#"><span>Men’s Shoe</span></a>
                                                <ul class="level1">
                                                    <li class="level2 nav-3-2-1 first"><a href="#"><span>Sports</span></a>
                                                    </li>
                                                    <li class="level2 nav-3-2-2"><a href="#"><span>Run</span></a></li>
                                                    <li class="level2 nav-3-2-3"><a href="#"><span>Sandals</span></a></li>
                                                    <li class="level2 nav-3-2-4"><a href="#"><span>Books</span></a></li>
                                                    <li class="level2 nav-3-2-5 last"><a href="#"><span>T-Shirts</span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="level1 nav-3-3 last parent">
                                                <a href="#"><span>Skirts</span></a>
                                                <ul class="level1">
                                                    <li class="level2 nav-3-3-1 first"><a href="#"><span>Leather</span></a>
                                                    </li>
                                                    <li class="level2 nav-3-3-2"><a href="#"><span>Bag &amp;
                                                                Persess</span></a></li>
                                                    <li class="level2 nav-3-3-3"><a href="#"><span>Sunglasses</span></a>
                                                    </li>
                                                    <li class="level2 nav-3-3-4"><a href="#"><span>Sweaters</span></a></li>
                                                    <li class="level2 nav-3-3-5 last"><a
                                                            href="#"><span>Sassuawear</span></a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="level0 nav-4 last level-top"><a href="#"
                                            class="level-top"><span>Accessories</span></a></li> --}}
                                </ul>
                            </div>
                            <!--- .block-anav-->
                        </div>
                        <!--- .anav-container-->
                        <div class="block block-layered-nav block-layered-nav--no-filters">
                            <div class="block-title"> <strong><span>Shop By</span></strong></div>
                            <div class="block-content toggle-content">
                                <p class="block-subtitle block-subtitle--filter">Filter</p>
                                <dl id="narrow-by-list">
                                    <dt class="even">By Price</dt>
                                    <dd class="even">
                                        <div class="slider-ui-wrap">
                                            <div id="price-range" class="slider-ui" slider-min="0" slider-max="1000000"
                                                slider-min-start="0" slider-max-start="1000000"></div>
                                        </div>
                                        <form method="" id="priceform" action="" class="price-range-form">
                                            <input type="text" id="minimum" class="range_value range_value_min"
                                                target="#price-range" /> - <input type="text" id="maximum"
                                                class="range_value range_value_max" target="#price-range" />
                                            <input type="submit" id="onsubmit" class="btn-submit" value="OK" />
                                        </form>
                                    </dd>
                                    {{-- <dt class="odd">By Brands</dt>
                                <dd class="odd">
                                    <ul style="" class="nav-accordion">
                                        <li class="level0 level-top"><a href="#" class="level-top"><span>Hermes</span></a></li>
                                        <li class="level0 level-top"><a href="#" class="level-top"><span>Dolce & Gabbana</span></a></li>
                                        <li class="level0 level-top"><a href="#" class="level-top"><span>Louis Vuitton</span></a></li>
                                        <li class="level0 level-top"><a href="#" class="level-top"><span>Versace</span></a></li>
                                        <li class="level0 level-top"><a href="#" class="level-top"><span>Hug Boss</span></a></li>
                                    </ul>
                                </dd> --}}
                                    <dt class="even">By Colors</dt>
                                    <dd class="even">
                                        <ol class="configurable-swatch-list">
                                            @foreach ($color as $colors )
                                            <li> <input type="checkbox" name="color_checkbox" id="color_checkbox" value="{{ $colors->id }}" class="colorbox"> <span class="swatch-label"> </span> 
                                                <span class="count">{{ $colors->name }}</span> </a></li>
                                            @endforeach    
                                            {{-- <li> <a href="#" class="swatch-link has-image"> <span class="swatch-label">
                                                        <img src="assets/images/blue.png" alt="Blue" title="Blue"
                                                            height="15" width="15"> </span> <span
                                                        class="count">Blue(4)</span> </a></li>
                                            <li> <a href="#" class="swatch-link has-image"> <span class="swatch-label">
                                                        <img src="assets/images/blue.png" alt="Blue" title="Blue"
                                                            height="15" width="15"> </span> <span
                                                        class="count">Blue(2)</span> </a></li>
                                            <li> <a href="#" class="swatch-link has-image"> <span class="swatch-label">
                                                        <img src="assets/images/indigo.png" alt="Indigo" title="Indigo"
                                                            height="15" width="15"> </span> <span
                                                        class="count">Indigo(1)</span> </a></li>
                                            <li> <a href="#" class="swatch-link has-image"> <span class="swatch-label">
                                                        <img src="assets/images/orange.png" alt="orange" title="orange"
                                                            height="15" width="15"> </span> <span
                                                        class="count">orange(1)</span> </a></li>
                                            <li> <a href="#" class="swatch-link has-image"> <span class="swatch-label">
                                                        <img src="assets/images/pink.png" alt="pink" title="pink"
                                                            height="15" width="15"> </span> <span
                                                        class="count">pink(2)</span> </a></li>
                                            <li> <a href="#" class="swatch-link has-image"> <span class="swatch-label">
                                                        <img src="assets/images/red.png" alt="Red" title="Red" height="15"
                                                            width="15"> </span> <span class="count">Red(4)</span>
                                                </a></li>
                                            <li> <a href="#" class="swatch-link has-image"> <span class="swatch-label">
                                                        <img src="assets/images/taupe.png" alt="Taupe" title="Taupe"
                                                            height="15" width="15"> </span> <span
                                                        class="count">Taupe(1)</span> </a></li>
                                            <li> <a href="#" class="swatch-link has-image"> <span class="swatch-label">
                                                        <img src="assets/images/yellow.png" alt="yellow" title="yellow"
                                                            height="15" width="15"> </span> <span
                                                        class="count">yellow(2)</span> </a></li> --}}
                                        </ol>
                                    </dd>
                                    {{-- <dt class="last odd">By Size</dt>
                                <dd class="last odd">
                                    <ol class="configurable-swatch-list configurable-size">
                                        <li> <a href="#" class="swatch-link"> <span class="swatch-label"> L </span></a></li>
                                        <li> <a href="#" class="swatch-link"> <span class="swatch-label"> M </span></a></li>
                                        <li> <a href="#" class="swatch-link"> <span class="swatch-label"> S </span></a></li>
                                        <li> <a href="#" class="swatch-link"> <span class="swatch-label"> XL </span></a></li>
                                        <li> <a href="#" class="swatch-link"> <span class="swatch-label"> XS </span></a></li>
                                        <li> <a href="#" class="swatch-link"> <span class="swatch-label"> XXL </span></a></li>
                                    </ol>
                                </dd>
                                </dl> --}}
                            </div>
                        </div>
                        <!--- .block-layered-nav-->

                        {{-- <div class="magicproduct_active magicproduct mage-custom">
                        <div class="block-title-tabs">
                            <ul class="magictabs">
                                <li class="item active loaded single" data-type="saleproduct"><span class="title">Top Sale</span></li>
                            </ul>
                        </div>
                        <div class="content-products" data-margin="30" data-slider="null" data-options='{"480":"1","640":"1","768":"1","992":"1","993":"1"}'>
                            <div class="mage-magictabs mc-saleproduct">
                                <ul class="flexisel-content products-grid saleproduct zoomOut play even">
                                    <li class="item item-animate">
                                        <div class="per-product clearfix">
                                            <div class="images-container col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                <div class="product-hover"> <a href="#" title="Product Color" class="product-image"> <img class="img-responsive" src="http://placehold.it/102x80" alt="Product Color" height="102" width="80"> </a></div>
                                                <div class="actions-no hover-box">
                                                    <a class="detail_links" href="#"></a>
                                                    <div class="actions">
                                                        <ul class="add-to-links"></ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="products-textlink col-lg-8 col-md-8 col-sm-8 col-xs-8 product-featured-custom clearfix">
                                                <h2 class="product-name"> <a href="#" title="Product Color">Product Color</a></h2>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:80%"></div>
                                                    </div>
                                                    <span class="amount"><a href="#">1 Review(s)</a></span>
                                                </div>
                                                <div class="price-box">
                                                    <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $220.00 </span></p>
                                                    <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $180.00 </span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item item-animate">
                                        <div class="per-product clearfix">
                                            <div class="images-container col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                <div class="product-hover"> <a href="#" title="Short Sleeve Dress" class="product-image"> <img class="img-responsive" src="http://placehold.it/102x80" alt="Short Sleeve Dress" height="102" width="80"> </a></div>
                                                <div class="actions-no hover-box">
                                                    <a class="detail_links" href="#"></a>
                                                    <div class="actions">
                                                        <ul class="add-to-links"></ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="products-textlink col-lg-8 col-md-8 col-sm-8 col-xs-8 product-featured-custom clearfix">
                                                <h2 class="product-name"> <a href="#" title="Short Sleeve Dress">Short Sleeve Dress</a></h2>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:60%"></div>
                                                    </div>
                                                    <span class="amount"><a href="#">1 Review(s)</a></span>
                                                </div>
                                                <div class="price-box">
                                                    <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $229.00 </span></p>
                                                    <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $200.00 </span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="item item-animate">
                                        <div class="per-product clearfix">
                                            <div class="images-container col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                <div class="product-hover"> <a href="#" title="Party Hat Cushion" class="product-image"> <img class="img-responsive" src="http://placehold.it/102x80" alt="Party Hat Cushion" height="102" width="80"> </a></div>
                                                <div class="actions-no hover-box">
                                                    <a class="detail_links" href="#"></a>
                                                    <div class="actions">
                                                        <ul class="add-to-links"></ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="products-textlink col-lg-8 col-md-8 col-sm-8 col-xs-8 product-featured-custom clearfix">
                                                <h2 class="product-name"> <a href="#" title="Party Hat Cushion">Party Hat Cushion</a></h2>
                                                <div class="ratings">
                                                    <div class="rating-box">
                                                        <div class="rating" style="width:80%"></div>
                                                    </div>
                                                    <span class="amount"><a href="#">1 Review(s)</a></span>
                                                </div>
                                                <div class="price-box">
                                                    <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $234.00 </span></p>
                                                    <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $124.00 </span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!--- .magicproduct-->
                    <div class="block block-list block-compare">
                        <div class="block-title"> <strong><span>Compare Products </span></strong></div>
                        <div class="block-content">
                            <p class="empty">You have no items to compare.</p>
                        </div>
                    </div><!--- .block-compare--> --}}
                    </div>
                    <!--- .sidebar-->
                    @yield('shoppage')
                </div>
                <!--- .row-->
            </div>
            <!--- .main-->
        </div>
        <!--- .container-->
    @endsection