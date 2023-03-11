@extends('admin.master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="content-wrapper">

        <!-- Inner content -->


        <!-- Page header -->
        <div class="page-header page-header-light shadow">


            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Sales Managers</span>
                    </div>

                    <a href="#breadcrumb_elements"
                        class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                        data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- /page header -->
        <!-- Content area -->
        <div class="content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card cardT">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h4 class="mb-0 text-center">All Sales Manager</h4>
                                </div>

                                <div class="col-lg-4">
                                    <a href="{{ route('sales-account.create') }}" type="button"
                                        class="btn btn-sm btn-success btn-labeled btn-labeled-start float-end">
                                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                                            <i class="icon-plus2"></i>
                                        </span>
                                        Add New
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <table class="table table-bordered table-hover salesaccountDT">
                                <thead>
                                    <tr class="text-center">
                                        <th width="10%">Sl</th>
                                        <th width="10%">Image </th>
                                        <th width="15%">Name </th>
                                        <th width="20%">Email </th>
                                        <th width="10%">Designation </th>
                                        <th width="15%">Role </th>
                                        <th width="20%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($salesmans)
                                        @foreach ($salesmans as $key => $salesman)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td class="text-center"><img class="rounded-circle"
                                                        src="{{ asset('upload/Profile/Admin/' . $salesman->photo) }}"
                                                        height="50" width="50" alt=""></td>
                                                <td>{{ $salesman->name }}</td>
                                                <td>{{ $salesman->email }}</td>
                                                <td>{{ $salesman->designation }}</td>
                                                <td>
                                                    @foreach($salesman->roles as $role)
                                                        <span class="badge bg-danger">{{ $role->name }}</span>
                                                    @endforeach
                                                </td>
                                                <td>

                                                    <div class="row">
                                                        <div class="col-3">
                                                            <div class="form-switch">
                                                                <input name="toggle" type="checkbox"
                                                                    class="form-check-input form-check-input-danger"
                                                                    value="{{ $salesman->id }}" id="sc_r_danger"
                                                                    {{ $salesman->status == 'inactive' ? 'checked' : '' }}>
                                                            </div>
                                                        </div>
                                                        <div class="col-9">
                                                            <a href="javascript:void(0);" class="text-success mx-3"
                                                                data-bs-toggle="modal" title="View & Assign Roles to Sales Manager"
                                                                data-bs-target="#assign-manager-{{ $salesman->id }}">
                                                                <i class="icon-user-check icon-1x"></i>
                                                            </a>
                                                            <a href="{{ route('sales-account.edit', [$salesman->id]) }}"
                                                                class="text-primary mx-2">
                                                                <i class="icon-pencil"></i>
                                                            </a>
                                                            <a href="{{ route('sales-account.destroy', [$salesman->id]) }}"
                                                                class="text-danger delete mx-2">
                                                                <i class="delete icon-trash"></i>
                                                            </a>

                                                            <!---Assign Manager modal--->
                                                                <div id="assign-manager-{{ $salesman->id }}" class="modal fade" tabindex="-1" style="display: none;"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                @php
                                                                                    $sales_manager = App\Models\User::where('id', $salesman->id)->first();
                                                                                @endphp
                                                                                <h5 class="modal-title">Assign Role for Sales Manager : {{ $sales_manager->name }}</h5>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                                            </div>

                                                                            <div class="modal-body border br-7">

                                                                                <form method="post" action="{{ route('assign.salesmanager-role',$salesman->id) }}"
                                                                                    enctype="multipart/form-data">
                                                                                    @csrf
                                                                                    @method('PUT')
                                                                                    <div class="row">
                                                                                        <div class="card">
                                                                                            <div class="row">
                                                                                                <table class="table table-bordered table-striped p-1">
                                                                                                    <thead>
                                                                                                        <tr>

                                                                                                            <th style="padding:7px !important;">
                                                                                                                Name : {{ ucfirst($sales_manager->name) }}
                                                                                                            </th>
                                                                                                            <th style="padding:7px !important;">
                                                                                                                Country: {{ ucfirst($sales_manager->country) }}
                                                                                                            </th>
                                                                                                            <th style="padding:7px !important;">
                                                                                                                Designation: {{ ucfirst($sales_manager->designation) }}
                                                                                                            </th>

                                                                                                        </tr>

                                                                                                    </thead>
                                                                                                </table>
                                                                                            </div>
                                                                                            <div class="row mt-2 p-2 text-center">
                                                                                                <div class="col-12 text-white py-1" style="background:black;">
                                                                                                    Assign Roles :
                                                                                                    <a class="p-1 editRfquser" href="javascript:void(0);">
                                                                                                        <i class="ph-note-pencil" aria-hidden="true"></i>
                                                                                                    </a>
                                                                                                </div>
                                                                                                <div class="col-12 Rfquser" style="display:none">
                                                                                                    <div class="row mb-3 p-2 border">


                                                                                                        <div class="col-lg-4">

                                                                                                        </div>
                                                                                                        <div class="col-lg-4">
                                                                                                            <div class="col-sm-12">
                                                                                                                <h6 class="mb-0 text-black">Assign Roles</h6>
                                                                                                            </div>
                                                                                                            <div class="form-group text-secondary col-sm-12">
                                                                                                                {{-- <select name="roles" class="form-control select"
                                                                                                                    data-placeholder="Choose Role...">
                                                                                                                    <option></option>
                                                                                                                    @foreach($roles as $role)
                                                                                                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                                                                                                    @endforeach
                                                                                                                </select> --}}
                                                                                                                <select name="roles" class="form-control select"
                                                                                                                    data-placeholder="Choose Role...">
                                                                                                                    <option></option>

                                                                                                                    @foreach($roles as $role)
                                                                                                                    <option value="{{ $role->id }}" {{ $sales_manager->hasRole($role->name) ? 'selected' : '' }} >
                                                                                                                        {{ $role->name }}</option>
                                                                                                                    @endforeach
                                                                                                                </select>
                                                                                                            </div>
                                                                                                        </div>

                                                                                                        <div class="col-lg-4">

                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>




                                                                                    <div class="row">
                                                                                        <div class="col-sm-3"></div>
                                                                                        <div class="col-sm-9 text-secondary text-center">
                                                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                                                        </div>
                                                                                    </div>

                                                                                </form>
                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <!---Assign Manager modal--->
                                                        </div>
                                                    </div>

                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /content area -->
    <!-- /inner content -->

    </div>

    <script>
        $(document).ready(function() {
            $('input[name=toggle]').change(function() {
                var mode = $(this).prop('checked');
                var id = $(this).val();
                $.ajax({
                    url: "{{ route('sales.status') }}",
                    type: "POST",
                    data: {
                        _token: '{{ csrf_token() }}',
                        mode: mode,
                        id: id,
                    },
                    success: function(response) {
                        if (response.status) {
                            console.log(response.msg);
                        } else {
                            console.log('Please Try Again!');
                        }
                        window.location.reload();
                    }
                })
            })
        })



    </script>
@endsection

@once
    @push('scripts')
        <script type="text/javascript">
            $('.salesaccountDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 26, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [1,2,3,5,7],
                }, ],
            });
        </script>

        <script>
            $(document).ready(function() {
                $('.editRfquser').click(function() {
                    $(".Rfquser").toggle(this.checked);
                });
            });
        </script>
    @endpush
@endonce
