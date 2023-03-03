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
                        <span class="breadcrumb-item active">Marketing Dmar Management</span>
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
                            <h5 class="text-center">Add Marketing Dmar Form</h5>
                        </div>

                        <div class="col-lg-3"></div>
                        <div class="col-lg-2">
                            <a href="{{ route('marketing-dmar.index') }}" type="button"
                                class="btn btn-sm btn-warning btn-labeled btn-labeled-start float-end">
                                <span class="btn-labeled-icon bg-black bg-opacity-20">
                                    <i class="icon-eye"></i>
                                </span>
                                All Marketing Dmar
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

                                <div class="card-body">
                                    <form method="post" action="{{ route('marketing-dmar.store') }}">
                                        @csrf
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Marketing Manager</h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <select name="marketing_manager_id" class="form-control select"
                                                    data-placeholder="Chose marketing manager ">
                                                    <option></option>
                                                    @foreach ($users as $user)
                                                        <option value="{{ $user->id }}">{{ $user->name }} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Status</h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <select name="status" class="form-control select"
                                                    data-placeholder="Chose a status">
                                                    <option></option>
                                                    <option value="missed">Missed </option>
                                                    <option value="appointed">Appointed </option>
                                                    <option value="not_done">Not Done </option>
                                                    <option value="done">Done </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Area </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="area" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Quarter</h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <select name="quarter" class="form-control select"
                                                    data-placeholder="Chose quarter ">
                                                    <option></option>
                                                    <option value="q1">q1 </option>
                                                    <option value="q2">q2 </option>
                                                    <option value="q3">q3 </option>
                                                    <option value="q4">q4 </option>
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
                                                        <option value="{{ Str::lower($month) }}">{{ $month }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Week</h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <select name="week" class="form-control select"
                                                    data-placeholder="Chose week ">
                                                    <option></option>
                                                    <option value="w1">w1 </option>
                                                    <option value="w2">w2 </option>
                                                    <option value="w3">w3 </option>
                                                    <option value="w4">w4 </option>
                                                    <option value="w5">w5 </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Date </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="date" name="date" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Client Type</h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <select name="client_type" class="form-control select"
                                                    data-placeholder="Chose client_type ">
                                                    <option></option>
                                                    <option value="new">new </option>
                                                    <option value="existing">existing </option>
                                                    <option value="old">old </option>
                                                    <option value="lost">lost </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Sector</h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <select name="sector" class="form-control select"
                                                    data-placeholder="Chose sector ">
                                                    <option></option>
                                                    <option value="psc">psc </option>
                                                    <option value="mnc">mnc </option>
                                                    <option value="edu">edu </option>
                                                    <option value="epg">epg </option>
                                                    <option value="smb">smb </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Company_name </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="company_name" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Activity </h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <select name="activity" class="form-control select"
                                                    data-placeholder="Chose activity ">
                                                    <option></option>
                                                    <option value="new_visit">New Visit </option>
                                                    <option value="new_call">New Call </option>
                                                    <option value="new_email">New Email </option>
                                                    <option value="followup_visit">Followup Visit </option>
                                                    <option value="followup_call">Followup Call </option>
                                                    <option value="followup_email">Followup Email </option>
                                                    <option value="followup_renewal">Followup Renewal </option>
                                                    <option value="1st_marketing_visit">1st Marketing Visit </option>
                                                    <option value="2nd_marketing_visit">2nd Marketing Visit </option>
                                                    <option value="1st_marketing_call">1st Marketing Call </option>
                                                    <option value="2nd_marketing_call">2nd Marketing Call </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Current Status </h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <select name="current_status" class="form-control select"
                                                    data-placeholder="Chose current_status ">
                                                    <option></option>
                                                    <option value="potential">Potential </option>
                                                    <option value="tor_stage">TOR Stage </option>
                                                    <option value="rfq_stage">RFQ Stage </option>
                                                    <option value="poc_stage">PoC Stage </option>
                                                    <option value="presentation_stage">Presentation Stage </option>
                                                    <option value="no_next_opportunity">NO - Next Opportunity </option>
                                                    <option value="sold">Sold </option>
                                                    <option value="lost">Lost </option>
                                                    <option value="no_result">No Result </option>
                                                    <option value="introduced">Introduced </option>
                                                    <option value="less_potential">Less Potential </option>
                                                    <option value="initially_interested">Initially Interested </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Solution </h6>
                                            </div>
                                            <div class="form-group text-secondary col-sm-8">
                                                <select name="solution" class="form-control select"
                                                    data-placeholder="Chose solution ">
                                                    <option></option>
                                                    <option value="services">Services </option>
                                                    <option value="training">Training </option>
                                                    <option value="system_integration">System Integration </option>
                                                    <option value="hardware">Hardware </option>
                                                    <option value="software">Software </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Product </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="product" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Phone </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="phone" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Contact </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="contact" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Comments By Sales </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="comments_by_sales" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Comments By Ceo </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="comments_by_ceo" class="form-control maxlength"
                                                    maxlength="100" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <h6 class="mb-0">Action On Fail </h6>
                                            </div>
                                            <div class="form-group col-sm-8 text-secondary">
                                                <input type="text" name="action_on_fail" class="form-control maxlength"
                                                    maxlength="100" />
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
