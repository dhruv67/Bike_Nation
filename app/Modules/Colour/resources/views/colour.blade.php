@extends('layouts.admin.master')
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Color</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active">Color</li>
                        </ol>
                    </div>
                    <div id="app">
                        <main class="py-4">
                            {{-- Add Modal --}}
                            <div class="modal fade" id="AddColorModal1" tabindex="-1"
                                aria-labelledby="AddcolorModalLabel" aria-hidden="true">
                                <form id="AddColorModal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="AddcolorModalLabel">Add Color </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <ul id="saveform_errlist"></ul>
                                                <div class="form-group mb-3">
                                                    <label for="">Name</label>
                                                    <input type="text" id="name" name="name" class="form-control">
                                                    <label id="lblError"></label>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" id="add_color" class="btn btn-primary">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            {{-- Edit Modal --}}
                            <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel"
                                aria-hidden="true">
                                <form id="updatemodal">
                                    <input type="hidden" name="id">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editModalLabel">Edit & Update Color</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <ul id="updateform_errlist"></ul>
                                                <div class="form-group mb-3">
                                                    <label for="">Name</label>
                                                    <input type="text" id="edit_name" name="edit_name"
                                                        class="form-control">
                                                    <label id="ElblError"></label>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="button" id="update_color"
                                                    class="btn btn-primary">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            {{-- End- Edit Modal --}}
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
                                        <a href="{{ url('admin/color/trashcolor') }}"><button id="trash" type="button"
                                                class="btn btn-sm btn-danger float-end">Trash</button></a>
                                        <button type="button" class="btn btn-sm btn-primary float-end mr-1" data-bs-toggle="modal"
                                            data-bs-target="#AddColorModal1">Add Color</button>
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered table-striped" id="color">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Users_ID</th>
                                                <th>Name</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
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
        //Data insert code
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(document).ready(function() {
            $('#add_color').click(function(e) {
                e.preventDefault();
                console.log(this.id + ' click event fired.');
                $.ajax({
                    url: "{{ url('admin/add-colour') }}",
                    type: "post",
                    datatype: "json",
                    data: $('#AddColorModal').serialize(),
                    success: function(response) {
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
                            $('#AddColorModal1').find('input').val("");
                            $('#AddColorModal1').modal('hide');

                        }
                        table.ajax.reload();
                    }
                });
            });
        });
        //Data dispaly code
        var table = $('#color').DataTable({
            ajax: "{{ url('admin/fetch-color') }}",
            fnDrawCallback: function() {
                jQuery('.toggle-class').bootstrapToggle();
            },
            columns: [{
                    "data": "id"
                },
                {
                    "data": "users_name"
                },
                {
                    "data": "name"
                },
                {
                    "data": null,
                    render: function(data, type, row) {
                        if (row.status == 'y') {
                            return '<input data-id="' + row.id +
                                '" id="ai" name="my-checkbox" class="toggle-class" data-size="small" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" checked>';
                        } else {
                            return '<input data-id="' + row.id +
                                '" id="ai" name="my-checkbox" class="toggle-class" data-size="small" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive">';
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
        // edit color code
        $(document).on('click', '#edit', function() {
            console.log(this.id + ' click event fired.');
            $.ajax({
                url: "{{ url('admin/edit-color') }}",
                type: "POST",
                datatype: 'json',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "id": $(this).data('id')
                },
                success: function(response) {
                    $('input[name="id"]').val(response.data.id);
                    $('input[name="edit_name"]').val(response.data.name);
                }
            });
        });
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        // update Color code
        $(document).on('click', '#update_color', function() {
            console.log(this.id + ' click event fired.');
            $.ajax({
                url: "{{ url('admin/update-color') }}",
                type: 'post',
                datatype: 'json',
                data: $('#updatemodal').serialize(),
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
                        $('#updatemodal')[0].reset();
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
                url: "{{ url('admin/changeStatus-color') }}",
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
                url: "{{ url('admin/trash-color') }}",
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

        $(document).ready(function() {
            $("#lblError").hide();
            $("#name").keypress(function(e) {
                var keyCode = e.keyCode || e.which;
                //Regex for Valid Characters i.e. Alphabets.
                var regex = /^[\s+A-Za-z]+$/;
                //Validate TextBox value against the Regex.
                var isValid = regex.test(String.fromCharCode(keyCode));
                if (!isValid) {
                    $("#lblError").show();
                    $("#lblError").html("**only alphabets allowed");
                    $("#lblError").focus();
                    $("#lblError").css("color", "red");
                } else {
                    $("#lblError").hide();
                }
                return isValid;
            });

            $("#ElblError").hide();
            $("#edit_name").keypress(function(e) {
                var keyCode = e.keyCode || e.which;
                $("#lblError").html("");
                //Regex for Valid Characters i.e. Alphabets.
                var regex = /^[\s+A-Za-z]+$/;
                //Validate TextBox value against the Regex.
                var isValid = regex.test(String.fromCharCode(keyCode));
                if (!isValid) {
                    $("#ElblError").show();
                    $("#ElblError").html("**only alphabets allowed");
                    $("#ElblError").focus();
                    $("#ElblError").css("color", "red");
                } else {
                    $("#ElblError").hide();
                }
                return isValid;
            });
        });
    </script>
@endsection
