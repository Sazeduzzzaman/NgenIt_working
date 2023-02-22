@extends('client.master')
@section('content')

<div class="content-wrapper">

    <!-- Inner content -->


        <!-- Page header -->
        <div class="page-header page-header-light shadow">


            <div class="page-header-content d-lg-flex border-top">
                <div class="d-flex">
                    <div class="breadcrumb py-2">
                        <a href="index.html" class="breadcrumb-item"><i class="ph-house"></i></a>
                        <a href="{{route('client.dashboard')}}" class="breadcrumb-item">Home</a>
                        <span class="breadcrumb-item active">Dashboard</span>
                    </div>
                </div>


            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">
            <div class="card">
                <div class="card-header">
                    <h5 class="text-center">All Orders</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="brandDT table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th width="10%">Sl No:</th>
                                    <th width="40%">Title</th>
                                    <th width="10%%">Quantity</th>
                                    <th width="10%">Price</th>
                                    <th width="15%">Status</th>
                                    <th width="15%" class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @if ()

                                @endif --}}
                            </tbody>
                        </table>
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
            $('.brandDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 26, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [4 , 5 ],
                }, ],
            });
        </script>
    @endpush
@endonce
