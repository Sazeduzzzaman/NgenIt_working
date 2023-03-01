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
                        <span class="breadcrumb-item active">Region & Country Management</span>
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
                <div class="col-lg-5">
                    <div class="card mt-1">
                        <div class="card-body p-0 p-2">
                            <div class="row">
                                <div class="col-lg-9">
                                    <h4 class="text-center">All Region</h4>
                                </div>


                                <div class="col-lg-3">
                                    <a href="javascript:void(0);" type="button" data-bs-toggle="modal" data-bs-target="#add_region"
                                        class="btn btn-sm btn-success btn-labeled btn-labeled-start float-end">
                                        <span class="btn-labeled-icon bg-black bg-opacity-20">
                                            <i class="icon-plus2"></i>
                                        </span>
                                        Add
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="content">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="js-tab1">
                                    <div class="card p-2">

                                        <table class="regionDT text-center table table-bordered table-hover table-striped p-1">
                                            <thead>
                                                <tr>
                                                    <th>Sl No:</th>
                                                    <th>Region Name</th>
                                                    <th class="text-center">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if ($regions)
                                                    @foreach ($regions as $key => $region)
                                                        <tr>
                                                            <td>{{ ++$key }}</td>
                                                            <td>{{ $region->region_name }}</td>
                                                            <td class="text-center">
                                                                <a href="javascript:void(0);" type="button" data-bs-toggle="modal" data-bs-target="#update_region-{{$region->id}}"
                                                                    class="text-primary">
                                                                    <i class="icon-pencil"></i>
                                                                </a>
                                                                <a href="{{ route('region.destroy', [$region->id]) }}"
                                                                    class="text-danger delete mx-2">
                                                                    <i class="delete icon-trash"></i>
                                                                </a>
                                                            </td>
                                                            <!---Region Update modal--->
                                                                <div id="update_region-{{$region->id}}" class="modal fade" tabindex="-1" aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-scrollable">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">

                                                                                <h5 class="modal-title">Update Region</h5>
                                                                                <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal"></button>
                                                                            </div>

                                                                            <div class="modal-body border br-7">

                                                                                <form method="post" action="{{route('region.update',$region->id)}}" enctype="multipart/form-data">
                                                                                    @csrf
                                                                                    @method('PUT')
                                                                                    <div class="row mb-3">
                                                                                        <div class="card">
                                                                                            <div class="row m-3">
                                                                                                <div class="col-sm-4">
                                                                                                    <h6 class="mb-0">Region Name :</h6>
                                                                                                </div>
                                                                                                <div class="form-group col-sm-8 text-secondary">
                                                                                                    <input type="text" name="region_name" class="form-control maxlength"
                                                                                                        maxlength="100" value="{{$region->region_name}}"/>
                                                                                                </div>
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>




                                                                                    <div class="row">
                                                                                        <div class="col-sm-6"></div>
                                                                                        <div class="col-sm-6 text-secondary">
                                                                                            <button type="submit" class="btn btn-primary">Update Region &nbsp;<i class="icon-paperplane ml-2"></i></button>
                                                                                        </div>
                                                                                    </div>

                                                                                </form>
                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <!---Region Update modal--->
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
                <div class="col-lg-7">
                    <div class="card mt-1">
                        <div class="card-body p-0 p-2">
                            <div class="row">
                                <div class="col-lg-9">
                                    <h4 class="text-center">All Country</h4>
                                </div>


                                <div class="col-lg-3">
                                    <a href="javascript:void(0);" type="button" data-bs-toggle="modal" data-bs-target="#add_country"
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
                                    <div id="table1" class="card p-2">

                                        <table class="countryDT text-center table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Sl No:</th>
                                                    <th>Region Name</th>
                                                    <th>Country Name</th>
                                                    <th class="text-center">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if ($countrys)
                                                    @foreach ($countrys as $key => $country)
                                                        <tr>
                                                            <td>{{ ++$key }}</td>
                                                            <td>{{App\Models\Admin\Region::where('id', $country->region_id)->value('region_name')}}</td>
                                                            <td>{{ $country->country_name }}</td>
                                                            <td class="text-center">
                                                                <a href="{{ route('country.edit', [$country->id]) }}"
                                                                    class="text-primary">
                                                                    <i class="icon-pencil"></i>
                                                                </a>
                                                                <a href="{{ route('country.destroy', [$country->id]) }}"
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

    <!---Region Add modal--->
    <div id="add_region" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">

                    <h5 class="modal-title">Add Region</h5>
                    <button type="button" class="btn-close"
                        data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body border br-7">

                    <form method="post" action="{{route('region.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="card">
                                <div class="row m-3">
                                    <div class="col-sm-4">
                                        <h6 class="mb-0">Region Name :</h6>
                                    </div>
                                    <div class="form-group col-sm-8 text-secondary">
                                        <input type="text" name="region_name" class="form-control maxlength"
                                            maxlength="100" />
                                    </div>
                                </div>

                            </div>
                        </div>




                        <div class="row">
                            <div class="col-sm-6"></div>
                            <div class="col-sm-6 text-secondary">
                                <button type="submit" class="btn btn-primary">Add Region &nbsp;<i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </div>

                    </form>
                </div>


            </div>
        </div>
    </div>
    <!---Region Add modal--->

    <!---Country Add modal--->
    <div id="add_country" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">

                    <h5 class="modal-title">Add Country</h5>
                    <button type="button" class="btn-close"
                        data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body border br-7">

                    <form method="post" action="{{ route('country.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <div class="col-sm-4">
                                <h6 class="mb-0">Region Name </h6>
                            </div>
                            <div class="form-group col-sm-8 text-secondary basic-form">
                                <select name="region_id" class="form-control select" data-width="250"
                                data-placeholder="Choose Region name">
                                    <option></option>
                                    @foreach ($regions as $region )
                                    <option value="{{$region->id}}">{{$region->region_name}}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-4">
                                <h6 class="mb-0">Country Name </h6>
                            </div>
                            <div class="form-group col-sm-6 text-secondary">
                                <input type="text" name="country_name" class="form-control maxlength"
                                    maxlength="100" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4"></div>
                            <div class="col-sm-8 text-secondary">
                                <button type="submit" class="btn btn-primary">Add Region &nbsp;<i class="icon-paperplane ml-2"></i></button>
                            </div>
                        </div>


                    </form>
                </div>


            </div>
        </div>
    </div>
    <!---Country Add modal--->


@endsection

@push('scripts')
        <script type="text/javascript">
            $('.regionDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 26, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [0,1,2],
                }, ],
            });
        </script>
        <script type="text/javascript">
            $('.countryDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 26, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [0,2,3],
                }, ],
            });
        </script>
    @endpush
