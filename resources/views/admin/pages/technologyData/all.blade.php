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
                        <span class="breadcrumb-item active">Technology Data Management</span>
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
        <div class="content pt-0 w-75 mx-auto">
            <div class="d-flex align-items-center py-2">
                {{-- Add Details Start --}}
                <div class="text-success nav-link cat-tab3"
                    style="position: relative;
                    z-index: 999;
                    margin-bottom: -40px;">
                    <a href="" data-bs-toggle="modal" data-bs-target="#addTechnologyData">
                        <div class="d-flex align-items-center">
                            <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip"
                                data-bs-placement="top" title="Add Solution Details">
                                <i class="ph-plus icons_design"></i> </span>
                            <span class="ms-1" style="color: #247297;">Add</span>
                        </div>
                    </a>
                    <div class="text-center" style="margin-left: 300px">
                        <h5 class="ms-1" style="color: #247297;">All Technology Data</h5>
                    </div>
                </div>
                {{-- Add Details End --}}
            </div>
            <div>
                <table class="table technologyDt table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th width="15%">Sl No</th>
                            <th width="65%">Name</th>
                            <th width="10%">condition</th>
                            <th width="10%" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($technologyDatas)
                            @foreach ($technologyDatas as $key => $technologyData)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $technologyData->name }}</td>
                                    <td>{{ $technologyData->condition }}</td>
                                    <td>
                                        <a href="" class="text-primary" data-bs-toggle="modal"
                                            data-bs-target="#edit-menu-{{ $technologyData->id }}">
                                            <i class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-primary"></i>
                                        </a>
                                        <a href="{{ route('technology-data.destroy', [$technologyData->id]) }}"
                                            class="text-danger delete">
                                            <i class="fa-solid fa-trash p-1 rounded-circle text-danger"></i>
                                        </a>

                                        {{-- Edit Success Modal --}}
                                        <div id="edit-menu-{{ $technologyData->id }}" class="modal fade" tabindex="-1">
                                            <div class="modal-dialog modal-dialog-centered modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h6 class="modal-title text-white">Edit Technology Data
                                                        </h6>
                                                        <a type="button" data-bs-dismiss="modal">
                                                            <i class="ph ph-x text-white"
                                                                style="font-weight: 800;font-size: 10px;"></i>
                                                        </a>
                                                    </div>
                                                    <div class="modal-body p-0 px-2">
                                                        <form method="post"
                                                            action="{{ route('technology-data.update', $technologyData->id) }}">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="container">
                                                                {{--  --}}
                                                                <div class="row mt-2 mb-1">
                                                                    <div class="col-sm-4 text-start">
                                                                        <span>Category</span>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <select name="category"
                                                                            class="form-control form-control-sm select"
                                                                            data-placeholder="Chose a category ">
                                                                            <option></option>
                                                                            <option @selected($technologyData->category == 'industry')
                                                                                value="industry">Industry </option>
                                                                            <option @selected($technologyData->category == 'solution')
                                                                                value="solution">Solution </option>
                                                                            <option @selected($technologyData->category == 'software')
                                                                                value="software">Software </option>
                                                                            <option @selected($technologyData->category == 'hardware')
                                                                                value="hardware">Hardware </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                {{--  --}}
                                                                <div class="row mb-1">
                                                                    <div class="col-sm-4 text-start">
                                                                        <span>Header</span>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" value="{{ $technologyData->header }}" name="header"
                                                                            class="form-control form-control-sm allow_decimal"
                                                                            maxlength="100" required />
                                                                    </div>
                                                                </div>
                                                                {{--  --}}
                                                                <div class="row mb-1">
                                                                    <div class="col-sm-4 text-start">
                                                                        <span>Short Description</span>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" value="{{ $technologyData->short_description }}" name="short_description"
                                                                            class="form-control form-control-sm allow_decimal"
                                                                            required />
                                                                    </div>
                                                                </div>
                                                                {{--  --}}
                                                                <div class="row mb-1">
                                                                    <div class="col-sm-4 text-start">
                                                                        <span>Footer</span>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <input type="text" value="{{ $technologyData->footer }}" name="permission_name"
                                                                            class="form-control form-control-sm"
                                                                            maxlength="100" required />
                                                                    </div>
                                                                </div>
                                                                {{--  --}}
                                                            </div>
                                                            <div class="modal-footer border-0 pt-3 pb-0 pe-0">
                                                                <button type="submit"
                                                                    class="submit_btn from-prevent-multiple-submits"
                                                                    style="padding: 5px;">Submit</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Edit Success Modal End --}}
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        {{-- Add Success Modal --}}
        <div id="addTechnologyData" class="modal fade" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title text-white">Add Technology Data
                        </h6>
                        <a type="button" data-bs-dismiss="modal">
                            <i class="ph ph-x text-white" style="font-weight: 800;font-size: 10px;"></i>
                        </a>
                    </div>
                    <div class="modal-body p-0 px-2">
                        <form method="post" action="{{ route('technology-data.store') }}">
                            @csrf
                            <div class="container">
                                {{--  --}}
                                <div class="row mt-2 mb-1">
                                    <div class="col-sm-4 text-start">
                                        <span>Category</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <select name="category" class="form-control form-control-sm select"
                                            data-placeholder="Chose a category ">
                                            <option></option>
                                            <option value="industry">Industry </option>
                                            <option value="solution">Solution </option>
                                            <option value="software">Software </option>
                                            <option value="hardware">Hardware </option>
                                        </select>
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1">
                                    <div class="col-sm-4 text-start">
                                        <span>Header</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" name="header"
                                            class="form-control form-control-sm allow_decimal" maxlength="100" required />
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1">
                                    <div class="col-sm-4 text-start">
                                        <span>Short Description</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" name="short_description"
                                            class="form-control form-control-sm allow_decimal" required />
                                    </div>
                                </div>
                                {{--  --}}
                                <div class="row mb-1">
                                    <div class="col-sm-4 text-start">
                                        <span>Footer</span>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" name="permission_name" class="form-control form-control-sm"
                                            maxlength="100" required />
                                    </div>
                                </div>
                                {{--  --}}
                            </div>
                            <div class="modal-footer border-0 pt-3 pb-0 pe-0">
                                <button type="submit" class="submit_btn from-prevent-multiple-submits"
                                    style="padding: 5px;">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{-- Add Success Modal End --}}
    </div>
@endsection
@once
    @push('scripts')
        <script type="text/javascript">
            $('.technologyDt').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [3],
                }, ],
            });
        </script>
    @endpush
@endonce
