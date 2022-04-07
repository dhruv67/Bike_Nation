@extends('layouts.admin.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Orders</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Orders</li>
                        </ol>
                    </div>
                    <div id="app">
                        <main class="py-4">
                            {{-- Update Order Status --}}
                            <div class="modal fade" id="order_status" tabindex="-1"
                                aria-labelledby="OderStatusLabel" aria-hidden="true">
                                <form id="order_form">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <input type="hidden" name="id">
                                                <h5 class="modal-title" id="AddcolorModalLabel">Update Order</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <ul id="updateform_errlist"></ul>
                                                <div class="form-group mb-3">
                                                    <label for="Select" class="form-label">select menu</label>
                                                    <select id="Select" name="select" class="form-select">
                                                        <option value="Pending">Pending</option>
                                                        <option value="On the way">On the way</option>
                                                        <option value="Delivered">Delivered</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" id="update_order" class="btn btn-primary">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div id="success_message"></div>
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
                                    <table class="table table-bordered table-striped" id="order">
                                        <thead>
                                            <tr>
                                                <th>User</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Total Price</th>
                                                <th>Total Quantity</th>
                                                <th>Order Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($order as $orders)
                                            <tr>
                                                <td>{{ $orders->users->name }}</td>
                                                <td>{{ $orders->bid->first_name }}</td>
                                                <td>{{ $orders->bid->last_name }}</td>
                                                <td>{{ $orders->total_price }}</td>
                                                <td>{{ $orders->total_quantity }}</td>
                                                <td>{{ $orders->order_status }}</td>
                                                <td>
                                                    {{-- <a herf="#"><i class="fas fa-eye"></i></a> --}}
                                                    <div style="text-align: center;">
                                                        <button type="button" id="editbtn" data-id="{{ $orders->id }}" style="color:royalblue" data-bs-toggle="modal" data-bs-target="#order_status" class="fas fa-pencil-alt"></button>
                                                        &nbsp;
                                                        <a href="{{ url('/admin/invoice',[$orders->id]) }}">
                                                        <i class="fas fa-eye"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
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
        $(document).ready( function () {
            // $('#order').DataTable();
            $('.card-body #order').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "responsive": true,
                "autoWidth": true,
            });

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            // edit Order code
            $(document).on('click', '#editbtn', function() {
                $.ajax({
                    url: '/admin/edit-order-status',
                    type: "post",
                    datatype: 'json',
                    data: {
                        id: $(this).data('id')
                    },
                    success: function(response) {
                        // alert(response.data.order_status);
                        $('input[name="id"]').val(response.data.id);
                        $('select[name="select"]').val(response.data.order_status);
                    }
                });
            });

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(document).on('click', '#update_order', function() {
                $.ajax({
                    url: '/admin/update-order-status',
                    type: "post",
                    datatype: "json",
                    data: $('#order_form').serialize(),
                    success: function(response) {
                        if (response.status == 400) {
                        $('#updateform_errlist').html("");
                        $('#updateform_errlist').addClass('alert alert-danger');
                        $.each(response.errors, function(key, err_values) {
                            $('#updateform_errlist').append('<li>' + err_values + '</li>')
                        });
                        } else if (response.status == 404) {
                            $('#updateform_errlist').html("");
                            $('#success_message').addClass('alert alert-success')
                            $('#success_message').text(response.message)
                        } else {
                            $('#updateform_errlist').html("");
                            $('#success_message').html("");
                            $('#success_message').addClass('alert alert-success')
                            $('#success_message').text(response.message)
                            $('#order_form')[0].reset();
                            $('#order_status').modal('hide');
                            $( "#order" ).load(location.href + " #order");
                        }
                    }
                });
            });
        });
    </script>
@endsection        
