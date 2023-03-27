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
                        <span class="breadcrumb-item active">Software Info Pages Management</span>
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
                    <div class="card m-auto mb-2" style="width: 50%;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-9">
                                    <h4 class="text-center">All Software Info Pages</h4>
                                </div>
                                <div class="col-lg-4">
                                    <a href="{{ route('software-info-page.create') }}" type="button"
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
                                    <table
                                        class="datatable table table-bordered text-center table-hover softwareInfoPageDT">
                                        <thead>
                                            <tr>
                                                <th width="20%">Sl No:</th>
                                                <th width="35%">Number of Tamplate</th>
                                                <th width="20%" class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $words = ['one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine'];
                                            @endphp

                                            @if ($softwareInfoPages)
                                                @foreach ($softwareInfoPages as $key => $softwareInfoPage)
                                                    <tr>
                                                        <td>{{ $loop->iteration }} </td>
                                                        <td>{{ isset($words[$key]) ? Str::ucfirst($words[$key]) . ' ' . 'Tamplate' : 'Number out of range' }}
                                                        </td>
                                                        <td class="text-center">
                                                            <a href="{{ route('software-info-page.edit', [$softwareInfoPage->id]) }}"
                                                                class="text-primary mx-2">
                                                                <i class="icon-pencil"></i>
                                                            </a>
                                                            <a href="{{ route('software-info-page.destroy', [$softwareInfoPage->id]) }}"
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
            $('.softwareInfoPageDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 26, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [2],
                }, ],
            });
        </script>
    @endpush
@endonce
