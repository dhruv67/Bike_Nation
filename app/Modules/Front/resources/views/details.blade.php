@extends('layouts.user.webapp')
@section('usercontent')
    <div class="page">
        <div class="main-container col2-left-layout ">
            <div class="breadcrumbs">
                <div class="container">
                    <ul>
                        <li class="home"> <a href="{{ url('/') }}" title="Go to Home Page">Home</a></li>
                        <li class="category4"> <strong>Bikes</strong></li>
                    </ul>
                </div>
            </div>
            {{-- {{ dd($product) }} --}}
            @foreach ($product as $products)
                <div class="container">
                    <div class="main">
                        <div class="row">
                            <div class="col-main col-lg-12">
                                <div class="product-view">
                                    <div class="product-essential">
                                        <div class="row">
                                            <form action="#" method="post" id="product_addtocart_form">
                                                <input type="hidden" id="id" value="{{ $products->id }}">
                                                <div class="product-img-box clearfix col-md-5 col-sm-5 col-xs-12">
                                                    <div class="product-img-content">
                                                        <div class="product-image product-image-zoom">
                                                            <div class="product-image-gallery">
                                                                {{-- <span class="sticker top-left"><span
                                                                        class="labelnew">New</span></span><span
                                                                    class="sticker top-right"><span
                                                                        class="labelsale">Sale</span></span> --}}
                                                                <div class="image">
                                                                    <img class="image-main"
                                                                        class="gallery-image visible img-responsive"
                                                                        src="/public/main_images/{{ $products->image }}"
                                                                        alt="Short Sleeve Dress"
                                                                        title="Short Sleeve Dress" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--- .product-image-->
                                                        <div class="more-views">
                                                            <h2>More Views</h2>
                                                            <ul class="product-image-thumbs">
                                                                <li> <a class="thumb-link" href="#" title=""
                                                                        data-image-index="0"> <img
                                                                            class="img-responsive sub_img"
                                                                            src="/public/main_images/{{ $products->image }}"
                                                                            alt="" /> </a>
                                                                </li>
                                                                @foreach ($image as $images)
                                                                    <li> <a class="thumb-link" href="#" title=""
                                                                            data-image-index="1"> <img
                                                                                class="img-responsive sub_img"
                                                                                src="/public/product_images/{{ $images->imagenames }}"
                                                                                alt="" />
                                                                        </a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                        <!--- .more-views -->
                                                    </div>
                                                    <!--- .product-img-content-->
                                                </div>
                                                <!--- .product-img-box-->
                                                <div class="product-shop col-md-7 col-sm-7 col-xs-12">
                                                    <div class="product-shop-content">
                                                        <div class="product-name">
                                                            <h1>{{ $products->name }}</h1>
                                                        </div>
                                                        {{-- <div class="ratings">
                                                            <div class="rating-box">
                                                                <div class="rating" style="width:60%"></div>
                                                            </div>
                                                            <p class="rating-links"> <a href="#">1 Review(s)</a> <span
                                                                    class="separator">|</span> <a href="#">Add Your
                                                                    Review</a></p>
                                                        </div> --}}
                                                        <div class="product-type-data">
                                                            <div class="price-box">
                                                                {{-- <p class="old-price"> <span
                                                                        class="price-label">Regular
                                                                        Price:</span> <span class="price">
                                                                        ₹{{ $products->price }}
                                                                    </span></p> --}}
                                                                <p class="special-price"> <span
                                                                        class="price-label">Special
                                                                        Price</span> <span class="price">
                                                                        ₹{{ $products->price }}
                                                                    </span></p>
                                                            </div>
                                                            @if ($products->stock >= 2)
                                                                <p class="availability in-stock">Availability:
                                                                    <span>In stock</span>
                                                                </p>
                                                            @elseif ($products->stock < 2 && $products->stock != 0)
                                                                <p class="availability in-stock">Availability:
                                                                    <span style="color:rgb(255, 123, 0)">Hurry up only
                                                                        {{ $products->stock }} left </span>
                                                                </p>
                                                            @else
                                                                <p class="availability out">Availability:
                                                                    <span style="color:red">Out of stock</span>
                                                                </p>
                                                            @endif
                                                            <div class="products-sku"> <span
                                                                    class="text-sku">Product
                                                                    Code: {{ $products->upc }}</span> demo_02</div>
                                                        </div>
                                                        <div class="short-description">
                                                            <h2>Short Description</h2>
                                                            <p>{{ $products->description }}</p>
                                                        </div>
                                                        <div class="add-to-box">
                                                            <div class="product-qty">
                                                                @if ($products->stock > 0)
                                                                    <label for="qty">Qty:</label>
                                                                    <div class="custom-qty"> <input type="text"
                                                                            name="qty" id="qty" min="1" max="2" title="Qty"
                                                                            class="input-text qty" value="1" /> <button
                                                                            type="button" id="plus"
                                                                            class="increase items plusbtn">
                                                                            <i class="fa fa-plus"></i> </button> <button
                                                                            type="button" id="minus"
                                                                            class="reduced items minusbtn">
                                                                            <i class="fa fa-minus"></i> </button>
                                                                        <div class="row"><label
                                                                                id="qty_err"></label></div>
                                                                    </div>
                                                                @endif
                                                            </div>
                                                            @if (Auth::check() && Auth::user()->utype != 'a')
                                                                @if ($products->stock == 0)
                                                                    <div class="add-to-cart"> <button type="button"
                                                                            title="Add to Cart" class="button btn-cart">
                                                                            <span>
                                                                                <span
                                                                                    class="view-cart icon-handbag icons">Out
                                                                                    of
                                                                                    Cart</span> </span> </button></div>
                                                                @elseif (!empty($products->cart->product_stock))
                                                                    @if ($products->cart->product_stock >= 1)
                                                                        <div class="add-to-cart"><a
                                                                                href="{{ url('/cart') }}"><button
                                                                                    type="button" id="atcbtn"
                                                                                    title="Add to Cart"
                                                                                    class="button btn-cart">
                                                                                    <span>
                                                                                        <span
                                                                                            class="view-cart icon-handbag icons">Go
                                                                                            to
                                                                                            Cart</span> </span>
                                                                                </button></a>
                                                                        </div>
                                                                    @endif
                                                                @else
                                                                    <div class="add-to-cart"> <button type="button"
                                                                            id="atcbtn" title="Add to Cart"
                                                                            class="button btn-cart"> <span>
                                                                                <span
                                                                                    class="view-cart icon-handbag icons">Add
                                                                                    to
                                                                                    Cart</span> </span></button></div>
                                                                @endif
                                                            @else
                                                                @if ($products->stock == 0)
                                                                    <div class="add-to-cart"> <button type="button"
                                                                            title="Add to Cart" class="button btn-cart">
                                                                            <span>
                                                                                <span
                                                                                    class="view-cart icon-handbag icons">Out
                                                                                    of
                                                                                    Cart</span> </span> </button></div>
                                                                @elseif (!empty($cart[$products->id]['stock']))
                                                                    @if ($cart[$products->id]['stock'] >= 1)
                                                                        <div class="add-to-cart"><a
                                                                                href="{{ url('/cart') }}"><button
                                                                                    type="button" id="atcbtn"
                                                                                    title="Add to Cart"
                                                                                    class="button btn-cart"> <span>
                                                                                        <span
                                                                                            class="view-cart icon-handbag icons">Go
                                                                                            to
                                                                                            Cart</span> </span>
                                                                                </button></a></div>
                                                                    @endif
                                                                @else
                                                                    <div class="add-to-cart"> <button type="button"
                                                                            id="atcbtn" title="Add to Cart"
                                                                            class="button btn-cart"> <span>
                                                                                <span
                                                                                    class="view-cart icon-handbag icons">Add
                                                                                    to
                                                                                    Cart</span> </span></button></div>
                                                                @endif
                                                            @endif

                                                        </div>
                                                        <div class="addit">
                                                            <div class="alo-social-links clearfix">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--- .product-shop-content-->
                                                </div>
                                                <!--- .product-shop-->
                                            </form>
                                        </div>
                                    </div>
                                    <!--- .product-essential-->
                                    <div class="product-wapper-tab clearfix">
                                        <ul class="toggle-tabs">
                                            <li class="item active" target=".box-description">Description</li>
                                            {{-- <li class="item " target=".box-additional">Additional Information</li>
                                            <li class="item " target=".box-reviews">Reviews</li>
                                            <li class="item " target=".box-customtab">Custom Tab</li>
                                            <li class="item " target=".box-tags">Product Tags</li> --}}
                                        </ul>
                                        <div class="product-collateral">
                                            <div class="box-collateral box-description active">
                                                <h2>Description</h2>
                                                <h2>Details</h2>
                                                <div class="std">
                                                    <p>{{ $products->description }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--- .product-wapper-tab-->
                                </div>
                                <!--- .product-view-->
                            </div>
                            <!--- .col-main-->
                        </div>
                        <!--- .row-->
                    </div>
                    <!--- .main-->
                </div>
            @endforeach
        </div>
    </div>
@endsection
@section('userscripts')
    <script>
        function addcart() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var id = $('#id').val();
            var qty = $('#qty').val();

            $.ajax({
                url: "/add-to-cart",
                method: "POST",
                data: {
                    id: id,
                    qty: qty,
                },
                success: function(response) {
                    if (response.minicart) {
                        $('.mini-contentCart').html(response.minicart);
                    }
                }
            });

        }

        function qty() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var id = $('#id').val();

            $.ajax({
                url: "/qty",
                type: "POST",
                datatype: 'json',
                data: {
                    id: id,
                },
                success: function(response) {
                    var stock = response.data.stock;
                    $("#qty").keyup(function() {
                        // alert(max);
                        var max = parseInt($(this).attr('max'));
                        var min = parseInt($(this).attr('min'));

                        if (max < stock) {
                            if ($(this).val() > max) {
                                $(this).val(max);
                                $("#qty_err").show();
                                $("#qty_err").html("maximum reached");
                                $("#qty_err").focus();
                                $("#qty_err").css("color", "red");
                            } else if ($(this).val() < min) {
                                $(this).val(min);
                            }
                        } else
                        if ($(this).val() > stock) {
                            $(this).val(stock);
                            $("#qty_err").show();
                            $("#qty_err").html("only available");
                            $("#qty_err").focus();
                            $("#qty_err").css("color", "red");
                        } else if ($(this).val() < min) {
                            $(this).val(min);
                        }
                    });

                    $(".plusbtn").on("click", function() {
                        {
                            var result = document.getElementById('qty');
                            var qty = result.value;
                            if (!isNaN(qty) && qty < stock && qty < 2) {
                                result.value++;
                                // $("#qty_err").hide();
                            } else {
                                alert("maximum reached")
                                // $("#qty_err").show();
                                // $("#qty_err").html("maximum reached");
                                // $("#qty_err").focus();
                                // $("#qty_err").css("color", "red");
                                return false;
                            }
                        }
                    });
                }
            });
        }

        $(document).ready(function() {
            qty();

            $('.image').zoom();
            $('.thumb-link').hover(function() {
                $('.image-main').attr('src', $(this).children('.sub_img').attr('src'));
                $('.image').zoom().attr('src', this.href);
            });

            $('#qty').keypress(function(e) {
                if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event
                        .which > 57)) {
                    e.preventDefault();
                    $("#qty_err").show();
                    $("#qty_err").html("only numbers allowed");
                    $("#qty_err").focus();
                    $("#qty_err").css("color", "red");
                } else {
                    $("#qty_err").hide();
                }
            });

            $(".minusbtn").on("click", function() {
                var result = document.getElementById('qty');
                var qty = result.value;
                if (!isNaN(qty) && qty > 1) {
                    result.value--
                } else {
                    return false;
                }
            });
        });

        $("#atcbtn").on("click", function() {
            addcart();

            $('.add-to-cart').html(`<div class="add-to-cart"><a href="{{ url('/cart') }}"><button type="button" title="Add to Cart"
                    class="button btn-cart"> <span>
                        <span class="view-cart icon-handbag icons">Go to Cart</span> </span> </button></a></div>`);

        });
    </script>
@endsection
