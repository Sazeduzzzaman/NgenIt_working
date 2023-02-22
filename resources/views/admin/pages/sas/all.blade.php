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
                        <span class="breadcrumb-item active">SAS of Sourcing Products</span>
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
                    <h3 class="mb-0 text-center">Sourcing SAS List</h3>

                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover sasDT">
                        <thead>
                            <tr class=" text-center">
                                <th width="10%">Sl</th>
                                <th width="10%">Image </th>
                                <th width="50%">Product Name </th>
                                <th width="15%">Sales Price</th>
                                <th width="15%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($products)

                            @foreach ($products as $key => $item)
                                @php
                                    $product = App\Models\Admin\Product::where('id', $item->product_id)->first();
                                @endphp
                                <tr>
                                    <td class=" text-center"> {{ $key + 1 }} </td>
                                    <td>
                                        @if ($product)
                                            <img src="{{ asset($product->thumbnail) }}" style="width: 70px; height:40px;">
                                        @endif
                                    </td>
                                    <td>{{ $product->name }}</td>
                                    <td class=" text-center">{{$item->sales_price}}</td>
                                    <td class=" text-center">

                                        <a href="{{ route('sas.edit', [$item->ref_code]) }}" class="text-info mx-2">
                                            <i class="icon-pencil"></i>
                                        </a>
                                        {{-- <a href="{{ route('sas.show', [$item->ref_code]) }}" class="text-info mx-2">
                                            <i class="icon-eye"></i>
                                        </a> --}}
                                    </td>
                                </tr>
                            @endforeach
                            @endif

                        </tbody>
                    </table>
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
            $('.sasDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [1,2,3, 4],
                }, ],
            });
        </script>
    @endpush
@endonce
