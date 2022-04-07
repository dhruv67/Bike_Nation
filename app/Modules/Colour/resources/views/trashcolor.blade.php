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
                            <li class="breadcrumb-item active"><a href="{{ url('/admin/color') }}">Color</a></li>
                            <li class="breadcrumb-item active">Trash</li>
                        </ol>
                    </div>
                    <div id="app">
                        <main class="py-4">
                            <div id="success_message"></div>
                            <div class="card">
                                <div class="card-header">
                                    <h4>
                                        <a href="{{ url('admin/color') }}"><button type="button"
                                            class="btn btn-sm btn-primary float-end">Back</button></a>
                                    </h4>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered table-striped" id="color">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Users_ID</th>
                                                <th>Name</th>
                                                <th>Updated_at</th>
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

        var table = $('#color').DataTable({
            ajax: "{{ url('admin/trashfetch-color') }}",
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
                    "data": "updated_at"
                },
                {
                    "data": null,
                    render: function(data, type, row) {

                        return '<button data-id="' + row.id +
                            '" id="restore" class = "btn btn-sm btn-success ">Restore</button>'

                    }
                }

            ],
        });

        $(document).on('click', '#restore', function() {

            var id = $(this).data('id');

            $.ajax({
                type: "GET",
                dataType: "json",
                url: "{{ url('admin/restorecolor') }}",
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

        })
    </script>
@endsection
