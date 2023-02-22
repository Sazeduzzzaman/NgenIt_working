@extends('admin.master')
@section('content')
<div class="content-wrapper">

    <!-- Inner content -->


        <!-- Page header -->
        <div class="page-header page-header-light shadow">


            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="{{route('admin.dashboard')}}" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{route('admin.dashboard')}}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">SAS of Deals</span>
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
                <div class="card-header p-1">
                    <h2 class="mb-0 text-center">Deal SAS List</h2>

                </div>

                <table class="table table-bordered table-hover datatable-highlight sourcingDT text-center">
                    <thead>
                        <tr>
                            <th width="15%">Sl</th>
                            <th width="15%">RFQ ID </th>
                            <th width="25%">Sales Manager Name </th>
                            <th width="15%">Created At</th>
                            <th width="15%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($deal_sas)

                        @foreach ($deal_sas as $key => $item)
                            @php
                                $rfq = App\Models\Admin\Rfq::where('id', $item->rfq_id)->first();
                            @endphp
                            <tr>
                                <td> {{ $key + 1 }} </td>
                                <td>
                                    {{ $item->rfq_code }}
                                </td>
                                <td>{{ App\Models\User::where('id', $rfq->sales_man_id_L1)->value('name') }}</td>
                                <td>{{$item->create}}</td>
                                <td>

                                    <a href="{{ route('deal-sas.edit',$item->rfq_code) }}" class="text-info mx-2">
                                        <i class="icon-pencil"></i>
                                    </a>
                                    <a href="{{ route('dealsasapprove',$item->rfq_code) }}" class="text-warning">
                                        <i class="mi-check-circle"></i>
                                    </a>
                                    {{-- <a href="{{ route('deal-sas.show', [$item->ref_code]) }}" class="text-info mx-2">
                                        <i class="icon-eye"></i> --}}
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        @endif

                    </tbody>
                </table>
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
                    targets: [1, 5],
                }, ],
            });
        </script>
    @endpush
@endonce
