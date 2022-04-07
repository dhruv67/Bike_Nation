@extends('layouts.admin.master')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Product</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Product</li>
                        </ol>
                    </div>
                    <div id="app">
                        <main class="py-4">
                            {{-- Add Modal --}}
                            <div class="modal fade" id="AddproductModal1" tabindex="-1"
                                aria-labelledby="AddproductModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <form method="POST" class="needs-validation" id="AddProductModal"
                                            enctype="multipart/form-data" action="javascript:void(0)" novalidate>
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="AddproductModalLabel">Add Product</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <ul id="saveform_errlist"></ul>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <label for="">Name</label>
                                                        <input type="text" id="name" name="name" class="form-control"
                                                            placeholder="Enter Name" required>
                                                        <div class="invalid-feedback">*Name is required</div>
                                                        <label id="name_err"></label>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="">URL</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text">http://127.0.0.1:8000/</span>
                                                            <input type="text" id="url" name="url" class="form-control"
                                                                placeholder="URL" required>
                                                            <div class="invalid-feedback">*URL is required</div>
                                                            <label id="url_err"></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <img src="#" id="category-img-tag" class="img-thumbnail"
                                                            height="100px" width="100px" />
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="">Main Image</label>
                                                        <input type="file" id="image" name="image" class="form-control"
                                                            placeholder="Upload Main Image" required>
                                                        <div class="invalid-feedback">*Main image is required</div>
                                                        <label id="mimage_err"></label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="">UPC</label>
                                                        <input type="text" id="upc" name="upc" class="form-control upc"
                                                            placeholder="Enter UPC Code" required>
                                                        <div class="invalid-feedback">*UPC is required</div>
                                                        <label id="upc_err"></label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="">Price</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text">₹</span>
                                                            <input type="text" id="price" name="price"
                                                                class="form-control" placeholder="Enter Price" required>
                                                            <div class="invalid-feedback">*Price is required</div>
                                                            <label id="price_err"></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="">Stock</label>
                                                        <input type="text" id="stock" name="stock" class="form-control"
                                                            placeholder="Enter Stock" required>
                                                        <div class="invalid-feedback">*Stock is required</div>
                                                        <label id="stock_err"></label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="">Color</label>
                                                        <select name="color" id="color" class="form-control" required>
                                                            <option value="">--Select a Color--</option>
                                                            @foreach ($colorlist as $clist)
                                                                <option value="{{ $clist->id }}">{{ $clist->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <div class="invalid-feedback">*Color is required</div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="">Category</label>
                                                        <select name="category" id="category" class="form-control"
                                                            required>
                                                            <option value="">--Select a Category--</option>
                                                            @foreach ($catlist as $iteam)
                                                                <option value="{{ $iteam->id }}">
                                                                    {{ $iteam->category }}</option>
                                                            @endforeach
                                                        </select>
                                                        <div class="invalid-feedback">*Category is required</div>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="">Description</label>
                                                        <textarea id="desc" name="desc" class="form-control" minlength="1" maxlength="300" placeholder="Enter description"
                                                            required></textarea>
                                                        <div class="invalid-feedback">*Description is required</div>
                                                        <label id="desc_err"></label>
                                                    </div>
                                                    <label for="">Multiple Images</label>
                                                    <div class="hdtuto" id="increment">
                                                        <div class="row">
                                                            <div class="col-md-1">
                                                                <img src="#" class="img-thumbnail" height="100px"
                                                                    width="100px" id="output_member0" />
                                                            </div>
                                                            <div class="col-md-5">
                                                                <input type="file" onchange="preview_member(event, 0)"
                                                                    id="imagenames" name="imagenames[]"
                                                                    class="myfrm form-control" required>
                                                                <div class="invalid-feedback">*Image is required</div>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <input type="number" name="sortnumber[]"
                                                                    class="form-control sortnumber"
                                                                    placeholder="Sort Number" required>
                                                                <label class="sort_err"></label>
                                                                <div class="invalid-feedback">*Sort number is required</div>
                                                            </div>
                                                            <div class="col-md-1">
                                                                <button class="btn btn-success" id="madd" type="button"><i
                                                                        class="fldemo glyphicon glyphicon-plus"></i>Add</button>
                                                            </div>
                                                            <label id="mluti_err"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" id="closebtn" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" id="add_product" class="btn btn-primary">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            {{-- Edit Modal --}}
                            <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <form method="POST" id="EditProductModal" class="was-validated"
                                            enctype="multipart/form-data" action="javascript:void(0)" novalidate>
                                            <input type="hidden" name="id">
                                            <input type="hidden" name="product_image" id="product_image">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="EditproductModalLabel">Edit & Update Product
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <ul id="updateform_errlist"></ul>
                                                <div class="row" id="mi">
                                                    <div class="col-12">
                                                        <label for="">Name</label>
                                                        <input type="text" id="edit_name" name="edit_name"
                                                            class="form-control" required>
                                                        <div class="invalid-feedback">*Name is required</div>
                                                        <label id="ename_err"></label>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="">URL</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text">http://127.0.0.1:8000/</span>
                                                            <input type="text" id="edit_url" name="edit_url"
                                                                class="form-control" required>
                                                            <div class="invalid-feedback">*URL is required</div>
                                                        </div>
                                                        <label id="eurl_err"></label>
                                                    </div>
                                                    <div class="col-md-1" id="edit_image">
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label for="">Main Image</label>
                                                        <input type="file" name="edit_image" class="form-control">
                                                        <div class="invalid-feedback">*Main image is required</div>
                                                        <label id="mimage_err"></label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="">UPC</label>
                                                        <input type="text" id="edit_upc" name="edit_upc"
                                                            class="form-control" required>
                                                        <div class="invalid-feedback">*UPC code is required</div>
                                                        <label id="eupc_err"></label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="">Price</label>
                                                        <div class="input-group mb-3">
                                                            <span class="input-group-text">₹</span>
                                                            <input type="text" id="edit_price" name="edit_price"
                                                                class="form-control" required>
                                                            <div class="invalid-feedback">*Price is required</div>
                                                        </div>
                                                        <label id="eprice_err"></label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="">Stock</label>
                                                        <input type="text" id="edit_stock" name="edit_stock"
                                                            class="form-control" required>
                                                        <div class="invalid-feedback">*Stock is required</div>
                                                        <label id="estock_err"></label>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="">Color</label>
                                                        <select name="edit_color" id="edit_color" class="form-control"
                                                            required>
                                                            <option value="">--Select a Color--</option>
                                                            @foreach ($colorlist as $clist)
                                                                <option value="{{ $clist->id }}">{{ $clist->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <div class="invalid-feedback">*Color is required</div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="">Category</label>
                                                        <select name="edit_category" id="edit_category"
                                                            class="form-control" required>
                                                            <option value="">--Select a Category--</option>
                                                            @foreach ($catlist as $iteam)
                                                                <option value="{{ $iteam->id }}">{{ $iteam->category }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <div class="invalid-feedback">*Category is required</div>
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="">Description</label>
                                                        <textarea id="desc" name="edit_desc" maxlength="300" class="form-control" required></textarea>
                                                        <div class="invalid-feedback">*Description is required</div>
                                                    </div>
                                                    <label for="">Multiple Images</label>
                                                    <div class="hdtuto" id="eincrement">
                                                        <div class="btn">
                                                            <button class="btn btn-success" id="emadd" type="button"><i
                                                                    class="fldemo glyphicon glyphicon-plus"></i>Add</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" id="closebtn" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" id="update_product"
                                                    class="btn btn-primary">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            {{-- Edn- Edit Modal --}}
                            {{-- Delete Modal --}}
                            <div class="modal fade" id="DeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Delete Color</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h4>Confirm to Delete ?</h4>
                                            <input type="hidden" id="deleteing_id">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary delete_color">Yes Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- End - Delete Modal --}}
                            {{-- Table .............................. --}}
                            <div id="success_message"></div>
                            <div class="card">
                                <div class="card-header">
                                    <h4>
                                        <a href="{{ url('admin/product/trashproduct') }}"><button id="trash" type="button"
                                                class="btn-sm btn-danger float-end">Trash</button></a>
                                        <button type="button" class="btn-sm btn-primary float-end mr-1"
                                            data-bs-toggle="modal" data-bs-target="#AddproductModal1">Add Product</button>
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
        //Data dispaly code      
        var table = $('#product').DataTable({
            ajax: "{{ url('admin/fetch-product') }}",
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
                    "data": null,
                    render: function(data, type, row) {
                        // return "<a herf=" + row.url + ">" + row.url + "</a>";
                        if (type === 'display') {
                            data = '<a href="/products/' + row.url + '">' + row.url + '</a>';
                        }
                        return data;
                    }
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
                        if (row.status == 'y') {
                            return '<input data-id="' + row.id +
                                '" id="ai" name="my-checkbox" class="toggle-class" type="checkbox" data-size="small" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" checked>';
                        } else {
                            return '<input data-id="' + row.id +
                                '" id="ai" name="my-checkbox" class="toggle-class" type="checkbox" data-size="small" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive">';
                        }
                    }
                },
                {
                    "data": null,
                    render: function(data, type, row) {
                        return '<button data-id="' + row.id +
                            '" id="edit" class = "btn btn-sm btn-success mr-1" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button><button data-id="' +
                            row.id + '" id="delete" class = "btn btn-sm btn-danger ">Delete</button>'
                    }
                }
            ],
        });

        $(document).ready(function(e) {
            //Data insert code
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#AddProductModal').submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    url: "{{ url('admin/add-product') }}",
                    type: "post",
                    datatype: "json",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        // console.log(response);
                        if (response.status == 400) {
                            $('#saveform_errlist').html("");
                            $('#saveform_errlist').addClass('alert alert-danger');
                            $.each(response.errors, function(key, err_values) {
                                $('#saveform_errlist').append('<li>' + err_values +
                                    '</li>')
                            });
                        } else {
                            $('#saveform_errlist').html("");
                            $('#success_message').addClass('alert alert-success')
                            $('#success_message').text(response.message)
                            $('#AddproductModal1').find('input').val("");
                            $('#AddproductModal1').find('textarea').val("");

                        }
                        table.ajax.reload();
                    }
                });
            });
        });
        // edit code
        $(document).on('click', '#edit', function() {
            console.log(this.id + ' click event fired.');
            $.ajax({
                url: "{{ url('admin/edit-product') }}",
                type: "POST",
                datatype: 'json',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "id": $(this).data('id')
                },
                success: function(response) {
                    $('input[name="id"]').val(response.data.id);
                    $('input[name="product_image"]').val(response.data.image);
                    $('input[name="edit_name"]').val(response.data.name);
                    $('input[name="edit_url"]').val(response.data.url);
                    $("#edit_image").html(
                        `<img src="/public/main_images/${response.data.image}" height="100px" width="100px" class="img-fluid img-thumbnail">`
                    );
                    $('input[name="edit_upc"]').val(response.data.upc);
                    $('input[name="edit_price"]').val(response.data.price);
                    $('input[name="edit_stock"]').val(response.data.stock);
                    $('#edit_color').val(response.data.color_id);
                    $('#edit_category').val(response.data.category_id);
                    $('textarea[name="edit_desc"]').val(response.data.description);
                }
            });
        });
        //edit code
        $(document).on('click', '#edit', function() {
            $.ajax({
                url: "{{ url('admin/edit-image') }}",
                type: "POST",
                datatype: 'json',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "id": $(this).data('id')
                },
                success: function(response) {
                    $('input[name="product_id"]').val(response.data.product_id);
                    $('input[name="imgid"]').val(response.data.id);
                    $.each(response.data, function(key, value) {

                        $("#eincrement").append(`
                        <div class="clone" id="eclone">
                            <div class="hdtuto rm" id="ehdtuto" style="margin-top:10px">
                                <div class="row">
                                    <div class="col-md-1">
                                        <img src="/public/product_images/${value.imagenames}" class="img-thumbnail" height="100px" width="100px">
                                    </div>
                                    <div class="col-md-5">
                                        <input type="hidden" class="imgid" name="imgid" value="${value.id}">
                                        <input type="hidden" name="image_id[]" value="${value.id}">
                                        <input type="hidden" name="product_id[]" value="${value.product_id}">
                                        <input type="file" name="eimagenames[]" value="${value.imagenames}" class="myfrm form-control required">
                                        <div class="invalid-feedback">*Image is required</div>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="number" class="form-control esortnumber" name="esortnumber[]" value="${value.sortnumber}" class="form-control" placeholder="Sort Number" required>
                                        <label class="esort_err"></label>
                                        <div class="invalid-feedback">*Sort number is required</div>
                                    </div>
                                    <div class="col-md-2"> 
                                        <button class="btn btn-success" id="emadd" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Add</button>
                                        <button class="btn btn-danger" id="emremove" type="button"><i class="fldemo glyphicon glyphicon-remove"></i> Remove</button>
                                    </div>
                                </div> 
                            </div>
                        </div>`);
                    });
                }
            });
        });
        // update code 
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#EditProductModal').submit(function(e) {
            e.preventDefault();
            var uformData = new FormData(this);
            $.ajax({
                url: "{{ url('admin/update-product') }}",
                type: 'post',
                datatype: "json",
                data: uformData,
                cache: false,
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response.status == 400) {
                        $('#updateform_errlist').html("");
                        $('#updateform_errlist').addClass('alert alert-danger');
                        $.each(response.errors, function(key, err_values) {
                            $('#updateform_errlist').append('<li>' + err_values + '</li>')
                        });
                    } else {
                        $('#updateform_errlist').html("");
                        $('#success_message').html("");
                        $('#success_message').addClass('alert alert-success')
                        $('#success_message').text(response.message)
                        $('#EditProductModal')[0].reset();
                        $('#editModal').modal('hide');
                        table.ajax.reload();
                    }
                }
            });
        });
        // active inactive code
        $(document).on('change', 'input.toggle-class', function() {
            console.log(this.id + ' click event fired.');
            var status = $(this).prop('checked') == true ? 'y' : 'n';
            var id = $(this).data('id');
            $.ajax({
                type: "GET",
                dataType: "json",
                url: "{{ url('admin/changeStatus-product') }}",
                data: {
                    'status': status,
                    'id': id
                },
                success: function(data) {
                    console.log(data.success)
                }
            });
        });
        //Trash code
        $(document).on('click', '#delete', function() {
            console.log(this.id + ' click event fired.');
            var id = $(this).data('id');
            $.ajax({
                type: "GET",
                dataType: "json",
                url: "{{ url('admin/trash-product') }}",
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
            });
        });
        //Multi image delete row code
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).on('click', '#emremove', function() {
            var id = $(this).parent().parent().find('.imgid').val();
            $.ajax({
                url: "{{ url('admin/remove-image') }}",
                type: "post",
                data: {
                    'id': id
                },
                datatype: 'json',
                success: function(response) {
                    if (response.status == 404) {
                        alert(response.message);
                    } else if (response.status == 200) {
                        alert(response.message);
                    }
                }
            });
        });
        //Modal reset
        $(document).on('hidden.bs.modal', function() {
            $('#EditProductModal')[0].reset();
            $(".rm").remove();
        });
        $(document).ready(function() {
            //Main Image preview
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#category-img-tag').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#image").change(function() {
                readURL(this);
            });

            // $('#EditProductModal').on('hidden.bs.modal', function () {
            //     $(this).find('form').trigger('reset');
            // });

            $('#AddProductModal ,#EditProductModal').on('hidden.bs.modal', function() {
                $(this).find('form').trigger('reset');
            });

            //Validation----------------------------------------------------------------------------------------------------------------
            $("#name_err").hide();
            $("#name").keypress(function(e) {

                var keyCode = e.keyCode || e.which;
                $("#name_err").html("");
                //Regex for Valid Characters i.e. Alphabets.
                var regex = /^[\s+A-Za-z0-9]+$/;
                //Validate TextBox value against the Regex.
                var isValid = regex.test(String.fromCharCode(keyCode));
                if (!isValid) {
                    $("#name_err").show();
                    $("#name_err").html("*only alphabets allowed");
                    $("#name_err").focus();
                    $("#name_err").css("color", "red");
                } else {
                    $("#name_err").hide();
                }
                return isValid;
            });

            $("#edit_name").keypress(function(e) {
                $("#ename_err").hide();
                var keyCode = e.keyCode || e.which;
                $("#ename_err").html("");
                //Regex for Valid Characters i.e. Alphabets.
                var regex = /^[\s+A-Za-z0-9]+$/;
                //Validate TextBox value against the Regex.
                var isValid = regex.test(String.fromCharCode(keyCode));
                if (!isValid) {
                    $("#ename_err").show();
                    $("#ename_err").html("*only alphabets allowed");
                    $("#ename_err").focus();
                    $("#ename_err").css("color", "red");
                } else {
                    $("#ename_err").hide();
                }
                return isValid;
            });

            $("#url").on("change keyup paste click", function() {
                var Text = $(this).val();
                Text = Text.toLowerCase();
                Text = Text.replace(/[^a-zA-Z0-9]+/g, '-');
                $('#url').val(Text);
            });

            $("#edit_url").on("change keyup paste click", function() {
                var Text = $(this).val();
                Text = Text.toLowerCase();
                Text = Text.replace(/[^a-zA-Z0-9]+/g, '-');
                $('#edit_url').val(Text);
            });

            $("#upc").attr("maxlength", "12");
            $("#upc").keypress(function(e) {
                var kk = e.which;
                if (kk < 48 || kk > 57) {
                    e.preventDefault();
                    $("#upc_err").show();
                    $("#upc_err").html("*only numbers allowed");
                    $("#upc_err").focus();
                    $("#upc_err").css("color", "red");
                } else {
                    $("#upc_err").hide();
                }
            });

            $("#edit_upc").attr("maxlength", "12");
            $("#edit_upc").keypress(function(e) {
                var kk = e.which;
                if (kk < 48 || kk > 57) {
                    e.preventDefault();
                    $("#eupc_err").show();
                    $("#eupc_err").html("*only numbers allowed");
                    $("#eupc_err").focus();
                    $("#eupc_err").css("color", "red");
                } else {
                    $("#eupc_err").hide();
                }
            });

            $("#price").attr("maxlength", "8");
            $('#price').keypress(function(e) {
                if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event
                        .which > 57)) {
                    e.preventDefault();
                    $("#price_err").show();
                    $("#price_err").html("*only numbers allowed");
                    $("#price_err").focus();
                    $("#price_err").css("color", "red");
                } else {
                    $("#price_err").hide();
                }
            });

            $("#edit_price").attr("maxlength", "8");
            $('#edit_price').keypress(function(e) {
                if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event
                        .which > 57)) {
                    e.preventDefault();
                    $("#eprice_err").show();
                    $("#eprice_err").html("*only numbers allowed");
                    $("#eprice_err").focus();
                    $("#eprice_err").css("color", "red");
                } else {
                    $("#eprice_err").hide();
                }
            });

            $("#stock").attr("maxlength", "8");
            $("#stock").keypress(function(e) {
                var kk = e.which;
                if (kk < 48 || kk > 57) {
                    e.preventDefault();
                    $("#stock_err").show();
                    $("#stock_err").html("*only numbers allowed");
                    $("#stock_err").focus();
                    $("#stock_err").css("color", "red");
                } else {
                    $("#stock_err").hide();
                }
            });

            $("#edit_stock").attr("maxlength", "8");
            $("#edit_stock").keypress(function(e) {
                var kk = e.which;
                if (kk < 48 || kk > 57) {
                    e.preventDefault();
                    $("#estock_err").show();
                    $("#estock_err").html("*only numbers allowed");
                    $("#estock_err").focus();
                    $("#estock_err").css("color", "red");
                } else {
                    $("#estock_err").hide();
                }
            });

            // $(".sortnumber").live("keypress", function(e){
            //     var kk = e.which;
            //     if (kk < 48 || kk > 57) {
            //         e.preventDefault();
            //         $(".sort_err").show();
            //         $(".sort_err").html("*only numbers allowed");
            //         $(".sort_err").focus();
            //         $(".sort_err").css("color", "red");
            //     } else {
            //         $(".sort_err").hide();
            //     }
            // });
            // $(".sortnumber").attr("maxlength", "2");
            // $(".sortnumber").keypress(function(e) {
            //     var kk = e.which;
            //     if (kk < 48 || kk > 57) {
            //         e.preventDefault();
            //         $(".sort_err").show();
            //         $(".sort_err").html("*only numbers allowed");
            //         $(".sort_err").focus();
            //         $("#sort_err").css("color", "red");
            //     } else {
            //         $(".sort_err").hide();
            //     }
            // });

            $(".esortnumber").attr("maxlength", "2");
            $(".esortnumber").keypress(function(e) {
                var kk = e.which;
                if (kk < 48 || kk > 57) {
                    e.preventDefault();
                    $(".esort_err").show();
                    $(".esort_err").html("*only numbers allowed");
                    $(".esort_err").focus();
                    $("esort_err").css("color", "red");
                } else {
                    $(".esort_err").hide();
                }
            });

            //validation end---------------------------------------------------------------------------------------------

            //slug code
            $('#name').on("change keyup paste click", function() {
                var Text = $(this).val();
                Text = Text.toLowerCase();
                Text = Text.replace(/[^a-zA-Z0-9]+/g, '-');
                $('#url').val(Text);
            });
            $('#edit_name').on("change keyup paste click", function() {
                var Text = $(this).val();
                Text = Text.toLowerCase();
                Text = Text.replace(/[^a-zA-Z0-9]+/g, '-');
                $('#edit_url').val(Text);
            });

        });
        //multirow add remove with image preview
        {
            var i = 0;

            function preview_member(event, inp) {
                var reader = new FileReader();
                console.log(inp);
                reader.onload = function() {
                    var output = document.getElementById("output_member" + inp);
                    output.src = reader.result;
                };
                reader.readAsDataURL(event.target.files[0]);
            }
        }

        {
            var i = 0;

            function epreview_member(event, inp) {
                var reader = new FileReader();
                console.log(inp);
                reader.onload = function() {
                    var output = document.getElementById("eoutput_member" + inp);
                    output.src = reader.result;
                };
                reader.readAsDataURL(event.target.files[0]);
            }
        }

        $(document).ready(function($) {
            $(document).on("click", "#madd", function() {
                i++;

                var lsthmtl = `<div class="hdtuto rm" id="hdtuto" style="margin-top:10px">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <img src="#" class="img-thumbnail" height="100px"
                                                width="100px" id="output_member${i}" />
                                        </div>
                                        <div class="col-md-5">
                                            <input type="file" id="imagenames" onchange="preview_member(event, ${i})" name="imagenames[]" class="myfrm form-control" required>
                                            <div class="invalid-feedback">*Image is required</div>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="number"
                                                name="sortnumber[]" class="form-control sortnumber"
                                                placeholder="Sort Number" required>
                                                <label class="sort_err"></label>
                                            <div class="invalid-feedback">*Sort number is required</div>
                                        </div>
                                        <div class="col-md-2"> 
                                        <button class="btn btn-success" id="madd" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Add</button>
                                        <button class="btn btn-danger" id="mremove" type="button"><i class="fldemo glyphicon glyphicon-remove"></i> Remove</button>
                                        <label id="mluti_err"></label>
                                    </div>
                                </div>`

                $(lsthmtl).appendTo("#increment");
                return false;
            });
            $(document).on("click", "#mremove", function() {
                $(this).parents("#hdtuto").remove();
            });
            $(document).on("click", "#emadd", function() {
                i++;
                var lsthmtl = `<div class="hdtuto" id="nhdtuto" style="margin-top:10px">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <img src="#" class="img-thumbnail" height="100px"
                                                width="100px" id="eoutput_member${i}" />
                                        </div>
                                        <div class="col-md-5">
                                            <input type="file" id="imagenames" onchange="epreview_member(event, ${i})" name="imagenames[]" class="myfrm form-control" required>
                                            <div class="invalid-feedback">*Image is required</div>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="number" min="0"
                                                name="sortnumber[]" class="form-control esortnumber"
                                                placeholder="Sort Number" required>
                                                <label class="esort_err"></label>
                                            <div class="invalid-feedback">*Sort number is required</div>
                                        </div>
                                        <div class="col-md-2"> 
                                        <button class="btn btn-success" id="emadd" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Add</button>
                                        <button class="btn btn-danger" id="nremove" type="button"><i class="fldemo glyphicon glyphicon-remove"></i> Remove</button>
                                        <label id="mluti_err"></label>
                                    </div>
                                </div>`
                $(lsthmtl).appendTo("#eincrement");
                return false;
            });
            $(document).on("click", "#nremove", function() {
                $(this).parents("#nhdtuto").remove();
            });
            $(document).on("click", "#emremove", function() {
                $(this).parents("#ehdtuto").remove();
            });
        });

        (function() {
            'use strict'
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')
            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
@endsection
