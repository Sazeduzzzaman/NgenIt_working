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
                        <span class="breadcrumb-item active">Marketing Management</span>
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
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2 class="mb-0 text-center">Send Bulk Email</h2>
                                </div>
                                {{-- <div class="col-lg-4">
                                    <a href="{{ route('client.create') }}" type="button"
                                        class="btn btn-sm btn-success btn-labeled btn-labeled-start float-end">
                                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                                            <i class="icon-plus2"></i>
                                        </span>
                                        Add New
                                    </a>
                                </div> --}}
                            </div>
                        </div>
                        <div class="row">
                            <div class="row m-3">
                                <div class="col-lg-8"></div>
                                <div class="col-lg-4">
                                    <a href="javascript:void(0);" class="btn btn-success" data-bs-toggle="modal"
                                        data-bs-target="#emailSend">Compose<i class="ph-paper-plane-tilt ms-2"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-2 border ml-3 p-2 text-center"style="margin-left: 1rem;">
                                        <input type="checkbox" name="" id="flexCheckDefaultAll">
                                    </div>
                                    <div class="col-lg-8 border p-2">Select All</div>
                                </div>
                                <table class="clientbulkEmailDT table table-bordered table-hover">

                                    <thead>
                                        <tr>
                                            <th width="10%">Select</th>
                                            <th width="40%">Client Name</th>
                                            <th width="50%">Client Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @if ($clients)
                                            @foreach ($clients as $key => $client)
                                                <tr>
                                                    <td><input type="checkbox" name="" id=""></td>
                                                    <td>{{ $client->name }}</td>
                                                    <td>{{ $client->email }}</td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-lg-6">

                                <table class="partnerbulkEmailDT table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th width="10%">Select</th>
                                            <th width="40%">Partner Name</th>
                                            <th width="50%">Partner Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @if ($partners)
                                            @foreach ($partners as $key => $partner)
                                                <tr>
                                                    <td><input type="checkbox" name="" id=""></td>
                                                    <td>{{ $partner->name }}</td>
                                                    <td>{{ $partner->primary_email_address }}</td>
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




    <!---Modal--->
    <div id="emailSend" class="modal fade" tabindex="-1" style="display: none;"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Compose Email</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body border br-7">

                    <form method="post" action="" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <h6 class="mb-0">Subject</h6>
                            </div>
                            <div class="form-group col-sm-12 text-secondary">
                                <input class="form-control" type="text" name="subject">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-12">
                                <h6 class="mb-0">Message</h6>
                            </div>
                            <div class="form-group col-sm-12 text-secondary">
                                <textarea name="message" id="long_desc"></textarea>
                            </div>
                        </div>

                        <div class="form-group col-md-8 basic-form mb-3">
                            <label class="col-form-label col-lg-12">Select Product</label>

                                <select class="form-control select" name="product_id" data-placeholder="Select Product...">
                                    <option></option>
                                    @foreach ($products as $product)
                                    <option class="form-control" value="{{ $product->id }}">
                                        {{ $product->name }}</option>
                                    @endforeach

                                </select>
                        </div>


                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9 text-secondary">
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </div>
                        </div>

                    </form>
                </div>


            </div>
        </div>
    </div>
@endsection

@once
    @push('scripts')
        <script type="text/javascript">
            $('.clientbulkEmailDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 26, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [0],
                }, ],

            });
            $('.partnerbulkEmailDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 26, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [0],
                }, ],

            });
        </script>
        <script type="text/javascript">
            $('#flexCheckDefaultAll').click(function() {
                if ($(this).is(':checked')) {
                    $('input[type = checkbox]').prop('checked', true);
                } else {
                    $('input[type = checkbox]').prop('checked', false);
                }
            });
        </script>
    @endpush
@endonce
