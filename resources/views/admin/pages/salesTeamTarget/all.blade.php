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
                        <span class="breadcrumb-item active">Sales Team Target Management</span>
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
                <div class="col-lg-12 m-auto" style="width: 60%;">
                    <div class="card mt-1">
                        <div class="card-body p-1">
                            <div class="row">
                                <div class="col-lg-9">
                                    <h4 class="text-center mb-0">All Sales Team Target</h4>
                                </div>


                                <div class="col-lg-3">
                                    <a href="{{ route('salesTeamTarget.create') }}" type="button"
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
                            <div class="card">
                                <div class="card-body">
                                    <table class="datatable table table-bordered table-hover contactDT">
                                        <thead>
                                            <tr>
                                                <th width="10%">Sl No:</th>
                                                <th width="12%">Country Name</th>
                                                <th width="20%">Sales Manager Name</th>
                                                <th width="12%">Fiscal Year</th>
                                                <th width="15%">Year Target</th>
                                                <th width="12%">Year Started</th>
                                                <th width="19%" class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @if ($salesTeamTargets)
                                                @foreach ($salesTeamTargets as $key => $salesTeamTarget)
                                                    <tr>
                                                        <td>{{ ++$key }}</td>
                                                        <td> {{ App\Models\Admin\Country::where('id', $salesTeamTarget->country_id)
                                                        ->value('country_name') }}</td>
                                                        <td> {{ App\Models\User::where('id', $salesTeamTarget->sales_man_id)
                                                        ->value('name') }}</td>
                                                        <td>{{ $salesTeamTarget->fiscal_year }}</td>
                                                        <td>{{ $salesTeamTarget->year_target }}</td>
                                                        <td>{{ Str::ucfirst($salesTeamTarget->year_started) }}</td>
                                                        <td class="text-center">
                                                            <a href="{{ route('salesTeamTarget.show', [$salesTeamTarget->id]) }}"
                                                                class="text-success" title="Target Vs Achievement">
                                                                <i class="icon-eye"></i>
                                                            </a>
                                                            <a href="{{ route('salesTeamTarget.edit', [$salesTeamTarget->id]) }}"
                                                                class="text-primary">
                                                                <i class="icon-pencil"></i>
                                                            </a>
                                                            <a href="{{ route('salesTeamTarget.destroy', [$salesTeamTarget->id]) }}"
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
    <!-- /content area -->
    <!-- /inner content -->

    </div>


@endsection

@once
    @push('scripts')
        <script type="text/javascript">
            $('.contactDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 26, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [0, 1, 2, 4, 5, 6],
                }, ],
            });
        </script>
    @endpush
@endonce
