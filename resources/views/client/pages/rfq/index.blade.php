@extends('client.master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="content-wrapper">

        <!-- Inner content -->


        <!-- Page header -->
        <div class="page-header page-header-light shadow">


            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="{{ route('homepage') }}" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{ route('client.dashboard') }}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">RFQ Management</span>
                    </div>
                    <a href="#breadcrumb_elements" class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
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
                    <div class="card mt-1">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-9">
                                    <h4 class="text-center">All RFQs</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="content">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="js-tab1">
                                    <div id="table1" class="card p-1">
                                        <div class="table-responsive card-body">
                                            <table class="table table-bordered table-hover contactDT">
                                                <thead>
                                                    <tr>
                                                        <th width="10%">Sl No:</th>
                                                        <th width="15%">Rfq Code</th>
                                                        <th width="40%">Product Name</th>
                                                        <th width="15%">Rfq Status</th>
                                                        <th width="20%">Work order</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @if ($rfqs)
                                                        @foreach ($rfqs as $key => $rfq)
                                                            <tr>
                                                                <td>{{ ++$key }}</td>
                                                                <td>{{ $rfq->rfq_code }}</td>
                                                                <td>{{ App\Models\Admin\Product::where('id',$rfq->product_id)->value('name') }}</td>
                                                                <td>{{ $rfq->status }}</td>
                                                                <td>
                                                                    <a href="javascript:void(0);" class="text-primary"
                                                                        data-bs-toggle="modal" title="Upload Work order"
                                                                        data-bs-target="#quotation_send_{{ $item->rfq_code }}">
                                                                        <i class="icon-paperplane"></i>
                                                                    </a>
                                                                </td>
                                                                <!---Category Update modal--->
                                                                <div id="quotation_send_{{ $item->rfq_code }}" class="modal fade"
                                                                    tabindex="-1" style="display: none;" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                @php
                                                                                    $rfq_details = App\Models\Admin\Rfq::where('rfq_code', $item->rfq_code)->first();
                                                                                @endphp
                                                                                <h5 class="modal-title">Send Quotation : {{ $rfq_details->rfq_code }}</h5>
                                                                                <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal"></button>
                                                                            </div>

                                                                            <div class="modal-body border br-7">

                                                                                <form method="post"
                                                                                    action="{{ route('quotation.send', $rfq_details->rfq_code) }}"
                                                                                    enctype="multipart/form-data">
                                                                                    @csrf
                                                                                    @method('PUT')
                                                                                    <div class="row mb-3">
                                                                                        <div class="card">
                                                                                            <div class="row">
                                                                                                <table class="table table-bordered table-striped p-1">
                                                                                                    <thead>
                                                                                                        <tr>
                                                                                                            <th>
                                                                                                                Client Type : {{ ucfirst($rfq_details->client_type) }}
                                                                                                            </th>
                                                                                                            <th>
                                                                                                                Name : {{ ucfirst($rfq_details->name) }}
                                                                                                            </th>
                                                                                                            <th>
                                                                                                                Company Name : {{ ucfirst($rfq_details->company_name) }}
                                                                                                        </th>
                                                                                                        </tr>
                                                                                                        {{-- <tr>
                                                                                                            <th colspan="3" style="background: #7e7d7c">
                                                                                                                <p class="text-center pt-1 text-white">Product Name : {{App\Models\Admin\DealSas::where('id' , $rfq_details->product_id)->value('name')}}</p>
                                                                                                            </th>
                                                                                                        </tr> --}}
                                                                                                        <tr>
                                                                                                            <th>Asking Quantity : {{App\Models\Admin\DealSas::where('rfq_id' , $rfq_details->id)->sum('qty')}}</th>
                                                                                                            <th>Phone Number : {{ $rfq_details->phone }}</th>
                                                                                                            <th>
                                                                                                                Total Price : $ {{App\Models\Admin\DealSas::where('rfq_id' , $rfq_details->id)->value('grand_total')}}
                                                                                                            </th>
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <th colspan="3" style="background: #7e7d7c">
                                                                                                                <p class="text-center pt-1 text-white">Send Quotation To : <input type="email" name="email" id="" value="{{ $rfq_details->email }}"></p>
                                                                                                            </th>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                </table>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>




                                                                                    <div class="row">
                                                                                        <div class="col-sm-3"></div>
                                                                                        <div class="col-sm-9 text-secondary">
                                                                                            <button type="submit"
                                                                                                class="btn btn-primary">Send Quotation <i class="icon-paperplane ml-2"></i></button>
                                                                                        </div>
                                                                                    </div>

                                                                                </form>
                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!---Category Update modal--->
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
        </div>
    </div>
    <!-- /content area -->

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
                    targets: [2,3,4],
                }, ],
            });
        </script>
    @endpush
@endonce
