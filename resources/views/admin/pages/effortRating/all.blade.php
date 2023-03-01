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
                        <span class="breadcrumb-item active">Effort Rating Management</span>
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
                    <div class="card m-auto mb-2" style="width: 60%;">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-9">
                                    <h4 class="text-center">All EffortRating</h4>
                                </div>
                                <div class="col-lg-3">
                                    <a data-bs-toggle="modal" data-bs-target="#add-effort" type="button"
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


                        <div class="card m-auto" style="width: 60%;">
                            <div class="card-body">
                                <table class="datatable table table-bordered table-hover text-center effortRatingDT">
                                    <thead>
                                        <tr>
                                            <th width="15%">Sl No:</th>
                                            <th width="15%">Effort</th>
                                            <th width="20%">Performance Look</th>
                                            <th width="15%">Rating</th>
                                            <th width="20%">Value</th>
                                            <th width="15%" class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($effortRatings)
                                            @foreach ($effortRatings as $key => $effortRating)
                                                <tr>
                                                    <td>{{ ++$key }}</td>
                                                    <td>{{ $effortRating->effort }}</td>
                                                    <td>{{ $effortRating->perform_look }}</td>
                                                    <td>{{ $effortRating->rating }}</td>
                                                    <td>{{ $effortRating->value }}</td>
                                                    <td class="text-center">
                                                        <a data-bs-toggle="modal" data-bs-target="#update-effort-{{ $effortRating->id }}"
                                                            class="text-primary">
                                                            <i class="icon-pencil"></i>
                                                        </a>
                                                        <a href="{{ route('effort-ratings.destroy', [$effortRating->id]) }}"
                                                            class="text-danger delete mx-2">
                                                            <i class="delete icon-trash"></i>
                                                        </a>
                                                        <!---Add modal--->
                                                            <div id="update-effort-{{$effortRating->id}}" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-scrollable">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title">Add Effort & Rating</h5>
                                                                            <button type="button" class="btn-close"
                                                                                data-bs-dismiss="modal"></button>
                                                                        </div>

                                                                        <div class="modal-body border br-7">
                                                                            <div class="card-body m-auto" style="width: 100%;">
                                                                                <form method="post" action="{{ route('effort-ratings.update', $effortRating->id) }}">
                                                                                    @csrf
                                                                                    @method('PUT')
                                                                                    <div class="row mb-3">
                                                                                        <div class="col-sm-4">
                                                                                            <h6 class="mb-0">Effort (%) </h6>
                                                                                        </div>
                                                                                        <div class="form-group col-sm-8 text-secondary">
                                                                                            <input type="text" value="{{ $effortRating->effort }}" name="effort"
                                                                                                class="form-control maxlength allow_decimal" maxlength="100" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row mb-3">
                                                                                        <div class="col-sm-4">
                                                                                            <h6 class="mb-0">Rating (%) </h6>
                                                                                        </div>
                                                                                        <div class="form-group col-sm-8 text-secondary">
                                                                                            <input type="text" value="{{ $effortRating->rating }}" name="rating"
                                                                                                class="form-control maxlength allow_decimal" maxlength="100" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row mb-3">
                                                                                        <div class="col-sm-4">
                                                                                            <h6 class="mb-0">Value (%) </h6>
                                                                                        </div>
                                                                                        <div class="form-group col-sm-8 text-secondary">
                                                                                            <input type="text" value="{{ $effortRating->value }}" name="value"
                                                                                                class="form-control maxlength allow_decimal" maxlength="100" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row mb-3">
                                                                                        <div class="col-sm-4">
                                                                                            <h6 class="mb-0">Performance Look </h6>
                                                                                        </div>
                                                                                        <div class="form-group col-sm-8 text-secondary">
                                                                                            <input type="text" name="perform_look"  value="{{ $effortRating->perform_look }}" class="form-control maxlength"
                                                                                                maxlength="100" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-sm-4"></div>
                                                                                        <div class="col-sm-8 text-secondary">
                                                                                            <input type="submit" class="btn btn-primary px-4 mt-5" value="Submit"/>
                                                                                        </div>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <!---Add modal--->

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
    <!-- /content area -->
    <!-- /inner content -->

    </div>

            <!---Add modal--->
            <div id="add-effort" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Effort & Rating</h5>
                            <button type="button" class="btn-close"
                                data-bs-dismiss="modal"></button>
                        </div>

                        <div class="modal-body border br-7">

                            <form method="post" action="{{ route('effort-ratings.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body m-auto" style="width: 100%;">

                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Effort (%)</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="effort" class="form-control maxlength allow_decimal"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Rating </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="rating" class="form-control maxlength allow_decimal"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Value </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="value" class="form-control maxlength allow_decimal"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Performance Look </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="perform_look" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4"></div>
                                            <div class="col-sm-8 text-secondary">
                                                <input type="submit" class="btn btn-primary px-4 mt-5" value="Submit" />
                                            </div>
                                        </div>

                                </div>

                            </form>
                        </div>


                    </div>
                </div>
            </div>
            <!---Add modal--->

@endsection

@once
    @push('scripts')
        <script type="text/javascript">
            $('.effortRatingDT').DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 26, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [2,5],
                }, ],
            });
        </script>
    @endpush
@endonce
