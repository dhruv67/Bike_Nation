@extends('layouts.admin.master')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Trash</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active"><a href="{{ url('/admin/product') }}">Product</a></li>
                            <li class="breadcrumb-item active">Trash</li>
                        </ol>
                    </div>
                    <div id="app">
                        <main class="py-4">
                            <div id="success_message"></div>
                            <div class="card">
                                <div class="card-header">
                                    <h4>
                                        <a href="{{ url('admin/product') }}"><button type="button"
                                                class="btn-sm btn-primary float-end">Back</button></a>
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered table-striped" id="product">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Image</th>
                                                <th>UPC</th>
                                                <th>URL</th>
                                                <th>Color</th>
                                                <th>Category</th>
                                                <th>Price</th>
                                                <th>Stock</th>
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
        //Data dispaly code
        var table = $('#product').DataTable({
            ajax: "{{ url('admin/trashfetch-product') }}",
            fnDrawCallback: function() {
                jQuery('.toggle-class').bootstrapToggle();
            },
            columns: [{
                    "data": "name"
                },
                {
                    "data": "image",
                    render: function(data, type, full, meta) {
                        return "<img src=\"/public/main_images/" + data + "\" width=\"50\" height=\"50\"/>";
                    }
                },
                {
                    "data": "upc"
                },
                {
                    "data": "url"
                },
                {
                    "data": "color_name"
                },
                {
                    "data": "category"
                },
                {
                    "data": "price"
                },
                {
                    "data": "stock"
                },
                {
                    "data": null,
                    render: function(data, type, row) {
                        return '<button data-id="' + row.id +
                            '" id="restore" class = "btn-sm btn-success ">Restore</button>'u
                    }
                }
            ],
        });
        $(document).on('click', '#restore', function() {
            var id = $(this).data('id');
            $.ajax({
                type: "GET",
                dataType: "json",
                url: "{{ url('admin/restoreproduct') }}",
                data: {
                    'id': id
                },
                success: function(response) {
                    console.log(response);
                    $('#success_message').html("");
                    $('#success_message').addClass('alert alert-success')
                    $('#success_message').text(response.message);
                    table.ajax.reload();
                }
            })
        });
    </script>
@endsection
