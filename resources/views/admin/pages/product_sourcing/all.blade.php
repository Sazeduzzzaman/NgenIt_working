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
                        <a href="{{route('admin.dashboard')}}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Product Management</span>
                    </div>

                    <a href="#breadcrumb_elements" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto" data-bs-toggle="collapse">
                        <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-lg-3">
                            <ul class="nav nav-tabs">
                                <li class="nav-item col-6">
                                    <a href="#js-tab1" class="py-1 nav-link active cat-tab1" data-bs-toggle="tab">
                                        <p style="font-size: 12px; font-weight:600;color:black;margin-bottom:0px;">
                                            Saved</p>
                                    </a>
                                </li>

                                <li class="nav-item col-6">
                                    <a href="#js-tab2" class="py-1 nav-link cat-tab2" data-bs-toggle="tab">
                                        <p style="font-size: 12px; font-weight:600;color:black;margin-bottom:0px;">
                                            Completed</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6 text-center">
                            <h2 class="mb-0 saved_title">Saved Product List</h2>
                            <h2 class="mb-0 completed_title d-none">Completed Product List</h2>
                        </div>

                        <div class="col-lg-3">
                            <div class="dropdown ms-lg-3">
                                <a href="#" class="btn btn-sm btn-success btn-labeled btn-labeled-start float-end" data-bs-toggle="dropdown">
                                    <span class="btn-labeled-icon bg-black bg-opacity-20">
                                        <i class="icon-plus2"></i>
                                    </span>
                                    <span class="flex-1">Add</span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end w-100 w-lg-auto">
                                    <a href="{{route('product-sourcing.create')}}" class="dropdown-item">
                                        <i class="ph-shield-warning me-2"></i>
                                        Source Products
                                    </a>
                                    <a href="{{route('add.product')}}" class="dropdown-item">
                                        <i class="ph-chart-bar me-2"></i>
                                        RFQ Products
                                    </a>

                                </div>
                            </div>
                            {{-- <a href="{{route('product-sourcing.create')}}" type="button" class="btn btn-sm btn-success btn-labeled btn-labeled-start float-end">
                                <span class="btn-labeled-icon bg-black bg-opacity-20">
                                    <i class="icon-plus2"></i>
                                </span>
                                Source New Product
                            </a> --}}
                        </div>
                    </div>


                </div>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="js-tab1">
                        <div id="table1" class="card-body">

                            <table class="table table-bordered table-hover datatable-highlight sourcingDT">
                                <thead>
                                    <tr>
                                        <th width="10%">Sl</th>
                                        <th width="15%">Image </th>
                                        <th width="25%">Product Name </th>
                                        <th width="15%">Sourcing Price 1</th>
                                        <th width="15%">Sourcing Price 2</th>
                                        <th width="10%">Sourcing Status</th>
                                        <th width="10%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($saved_products)

                                    @foreach ($saved_products as $key => $item)
                                        <tr>
                                            <td> {{ $key + 1 }} </td>
                                            <td> <img src="{{ asset($item->thumbnail) }}" style="width: 70px; height:40px;">
                                            </td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->source_one_price}}</td>
                                            <td>{{ $item->source_two_price}}</td>
                                            <td>@if ($item->action_status == 'save')
                                                <span class="badge rounded-pill bg-success">Not Completed</span>
                                            @else
                                                <span class="badge rounded-pill bg-danger">Listed</span>
                                            @endif</td>



                                            <td>

                                                <a href="{{ route('product-sourcing.edit',$item->id) }}" class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('product-sourcing.destroy', [$item->id]) }}"
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

                <div class="tab-content">
                    <div class="tab-pane fade show" id="js-tab2">
                        <div id="table2" class="card-body">

                            <table class="table table-bordered table-hover datatable-highlight sourcingDT2">
                                <thead>
                                    <tr>
                                        <th width="10%">Sl</th>
                                        <th width="15%">Image </th>
                                        <th width="25%">Product Name </th>
                                        <th width="15%">Sourcing Price 1</th>
                                        <th width="15%">Sourcing Price 2</th>
                                        <th width="10%">Sourcing Status</th>
                                        <th width="10%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($products)

                                    @foreach ($products as $key => $item)
                                        <tr>
                                            <td> {{ $key + 1 }} </td>
                                            <td> <img src="{{ asset($item->thumbnail) }}" style="width: 70px; height:40px;">
                                            </td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->source_one_price}}</td>
                                            <td>{{ $item->source_two_price}}</td>
                                            <td>@if ($item->action_status == 'save')
                                                <span class="badge rounded-pill bg-success">Not Completed</span>
                                            @else
                                                <span class="badge rounded-pill bg-danger">Listed</span>
                                            @endif</td>



                                            <td>

                                                <a href="{{ route('product-sourcing.edit',$item->id) }}" class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('product-sourcing.destroy', [$item->id]) }}"
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
        <!-- /content area -->

    <!-- /inner content -->

</div>
@endsection

@once
@push('styles')
<style>

</style>
@endpush
@endonce

@once
    @push('scripts')
        <script type="text/javascript">
            $('.sourcingDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [1, 5, 6],
                }, ],
            });
            $('.sourcingDT2').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [1, 5, 6],
                }, ],
            });
        </script>
        <script>
            $(document).ready(function() {
                $(".cat-tab1").click(function() {
                    $("#cat-tab2").addClass('d-none');
                    $("#cat-tab1").removeClass('d-none');
                    $(".saved_title").removeClass('d-none');
                    $(".completed_title").addClass('d-none');
                });
                $(".cat-tab2").click(function() {
                    $("#cat-tab1").addClass('d-none');
                    $("#cat-tab2").removeClass('d-none');
                    $(".saved_title").addClass('d-none');
                    $(".completed_title").removeClass('d-none');
                });

            });
        </script>
    @endpush
@endonce
