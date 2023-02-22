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
                        <span class="breadcrumb-item active">Brand Management</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page header -->
        <!-- Content area -->
        <div class="content">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-header">

                            <h5 class="mb-0 float-start">Partner Edit Form</h5>
                            <a href="{{ route('partner-account.index') }}" type="button"
                                class="btn btn-sm btn-success btn-labeled btn-labeled-start float-end">
                                <span class="btn-labeled-icon bg-black bg-opacity-20">
                                    <i class="icon-eye"></i>
                                </span>
                                All Partner
                            </a>
                        </div>

                        <div class="card-body">
                            <form method="post" action="{{ route('partner-account.update', $partner->id) }}"
                                enctype="multipart/form-data" id="myform">
                                @csrf
                                @method('PUT')
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">{{ ucfirst('name') }}</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text" value="{{ $partner->name }}" name="name"
                                            class="form-control maxlength" maxlength="100" required />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">{{ ucfirst('company name') }}</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text" value="{{ $partner->company_name }}" name="company_name"
                                            class="form-control maxlength" maxlength="100" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">{{ ucfirst('company site name') }}</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text" value="{{ $partner->company_site_name }}"
                                            name="company_site_name" class="form-control maxlength" maxlength="100" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">{{ ucfirst('company address') }}</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text" value="{{ $partner->company_address }}"
                                            name="company_address" class="form-control maxlength" maxlength="100" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">{{ ucfirst('company email address') }}</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="email" value="{{ $partner->company_email_address }}"
                                            name="company_email_address" class="form-control maxlength" maxlength="100" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">{{ ucfirst('primary email address') }}</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="email" value="{{ $partner->primary_email_address }}"
                                            name="primary_email_address" class="form-control maxlength" maxlength="100" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">{{ ucfirst('phone number') }}</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text" value="{{ $partner->phone_number }}" name="phone_number"
                                            class="form-control maxlength" maxlength="100" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">{{ ucfirst('company number') }}</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text" value="{{ $partner->company_number }}" name="company_number"
                                            class="form-control maxlength" maxlength="100" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">{{ ucfirst('company trade license') }}</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text" value="{{ $partner->company_trade_license }}"
                                            name="company_trade_license" class="form-control maxlength"
                                            maxlength="100" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">{{ ucfirst('company tin number') }}</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text" value="{{ $partner->company_tin_number }}"
                                            name="company_tin_number" class="form-control maxlength" maxlength="100" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">{{ ucfirst('company vat') }}</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text" value="{{ $partner->company_vat }}" name="company_vat"
                                            class="form-control maxlength" maxlength="100" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">{{ ucfirst('business type') }}</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text" value="{{ $partner->business_type }}" name="business_type"
                                            class="form-control maxlength" maxlength="100" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">{{ ucfirst('business since') }}</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text" value="{{ $partner->business_since }}"
                                            name="business_since" class="form-control maxlength" maxlength="100" />
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">{{ ucfirst('Partner Image ') }}</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        <input type="file" name="logo" class="form-control" id="image"
                                            accept="image/*" />
                                        <div class="form-text">Accepts only png, jpg, jpeg images</div>
                                        <img class="img-thumbnail" id="showImage" height="80px" width="80px"
                                            src="{{ asset('storage/requestImg/' . $partner->logo) }}" alt="">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">{{ ucfirst('city') }}</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text" value="{{ $partner->city }}" name="city"
                                            class="form-control maxlength" maxlength="100" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">{{ ucfirst('country') }}</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text" value="{{ $partner->country }}" name="country"
                                            class="form-control maxlength" maxlength="100" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">{{ ucfirst('postal') }}</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="text" value="{{ $partner->postal }}" name="postal"
                                            class="form-control maxlength" maxlength="100" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">{{ ucfirst('status') }}</h6>
                                    </div>
                                    <div class="form-group text-secondary col-sm-3">
                                        <select name="status" class="form-control select"
                                            data-minimum-results-for-search="Infinity"
                                            data-placeholder="Chose status name">
                                            <option></option>
                                            <option @selected($partner->status == 'active') value="active">Active</option>
                                            <option @selected($partner->status == 'inactive') value="inactive">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">{{ ucfirst('password') }}</h6>
                                    </div>
                                    <div class="form-group col-sm-9 text-secondary">
                                        <input type="password" name="password" value="{{ $partner->password }}"
                                            class="form-control maxlength" maxlength="100" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-secondary">
                                        <button type="submit" class="btn btn-primary" id="submitbtn">Submit<i
                                                class="ph-paper-plane-tilt ms-2"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /content area -->
        <!-- /inner content -->

    </div>
@endsection
