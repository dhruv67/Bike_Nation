<ul class="products-grid row products-grid--max-3-col last odd" id="products-grid">
    @foreach ($product as $products)
        <li class="col-lg-4 col-md-4 col-sm-6 col-xs-6 col-mobile-12 item">
            <input type="hidden" id="id" value="{{ $products->id }}">
            {{-- <input type="text" id="pid" name="pid" value="{{ $products->id }}"> --}}
            <div class="category-products-grid">
                <div class="images-container">
                    <div class="product-hover">
                        {{-- <span class="sticker top-left"><span class="labelnew">New</span></span> --}}
                        <a href="/products/{{ $products->url }}" title="{{ $products->name }}"
                            class="product-image">
                            <img id="product-collection-image-8" class="img-responsive"
                                src="/public/main_images/{{ $products->image }}" alt="" height="355" width="278">
                            <span class="product-img-back"> <img class="img-responsive"
                                    src="/public/main_images/{{ $products->image }}" alt="" height="355" width="278">
                            </span>
                        </a>
                    </div>
                    <div class="actions-no hover-box">
                        <div class="actions">
                            @if (Auth::check() && Auth::user()->utype != 'a')
                                @if ($products->stock == 0)
                                    <button type="button" id="{{ $products->id }}" title="Add to Cart"
                                        class="button btn-cart pull-center" disabled><span><i style="color:white"
                                                class="icon-handbag icons"></i><span>Out of stock</span></span></button>
                                @elseif (!empty($products->cart->product_stock))
                                    @if ($products->cart->product_stock >= 1)
                                        <a href="{{ url('/cart') }}"><button type="button" title="Go to Cart"
                                                class="button btn-cart pull-center"><span><i
                                                        class="icon-handbag icons"></i><span>Go to
                                                        Cart</span></span></button></a>
                                    @endif
                                @else
                                    <button type="button" id="{{ $products->id }}" title="Add to Cart"
                                        class="button btn-cart pull-center atcgbtn"><span><i
                                                class="icon-handbag icons"></i><span>Add to Cart</span></span></button>
                                @endif
                            @else
                                @if ($products->stock == 0)
                                    <button type="button" id="{{ $products->id }}" title="Add to Cart"
                                        class="button btn-cart pull-center" disabled><span><i style="color:white"
                                                class="icon-handbag icons"></i><span>Out of stock</span></span></button>
                                @elseif (!empty($cart[$products->id]["stock"]))
                                    @if (($cart[$products->id]["stock"]) >= 1)
                                        <a href="{{ url('/cart') }}"><button type="button" title="Go to Cart"
                                                class="button btn-cart pull-center"><span><i
                                                        class="icon-handbag icons"></i><span>Go to
                                                        Cart</span></span></button></a>
                                    @endif
                                @else
                                    <button type="button" id="{{ $products->id }}" title="Add to Cart"
                                        class="button btn-cart pull-center atcgbtn"><span><i
                                                class="icon-handbag icons"></i><span>Add to Cart</span></span></button>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
                <div class="product-info products-textlink clearfix">
                    <h2 class="product-name"><a href="/products/{{ $products->url }}"
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
</ul>
