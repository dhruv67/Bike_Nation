@extends('layouts.user.webapp')
@section('usercontent')
    <div class="main-container col1-layout content-color color">
        <div class="breadcrumbs">
            <div class="container">
                <ul>
                    <li class="home"> <a href="#" title="Go to Home Page">Home</a></li>
                    <li> <strong>My Cart</strong></li>
                </ul>
            </div>
        </div>
        <!--- .breadcrumbs-->

        <div class="container">
            <div class="table-responsive-wrapper">
                <table id="cart_table" class="table-order table-wishlist">
                    <thead>
                        <tr>
                            <td>Remove</td>
                            <td>Product Detail & comments</td>
                            <td>Add to cart</td>
                            <td>
                                <ul id="saveform_errlist"></ul>
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $total = 0;
                        @endphp
                        {{-- {{ dd($cart) }} --}}
                        @auth
                            {{-- @if ($cartt) --}}
                            @foreach ($cartt as $items)
                                <tr>
                                    {{-- <input type="hidden" value="{{ $items->id }}" id="id"> --}}
                                    <input type="hidden" value="{{ $items->product->id }}" id="pid">
                                    <td><button type="button" id="{{ $items->product->id }}" class="button-remove"><i
                                                class="icon-close"></i></button></td>
                                    <td>
                                        <table class="table-order-product-item">
                                            <tr>
                                                <td style="width:200px; height:100px;text-align:center; vertical-align:middle"><img src="/public/main_images/{{ $items->product->image }}" width="200"
                                                        height="100" /></td>
                                                <td>
                                                    <p>{{ $items->product->name }}<br></p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                    <td class="wish-list-control">
                                        <div class="product_price">
                                            ₹{{ $items->product_stock * $items->product->price }}
                                            @php
                                                $total += $items->product_stock * $items->product->price;
                                            @endphp
                                        </div>
                                        <div class="number-input quantity">
                                            <button type="button" value="{{ $items->product->id }}"
                                                class="minus">-</button>
                                            <input type="text" id="qty" class="qty"
                                                value="{{ $items->product_stock }}" disabled>
                                            <input type="hidden" id="{{ $items->product->price }}" class="price">
                                            <button type="button" value="{{ $items->product->id }}"
                                                class="plus">+</button>
                                        </div>
                                        <div class="product_err">
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @endauth
                        {{-- @else --}}
                        @guest
                            @if (!empty($cart))
                                @foreach ($cart as $key => $items)
                                    <tr>
                                        <input type="hidden" value="{{ $items['id'] }}" id="pid">
                                        <td><button type="button" id="{{ $items['id'] }}" class="button-remove"><i
                                                    class="icon-close"></i></button></td>
                                        <td>
                                            <table class="table-order-product-item">
                                                <tr>
                                                    <td style="width:200px; height:100px;text-align:center; vertical-align:middle"><img src="/public/main_images/{{ $items['image'] }}" width="200"
                                                            height="100" /></td>
                                                    <td>
                                                        <p>{{ $items['name'] }}<br></p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td class="wish-list-control">
                                            <div class="product_price">
                                                ₹{{ $items['stock'] * $items['price'] }}
                                                @php
                                                    $total += $items['stock'] * $items['price'];
                                                @endphp
                                            </div>
                                            <div class="number-input quantity">
                                                <button type="button" value="{{ $items['id'] }}"
                                                    class="minus">-</button>
                                                <input type="text" id="qty" class="qty"
                                                    value="{{ $items['stock'] }}" disabled>
                                                <input type="hidden" id="{{ $items['price'] }}" class="price">
                                                <button type="button" value="{{ $items['id'] }}"
                                                    class="plus">+</button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                            <tr>
                                <td>
                                    Cart is empty.
                                </td>
                            </tr>
                            @endif

                        @endguest
                        {{-- @endif --}}
                        <tr>
                            <td colspan="3" class="text-right">
                                <div class="totalp"><h3><strong>Total ₹{{ $total }}</strong></h3></div>
                                <div><a href="{{ url('/billing') }}"><button class="btn-step">Checkout</button></a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!--- .table-responsive-wrapper-->
        </div>
        <!--- .container-->
    </div>
    <!--- .main-container -->
@endsection
@section('userscripts')
    <script>
        $('.button-remove').on('click', function() {
            $(this).parent().parent().remove();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var pid = $(this).attr('id');
            $.ajax({
                url: "/remove-cart",
                type: "get",
                datatype: 'json',
                data: {
                    pid: pid,
                },
                success: function(response) {}
            });

            $.ajax({
                url: "/remove-cart-session",
                method: "delete",
                data: {
                    pid: pid,
                },
                success: function(response) {}
            });

        });

        $('.plus, .minus, .qty').on('click change', function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var pid = $(this).val();
            var qty = $(this).parent().find('.qty').val();
            var price = $(this).parent().find('.price').attr('id');
            var tprice = $(this).parent().parent().find('.product_price');

            $.ajax({
                url: "/qty-update",
                method: "post",
                data: {
                    pid: pid,
                    qty: qty,
                    price: price
                },
                datatype: 'json',
                success: function(response) {
                    if (response.status == 400) {
                        $.each(response.errors, function(key, err_values) {
                            alert(err_values);
                            // perr.html(err_values)
                        });
                    } else if (response.status == 500) {
                        alert(response.messages);
                        // perr.html(response.messages)
                    } else {
                        tprice.html('Rs' + response.price);
                        $( ".totalp" ).load(location.href + " .totalp");
                    }
                }
            });
        });

        $(document).ready(function() {
            $('.plus').click(function(e) {
                e.preventDefault();
                var incre_value = $(this).parents('.quantity').find('.qty').val();
                var value = parseInt(incre_value, 2);
                value = isNaN(value) ? 2 : value;
                if (value <= 2) {
                    // value++;
                    $(this).parents('.quantity').find('.qty').val(value);
                }
            });

            $('.minus').click(function(e) {
                e.preventDefault();
                var decre_value = $(this).parents('.quantity').find('.qty').val();
                var value = parseInt(decre_value, 1);
                value = isNaN(value) ? 1 : value;
                if (value >= 1) {
                    // value--;
                    $(this).parents('.quantity').find('.qty').val(value);
                }
            });
        });
    </script>
@endsection
