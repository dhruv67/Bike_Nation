@extends('Front::sidebar')
@section('shoppage')
    <div class="col-main col-lg-9 col-md-9 col-sm-9 col-xs-12 content-color color">
        <div class="page-title category-title">
            <h1>Men</h1>
        </div>
        <p class="category-image"><img src="assets/images/categories_grid_1.jpg" alt="Men" title="Men"></p>
        <div class="category-products">
            <div class="toolbar">
                <div class="sorter">
                    <p class="view-mode"> <label>View as:</label> <a href="javascript:void(0)" title="Grid"
                            class="grid active"> <i class="icon-grid icons"></i> </a> <a
                            data-href="{{ url('/home/products-list') }}" title="List" class="redirectjs list"> <i
                                class="icon-list icons"></i> </a></p>
                    <div class="sort-by">
                        <label>Sort By</label>
                        <select>
                            <option value="position" selected="selected"> Position</option>
                            <option value="name"> Name</option>
                            <option value="price"> Price</option>
                        </select>
                        <a href="#" title="Set Descending Direction"><img src="assets/images/i_asc_arrow.gif"
                                alt="Set Descending Direction" class="v-middle"></a>
                    </div>
                    <div class="limiter">
                        <label>Show</label>
                        <select>
                            <option value="9" selected="selected"> 9</option>
                            <option value="12"> 12</option>
                            <option value="15"> 15</option>
                        </select>
                    </div>
                    <div class="pager">
                        <div class="pages">
                            <strong>Page:</strong>
                            <ol>
                                <li class="current">1</li>
                                <li><a href="#">2</a></li>
                                <li class="bor-none"> <a class="next i-next" href="#" title="Next"> <i
                                            class="fa fa-angle-right">&nbsp;</i> </a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!--- .toolbar-->
            <ul class="products-grid row products-grid--max-3-col last odd">
                @foreach ($category as $products)
                    <li class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-mobile-12 item">
                        <div class="category-products-grid">
                            <div class="images-container">
                                <div class="product-hover">
                                    <span class="sticker top-left"><span class="labelnew">New</span></span>
                                    <a href="#" title="Configurable Product" class="product-image">
                                        <img id="product-collection-image-8" class="img-responsive"
                                            src="/public/main_images/{{ $products->image }}" alt="" height="355"
                                            width="278">
                                        <span class="product-img-back"> <img class="img-responsive"
                                                src="/public/main_images/{{ $products->image }}" alt="" height="355"
                                                width="278"> </span>
                                    </a>
                                </div>
                                <div class="actions-no hover-box">
                                    <div class="actions">
                                        <button type="button" title="Add to Cart" class="button btn-cart pull-left"><span><i
                                                    class="icon-handbag icons"></i><span>Add to Cart</span></span></button>
                                        <ul class="add-to-links pull-left">
                                            <li class="pull-left"><a href="#" title="Add to Wishlist"
                                                    class="link-wishlist"><i class="icon-heart icons"></i>Add to
                                                    Wishlist</a></li>
                                            <li class="pull-left"><a href="#" title="Add to Compare"
                                                    class="link-compare"><i class="icon-bar-chart icons"></i>Add to
                                                    Compare</a></li>
                                            <li class="link-view pull-left"> <a title="Quick View" href="#"
                                                    class="link-quickview"><i class="icon-magnifier icons"></i>Quick
                                                    View</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info products-textlink clearfix">
                                <h2 class="product-name"><a href="{{ $products->url }}"
                                        title="{{ $products->name }}">{{ $products->name }}</a></h2>
                                <div class="price-box"> <span class="regular-price"> <span
                                            class="price">{{ $products->price }}</span> </span></div>
                                {{-- <div class="ratings">
                            <div class="rating-box">
                                <div class="rating" style="width:80%"></div>
                            </div>
                            <span class="amount"><a href="#">1 Review(s)</a></span>
                        </div> --}}
                            </div>
                        </div>
                    </li>
                @endforeach
                {{-- <li class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-mobile-12 item">
                <div class="category-products-grid">
                    <div class="images-container">
                        <div class="product-hover"> 
                            <span class="sticker top-left"><span class="labelnew">New</span></span> 
                            <a href="#" title="Configurable Product" class="product-image"> 
                                <img id="product-collection-image-8" class="img-responsive" src="http://placehold.it/278x355" alt="" height="355" width="278"> 
                                <span class="product-img-back"> <img class="img-responsive" src="http://placehold.it/278x355?text=hover" alt="" height="355" width="278"> </span> 
                            </a>
                        </div>
                        <div class="actions-no hover-box">
                            <div class="actions">
                                <button type="button" title="Add to Cart" class="button btn-cart pull-left"><span><i class="icon-handbag icons"></i><span>Add to Cart</span></span></button>
                                <ul class="add-to-links pull-left">
                                    <li class="pull-left"><a href="#" title="Add to Wishlist" class="link-wishlist"><i class="icon-heart icons"></i>Add to Wishlist</a></li>
                                    <li class="pull-left"><a href="#" title="Add to Compare" class="link-compare"><i class="icon-bar-chart icons"></i>Add to Compare</a></li>
                                    <li class="link-view pull-left"> <a title="Quick View" href="#" class="link-quickview"><i class="icon-magnifier icons"></i>Quick View</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product-info products-textlink clearfix">
                        <h2 class="product-name"><a href="#" title="Configurable Product">Configurable Product</a></h2>
                        <ul class="configurable-swatch-list configurable-swatch-color clearfix">
                            <li class="option-blue is-media"> <a href="javascript:void(0)" name="blue" class="swatch-link swatch-link-92 has-image" title="blue"> <span class="swatch-label"> <img src="assets/images/blue.png" alt="blue" height="15" width="15"> </span> </a></li>
                            <li class="option-red is-media"> <a href="javascript:void(0)" name="red" class="swatch-link swatch-link-92 has-image" title="red"> <span class="swatch-label"> <img src="assets/images/red.png" alt="red" height="15" width="15"> </span> </a></li>
                        </ul>
                        <div class="price-box"> <span class="regular-price"> <span class="price">$180.00</span> </span></div>
                        <div class="ratings">
                            <div class="rating-box">
                                <div class="rating" style="width:80%"></div>
                            </div>
                            <span class="amount"><a href="#">1 Review(s)</a></span>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-mobile-12 item">
                <div class="category-products-grid">
                    <div class="images-container">
                        <div class="product-hover"> 
                            <span class="sticker top-left"><span class="labelnew">New</span></span> 
                            <a href="#" title="Configurable Product" class="product-image"> 
                                <img id="product-collection-image-8" class="img-responsive" src="http://placehold.it/278x355" alt="" height="355" width="278"> 
                                <span class="product-img-back"> <img class="img-responsive" src="http://placehold.it/278x355?text=hover" alt="" height="355" width="278"> </span> 
                            </a>
                        </div>
                        <div class="actions-no hover-box">
                            <div class="actions">
                                <button type="button" title="Add to Cart" class="button btn-cart pull-left"><span><i class="icon-handbag icons"></i><span>Add to Cart</span></span></button>
                                <ul class="add-to-links pull-left">
                                    <li class="pull-left"><a href="#" title="Add to Wishlist" class="link-wishlist"><i class="icon-heart icons"></i>Add to Wishlist</a></li>
                                    <li class="pull-left"><a href="#" title="Add to Compare" class="link-compare"><i class="icon-bar-chart icons"></i>Add to Compare</a></li>
                                    <li class="link-view pull-left"> <a title="Quick View" href="#" class="link-quickview"><i class="icon-magnifier icons"></i>Quick View</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product-info products-textlink clearfix">
                        <h2 class="product-name"><a href="#" title="Cras sed rutrum">Cras sed rutrum</a></h2>
                        <div class="price-box"> <span class="regular-price"> <span class="price">$489.00</span> </span></div>
                    </div>
                </div>
            </li>
            <li class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-mobile-12 item">
                <div class="category-products-grid">
                    <div class="images-container">
                        <div class="product-hover"> 
                            <span class="sticker top-left"><span class="labelnew">New</span></span> 
                            <a href="#" title="Configurable Product" class="product-image"> 
                                <img id="product-collection-image-8" class="img-responsive" src="http://placehold.it/278x355" alt="" height="355" width="278"> 
                            </a>
                        </div>
                        <div class="actions-no hover-box">
                            <div class="actions">
                                <button type="button" title="Add to Cart" class="button btn-cart pull-left"><span><i class="icon-handbag icons"></i><span>Add to Cart</span></span></button>
                                <ul class="add-to-links pull-left">
                                    <li class="pull-left"><a href="#" title="Add to Wishlist" class="link-wishlist"><i class="icon-heart icons"></i>Add to Wishlist</a></li>
                                    <li class="pull-left"><a href="#" title="Add to Compare" class="link-compare"><i class="icon-bar-chart icons"></i>Add to Compare</a></li>
                                    <li class="link-view pull-left"> <a title="Quick View" href="#" class="link-quickview"><i class="icon-magnifier icons"></i>Quick View</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product-info products-textlink clearfix">
                        <h2 class="product-name"><a href="#" title="Mauris tincidunt">Mauris tincidunt</a></h2>
                        <div class="price-box"> <span class="regular-price"> <span class="price">$389.00</span> </span></div>
                        <div class="ratings">
                            <div class="rating-box">
                                <div class="rating" style="width:40%"></div>
                            </div>
                            <span class="amount"><a href="#">1 Review(s)</a></span>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-mobile-12 item">
                <div class="category-products-grid">
                    <div class="images-container">
                        <div class="product-hover"> 
                            <span class="sticker top-left"><span class="labelnew">New</span></span> 
                            <a href="#" title="Configurable Product" class="product-image"> 
                                <img id="product-collection-image-8" class="img-responsive" src="http://placehold.it/278x355" alt="" height="355" width="278"> 
                                <span class="product-img-back"> <img class="img-responsive" src="http://placehold.it/278x355?text=hover" alt="" height="355" width="278"> </span> 
                            </a>
                        </div>
                        <div class="actions-no hover-box">
                            <div class="actions">
                                <button type="button" title="Add to Cart" class="button btn-cart pull-left"><span><i class="icon-handbag icons"></i><span>Add to Cart</span></span></button>
                                <ul class="add-to-links pull-left">
                                    <li class="pull-left"><a href="#" title="Add to Wishlist" class="link-wishlist"><i class="icon-heart icons"></i>Add to Wishlist</a></li>
                                    <li class="pull-left"><a href="#" title="Add to Compare" class="link-compare"><i class="icon-bar-chart icons"></i>Add to Compare</a></li>
                                    <li class="link-view pull-left"> <a title="Quick View" href="#" class="link-quickview"><i class="icon-magnifier icons"></i>Quick View</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div style="min-height: 79px;" class="product-info products-textlink clearfix">
                        <h2 class="product-name"><a href="#" title="Ribbed Jumper">Ribbed Jumper</a></h2>
                        <div class="price-box"> <span class="regular-price"> <span class="price">$57.00</span> </span></div>
                        <div class="ratings">
                            <div class="rating-box">
                                <div class="rating" style="width:60%"></div>
                            </div>
                            <span class="amount"><a href="#">1 Review(s)</a></span>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-mobile-12 item">
                <div class="category-products-grid">
                    <div class="images-container">
                        <div class="product-hover"> 
                            <span class="sticker top-left"><span class="labelnew">New</span></span> 
                            <a href="#" title="Configurable Product" class="product-image"> 
                                <img id="product-collection-image-8" class="img-responsive" src="http://placehold.it/278x355" alt="" height="355" width="278"> 
                                <span class="product-img-back"> <img class="img-responsive" src="http://placehold.it/278x355?text=hover" alt="" height="355" width="278"> </span> 
                            </a>
                        </div>
                        <div class="actions-no hover-box">
                            <div class="actions">
                                <button><span><i class="icon-handbag icons"></i><span>Add to Cart</span></span></button>
                                <ul class="add-to-links pull-left">
                                    <li class="pull-left"><a href="#" title="Add to Wishlist" class="link-wishlist"><i class="icon-heart icons"></i>Add to Wishlist</a></li>
                                    <li class="pull-left"><a href="#" title="Add to Compare" class="link-compare"><i class="icon-bar-chart icons"></i>Add to Compare</a></li>
                                    <li class="link-view pull-left"> <a title="Quick View" href="#" class="link-quickview"><i class="icon-magnifier icons"></i>Quick View</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product-info products-textlink clearfix">
                        <h2 class="product-name"><a href="#" title="Waffle Knit Jumper">Waffle Knit Jumper</a></h2>
                        <div class="price-box"> <span class="regular-price"> <span class="price">$38.00</span> </span></div>
                        <div class="ratings">
                            <div class="rating-box">
                                <div class="rating" style="width:80%"></div>
                            </div>
                            <span class="amount"><a href="#">1 Review(s)</a></span>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-mobile-12 item">
                <div class="category-products-grid">
                    <div class="images-container">
                        <div class="product-hover"> 
                            <span class="sticker top-left"><span class="labelnew">New</span></span> 
                            <a href="#" title="Configurable Product" class="product-image"> 
                                <img id="product-collection-image-8" class="img-responsive" src="http://placehold.it/278x355" alt="" height="355" width="278"> 
                                <span class="product-img-back"> <img class="img-responsive" src="http://placehold.it/278x355?text=hover" alt="" height="355" width="278"> </span> 
                            </a>
                        </div>
                        <div class="actions-no hover-box">
                            <div class="actions">
                                <button type="button" title="Add to Cart" class="button btn-cart pull-left"><span><i class="icon-handbag icons"></i><span>Add to Cart</span></span></button>
                                <ul class="add-to-links pull-left">
                                    <li class="pull-left"><a href="#" title="Add to Wishlist" class="link-wishlist"><i class="icon-heart icons"></i>Add to Wishlist</a></li>
                                    <li class="pull-left"><a href="#" title="Add to Compare" class="link-compare"><i class="icon-bar-chart icons"></i>Add to Compare</a></li>
                                    <li class="link-view pull-left"> <a title="Quick View" href="#" class="link-quickview"><i class="icon-magnifier icons"></i>Quick View</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product-info products-textlink clearfix">
                        <h2 class="product-name"><a href="#" title="Crew Neck Jumper color">Crew Neck Jumper color</a></h2>
                        <ul class="configurable-swatch-list configurable-swatch-color clearfix">
                            <li class="option-black is-media"> <a href="javascript:void(0)" name="black" class="swatch-link swatch-link-92 has-image" title="black"> <span class="swatch-label"> <img src="assets/images/black.png" alt="black" height="15" width="15"> </span> </a></li>
                            <li class="option-blue is-media"> <a href="javascript:void(0)" name="blue" class="swatch-link swatch-link-92 has-image" title="blue"> <span class="swatch-label"> <img src="assets/images/blue.png" alt="blue" height="15" width="15"> </span> </a></li>
                        </ul>
                        <div class="price-box"> <span class="regular-price"> <span class="price">$35.00</span> </span></div>
                        <div class="ratings">
                            <div class="rating-box">
                                <div class="rating" style="width:80%"></div>
                            </div>
                            <span class="amount"><a href="#">1 Review(s)</a></span>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-mobile-12 item">
                <div class="category-products-grid">
                    <div class="images-container">
                        <div class="product-hover"> 
                            <span class="sticker top-left"><span class="labelnew">New</span></span> 
                            <a href="#" title="Configurable Product" class="product-image"> 
                                <img id="product-collection-image-8" class="img-responsive" src="http://placehold.it/278x355" alt="" height="355" width="278"> 
                                <span class="product-img-back"> <img class="img-responsive" src="http://placehold.it/278x355?text=hover" alt="" height="355" width="278"> </span> 
                            </a>
                        </div>
                        <div class="actions-no hover-box">
                            <div class="actions">
                                <button type="button" title="Add to Cart" class="button btn-cart pull-left"><span><i class="icon-handbag icons"></i><span>Add to Cart</span></span></button>
                                <ul class="add-to-links pull-left">
                                    <li class="pull-left"><a href="#" title="Add to Wishlist" class="link-wishlist"><i class="icon-heart icons"></i>Add to Wishlist</a></li>
                                    <li class="pull-left"><a href="#" title="Add to Compare" class="link-compare"><i class="icon-bar-chart icons"></i>Add to Compare</a></li>
                                    <li class="link-view pull-left"> <a title="Quick View" href="#" class="link-quickview"><i class="icon-magnifier icons"></i>Quick View</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product-info products-textlink clearfix">
                        <h2 class="product-name"><a href="#" title="Oversized Knitted T-Shirt">Oversized Knitted T-Shirt</a></h2>
                        <div class="price-box">
                            <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $367.00 </span></p>
                            <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $213.00 </span></p>
                        </div>
                        <div class="ratings">
                            <div class="rating-box">
                                <div class="rating" style="width:60%"></div>
                            </div>
                            <span class="amount"><a href="#">1 Review(s)</a></span>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-mobile-12 item">
                <div class="category-products-grid">
                    <div class="images-container">
                        <div class="product-hover"> 
                            <span class="sticker top-left"><span class="labelnew">New</span></span> 
                            <a href="#" title="Configurable Product" class="product-image"> 
                                <img id="product-collection-image-8" class="img-responsive" src="http://placehold.it/278x355" alt="" height="355" width="278"> 
                            </a>
                        </div>
                        <div class="actions-no hover-box">
                            <div class="actions">
                                <button type="button" title="Add to Cart" class="button btn-cart pull-left"><span><i class="icon-handbag icons"></i><span>Add to Cart</span></span></button>
                                <ul class="add-to-links pull-left">
                                    <li class="pull-left"><a href="#" title="Add to Wishlist" class="link-wishlist"><i class="icon-heart icons"></i>Add to Wishlist</a></li>
                                    <li class="pull-left"><a href="#" title="Add to Compare" class="link-compare"><i class="icon-bar-chart icons"></i>Add to Compare</a></li>
                                    <li class="link-view pull-left"> <a title="Quick View" href="#" class="link-quickview"><i class="icon-magnifier icons"></i>Quick View</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="product-info products-textlink clearfix">
                        <h2 class="product-name"><a href="#" title="Knitted T-Shirt">Knitted T-Shirt</a></h2>
                        <div class="price-box"> <span class="regular-price"> <span class="price">$24.00</span> </span></div>
                        <div class="ratings">
                            <div class="rating-box">
                                <div class="rating" style="width:60%"></div>
                            </div>
                            <span class="amount"><a href="#">1 Review(s)</a></span>
                        </div>
                    </div>
                </div>
            </li> --}}
            </ul>
            <!--- .products-grid-->
            <div class="page-nav-bottom">
                <div class="left">Items 13 to 24 of 38 total</div>
                <div class="right">
                    {{-- {{ $product->links() }} --}}
                </div>
            </div>
            <!--- .page-nav-bottom-->
            {{-- {{ $product->links() }} --}}
        </div>
        <!--- .category-products-->
    </div>
    <!--- .col-main-->
@endsection
