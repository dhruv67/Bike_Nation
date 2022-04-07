@extends('layouts.user.webapp')
@section('usercontent')
    <div class="main-container col1-layout content-color color">
        <div class="breadcrumbs">
            <div class="container">
                <ul>
                    <li class="home"><a href="/" title="Go to Home Page">Home</a></li>
                    <li><strong>My Orders</strong></li>
                </ul>
            </div>
        </div>
        <!--- .breadcrumbs-->
        <div class="container">
            <div class="content-top no-border">
                <h2>My Orders</h2>

                @foreach ($order as $orders)
                    <div class="blog-mansory" style="position: relative; height: 1775.03px; max-width: 100%">
                        <div class="blog-mansory-item" style="position:inherit !important;max-width: 100%">
                            <div class="blog-mansory-item-content" style="border: solid #e1e1e3;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="text-right" style="margin-bottom: 10px">
                                            Date & Time:{{ $orders->created_at }}
                                        </div>
                                        <div class="row" style="margin-bottom: 10px">
                                            <div class="col-md-4">
                                                <div class="card m-b-20">
                                                    <div class="card-header">
                                                        <h3>Billing Address</h3>
                                                    </div>
                                                    <div class="card-block">
                                                        <h4 class="card-title">{{$orders->bid->first_name}}</h4>
                                                        <h6 class="card-subtitle text-muted">{{$orders->bid->last_name}}</h6>
                                                        <p class="card-text">
                                                            {{$orders->bid->address}}<br>
                                                            {{$orders->bid->city}},
                                                            {{$orders->bid->state}},
                                                            {{$orders->bid->pincode}}.<br>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="card m-b-20">
                                                    <div class="card-header" style="font-weight: bold">
                                                        <h3>Shipping Address</h3>
                                                    </div>
                                                    <div class="card-block">
                                                        <h4 class="card-title">{{$orders->sid->first_name}}</h4>
                                                        <h6 class="card-subtitle text-muted">{{$orders->sid->last_name}}</h6>
                                                        <p class="card-text">
                                                            {{$orders->sid->address}}<br>
                                                            {{$orders->sid->city}},
                                                            {{$orders->sid->state}},
                                                            {{$orders->sid->pincode}}.<br>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h3>Payment Information</h3>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="font-weight-bold">
                                                            method:
                                                            <span class="font-weight-normal">
                                                                cash on delivary
                                                            </span>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div style="width: 100%;border-bottom: solid #e1e1e3;margin-bottom: 10px">
                                        </div>
                                        <div><a href="{{ url('/order-details',[$orders->id]) }}"><button class="btn-step">Order details</button></a>
                                        </div>
                                        {{-- <ol class="products-list product_collection" id="products-list">

                                                <li class="item">
                                                    <div class="row">
                                                        <div class="col-md-2 col-sm-2">
                                                            <div class="products-list-container">
                                                                <div class="images-container">
                                                                    <div class="product-hover">
                                                                        <a href="{{url('/',$order_detail ?? ''->product->url)}}" title="{{$col->product->name}}" class="product-image">
                                                                            <img alt="img" src="{{url('resources/assets/admin/images/products/'.$product->upc.'/main_img.png')}}" width="100" id="img" class="img-thumbnail mr-1">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-shop  col-md-4 col-sm-4">
                                                            <div class="f-fix">
                                                                <div class="product-primary products-textlink clearfix">
                                                                    <h2 class="product-name">
                                                                        <a href="{{url('/',$col->product->url)}}" title="{{$col->product->name}}">{{$col->product->name}}</a>
                                                                    </h2>
                                                                    <div class="ratings">
                                                                        <div class="rating-box">
                                                                            <div class="rating" style="width:70%"></div>
                                                                        </div>
                                                                        <p class="rating-links">
                                                                            <a href="#">1 Review(s)</a>
                                                                        </p>
                                                                    </div>
                                                                    <div class="price-box">
                                                                        <span class="regular-price">
                                                                            <span class="price">${{$col->product->price}}</span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-shop  col-lg-4 col-sm-4">
                                                            <div class="f-fix">
                                                                <div class="product-primary products-textlink clearfix" style="padding-top:20px">
                                                                    <div class="price-box">
                                                                        <span class="regular-price">

                                                                            <span class="price" style="font-size: 15px"><span style="color: black">Total <Price></Price>:</span>${{$col->total_price}}</span>

                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li><!--- .item-->

                                        </ol> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="bottom text-right" style="border: solid #e1e1e3;">
                                <div class="col-50" style="width: 30%; color:brown;">Order Status:<a
                                        href="#">{{ $orders->order_status }}</a></div>
                                <div class="col-25" style="width: 30%"><a href="#" class="button-bottom">Total
                                        Price:₹{{ $orders->total_price }}</a></div>
                            </div>
                        </div>
                    </div>
                    {{-- @endforeach --}}
                @endforeach
                {{-- @else
                    <div class="wish-list-notice">
                        <i class="fa-blank"></i>
                        On Orders Available.
                        <a href="{{ url('products') }}">Click here</a> to continue shopping.
                    </div>
                @endif --}}
            </div>
        </div>
        <!--- .container-->
    </div>
    <!--- .main-container -->
@endsection
@section('script')
    <script type="text/javascript">

    </script>
@endsection
