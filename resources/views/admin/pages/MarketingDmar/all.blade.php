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
                        <span class="breadcrumb-item active">Marketing DMAR Management</span>
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
                    <div class="card mt-1">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-9">
                                    <h4 class="text-center">Marketing DMAR</h4>
                                </div>
                                <div class="col-lg-3">
                                    <a href="{{ route('marketing-dmar.create') }}" type="button"
                                        class="btn btn-sm btn-success btn-labeled btn-labeled-start float-end">
                                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                                            <i class="icon-plus2"></i>
                                        </span>
                                        Add New
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="content">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="js-tab1">
                                    <div id="table1" class="card cardT">

                                        <table class="datatable table table-bordered table-hover MarketingDmarDT">
                                            <thead>
                                                <tr>
                                                    <th width="6%">Sl No:</th>
                                                    <th width="6%">Marketing Manager Name</th>
                                                    <th width="6%">Month</th>
                                                    <th width="6%">Area</th>
                                                    <th width="6%">Sector</th>
                                                    <th width="6%">Company Name</th>
                                                    <th width="6%">Activity</th>
                                                    <th width="6%">Current_Status</th>
                                                    <th width="6%">Solution</th>
                                                    <th width="6%">Product</th>
                                                    <th width="6%">Phone</th>
                                                    <th width="6%">Contact</th>
                                                    <th width="6%">Comments_By_Sales</th>
                                                    <th width="6%">Comments_By_Ceo</th>
                                                    <th width="6%">Action_On_Fail</th>
                                                    <th width="6%" class="text-center">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if ($MarketingDmars)
                                                    @foreach ($MarketingDmars as $key => $MarketingDmar)
                                                        <tr>
                                                            <td>{{ ++$key }}</td>
                                                            <td>{{ App\Models\User::where('id',$MarketingDmar->marketing_manager_id)->value('name') }}</td>
                                                            <td>{{ ucfirst($MarketingDmar->month) }}</td>
                                                            <td>{{ ucfirst($MarketingDmar->area) }}</td>
                                                            <td>{{ ucfirst($MarketingDmar->sector) }}</td>
                                                            <td>{{ ucfirst($MarketingDmar->company_name) }}</td>
                                                            <td>{{ ucfirst($MarketingDmar->activity) }}</td>
                                                            <td>{{ ucfirst($MarketingDmar->current_status) }}</td>
                                                            <td>{{ ucfirst($MarketingDmar->solution) }}</td>
                                                            <td>{{ ucfirst($MarketingDmar->product) }}</td>
                                                            <td>{{ ucfirst($MarketingDmar->phone) }}</td>
                                                            <td>{{ ucfirst($MarketingDmar->contact) }}</td>
                                                            <td>{{ ucfirst($MarketingDmar->comments_by_sales) }}</td>
                                                            <td>{{ ucfirst($MarketingDmar->comments_by_ceo) }}</td>
                                                            <td>{{ ucfirst($MarketingDmar->action_on_fail) }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('marketing-dmar.edit', [$MarketingDmar->id]) }}"
                                                                    class="text-primary">
                                                                    <i class="icon-pencil"></i>
                                                                </a>
                                                                <a href="{{ route('marketing-dmar.destroy', [$MarketingDmar->id]) }}"
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
            $('.MarketingDmarDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 26, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15],
                }, ],
            });
        </script>
    @endpush
@endonce
