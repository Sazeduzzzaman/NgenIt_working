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
                        <span class="breadcrumb-item active">MarketingTeamTarget Management</span>
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
                            <h5 class="text-center">MarketingTeamTarget edit</h5>
                        </div>

                        <div class="col-lg-3"></div>
                        <div class="col-lg-2">
                            <a href="{{ route('marketing-team-target.index') }}" type="button"
                                class="btn btn-sm btn-warning btn-labeled btn-labeled-start float-end">
                                <span class="btn-labeled-icon bg-black bg-opacity-20">
                                    <i class="icon-eye"></i>
                                </span>
                                All MarketingTeamTarget
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

                                    <h5 class="mb-0 text-center">Add MarketingTeamTarget Form</h5>

                                </div>

                                <div class="card-body">
                                    <form method="post"
                                        action="{{ route('marketing-team-target.update', $marketingTeamTarget->id) }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Marketing Manager</h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <select name="marketing_manager_id" class="form-control select"
                                                    data-placeholder="Chose marketing manager ">
                                                    <option></option>
                                                    @foreach ($users as $user)
                                                        <option @selected($user->id == $marketingTeamTarget->marketing_manager_id) value="{{ $user->id }}">
                                                            {{ $user->name }} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Country Name</h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <select name="country_id" class="form-control select"
                                                    data-placeholder="Chose country name ">
                                                    <option></option>
                                                    @foreach ($countrys as $country)
                                                        <option @selected($country->id == $marketingTeamTarget->country_id) value="{{ $country->id }}">
                                                            {{ $country->country_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        @php
                                            for ($m = 1; $m <= 12; $m++) {
                                                $months[] = date('F', mktime(0, 0, 0, $m, 1, date('Y')));
                                            }
                                        @endphp
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Month</h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <select name="month" class="form-control select"
                                                    data-placeholder="Chose month ">
                                                    <option></option>
                                                    @foreach ($months as $month)
                                                        <option @selected(Str::lower($month) == $marketingTeamTarget->month)
                                                            value="{{ Str::lower($month) }}">{{ $month }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Fiscal Year </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" @selected($marketingTeamTarget->year == $marketingTeamTarget->year)
                                                    value="{{ $marketingTeamTarget->year }}" name="year" id="datepicker"
                                                    class="yearselect form-control" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Product Name</h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <select name="product_id[]" class="form-control multiselect"
                                                    multiple="multiple" data-include-select-all-option="true"
                                                    data-enable-filtering="true"
                                                    data-enable-case-insensitive-filtering="true">
                                                    @php
                                                        $productIds = isset($marketingTeamTarget->product_id) ? json_decode($marketingTeamTarget->product_id, true) : [];
                                                        $products = app\Models\Admin\Product::pluck('name', 'id')->toArray();
                                                    @endphp

                                                    @foreach ($products as $id => $name)
                                                        <option value="{{ $id }}"
                                                            {{ is_array($productIds) && in_array($id, $productIds) ? 'selected' : '' }}>
                                                            {{ $name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Client Name</h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <select name="client_id[]" class="form-control multiselect"
                                                    multiple="multiple" data-include-select-all-option="true"
                                                    data-enable-filtering="true"
                                                    data-enable-case-insensitive-filtering="true">
                                                    @php
                                                        $clientIds = isset($marketingTeamTarget->client_id) ? json_decode($marketingTeamTarget->client_id, true) : [];
                                                        $clients = app\Models\Admin\Client::pluck('name', 'id')->toArray();
                                                    @endphp

                                                    @foreach ($clients as $id => $name)
                                                        <option value="{{ $id }}"
                                                            {{ is_array($clientIds) && in_array($id, $clientIds) ? 'selected' : '' }}>
                                                            {{ $name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Industry Title</h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <select name="industry_id[]" class="form-control multiselect"
                                                    multiple="multiple" data-include-select-all-option="true"
                                                    data-enable-filtering="true"
                                                    data-enable-case-insensitive-filtering="true">
                                                    @php
                                                        $industryIds = isset($marketingTeamTarget->industry_id) ? json_decode($marketingTeamTarget->industry_id, true) : [];
                                                        $industrys = app\Models\Admin\Industry::pluck('title', 'id')->toArray();
                                                    @endphp

                                                    @foreach ($industrys as $id => $title)
                                                        <option value="{{ $id }}"
                                                            {{ is_array($industryIds) && in_array($id, $industryIds) ? 'selected' : '' }}>
                                                            {{ $title }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Solution Name</h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <select name="solution_id[]" class="form-control multiselect"
                                                    multiple="multiple" data-include-select-all-option="true"
                                                    data-enable-filtering="true"
                                                    data-enable-case-insensitive-filtering="true">

                                                    @php
                                                        $solutionIds = isset($marketingTeamTarget->solution_id) ? json_decode($marketingTeamTarget->solution_id, true) : [];
                                                        $solutions = app\Models\Admin\SolutionDetail::pluck('name', 'id')->toArray();
                                                    @endphp

                                                    @foreach ($solutions as $id => $name)
                                                        <option value="{{ $id }}"
                                                            {{ is_array($solutionIds) && in_array($id, $solutionIds) ? 'selected' : '' }}>
                                                            {{ $name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Email </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" value="{{ $marketingTeamTarget->email }}"
                                                    name="email" class="form-control maxlength" maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Social </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" value="{{ $marketingTeamTarget->social }}"
                                                    name="social" class="form-control maxlength" maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Call </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" value="{{ $marketingTeamTarget->call }}"
                                                    name="call" class="form-control maxlength" maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Press </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" value="{{ $marketingTeamTarget->press }}"
                                                    name="press" class="form-control maxlength" maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Presentaion </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" value="{{ $marketingTeamTarget->presentaion }}"
                                                    name="presentaion" class="form-control maxlength" maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Boost </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" value="{{ $marketingTeamTarget->boost }}"
                                                    name="boost" class="form-control maxlength" maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Meet </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" value="{{ $marketingTeamTarget->meet }}"
                                                    name="meet" class="form-control maxlength" maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Blog </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" value="{{ $marketingTeamTarget->blog }}"
                                                    name="blog" class="form-control maxlength" maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Follow Up Meet </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" value="{{ $marketingTeamTarget->follow_up_meet }}"
                                                    name="follow_up_meet" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Negotiation </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" value="{{ $marketingTeamTarget->negotiation }}"
                                                    name="negotiation" class="form-control maxlength" maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Deal Closeing </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" value="{{ $marketingTeamTarget->deal_closeing }}"
                                                    name="deal_closeing" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Work Order </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" value="{{ $marketingTeamTarget->work_order }}"
                                                    name="work_order" class="form-control maxlength" maxlength="100" />
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
