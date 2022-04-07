<ol class="products-list" id="products-list">
    @foreach ($product as $products)
        <li class="item odd">
            {{-- <input type="hidden" id="product_id" value="{{ $products->url }}"> --}}
            <div class="row">
                <input type="hidden" id="id" value="{{ $products->id }}">
                <div class="col-mobile-12 col-xs-5 col-md-4 col-sm-4 col-lg-4">
                    <div class="products-list-container">
                        <div class="images-container">
                            <div class="product-hover">
                                {{-- <span class="sticker top-left"><span class="labelnew">New</span></span> --}}
                                <a href="#" title="" class="product-image">
                                    <img id="product-collection-image-8" class="img-responsive"
                                        src="/public/main_images/{{ $products->image }}" width="278" height="355"
                                        alt="">
                                    <span class="product-img-back">
                                        <img class="img-responsive" src="#" width="278" height="355" alt="">
                                    </span>
                                </a>
                                <div class="product-hover-box">
                                    <a class="detail_links" href="/products/{{ $products->url }}"></a>
                                    <div class="link-view"> <a title="Quick View" href="#"
                                            class="link-quickview"><i class="icon-magnifier icons"></i>Quick View</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-shop col-mobile-12 col-xs-7 col-md-8 col-sm-8 col-lg-8">
                    <div class="f-fix">
                        <div class="product-primary products-textlink clearfix">
                            <h2 class="product-name"><a href="/products/{{ $products->url }}"
                                    title="{{ $products->name }}">{{ $products->name }}</a></h2>
                            {{-- <div class="ratings">
                                <div class="rating-box">
                                    <div class="rating" style="width:80%"></div>
                                </div>
                                <p class="rating-links"> <a href="#">1 Review(s)</a> <span
                                        class="separator">|</span> <a href="#">Add Your Review</a></p>
                            </div> --}}
                            <div class="price-box"> <span class="regular-price"> <span
                                        class="price">{{ $products->price }}</span> </span></div>
                            <ul class="configurable-swatch-list configurable-swatch-color clearfix">
                                <li class="option-blue is-media"> <a href="javascript:void(0)" name="blue"
                                        class="swatch-link swatch-link-92 has-image" title="blue"> <span
                                            class="swatch-label"> <img src="assets/images/blue.png" alt="blue"
                                                width="15" height="15"> </span> </a></li>
                                <li class="option-red is-media"> <a href="javascript:void(0)" name="red"
                                        class="swatch-link swatch-link-92 has-image" title="red"> <span
                                            class="swatch-label"> <img src="assets/images/red.png" alt="red"
                                                width="15" height="15"> </span> </a></li>
                            </ul>
                        </div>
                        <div class="desc std">
                            <p>{{ $products->description }}</p>
                        </div>
                        <div class="product-secondary actions-no actions-list clearfix">
                            @if (Auth::check() && Auth::user()->utype != 'a')
                                @if ($products->stock == 0)
                                    <p class="action"><button type="button" title="Add to Cart"
                                            class="button btn-cart pull-left" disabled><span><i
                                                    class="icon-handbag icons"></i>
                                                <span>Out of Stock</span></span></button>
                                    </p>
                                @elseif (!empty($products->cart->product_stock))
                                    @if ($products->cart->product_stock >= 1)
                                        <p class="action"><a href="{{ url('/cart') }}"><button type="button"
                                                    title="Add to Cart" class="button btn-cart pull-left"><span><i
                                                            class="icon-handbag icons"></i>
                                                        <span>Go to Cart</span></span></button></a>
                                        </p>
                                    @endif
                                @else
                                    <p class="action"><button type="button" title="Add to Cart"
                                            id="{{ $products->id }}"
                                            class="button btn-cart pull-left atclbtn"><span><i
                                                    class="icon-handbag icons"></i>
                                                <span>Add to Cart</span></span></button>
                                    </p>
                                @endif
                            @else
                                @if ($products->stock == 0)
                                    <p class="action"><button type="button" title="Add to Cart"
                                            class="button btn-cart pull-left" disabled><span><i
                                                    class="icon-handbag icons"></i>
                                                <span>Out of Stock</span></span></button>
                                    </p>
                                @elseif (!empty($cart[$products->id]['stock']))
                                    @if ($cart[$products->id]['stock'] >= 1)
                                        <p class="action"><a href="{{ url('/cart') }}"><button type="button"
                                                    title="Add to Cart" class="button btn-cart pull-left"><span><i
                                                            class="icon-handbag icons"></i>
                                                        <span>Go to Cart</span></span></button></a>
                                        </p>
                                    @endif
                                @else
                                    <p class="action"><button type="button" title="Add to Cart"
                                            id="{{ $products->id }}"
                                            class="button btn-cart pull-left atclbtn"><span><i
                                                    class="icon-handbag icons"></i>
                                                <span>Add to Cart</span></span></button>
                                    </p>
                                @endif
                            @endif    
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <!--- .item-->
    @endforeach
</ol>
