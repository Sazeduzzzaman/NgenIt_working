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
                        <span class="breadcrumb-item active">Marketing Manager Role Management</span>
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
                    <div class="card mt-1">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-9">
                                    <h4 class="text-center">All Marketing Manager Role</h4>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{ route('marketing-manager-role.create') }}" type="button"
                                        class="btn btn-sm btn-success btn-labeled btn-labeled-start float-end">
                                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                                            <i class="icon-plus2"></i>
                                        </span>
                                        Add New
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="content">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="js-tab1">
                                    <div id="table1" class="card cardT">

                                        <table class="datatable table table-bordered table-hover marketingManagerRoleDT">
                                            <thead>
                                                <tr>
                                                    <th width="10%">Sl No:</th>
                                                    <th width="11%">Marketing Manager Id</th>
                                                    <th width="23%">Dmar</th>
                                                    <th width="23%">Cmar</th>
                                                    <th width="23%">Emar</th>
                                                    <th width="10%" class="text-center">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if ($marketingManagerRoles)
                                                    @foreach ($marketingManagerRoles as $key => $marketingManagerRole)
                                                        <tr>
                                                            <td>{{ ++$key }}</td>
                                                            <td>{{ app\models\User::where('id',$marketingManagerRole->marketing_manager_id)->value('name') }}</td>
                                                            <td>{{ $marketingManagerRole->dmar }}</td>
                                                            <td>{{ $marketingManagerRole->cmar }}</td>
                                                            <td>{{ $marketingManagerRole->emar }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('marketing-manager-role.edit', [$marketingManagerRole->id]) }}"
                                                                    class="text-primary">
                                                                    <i class="icon-pencil"></i>
                                                                </a>
                                                                <a href="{{ route('marketing-manager-role.destroy', [$marketingManagerRole->id]) }}"
                                                                    class="text-danger delete mx-2">
                                                                    <i class="delete icon-trash"></i>
                                                                </a>
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
            </div>
        </div>

    </div>
    <!-- /content area -->
    <!-- /inner content -->

    </div>


@endsection

@once
    @push('scripts')
        <script type="text/javascript">
            $('.marketingManagerRoleDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 26, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [5],
                }, ],
            });
        </script>
    @endpush
@endonce
