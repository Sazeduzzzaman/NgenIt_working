@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <!-- Inner content -->
        <!-- Page header -->
        <div class="page-header page-header-light shadow">
            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Job Management</span>
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
        <div class="content pt-0 ">
            <div class="d-flex align-items-center py-2">
                {{-- Add Details Start --}}
                <div class="text-success nav-link cat-tab3"
                    style="position: relative;
                    z-index: 999;
                    margin-bottom: -40px;">
                    <a href="{{ route('job.create') }}">
                        <div class="d-flex align-items-center">
                            <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Add Solution Details">
                                <i class="ph-plus icons_design"></i> </span>
                            <span class="ms-1" style="color: #247297;">Add</span>
                        </div>
                    </a>
                    <div class="text-center" style="margin-left: 540px">
                        <h5 class="ms-1" style="color: #247297;">All Jobs</h5>
                    </div>
                </div>
                {{-- Add Details End --}}
            </div>
            <div>
                <table class="datatable table jobDT table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th style="width:5% !important">Id</th>
                            <th style="width:35% !important">Name</th>
                            <th style="width:10% !important">deadline</th>
                            <th style="width:10% !important">link</th>
                            <th style="width:10% !important">company_name</th>
                            <th style="width:10% !important">category</th>
                            <th style="width:10% !important">experience</th>
                            <th style="width:10% !important" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($jobs)
                            @foreach ($jobs as $key => $jobs)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $jobs->name }}</td>
                                    <td>{{ $jobs->deadline }}</td>
                                    <td>{{ $jobs->link }}</td>
                                    <td>{{ $jobs->company_name }}</td>
                                    <td>{{ $jobs->category }}</td>
                                    <td>{{ $jobs->experience }}</td>
                                    <td>
                                        <a href="{{ route('job.edit', [$jobs->id]) }}" class="text-primary">
                                            <i class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                                        </a>
                                        <a href="{{ route('job.destroy', [$jobs->id]) }}" class="text-danger delete">
                                            <i class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
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
@endsection
@once
    @push('scripts')
        <script type="text/javascript">
            $('.jobDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [7],
                }, ],
            });
        </script>
    @endpush
@endonce
