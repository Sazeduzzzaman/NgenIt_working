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
                        <span class="breadcrumb-item active">Payment Method Details Management</span>
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
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <div class="card mt-1">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h4 class="mb-0 text-center">All Payment Method Details</h4>
                                </div>
                                <div class="col-lg-4">
                                    <a href="{{ route('payment-method-details.create') }}" type="button"
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
                            <table class="clientSuccessDT datatable table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th width="10%">Sl No:</th>
                                        <th width="30%">region_id</th>
                                        <th width="20%">type</th>
                                        <th width="25%">Details</th>
                                        <th width="15%" class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($paymentMethodDetails)
                                        @foreach ($paymentMethodDetails as $key => $paymentMethodDetail)
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ App\Models\Admin\Region::where('id',$paymentMethodDetail->region_id)->value('region_name') }}</td>
                                                <td>{{ $paymentMethodDetail->type }}</td>
                                                <td>
                                                    {{ $paymentMethodDetail->card_link }}
                                                    {{ $paymentMethodDetail->card_note }}
                                                    {{ $paymentMethodDetail->bank_name }}
                                                    {{ $paymentMethodDetail->bank_address }}
                                                    {{ $paymentMethodDetail->account_name }}
                                                    {{ $paymentMethodDetail->account_address }}
                                                    {{ $paymentMethodDetail->account_type }}
                                                    {{ $paymentMethodDetail->branch }}
                                                    {{ $paymentMethodDetail->routing }}
                                                    {{ $paymentMethodDetail->check_address }}
                                                    {{ $paymentMethodDetail->check_note }}
                                                </td>
                                                <td class="text-center">
                                                    <a href="{{ route('payment-method-details.edit', [$paymentMethodDetail->id]) }}"
                                                        class="text-primary">
                                                        <i class="icon-pencil"></i>
                                                    </a>
                                                    <a href="{{ route('payment-method-details.destroy', [$paymentMethodDetail->id]) }}"
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
    <!-- /content area -->
    <!-- /inner content -->

    </div>


@endsection

@once
    @push('scripts')
        <script type="text/javascript">
            $('.clientSuccessDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [4],
                }, ],
            });
        </script>
    @endpush
@endonce
