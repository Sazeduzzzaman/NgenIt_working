@extends('admin.master')
@section('content')
    <style>
        .submit_btn {
            padding: 10px;
        }

        .submit_btn:hover {
            padding: 10px;
        }
    </style>

    <div class="content-wrapper">


                <!-- Page header -->
                <section class="shadow-sm">
                    <div class="d-flex justify-content-between align-items-center">
                        {{-- Page Destination/ BreadCrumb --}}
                        <div class="page-header-content d-lg-flex ">
                            <div class="d-flex px-2">
                                <div class="breadcrumb py-2">
                                    <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                                    <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">Home</a>
                                    <a href="{{ route('supplychain') }}" class="breadcrumb-item">Supply Chain</a>
                                    <span class="breadcrumb-item active">Product Sourcing</span>
                                </div>
                                <a href="#breadcrumb_elements"
                                    class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                                    data-bs-toggle="collapse">
                                    <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                                </a>
                            </div>
                        </div>
                        {{-- Inner Page Tab --}}
                </section>
                <!-- /page header -->
                <!-- product-sourcing Content Start -->
                <section>
                    <div class="container-fluid mt-2">
                        <div class="row  mx-2 rounded " id="exTab3">
                            <div class="d-flex justify-content-between align-items-center p-0">
                                <ul class="nav nav-tabs border-0">
                                    <li class="nav-item ">
                                        <a href="#saved" class=" nav-link active cat-tab1 p-1" data-bs-toggle="tab">
                                            <p class="m-0 p-1">
                                                Saved <span class="ms-2">|</span></p>
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="#completed" class=" nav-link cat-tab2 p-1 " data-bs-toggle="tab">
                                            <p class="m-0 p-1">
                                                Completed <span class="ms-2">|</span></p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#approved" class=" nav-link cat-tab3 p-1" data-bs-toggle="tab">
                                            <p class="m-0 p-1">
                                                Approved Products <span class="ms-2">|</span></p>
                                        </a>
                                    </li>
                                    <li class="nav-item d-flex align-items-center">
                                        <a href="{{route('product-sourcing.create')}}" class="nav-link p-0">
                                            <span class="ms-2 icon_btn" style="font-weight: 800;" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Add Expense">
                                                <i class="ph-plus icons_design"></i>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row rounded mx-2 mt-1">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="saved">
                                    <table class="table table-bordered table-hover sourcingDT text-center ">
                                        <thead>
                                            <tr>
                                                <th width="8%">Sl</th>
                                                <th width="10%">Image </th>
                                                <th width="30%">Product Name </th>
                                                <th width="12%">Sourcing Price 1</th>
                                                <th width="12%">Sourcing Price 2</th>
                                                <th width="15%">Sourcing Status</th>
                                                <th width="13%" class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($saved_products)
                                                @foreach ($saved_products as $key => $item)
                                                    <tr>
                                                        <td> {{ $key + 1 }} </td>
                                                        <td> <img src="{{ asset($item->thumbnail) }}"
                                                                style="width: 25px; height:25px;">
                                                        </td>
                                                        <td>{{ $item->name }}</td>
                                                        <td>{{ $item->source_one_price }}</td>
                                                        <td>{{ $item->source_two_price }}</td>
                                                        <td class="text-center">
                                                            @if ($item->action_status == 'save')
                                                                <span class="text-success">Not Completed</span>
                                                            @else
                                                                <span class=" text-danger">Listed</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <div class="d-flex justify-content-center align-items-center">
                                                                <a href="{{ route('product-sourcing.edit', $item->id) }}"
                                                                    class="text-primary" data-bs-toggle="modal"
                                                                    data-bs-target="#product-sourcing">
                                                                    <i class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-white"
                                                                        style="background: #247297;"></i>
                                                                </a>
                                                                <a href="{{ route('product-sourcing.destroy', [$item->id]) }}"
                                                                    class="text-danger delete">
                                                                    <i class="fa-solid fa-trash p-1 rounded-circle text-white"
                                                                        style="background: #247297;"></i>
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade show" id="completed">
                                    <table class="table table-bordered table-hover sourcingDT2 text-center ">
                                        <thead>
                                            <tr>
                                                <th width="8%">Sl</th>
                                                <th width="10%">Image </th>
                                                <th width="30%">Product Name </th>
                                                <th width="12%">Sourcing Price 1</th>
                                                <th width="12%">Sourcing Price 2</th>
                                                <th width="15%">Sourcing Status</th>
                                                <th width="13%" class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($products)
                                                @foreach ($products as $key => $item)
                                                    <tr>
                                                        <td> {{ $key + 1 }} </td>
                                                        <td> <img src="{{ asset($item->thumbnail) }}"
                                                                style="width: 25px; height:25px;"> </td>
                                                        <td>{{ Str::limit($item->name, 50) }}</td>
                                                        <td>{{ $item->source_one_price }}</td>
                                                        <td>{{ $item->source_two_price }}</td>
                                                        <td class="text-center">
                                                            @if ($item->action_status == 'save')
                                                                <span class="text-success">Not Completed</span>
                                                            @else
                                                                <span class="text-danger">Listed</span>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <a href="{{ route('product-sourcing.edit', $item->id) }}"
                                                                class="text-primary">
                                                                <i class="fa-solid fa-pen-to-square me-2 p-1 text-primary fa-1x"></i>
                                                            </a>
                                                            <a href="{{ route('product-sourcing.destroy', [$item->id]) }}"
                                                                class="text-danger delete">
                                                                <i class="fa-solid fa-trash p-1 text-danger fa-1x"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade show bg-white" id="approved">
                                    <table class="table table-bordered table-hover productDt text-center ">
                                        <thead>
                                            <tr>
                                                <th width="8%">Sl</th>
                                                <th width="10%">Image </th>
                                                <th width="30%">Product Name </th>
                                                <th width="12%">Price </th>
                                                <th width="12%">Stock </th>
                                                <th width="15%">Discount </th>
                                                <th width="13%" class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($real_products as $key => $item)
                                                <tr>
                                                    <td> {{ $key + 1 }} </td>
                                                    <td> <img src="{{ asset($item->thumbnail) }}" width="25px" height="25px">
                                                    </td>
                                                    <td>{{ Str::limit($item->name, 80) }}</td>
                                                    <td>{{ $item->price }}</td>
                                                    <td>{{ ucfirst($item->stock) }}</td>
                                                    <td>
                                                        @if ($item->discount == null)
                                                            <span class="text-info">No Discount</span>
                                                        @else
                                                            @php
                                                                $amount = $item->price - $item->discount;
                                                                $discount = ($amount / $item->price) * 100;
                                                            @endphp
                                                            <span class="text-danger">
                                                                {{ round($discount) }}%</span>
                                                        @endif
                                                    </td>

                                                    <td>
                                                        <a href="{{ route('edit.product', $item->id) }}" class="text-primary">
                                                            <i class="fa-solid fa-pen-to-square me-2 p-1 rounded-circle text-white"
                                                                style="background: #247297;"></i>
                                                        </a>
                                                        <a href="{{ route('product.destroy', [$item->id]) }}"
                                                            class="text-danger delete">
                                                            <i class="fa-solid fa-trash p-1 rounded-circle text-white"
                                                                style="background: #247297;"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>



    </div>


@endsection

@once
    @push('scripts')
        <script type="text/javascript">
            $('.sourcingDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [1, 2, 6],
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
        <script type="text/javascript">
            $('.productDt').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 26, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [0, 1, 2, 5, 6],
                }, ],
            });
        </script>
        <script>
            $(document).ready(function() {
                $(".cat-tab1").click(function() {
                    $("#cat-tab2").addClass('d-none');
                    $("#cat-tab3").addClass('d-none');
                    $("#cat-tab1").removeClass('d-none');
                    $(".saved_title").removeClass('d-none');
                    $(".completed_title").addClass('d-none');
                    $(".approved_title").addClass('d-none');
                });
                $(".cat-tab2").click(function() {
                    $("#cat-tab1").addClass('d-none');
                    $("#cat-tab3").addClass('d-none');
                    $("#cat-tab2").removeClass('d-none');
                    $(".approved_title").addClass('d-none');
                    $(".saved_title").addClass('d-none');
                    $(".completed_title").removeClass('d-none');
                });
                $(".cat-tab3").click(function() {
                    $("#cat-tab1").addClass('d-none');
                    $("#cat-tab2").addClass('d-none');
                    $("#cat-tab3").removeClass('d-none');
                    $(".saved_title").addClass('d-none');
                    $(".completed_title").addClass('d-none');
                    $(".approved_title").removeClass('d-none');
                });

            });
        </script>
    @endpush
@endonce
