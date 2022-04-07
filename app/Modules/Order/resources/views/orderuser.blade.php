@extends('layouts.user.webapp')
@section('usercontent')
    <div class="woocommerce">
        <div class="container">
            <div class="content-top">
                <h2>Order Status</h2>
                <p>Need to Help? Call us: +9 123 456 789 or Email: <a href="mailto:Support@Rosi.com">Support@Rosi.com</a>
                </p>
            </div>
            <ul class="row">
                <li class="col-md-9 col-padding-right">
                    <table class="table-order table-order-review">
                        <thead>
                            <tr>
                                <td width="68">Product Name</td>
                                <td width="14">price</td>
                                <td width="14">QTY</td>
                                <td width="14">Total</td>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- {{ dd($cart_t) }} --}}
                            @php
                                $tsubp = 0;
                                $tqty = 0;
                            @endphp

                            @foreach ($cart_t as $carts)
                                <tr>
                                    <td class="name">{{ $carts->product->name }}</td>
                                    <td>₹{{ $carts->product->price }}</td>
                                    <td>{{ $carts->product_stock }}</td>
                                    <td class="price">
                                        ₹{{ $carts->product_stock * $carts->product->price }}</td>
                                </tr>
                                @php 
                                    $tsubp += $carts->product_stock * $carts->product->price; 
                                    $tqty += $carts->product_stock
                                @endphp
                            @endforeach
                        </tbody>
                    </table>
                    <table class="table-order table-order-review-bottom">
                        <tbody>
                            {{-- <tr>
                                <td class="first" width="80%">Sub total</td>
                                <td width="20%">{{ $tsubp }}</td>
                            </tr>
                            <tr>
                                <td class="first">Shipping Fee</td>
                                <td>Free:</td>
                            </tr>
                            <tr>
                                <td class="first">Voucher code</td>
                                <td>£20.00</td>
                            </tr> --}}
                            <tr>
                                <td class="first large">Total Payment</td>
                                <td class="price large">₹{{ $tsubp }}</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="2">
                                    <div class="left">Forgot an Item? <a href="/cart">Edit Your Cart</a></div>
                                    <div class="right">
                                        <form name="order_form" id="order_form" method="POST" action="/getorder">
                                        @csrf
                                        <input type="hidden" value="{{ $tsubp }}" name="total_price">
                                        <input type="hidden" value="{{ $tqty }}" name="total_qty">
                                        @php
                                            $count=1;
                                        @endphp
                                        @foreach ($cart_t as $items)
                                        <input type="hidden" value="{{ $items->product->id }}" name="id[{{$count}}]">  
                                        <input type="hidden" value="{{ $items->product_stock }}" name="qty[{{$count}}]">  
                                        <input type="hidden" value="{{ $items->product->price }}" name="price[{{$count}}]">  
                                        @php
                                            $count++;
                                        @endphp
                                        @endforeach
                                        {{-- <input type="hidden" value="{{ $qty }}" name="qty"> --}}
                                        <a href="/payment"><input type="button" value="Back" class="btn-step"></a>
                                        <a href="#"><input type="submit" id="placebtn" value="Place Order" class="btn-step btn-highligh"></a>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </li>
                <li class="col-md-3">
                    <ul class="step-list-info">
                        @foreach ($billing_id as $bid)
                        <li>
                            <div class="title-step">Billing Address<a href="/billing">CHANGE</a></div>
                            <p><strong>{{ $bid->first_name }}</strong><br>
                                {{ $bid->city }}<br>
                                {{ $bid->address }} <br>
                                {{ $bid->state }}<br>
                                {{ $bid->mobile_number }}
                            </p>
                        </li>
                        @endforeach
                        @foreach ($shipping_id as $sid)
                        <li>
                            <div class="title-step">Shipping Address<a href="/shipping">CHANGE</a></div>
                            <p><strong>{{ $sid->first_name }}</strong><br>
                                {{ $sid->city }}<br>
                                {{ $sid->address }} <br>
                                {{ $sid->state }}<br>
                                {{ $sid->mobile_number }}
                            </p>
                        </li>
                        @endforeach
                        {{-- <li>
                            <div class="title-step">Shipping Method<a href="#">CHANGE</a></div>
                            <p>Flat Rate - Fixed $15.00</p>
                        </li> --}}
                        <li>
                            <div class="title-step">Payment Method<a href="/payment">CHANGE</a></div>
                            <p>Cash On delivery</p>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="line-bottom"></div>
        </div>
        <!--- .container-->
    </div>
@endsection
@section('userscripts')
    <script>
        // $(document).ready(function() {
        //     $('#placebtn').on('click',function() {
        //         alert()
        //     });
        // });
    </script>
@endsection
