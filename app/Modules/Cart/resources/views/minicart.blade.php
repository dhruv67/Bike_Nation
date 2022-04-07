<div class="block-content">
    <p class="block-subtitle">added item(s)</p>
    <ol id="cart-sidebar" class="mini-products-list clearfix">
        @auth
            @foreach ($cartt as $items)
                <li class="item clearfix">
                    <div class="cart-content-top">
                        <a href="/products/{{ $items->product->url }}" title="{{ $items->product->name }}"
                            class="product-image">
                            <img src="/public/main_images/{{ $items->product->image }}"
                                width="60" height="77" alt="Brown Arrows Cushion">
                        </a>
                        <div class="product-details">
                            <p class="product-name">
                                <a href="/products/{{ $items->product->url }}"
                                    title="{{ $items->product->name }}">{{ $items->product->name }}</a>
                            </p>
                            <strong>{{ $items->product_stock }}</strong> x <span
                                class="price">${{ $items->product_stock * $items->product->price }}</span>
                        </div>
                    </div>
                </li>
            @endforeach
        @endauth
        @guest
        @if (!empty($cart))
            @foreach ($cart as $key => $items)
                <li class="item clearfix">
                    <div class="cart-content-top">
                        <a href="#" title="{{ $items['name'] }}"
                            class="product-image">
                            <img src="/public/main_images/{{ $items['image'] }}"
                                width="60" height="77" alt="Brown Arrows Cushion">
                        </a>
                        <div class="product-details">
                            <p class="product-name">
                                <a href="#"
                                    title="{{ $items['name'] }}">{{ $items['name'] }}</a>
                            </p>
                            <strong>{{ $items['stock'] }}</strong> x <span
                                class="price">${{ $items['stock'] * $items['price'] }}</span>
                        </div>
                    </div>
                </li>
            @endforeach
        @else
        Cart is Empty
        @endif    
        @endguest
    </ol>
    <div class="actions"><a href="{{ url('/cart') }}" class="view-cart">View cart</a></div>
</div>
