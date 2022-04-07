@extends('layouts.admin.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Payment</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Payment</li>
                        </ol>
                    </div>
                    <div id="app">
                        <main class="py-4">
                            <div class="card">
                                {{-- <div class="card-header">
                                    <h4>
                                        <a href="{{ url('admin/product/trashproduct') }}"><button id="trash" type="button"
                                                class="btn-sm btn-danger float-end">Trash</button></a>
                                        <button type="button" class="btn-sm btn-primary float-end mr-1"
                                            data-bs-toggle="modal" data-bs-target="#AddproductModal1">Add Product</button>
                                    </h4>
                                </div> --}}
                                <div class="card-body">
                                    <table class="table table-bordered table-striped" id="payment">
                                        <thead>
                                            <tr>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Total Price</th>
                                                <th>Total Quantity</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        var table = $('#payment').DataTable({
            ajax: "{{ url('admin/fetch-payment') }}",
            fnDrawCallback: function() {
                jQuery('.toggle-class').bootstrapToggle();
            },
            columns: [
                {
                    "data": "first_name"
                },
                {
                    "data": "last_name"
                },
                {
                    "data": "total_price"
                },
                {
                    "data": "total_quantity"
                },
                {
                    "data": "status"
                },
                {
                    "data": null,
                    render: function(data, type, row) {
                        return '<a herf="#"><i class="fas fa-eye"></i></a>'
                    }
                }
            ],
        });
    </script>
@endsection        
