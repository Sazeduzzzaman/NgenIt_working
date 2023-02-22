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
                        <span class="breadcrumb-item active">Sales Team Target</span>
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
                            <h5 class="text-center">Set Target For Team</h5>
                        </div>

                        <div class="col-lg-3"></div>
                        <div class="col-lg-2">
                            <a href="{{ route('salesTeamTarget.index') }}" type="button"
                                class="btn btn-sm btn-warning btn-labeled btn-labeled-start float-end">
                                <span class="btn-labeled-icon bg-black bg-opacity-20">
                                    <i class="icon-eye"></i>
                                </span>
                                All Targets
                            </a>
                        </div>
                    </div>

                </div>
            </div>



            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">
                    <div id="table1" class="card cardTd">

                        <div class="card-body">
                            <form action="{{ route('salesTeamTarget.store') }}"  method="POST">
                                @csrf

                                <div class="row mb-3 p-2 border">
                                    <div class="col-lg-4"></div>
                                    <div class="col-lg-4">
                                        <div class="col-sm-12">
                                            <h6 class="mb-0">Sales Manager Name<span class="text-danger">*</span></h6>
                                        </div>
                                        <div class="form-group text-secondary col-sm-8">
                                            <select name="sales_man_id" class="form-control select"
                                                data-minimum-results-for-search="Infinity"
                                                data-placeholder="Choose  ">
                                                <option></option>
                                                @foreach ($users as $user)
                                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3 p-2 border">
                                    <div class="col-lg-4">
                                        <div class="col-sm-12">
                                            <h6 class="mb-0">Fiscal Year<span class="text-danger">*</span></h6>
                                        </div>
                                        <div class="form-group text-secondary col-sm-12">
                                            {{-- <input class="form-control yearselect" type="text" name="fiscal_year"/> --}}
                                            <select class="yearselect form-select" name="fiscal_year"></select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 mb-3">
                                        <div class="col-sm-12">
                                            <h6 class="mb-0">Year Started</h6>
                                        </div>
                                        <div class="form-group text-secondary col-sm-12">
                                            <select name="year_started" class="form-control select"
                                                data-minimum-results-for-search="Infinity"
                                                data-placeholder="Chose year started ">
                                                <option></option>
                                                <option value="january">January</option>
                                                <option value="june">June</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="col-sm-12">
                                            <h6 class="mb-0">Total Target </h6>
                                        </div>
                                        <div class="form-group col-sm-12 text-secondary">
                                            <input type="text" name="year_target" class="form-control maxlength"
                                                maxlength="100" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3 p-2 border">
                                    <div class="col-lg-3">
                                        <div class="col-sm-12">
                                            <h6 class="mb-0">Quarter One </h6>
                                        </div>
                                        <div class="form-group col-sm-12 text-secondary">
                                            <input type="text" name="quarter_one_target" class="form-control maxlength"
                                                maxlength="100" />
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="col-sm-12">
                                            <h6 class="mb-0">Quarter Two </h6>
                                        </div>
                                        <div class="form-group col-sm-12 text-secondary">
                                            <input type="text" name="quarter_two_target" class="form-control maxlength"
                                                maxlength="100" />
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="col-sm-12">
                                            <h6 class="mb-0">Quarter Three </h6>
                                        </div>
                                        <div class="form-group col-sm-12 text-secondary">
                                            <input type="text" name="quarter_three_target" class="form-control maxlength"
                                                maxlength="100" />
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="col-sm-12">
                                            <h6 class="mb-0">Quarter Four </h6>
                                        </div>
                                        <div class="form-group col-sm-12 text-secondary">
                                            <input type="text" name="quarter_four_target" class="form-control maxlength"
                                                maxlength="100" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-4"></div>
                                    <div class="col-sm-8 text-secondary">
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

@once
@push('scripts')
<script type="text/javascript">
    $("input[name='year_target']").on('keyup change', function() {


        var year_target = parseFloat($("input[name='year_target']").val());
        var quarter_target = parseFloat(((year_target) / 4).toFixed(3));
        var month_target = parseFloat(((year_target) / 12).toFixed(3));
        $("input[name='quarter_one_target']").val(quarter_target);
        $("input[name='quarter_two_target']").val(quarter_target);
        $("input[name='quarter_three_target']").val(quarter_target);
        $("input[name='quarter_four_target']").val(quarter_target);


        $("input[name='january_target']").val(month_target);
        $("input[name='february_target']").val(month_target);
        $("input[name='march_target']").val(month_target);
        $("input[name='april_target']").val(month_target);
        $("input[name='may_target']").val(month_target);
        $("input[name='june_target']").val(month_target);
        $("input[name='july_target']").val(month_target);
        $("input[name='august_target']").val(month_target);
        $("input[name='september_target']").val(month_target);
        $("input[name='october_target']").val(month_target);
        $("input[name='november_target']").val(month_target);
        $("input[name='december_target']").val(month_target);


        });


        $("input[name='quarter_one_target']").on('keyup change', function() {
                    var year_target = parseFloat($("input[name='year_target']").val());
                    quarter_sum = parseFloat($("input[name='quarter_one_target']").val() )+
                                                parseFloat($("input[name='quarter_two_target']").val() )+
                                                parseFloat($("input[name='quarter_three_target']").val()) +
                                                parseFloat($("input[name='quarter_four_target']").val())

                                    if (((quarter_sum)-(year_target)) > 0) {
                                        alert('Your Quarter Target is exceeded your Year Target.');
                                        $(this).css("border", "2px dashed red");
                                        $('#submitbtn').addClass("d-none");

                                    } else {
                                        $(this).css("border", "gray 1px solid");
                                        $('#submitbtn').removeClass("d-none");

                                    }
                                    });

                $("input[name='quarter_two_target']").on('keyup change', function() {
                    var year_target = parseFloat($("input[name='year_target']").val());
                    quarter_sum = parseFloat($("input[name='quarter_one_target']").val() )+
                                                parseFloat($("input[name='quarter_two_target']").val() )+
                                                parseFloat($("input[name='quarter_three_target']").val()) +
                                                parseFloat($("input[name='quarter_four_target']").val())

                                    if (((quarter_sum)-(year_target)) > 0) {
                                        alert('Your Quarter Target is exceeded your Year Target.');
                                        $(this).css("border", "2px dashed red");
                                        $('#submitbtn').addClass("d-none");
                                    } else {
                                        $(this).css("border", "gray 1px solid");
                                        $('#submitbtn').removeClass("d-none");

                                    }
                });

                $("input[name='quarter_three_target']").on('keyup change', function() {
                    var year_target = parseFloat($("input[name='year_target']").val());
                quarter_sum = parseFloat($("input[name='quarter_one_target']").val() )+
                                            parseFloat($("input[name='quarter_two_target']").val() )+
                                            parseFloat($("input[name='quarter_three_target']").val()) +
                                            parseFloat($("input[name='quarter_four_target']").val())

                                if (((quarter_sum)-(year_target)) > 0) {
                                    alert('Your Quarter Target is exceeded your Year Target.');
                                    $(this).css("border", "2px dashed red");
                                    $('#submitbtn').addClass("d-none");
                                } else {
                                    $(this).css("border", "gray 1px solid");
                                    $('#submitbtn').removeClass("d-none");

                                }
                });

                $("input[name='quarter_four_target']").on('keyup change', function() {
                    var year_target = parseFloat($("input[name='year_target']").val());
                    quarter_sum = parseFloat($("input[name='quarter_one_target']").val() )+
                                                parseFloat($("input[name='quarter_two_target']").val() )+
                                                parseFloat($("input[name='quarter_three_target']").val()) +
                                                parseFloat($("input[name='quarter_four_target']").val())

                                    if (((quarter_sum)-(year_target)) > 0) {
                                        alert('Your Quarter Target is exceeded your Year Target.');
                                        $(this).css("border", "2px dashed red");
                                        $('#submitbtn').addClass("d-none");
                                    } else {
                                        $(this).css("border", "gray 1px solid");
                                        $('#submitbtn').removeClass("d-none");

                                    }
                });



    //*
</script>
<script>

    $('.yearselect').yearselect({
    start: 2020,
    end: 2040
    });

</script>
@endpush

@endonce
