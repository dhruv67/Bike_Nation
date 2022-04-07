@extends('layouts.user.webapp')
@section('usercontent')
<div class="main-container col1-layout content-color color">
    <div class="breadcrumbs">
        <div class="container">
            <ul>
                <li class="home"><a href="/" title="Go to Home Page">Home</a></li>
                <li><strong><a href="/showOrder">My Orders</a></strong></li>
                <li><strong>My Products</strong></li>
            </ul>
        </div>
    </div>
    <!--- .breadcrumbs-->
    <div class="container">
        <div class="content-top no-border">
            <h2>My Products</h2>
            <div class="row invoice-info" style=" padding:50px; border: solid #4f4e4e">
                <div class="col-sm-12 invoice-col right" style="padding-bottom: 40px">
                        @foreach ($order as $orders)

                            <div class="col-sm-4 invoice-col" style="font-size: 15px;">

                                        <strong>Billing Address</strong><br>
                                        {{$orders->bid->address}}<br>
                                        {{$orders->bid->city}}
                                        {{$orders->bid->state}}<br>
                                        Phone: {{$orders->bid->mobile_number}}<br>
                                        Email: {{$orders->bid->email}}

                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 invoice-col" style="font-size: 15px;">

                                <strong>Shipping Address</strong><br>
                                {{$orders->sid->address}}<br>
                                {{$orders->sid->city}}
                                {{$orders->sid->state}}<br>
                                Phone: {{$orders->sid->mobile_number}}<br>
                                Email: {{$orders->sid->email}}

                            </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col right" style="font-size: 15px;">
                    <b>Order ID:</b> {{ $orders->id }}<br>
                    <b>Order status:</b> {{ $orders->order_status }}<br>
                    <b>Payment Method:</b> Cash On delivery<br>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- Table row -->
            <div class="row">
                <div class="col-12 table-responsive" style="font-size:15px;">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th><b>Image</b></th>
                                <th><b>Product Name </b></th>
                                <th><b>Product Code</b></th>
                                <th><b>Qty</b></th>
                                <th><b>Price</b></th>
                                <th><b>Order Date</b></th>

                            </tr>
                        </thead>
                        @foreach ($orderd as $order_d)
                            <tbody>
                                <tr>
                                    <td><img src="{{ asset('/public/main_images/'.$order_d->product->image) }}"
                                        width="150px" height="100px" alt="image"></td>
                                    <td>{{ $order_d->product->name }}</td>
                                    <td>{{ $order_d->product->upc }}</td>
                                    <td>{{ $order_d->total_quantity }}</td>
                                    <td>{{ $order_d->total_price }}</td>
                                    <td>{{ $order_d->created_at }}</td>
                                </tr>
                            </tbody>

                        @endforeach
                    </table>
                </div>
                <!-- /.col -->
            </div>
            <div class="row">
                <!-- accepted payments column -->
                <div class="col-12">
                    {{-- <p class="lead">Amount Due {{ $odr->payment->created_at }}</p> --}}
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Total price:{{ $orders->total_price }}</th>
                            </tr>
                        </table>
                        <hr>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
            @endforeach
            <!-- this row will not appear when printing -->
        </div>
        <!-- /.invoice -->
    </div><!-- /.col -->
</div><!-- /.row -->
@endsection