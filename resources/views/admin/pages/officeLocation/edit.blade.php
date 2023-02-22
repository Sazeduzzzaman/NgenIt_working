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
                        <span class="breadcrumb-item active">Office Location Management</span>
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
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-7">
                            <h5 class="text-center">Office Location message edit</h5>
                        </div>

                        <div class="col-lg-3"></div>
                        <div class="col-lg-2">
                            <a href="{{ route('office-location.index') }}" type="button"
                                class="btn btn-sm btn-warning btn-labeled btn-labeled-start float-end">
                                <span class="btn-labeled-icon bg-black bg-opacity-20">
                                    <i class="icon-eye"></i>
                                </span>
                                All Office Location
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="tab-content">
                <div class="tab-pane fade show active" id="js-tab1">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6">
                            <div id="table1" class="card cardTd">
                                <div class="card-header">

                                    <h5 class="mb-0 text-center">Add Office Location Form</h5>

                                </div>

                                <div class="card-body">
                                    <form method="post" action="{{ route('office-location.update', $officeLocation->id) }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0"> Name </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" value="{{ $officeLocation->name }}" name="name" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Mobile Number </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" value="{{ $officeLocation->mobile_number }}" name="mobile_number" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Whatsapp Number </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" value="{{ $officeLocation->whatsapp_number }}" name="whatsapp_number" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Zip Code </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" value="{{ $officeLocation->zip_code }}" name="zip_code" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Country</h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <select name="country_id" class="form-control select"
                                                    data-minimum-results-for-search="Infinity"
                                                    data-placeholder="Chose country name ">
                                                    <option></option>
                                                   @foreach ($countrys as $country)
                                                     <option @selected($country->id == $officeLocation->country_id) value="{{ $country->id }}">{{$country->country_name  }}
                                                     </option>
                                                   @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Address</h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <textarea name="address" id="" class="form-control" cols="3" rows="4">{{$officeLocation->address  }}</textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4"></div>
                                            <div class="col-sm-8 text-secondary">
                                                <input type="submit" class="btn btn-primary px-4 mt-5" value="Submit" />
                                            </div>
                                        </div>


                                    </form>
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
