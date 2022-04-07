@extends('layouts.admin.master')
@section('content')
    <div class="content-wrapper" style="min-height: 1604.8px;">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Invoice</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
                            <li class="breadcrumb-item"><a href="/admin/order">Orders</a></li>
                            <li class="breadcrumb-item active">Invoice</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        {{-- <div class="callout callout-info">
                            <h5><i class="fas fa-info"></i> Note:</h5>
                            This page has been enhanced for printing. Click the print button at the bottom of the invoice to
                            test.
                        </div> --}}
                        <!-- Main content -->
                        <div class="invoice p-3 mb-3">
                            <!-- title row -->
                            <div class="row">
                                <div class="col-12">
                                    <h4>
                                        <i class="fas fa-globe"></i> AdminLTE
                                        {{-- <small class="float-right">Date: 2/10/2014</small> --}}
                                    </h4>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- info row -->
                            <div class="row invoice-info">
                                @foreach ($order as $orders)
                                    <div class="col-sm-4 invoice-col">
                                        <h4>Billing Address</h4>
                                        <address>
                                            <strong>{{ $orders->bid->first_name }}</strong><br>
                                            {{ $orders->bid->address }}<br>
                                            {{ $orders->bid->city }}<br>
                                            {{ $orders->bid->state }}<br>
                                            {{ $orders->bid->email }}
                                        </address>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 invoice-col">
                                        <h4>Shipping Address</h4>
                                        <address>
                                            <strong>{{ $orders->sid->first_name }}</strong><br>
                                            {{ $orders->sid->address }}<br>
                                            {{ $orders->sid->city }}<br>
                                            {{ $orders->sid->state }}<br>
                                            {{ $orders->sid->email }}
                                        </address>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-sm-4 invoice-col">
                                        {{-- <b>Invoice #007612</b><br>
                                    <br> --}}
                                        <b>Order ID:</b> {{ $orders->id }}<br>
                                        <b>Payment Due:</b> {{ $orders->created_at }}<br>
                                        <b>Account:</b> {{ $orders->users->name }}
                                    </div>
                                    <!-- /.col -->
                                @endforeach
                            </div>
                            <!-- /.row -->
                            <!-- Table row -->
                            <div class="row">
                                <div class="col-12 table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Product</th>
                                                <th>UPC</th>
                                                <th>Qty</th>
                                                <th>Subtotal</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orderd as $d)
                                                <tr>
                                                    <td>
                                                        <img src="{{ asset('/public/main_images/'.$d->product->image) }}"
                                                            class="img-thumbnail" height="50px" width="50px"></td>
                                                    <td>{{ $d->product->name }}</td>
                                                    <td>{{ $d->product->upc }}</td>
                                                    <td>{{ $d->total_quantity }}</td>
                                                    <td>₹{{ $d->total_price }}</td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                            <div class="row">
                                <!-- accepted payments column -->
                                {{-- <div class="col-6">
                                    <p class="lead">Payment Methods:</p>
                                    <img src="../../dist/img/credit/visa.png" alt="Visa">
                                    <img src="../../dist/img/credit/mastercard.png" alt="Mastercard">
                                    <img src="../../dist/img/credit/american-express.png" alt="American Express">
                                    <img src="../../dist/img/credit/paypal2.png" alt="Paypal">

                                    <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya
                                        handango imeem
                                        plugg
                                        dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                                    </p>
                                </div> --}}
                                <!-- /.col -->
                                <div class="col-12">
                                    {{-- <p class="lead">Amount Due 2/22/2014</p> --}}
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                {{-- <tr>
                                                    <th style="width:50%">Subtotal:</th>
                                                    <td>$250.30</td>
                                                </tr>
                                                <tr>
                                                    <th>Tax (9.3%)</th>
                                                    <td>$10.34</td>
                                                </tr>
                                                <tr>
                                                    <th>Shipping:</th>
                                                    <td>$5.80</td>
                                                </tr> --}}
                                                <tr>
                                                    <th>Total:</th>
                                                    @foreach ($order as $orders)
                                                    {{-- <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td> --}}
                                                        <td style="padding-left: 38%">₹{{ $orders->total_price }}</td>
                                                    @endforeach
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                            <!-- this row will not appear when printing -->
                            <div class="row no-print">
                                <div class="col-12">
                                    {{-- <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i
                                            class="fas fa-print"></i> Print</a> --}}
                                    {{-- <button type="button" class="btn btn-success float-right"><i
                                            class="far fa-credit-card"></i> Submit
                                        Payment
                                    </button> --}}
                                    <button type="button" class="btn btn-primary float-right" onclick="window.print()" style="margin-right: 5px;">
                                        <i class="fas fa-download"></i> Generate PDF
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- /.invoice -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
