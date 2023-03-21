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
                        <span class="breadcrumb-item active">Admin Menu Management</span>
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
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h2 class="mb-0 text-center">All Admin Menus</h2>
                                </div>
                                <div class="col-lg-4">
                                    <a data-bs-toggle="modal" data-bs-target="#add-section" type="button"
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
                            <div class="table-responsive">
                                <table class="sectionDT table table-bordered table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th width="10%">Sl No:</th>
                                            <th width="15%">Menu Name</th>
                                            <th width="15%">Is Module</th>
                                            <th width="15%">Is Parent</th>
                                            <th width="15%">Route Name</th>
                                            <th width="15%">Permission Name</th>
                                            <th width="15%" class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($menus)
                                            @foreach ($menus as $key => $menu)
                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td>{{ $menu->name }}</td>
                                                    <td>
                                                        @if ($menu->is_module == '1')
                                                        <span class="badge bg-success">Yes</span>
                                                        @else
                                                        <span class="badge bg-danger">No</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if ($menu->is_parent == '1')
                                                        <span class="badge bg-success">Yes</span>
                                                        @else
                                                        <span class="badge bg-danger">No</span>
                                                        @endif
                                                    </td>
                                                    <td>{{ $menu->route_name }}</td>
                                                    <td>{{ $menu->permission_name }}</td>
                                                    <td class="text-center">
                                                        <a data-bs-toggle="modal" data-bs-target="#edit-menu-{{$menu->id}}" class="text-primary">
                                                            <i class="icon-pencil"></i>
                                                        </a>
                                                        <a href="{{ route('admin-menu-builder.destroy', [$menu->id]) }}"
                                                            class="text-danger delete mx-2">
                                                            <i class="delete icon-trash"></i>
                                                        </a>

                                                        <!---Edit modal--->
                                                            <div id="edit-menu-{{$menu->id}}" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-scrollable">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title">Edit Admin Menus</h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"></button>
                                                                        </div>

                                                                        <div class="modal-body border br-7">


                                                                                <div class="card-body m-auto" style="width: 100%;">

                                                                                    <form id="myform" method="post" action="{{ route('admin-menu-builder.update',$menu->id) }}" enctype="multipart/form-data">
                                                                                        @csrf
                                                                                        @method('PUT')
                                                                                        <div class="row">
                                                                                            <div class="col-md-6 mb-3">
                                                                                                <div class="col-sm-8">
                                                                                                    <h6 class="mb-0"> Menu Name</h6>
                                                                                                </div>
                                                                                                <div class="form-group col-sm-9 text-secondary">
                                                                                                    <input type="text" name="name" class="form-control maxlength" maxlength="100" value="{{$menu->name}}"/>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="col-md-6 mb-3">
                                                                                                <div class="col-sm-8">
                                                                                                    <h6 class="mb-0"> Menu icon</h6>
                                                                                                </div>
                                                                                                <div class="form-group col-sm-9 text-secondary">
                                                                                                    <input type="text" name="icon" class="form-control maxlength" maxlength="100" value="{{$menu->icon}}"/>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-6 mb-3">
                                                                                                <div class="col-sm-8">
                                                                                                    <h6 class="mb-0"> Route Name</h6>
                                                                                                </div>
                                                                                                <div class="form-group col-sm-9 text-secondary">
                                                                                                    <input type="text" name="route_name" class="form-control maxlength" maxlength="100" value="{{$menu->route_name}}"/>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-6 mb-3">
                                                                                                <div class="col-sm-8">
                                                                                                    <h6 class="mb-0"> Permission Name</h6>
                                                                                                </div>
                                                                                                <div class="form-group col-sm-9 text-secondary">
                                                                                                    <input type="text" name="permission_name" class="form-control maxlength" maxlength="100" value="{{$menu->permission_name}}"/>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="row mb-3">
                                                                                                <div class="col-md-4">
                                                                                                    <div class="form-check">
                                                                                                        <input class="form-check-input dealId" type="checkbox" id="dealId" name="is_module" value="1" @checked($menu->is_module == '1' )>
                                                                                                        <label class="form-check-label" for="dealId"> Is Module</label>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-6 basic-form dealExpand">
                                                                                                    <label for="module_name" class="form-label">Module Name</label>
                                                                                                    <select name="module_id" class="form-control select"
                                                                                                        id="module_name" data-placeholder="Select Module...">
                                                                                                        <option></option>
                                                                                                        @foreach ($menus as $item)
                                                                                                        <option class="form-control" value="{{ $item->id }}" @selected($menu->module_id == $item->id)>
                                                                                                            {{ $item->name }}</option>
                                                                                                        @endforeach
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row mb-3">
                                                                                                <div class="col-md-4">
                                                                                                    <div class="form-check">
                                                                                                        <input class="form-check-input dealId2" type="checkbox" id="dealId2" name="is_parent" value="1" @checked($menu->is_parent == '1' )>
                                                                                                        <label class="form-check-label" for="dealId2">Is Parent</label>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-6 basic-form dealExpand2">
                                                                                                    <label for="inputCollection" class="form-label">Parent Name</label>
                                                                                                    <select name="parent__id" class="form-control select"
                                                                                                        id="inputCollection" data-placeholder="Select Parent...">
                                                                                                        <option></option>
                                                                                                        @foreach ($menus as $item)
                                                                                                        <option class="form-control" value="{{ $item->id }}" @selected($menu->parent_id == $item->id)>
                                                                                                            {{ $item->name }}</option>
                                                                                                        @endforeach
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="row">
                                                                                            <div class="col-sm-3"></div>
                                                                                            <div class="col-sm-9 text-secondary">
                                                                                                {{-- <input type="submit" class="btn btn-primary px-4 mt-5" value="Submit" /> --}}

                                                                                                <button type="submit" class="btn btn-primary" id="submitbtn">Submit<i
                                                                                                        class="ph-paper-plane-tilt ms-2"></i></button>
                                                                                            </div>
                                                                                        </div>


                                                                                    </form>

                                                                                </div>


                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <!---Edit modal--->

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

        <!---Add modal--->
            <div id="add-section" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Admin Menus</h5>
                            <button type="button" class="btn-close"
                                data-bs-dismiss="modal"></button>
                        </div>

                        <div class="modal-body border br-7">


                                <div class="card-body m-auto" style="width: 100%;">

                                    <form id="myform" method="post" action="{{ route('admin-menu-builder.store') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <div class="col-sm-8">
                                                    <h6 class="mb-0"> Menu Name</h6>
                                                </div>
                                                <div class="form-group col-sm-9 text-secondary">
                                                    <input type="text" name="name" class="form-control maxlength" maxlength="100" />
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-3">
                                                <div class="col-sm-8">
                                                    <h6 class="mb-0"> Menu icon</h6>
                                                </div>
                                                <div class="form-group col-sm-9 text-secondary">
                                                    <input type="text" name="icon" class="form-control maxlength" maxlength="100" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="col-sm-8">
                                                    <h6 class="mb-0"> Route Name</h6>
                                                </div>
                                                <div class="form-group col-sm-9 text-secondary">
                                                    <input type="text" name="route_name" class="form-control maxlength" maxlength="100" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <div class="col-sm-8">
                                                    <h6 class="mb-0"> Permission Name</h6>
                                                </div>
                                                <div class="form-group col-sm-9 text-secondary">
                                                    <input type="text" name="permission_name" class="form-control maxlength" maxlength="100" />
                                                </div>
                                            </div>

                                            <div class="row mb-3">
                                                <div class="col-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input dealId" type="checkbox" id="dealId" name="is_module" value="1">
                                                        <label class="form-check-label" for="dealId"> Is Module</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 basic-form dealExpand">
                                                    <label for="module_name" class="form-label">Module Name</label>
                                                    <select name="module_id" class="form-control select"
                                                        id="module_name" data-placeholder="Select Module...">
                                                        <option></option>
                                                        @foreach ($menus as $item)
                                                        <option class="form-control" value="{{ $item->id }}">
                                                            {{ $item->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input dealId2" type="checkbox" id="dealId2" name="is_parent" value="1">
                                                        <label class="form-check-label" for="dealId2">Is Parent</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 basic-form dealExpand2">
                                                    <label for="inputCollection" class="form-label">Parent Name</label>
                                                    <select name="parent__id" class="form-control select"
                                                        id="inputCollection" data-placeholder="Select Parent...">
                                                        <option></option>
                                                        @foreach ($menus as $item)
                                                        <option class="form-control" value="{{ $item->id }}">
                                                            {{ $item->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-sm-3"></div>
                                            <div class="col-sm-9 text-secondary">
                                                {{-- <input type="submit" class="btn btn-primary px-4 mt-5" value="Submit" /> --}}

                                                <button type="submit" class="btn btn-primary" id="submitbtn">Submit<i
                                                        class="ph-paper-plane-tilt ms-2"></i></button>
                                            </div>
                                        </div>


                                    </form>

                                </div>


                        </div>


                    </div>
                </div>
            </div>
        <!---Add modal--->



        <!-- /inner content -->

    </div>
@endsection

@once
    @push('scripts')
        <script type="text/javascript">
            $('.sectionDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 26, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [0,1,4,5,6],
                }, ],
            });
        </script>
        <script>
            //---------Sidebar list Show Hide----------

            $(document).ready(function(){
                // if ($("input[name='is_module']").is(':checked')) {
                //     $(".dealExpand").addClass('d-none');
                // } else {
                //     $(".dealExpand").removeClass('d-none');
                // }
                // if ($("input[name='is_parent']").is(':checked')) {
                //     $(".dealExpand2").addClass('d-none');
                // } else {
                //     $(".dealExpand2").removeClass('d-none');
                // }

                $("input[name='is_module']").on('click', function(){
                    if ($("input[name='is_module']").is(':checked')) {
                        $(".dealExpand").addClass('d-none');
                        $('select[name="module_id"]').val('').change();
                    } else {
                        $(".dealExpand").removeClass('d-none');
                    }
                });

                // $('.dealId2').on('click', function(){
                //     if ($("input[name='is_parent']").is(':checked')) {
                //         $(".dealExpand2").addClass('d-none');
                //         $('select[name="parent__id"]').val('').change();

                //     } else {
                //         $(".dealExpand2").removeClass('d-none');
                //     }
                // });

            });


        </script>
        {{-- <script>
            //---------Sidebar list Show Hide----------

            $(document).ready(function(){

                $('#dealId2').on('click', function(){
                    if ($("#dealId2").is(':checked')) {
                        $("#dealExpand2").addClass('d-none');
                    } else {
                        $("#dealExpand2").removeClass('d-none');
                    }
                });

            });


        </script> --}}
    @endpush
@endonce
