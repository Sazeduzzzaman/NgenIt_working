@extends('admin.master')
@section('content')
<style type="text/css">
    .padding {
        padding: 0px !important;
    }

    .quotaed-lbg {
        background: #659EC7 !important;
    }

    .quotaed-ltbg {
        background: #306754 !important;
    }

    .quotaed-rbg {
        background: #4C787E !important;
    }

    .quotaed-rtbg {
        background: #1F6357 !important;
    }

    .customicTable{
        width: 80%;
        margin: auto;
    }

    .customicTable th,
    td {
        border: 1px solid #ddd;
        padding: 3px 3px;
        font-size: 11px;
    }

    .customicTableForecastHead th,
    td {
        border: 1px solid #ddd;
        padding: 5px 5px;
        font-size: 13px;
    }

    .form-select-sm {
        width: 100%;
        height: 30px;
        color: #000;
        padding: 2px;

    }

    .form-control-sm {
        width: 100%;
        height: 30px;
        padding: 2px;
    }
    .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active{
        background-color: #b51313 !important;
    }
    .bg-red {
        background-color: #b51313 !important;
    }
</style>


<div class="content-wrapper">
    <!-- Content area -->
    <div class="content">

        <!-- Table components -->
        <div class="card">
            <!-- 	<div class="card-header">

            </div> -->

            <div class="card-body text-center">
                <h5 class="mb-0"> Sales Report FY-{{$salesYearTarget->fiscal_year}} </h5>

                <div class="col-lg-8 m-auto" style="width:50%;">

                    <table class="table customicTableForecastHead table-responsive">

                        <tr>

                            <th class="quotaed-lbg"> <a href="#" class="text-white">Company Name </a> </th>
                            <td class="quotaed-ltbg text-white"> NGenIT LTD </td>
                            <th class="quotaed-rbg"> <a href="" class="text-white">Total Yearly Target</a>
                            </th>
                            <td class="quotaed-rtbg text-white"> {{$salesYearTarget->year_target}} $</td>

                        </tr>

                        <tr>

                            <th class="quotaed-lbg"> <a href="#" class="text-white">Company Business </a>
                            </th>

                            <td class="quotaed-ltbg text-white">Sl. & Distributor</td>
                            <th class="quotaed-rbg"> <a href="" class="text-white">Sales Achieved</a> </th>
                            <td class="quotaed-rtbg text-white"> {{number_format($sales_year)}} $</td>


                        </tr>
                        <tr>

                            <th class="quotaed-lbg"> <a href="#" class="text-white"> Team </a> </th>
                            <td class="quotaed-ltbg text-white"> {{$salesman}} </td>
                            <th class="quotaed-rbg"> <a href="sales-forecast-lost.html"
                                    class="text-white">Achieved. Rate </a>
                            </th>
                            <td class="quotaed-rtbg text-white"> {{number_format(($sales_year/$salesYearTarget->year_target)*100 , 3)}} % </td>


                        </tr>

                    </table>
                </div>

            </div>




            <!-- tab month menu start-->
                <ul class="nav nav-tabs mb-3 bg-dark" role="tablist" style="border-radius: 7px;">
                    <li class="nav-item" role="presentation">
                        <a href="#js-January-tab" class="nav-link text-white js-January-tab" data-bs-toggle="tab" aria-selected="true"
                            role="tab" tabindex="-1">
                            January
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#js-February-tab" class="nav-link text-white js-February-tab" data-bs-toggle="tab" aria-selected="false"
                            role="tab" tabindex="-1">
                            February
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#js-March-tab" class="nav-link text-white js-March-tab" data-bs-toggle="tab" aria-selected="false" role="March"
                            tabindex="-1">
                            March
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#js-April-tab" class="nav-link text-white js-April-tab" data-bs-toggle="tab" aria-selected="false" role="tab"
                            tabindex="-1">
                            April
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#js-May-tab" class="nav-link text-white js-May-tab" data-bs-toggle="tab" aria-selected="false" role="tab"
                            tabindex="-1">
                            May
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#js-June-tab" class="nav-link text-white js-June-tab" data-bs-toggle="tab" aria-selected="false" role="tab"
                            tabindex="-1">
                            June
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#js-July-tab" class="nav-link text-white js-July-tab" data-bs-toggle="tab" aria-selected="false" role="tab"
                            tabindex="-1">
                            July
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#js-August-tab" class="nav-link text-white js-August-tab" data-bs-toggle="tab" aria-selected="false" role="tab"
                            tabindex="-1">
                            August
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#js-September-tab" class="nav-link text-white js-September-tab" data-bs-toggle="tab" aria-selected="false"
                            role="tab" tabindex="-1">
                            September
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#js-October-tab" class="nav-link text-white js-October-tab" data-bs-toggle="tab" aria-selected="false"
                            role="tab" tabindex="-1">
                            October
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#js-November-tab" class="nav-link text-white js-November-tab" data-bs-toggle="tab" aria-selected="false"
                            role="tab" tabindex="-1">
                            November
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a href="#js-December-tab" class="nav-link text-white js-December-tab" data-bs-toggle="tab" aria-selected="false"
                            role="tab" tabindex="-1">
                            December
                        </a>
                    </li>
                </ul>
            <!-- tab month menu end -->



            <div class="card-body">

                <div class="tab-content table-responsive">


                    <div class="tab-pane fade js-January-tab" id="js-January-tab" role="tabpanel">
                        <table class="customicTable datatable-basic">

                            <thead>

                                <tr class="bg-teal text-white text-small">
                                    <th style="width:10%;">Month</th>
                                    <th style="width:10%;">Total Salesman</th>
                                    <th style="width:10%;">Sales Target</th>
                                    <th style="width:15%;">Total Sales</th>
                                    <th style="width:20%;">Monthly AchV.(%)</th>
                                    <th style="width:15%;">Yearly AchV.(%)</th>
                                    <th style="width:10%">Difficiancies</th>
                                    <th style="width:10%">Status</th>

                                </tr>

                            </thead>
                            <tbody>

                                {{-- <tr class="text-small">
                                    <td>Jan</td>
                                    <td>20</td>
                                    <td>3,000,00</td>
                                    <td>00</td>
                                    <td>0.00%</td>
                                    <td>0.00%</td>
                                    <td>30,000,000.00</td>
                                    <td>Poor</td>

                                </tr> --}}

                                {{-- <tr class="text-small" style="font-weight: 600;">
                                    <td style="width:10%;">Date</td>
                                    <td style="width:10%;">Salesman</td>
                                    <td style="width:10%;">Client Name</td>
                                    <td style="width:15%;">Product</td>
                                    <td style="width:20%;">Order Value</td>
                                    <td style="width:15%;">Status</td>
                                    <td style="width:10%;">MR No.</td>
                                    <td style="width:10%">Comment</td>

                                </tr>

                                <tr>
                                    <td>01-Jan-23</td>
                                    <td>Mr.Sumon</td>
                                    <td>Mr.Sulaiman</td>
                                    <td>Item Name One</td>
                                    <td>2,00,000.00</td>
                                    <td>Paid </td>
                                    <td>TI-100</td>
                                    <td>No Bad </td>

                                </tr>
                                <tr>
                                    <td>02-Jan-23</td>
                                    <td>Mr.Sumon</td>
                                    <td>Mr.Sulaiman</td>
                                    <td>Item Name One</td>
                                    <td>2,00,000.00</td>
                                    <td>Paid </td>
                                    <td>TI-100</td>
                                    <td>No Bad </td>

                                </tr> --}}

                            </tbody>

                        </table>


                    </div>

                    <div class="tab-pane fade js-February-tab" id="js-February-tab" role="tabpanel">
                        <table class="customicTable datatable-basic">

                            <thead>

                                <tr class="bg-teal text-white text-small">
                                    <th style="width:10%;">Month</th>
                                    <th style="width:10%;">Total Salesman</th>
                                    <th style="width:10%;">Sales Target</th>
                                    <th style="width:15%;">Total Sales</th>
                                    <th style="width:20%;">Monthly AchV.(%)</th>
                                    <th style="width:15%;">Yearly AchV.(%)</th>
                                    <th style="width:10%">Difficiancies</th>
                                    <th style="width:10%">Status</th>

                                </tr>

                            </thead>
                            <tbody>



                            </tbody>

                        </table>

                    </div>

                    <div class="tab-pane fade js-March-tab" id="js-March-tab" role="tabpanel">
                        <table class="customicTable datatable-basic">

                            <thead>

                                <tr class="bg-teal text-white text-small">
                                    <th style="width:10%;">Month</th>
                                    <th style="width:10%;">Total Salesman</th>
                                    <th style="width:15%;">Sales Target</th>
                                    <th style="width:10%;">Total Sales</th>
                                    <th style="width:15%;">Monthly AchV.(%)</th>
                                    <th style="width:15%;">Yearly AchV.(%)</th>
                                    <th style="width:15%">Difficiancies</th>
                                    <th style="width:10%">Status</th>

                                </tr>

                            </thead>
                            <tbody>

                                <tr class="text-small">
                                    <td>March</td>
                                    <td>{{$salesman}}</td>
                                    <td>{{number_format($salesYearTarget->march_target)}} $</td>
                                    <td>{{number_format($sales_march)}}</td>
                                    <td>{{number_format(($sales_march/$salesYearTarget->march_target)*100 , 2)}} %</td>
                                    <td>{{number_format(($sales_march/$salesYearTarget->year_target)*100 , 3)}} %</td>
                                    <td>{{number_format(($salesYearTarget->march_target)-$sales_march , 2)}} $</td>
                                    <td>Poor</td>

                                </tr>

                                {{-- <tr class="text-small" style="font-weight: 600;">
                                    <td style="width:10%;">Date</td>
                                    <td style="width:10%;">Salesman</td>
                                    <td style="width:10%;">Client Name</td>
                                    <td style="width:15%;">Product</td>
                                    <td style="width:20%;">Order Value</td>
                                    <td style="width:15%;">Status</td>
                                    <td style="width:10%;">MR No.</td>
                                    <td style="width:10%">Comment</td>

                                </tr>

                                <tr>
                                    <td>01-Jan-23</td>
                                    <td>Mr.Sumon</td>
                                    <td>Mr.Sulaiman</td>
                                    <td>Item Name One</td>
                                    <td>2,00,000.00</td>
                                    <td>Paid </td>
                                    <td>TI-100</td>
                                    <td>No Bad </td>

                                </tr>
                                <tr>
                                    <td>02-Jan-23</td>
                                    <td>Mr.Sumon</td>
                                    <td>Mr.Sulaiman</td>
                                    <td>Item Name One</td>
                                    <td>2,00,000.00</td>
                                    <td>Paid </td>
                                    <td>TI-100</td>
                                    <td>No Bad </td>

                                </tr> --}}

                            </tbody>

                        </table>

                    </div>
                    <div class="tab-pane fade js-April-tab" id="js-April-tab" role="tabpanel">
                        <table class="customicTable datatable-basic">

                            <thead>

                                <tr class="bg-teal text-white text-small">
                                    <th style="width:10%;">Month</th>
                                    <th style="width:10%;">Total Salesman</th>
                                    <th style="width:10%;">Sales Target</th>
                                    <th style="width:15%;">Total Sales</th>
                                    <th style="width:20%;">Monthly AchV.(%)</th>
                                    <th style="width:15%;">Yearly AchV.(%)</th>
                                    <th style="width:10%">Difficiancies</th>
                                    <th style="width:10%">Status</th>

                                </tr>

                            </thead>
                            <tbody>

                                {{-- <tr class="text-small">
                                    <td>Jan</td>
                                    <td>20</td>
                                    <td>3,000,00</td>
                                    <td>00</td>
                                    <td>0.00%</td>
                                    <td>0.00%</td>
                                    <td>30,000,000.00</td>
                                    <td>Poor</td>

                                </tr> --}}

                                {{-- <tr class="text-small" style="font-weight: 600;">
                                    <td style="width:10%;">Date</td>
                                    <td style="width:10%;">Salesman</td>
                                    <td style="width:10%;">Client Name</td>
                                    <td style="width:15%;">Product</td>
                                    <td style="width:20%;">Order Value</td>
                                    <td style="width:15%;">Status</td>
                                    <td style="width:10%;">MR No.</td>
                                    <td style="width:10%">Comment</td>

                                </tr>

                                <tr>
                                    <td>01-Jan-23</td>
                                    <td>Mr.Sumon</td>
                                    <td>Mr.Sulaiman</td>
                                    <td>Item Name One</td>
                                    <td>2,00,000.00</td>
                                    <td>Paid </td>
                                    <td>TI-100</td>
                                    <td>No Bad </td>

                                </tr>
                                <tr>
                                    <td>02-Jan-23</td>
                                    <td>Mr.Sumon</td>
                                    <td>Mr.Sulaiman</td>
                                    <td>Item Name One</td>
                                    <td>2,00,000.00</td>
                                    <td>Paid </td>
                                    <td>TI-100</td>
                                    <td>No Bad </td>

                                </tr> --}}

                            </tbody>

                        </table>

                    </div>

                    <div class="tab-pane fade js-May-tab" id="js-May-tab" role="tabpanel">
                        <table class="customicTable datatable-basic">

                            <thead>

                                <tr class="bg-teal text-white text-small">
                                    <th style="width:10%;">Month</th>
                                    <th style="width:10%;">Total Salesman</th>
                                    <th style="width:10%;">Sales Target</th>
                                    <th style="width:15%;">Total Sales</th>
                                    <th style="width:20%;">Monthly AchV.(%)</th>
                                    <th style="width:15%;">Yearly AchV.(%)</th>
                                    <th style="width:10%">Difficiancies</th>
                                    <th style="width:10%">Status</th>

                                </tr>

                            </thead>
                            <tbody>

                                {{-- <tr class="text-small">
                                    <td>Jan</td>
                                    <td>20</td>
                                    <td>3,000,00</td>
                                    <td>00</td>
                                    <td>0.00%</td>
                                    <td>0.00%</td>
                                    <td>30,000,000.00</td>
                                    <td>Poor</td>

                                </tr> --}}

                                {{-- <tr class="text-small" style="font-weight: 600;">
                                    <td style="width:10%;">Date</td>
                                    <td style="width:10%;">Salesman</td>
                                    <td style="width:10%;">Client Name</td>
                                    <td style="width:15%;">Product</td>
                                    <td style="width:20%;">Order Value</td>
                                    <td style="width:15%;">Status</td>
                                    <td style="width:10%;">MR No.</td>
                                    <td style="width:10%">Comment</td>

                                </tr>

                                <tr>
                                    <td>01-Jan-23</td>
                                    <td>Mr.Sumon</td>
                                    <td>Mr.Sulaiman</td>
                                    <td>Item Name One</td>
                                    <td>2,00,000.00</td>
                                    <td>Paid </td>
                                    <td>TI-100</td>
                                    <td>No Bad </td>

                                </tr>
                                <tr>
                                    <td>02-Jan-23</td>
                                    <td>Mr.Sumon</td>
                                    <td>Mr.Sulaiman</td>
                                    <td>Item Name One</td>
                                    <td>2,00,000.00</td>
                                    <td>Paid </td>
                                    <td>TI-100</td>
                                    <td>No Bad </td>

                                </tr> --}}

                            </tbody>

                        </table>

                    </div>

                    <div class="tab-pane fade js-June-tab" id="js-June-tab" role="tabpanel">
                        <table class="customicTable datatable-basic">

                            <thead>

                                <tr class="bg-teal text-white text-small">
                                    <th style="width:10%;">Month</th>
                                    <th style="width:10%;">Total Salesman</th>
                                    <th style="width:10%;">Sales Target</th>
                                    <th style="width:15%;">Total Sales</th>
                                    <th style="width:20%;">Monthly AchV.(%)</th>
                                    <th style="width:15%;">Yearly AchV.(%)</th>
                                    <th style="width:10%">Difficiancies</th>
                                    <th style="width:10%">Status</th>

                                </tr>

                            </thead>
                            <tbody>

                                {{-- <tr class="text-small">
                                    <td>Jan</td>
                                    <td>20</td>
                                    <td>3,000,00</td>
                                    <td>00</td>
                                    <td>0.00%</td>
                                    <td>0.00%</td>
                                    <td>30,000,000.00</td>
                                    <td>Poor</td>

                                </tr> --}}

                                {{-- <tr class="text-small" style="font-weight: 600;">
                                    <td style="width:10%;">Date</td>
                                    <td style="width:10%;">Salesman</td>
                                    <td style="width:10%;">Client Name</td>
                                    <td style="width:15%;">Product</td>
                                    <td style="width:20%;">Order Value</td>
                                    <td style="width:15%;">Status</td>
                                    <td style="width:10%;">MR No.</td>
                                    <td style="width:10%">Comment</td>

                                </tr>

                                <tr>
                                    <td>01-Jan-23</td>
                                    <td>Mr.Sumon</td>
                                    <td>Mr.Sulaiman</td>
                                    <td>Item Name One</td>
                                    <td>2,00,000.00</td>
                                    <td>Paid </td>
                                    <td>TI-100</td>
                                    <td>No Bad </td>

                                </tr>
                                <tr>
                                    <td>02-Jan-23</td>
                                    <td>Mr.Sumon</td>
                                    <td>Mr.Sulaiman</td>
                                    <td>Item Name One</td>
                                    <td>2,00,000.00</td>
                                    <td>Paid </td>
                                    <td>TI-100</td>
                                    <td>No Bad </td>

                                </tr> --}}

                            </tbody>

                        </table>

                    </div>


                    <div class="tab-pane fade js-July-tab" id="js-July-tab" role="tabpanel">
                        <table class="customicTable datatable-basic">

                            <thead>

                                <tr class="bg-teal text-white text-small">
                                    <th style="width:10%;">Month</th>
                                    <th style="width:10%;">Total Salesman</th>
                                    <th style="width:10%;">Sales Target</th>
                                    <th style="width:15%;">Total Sales</th>
                                    <th style="width:20%;">Monthly AchV.(%)</th>
                                    <th style="width:15%;">Yearly AchV.(%)</th>
                                    <th style="width:10%">Difficiancies</th>
                                    <th style="width:10%">Status</th>

                                </tr>

                            </thead>
                            <tbody>

                                {{-- <tr class="text-small">
                                    <td>Jan</td>
                                    <td>20</td>
                                    <td>3,000,00</td>
                                    <td>00</td>
                                    <td>0.00%</td>
                                    <td>0.00%</td>
                                    <td>30,000,000.00</td>
                                    <td>Poor</td>

                                </tr> --}}

                                {{-- <tr class="text-small" style="font-weight: 600;">
                                    <td style="width:10%;">Date</td>
                                    <td style="width:10%;">Salesman</td>
                                    <td style="width:10%;">Client Name</td>
                                    <td style="width:15%;">Product</td>
                                    <td style="width:20%;">Order Value</td>
                                    <td style="width:15%;">Status</td>
                                    <td style="width:10%;">MR No.</td>
                                    <td style="width:10%">Comment</td>

                                </tr>

                                <tr>
                                    <td>01-Jan-23</td>
                                    <td>Mr.Sumon</td>
                                    <td>Mr.Sulaiman</td>
                                    <td>Item Name One</td>
                                    <td>2,00,000.00</td>
                                    <td>Paid </td>
                                    <td>TI-100</td>
                                    <td>No Bad </td>

                                </tr>
                                <tr>
                                    <td>02-Jan-23</td>
                                    <td>Mr.Sumon</td>
                                    <td>Mr.Sulaiman</td>
                                    <td>Item Name One</td>
                                    <td>2,00,000.00</td>
                                    <td>Paid </td>
                                    <td>TI-100</td>
                                    <td>No Bad </td>

                                </tr> --}}

                            </tbody>

                        </table>

                    </div>

                    <div class="tab-pane fade js-August-tab" id="js-August-tab" role="tabpanel">
                        <table class="customicTable datatable-basic">

                            <thead>

                                <tr class="bg-teal text-white text-small">
                                    <th style="width:10%;">Month</th>
                                    <th style="width:10%;">Total Salesman</th>
                                    <th style="width:10%;">Sales Target</th>
                                    <th style="width:15%;">Total Sales</th>
                                    <th style="width:20%;">Monthly AchV.(%)</th>
                                    <th style="width:15%;">Yearly AchV.(%)</th>
                                    <th style="width:10%">Difficiancies</th>
                                    <th style="width:10%">Status</th>

                                </tr>

                            </thead>
                            <tbody>

                                {{-- <tr class="text-small">
                                    <td>Jan</td>
                                    <td>20</td>
                                    <td>3,000,00</td>
                                    <td>00</td>
                                    <td>0.00%</td>
                                    <td>0.00%</td>
                                    <td>30,000,000.00</td>
                                    <td>Poor</td>

                                </tr> --}}

                                {{-- <tr class="text-small" style="font-weight: 600;">
                                    <td style="width:10%;">Date</td>
                                    <td style="width:10%;">Salesman</td>
                                    <td style="width:10%;">Client Name</td>
                                    <td style="width:15%;">Product</td>
                                    <td style="width:20%;">Order Value</td>
                                    <td style="width:15%;">Status</td>
                                    <td style="width:10%;">MR No.</td>
                                    <td style="width:10%">Comment</td>

                                </tr>

                                <tr>
                                    <td>01-Jan-23</td>
                                    <td>Mr.Sumon</td>
                                    <td>Mr.Sulaiman</td>
                                    <td>Item Name One</td>
                                    <td>2,00,000.00</td>
                                    <td>Paid </td>
                                    <td>TI-100</td>
                                    <td>No Bad </td>

                                </tr>
                                <tr>
                                    <td>02-Jan-23</td>
                                    <td>Mr.Sumon</td>
                                    <td>Mr.Sulaiman</td>
                                    <td>Item Name One</td>
                                    <td>2,00,000.00</td>
                                    <td>Paid </td>
                                    <td>TI-100</td>
                                    <td>No Bad </td>

                                </tr> --}}

                            </tbody>

                        </table>

                    </div>
                    <div class="tab-pane fade js-September-tab" id="js-September-tab" role="tabpanel">
                        <table class="customicTable datatable-basic">

                            <thead>

                                <tr class="bg-teal text-white text-small">
                                    <th style="width:10%;">Month</th>
                                    <th style="width:10%;">Total Salesman</th>
                                    <th style="width:10%;">Sales Target</th>
                                    <th style="width:15%;">Total Sales</th>
                                    <th style="width:20%;">Monthly AchV.(%)</th>
                                    <th style="width:15%;">Yearly AchV.(%)</th>
                                    <th style="width:10%">Difficiancies</th>
                                    <th style="width:10%">Status</th>

                                </tr>

                            </thead>
                            <tbody>

                                {{-- <tr class="text-small">
                                    <td>Jan</td>
                                    <td>20</td>
                                    <td>3,000,00</td>
                                    <td>00</td>
                                    <td>0.00%</td>
                                    <td>0.00%</td>
                                    <td>30,000,000.00</td>
                                    <td>Poor</td>

                                </tr> --}}

                                {{-- <tr class="text-small" style="font-weight: 600;">
                                    <td style="width:10%;">Date</td>
                                    <td style="width:10%;">Salesman</td>
                                    <td style="width:10%;">Client Name</td>
                                    <td style="width:15%;">Product</td>
                                    <td style="width:20%;">Order Value</td>
                                    <td style="width:15%;">Status</td>
                                    <td style="width:10%;">MR No.</td>
                                    <td style="width:10%">Comment</td>

                                </tr>

                                <tr>
                                    <td>01-Jan-23</td>
                                    <td>Mr.Sumon</td>
                                    <td>Mr.Sulaiman</td>
                                    <td>Item Name One</td>
                                    <td>2,00,000.00</td>
                                    <td>Paid </td>
                                    <td>TI-100</td>
                                    <td>No Bad </td>

                                </tr>
                                <tr>
                                    <td>02-Jan-23</td>
                                    <td>Mr.Sumon</td>
                                    <td>Mr.Sulaiman</td>
                                    <td>Item Name One</td>
                                    <td>2,00,000.00</td>
                                    <td>Paid </td>
                                    <td>TI-100</td>
                                    <td>No Bad </td>

                                </tr> --}}

                            </tbody>

                        </table>

                    </div>

                    <div class="tab-pane fade js-October-tab" id="js-October-tab" role="tabpanel">
                        <table class="customicTable datatable-basic">

                            <thead>

                                <tr class="bg-teal text-white text-small">
                                    <th style="width:10%;">Month</th>
                                    <th style="width:10%;">Total Salesman</th>
                                    <th style="width:10%;">Sales Target</th>
                                    <th style="width:15%;">Total Sales</th>
                                    <th style="width:20%;">Monthly AchV.(%)</th>
                                    <th style="width:15%;">Yearly AchV.(%)</th>
                                    <th style="width:10%">Difficiancies</th>
                                    <th style="width:10%">Status</th>

                                </tr>

                            </thead>
                            <tbody>

                                {{-- <tr class="text-small">
                                    <td>Jan</td>
                                    <td>20</td>
                                    <td>3,000,00</td>
                                    <td>00</td>
                                    <td>0.00%</td>
                                    <td>0.00%</td>
                                    <td>30,000,000.00</td>
                                    <td>Poor</td>

                                </tr> --}}

                                {{-- <tr class="text-small" style="font-weight: 600;">
                                    <td style="width:10%;">Date</td>
                                    <td style="width:10%;">Salesman</td>
                                    <td style="width:10%;">Client Name</td>
                                    <td style="width:15%;">Product</td>
                                    <td style="width:20%;">Order Value</td>
                                    <td style="width:15%;">Status</td>
                                    <td style="width:10%;">MR No.</td>
                                    <td style="width:10%">Comment</td>

                                </tr>

                                <tr>
                                    <td>01-Jan-23</td>
                                    <td>Mr.Sumon</td>
                                    <td>Mr.Sulaiman</td>
                                    <td>Item Name One</td>
                                    <td>2,00,000.00</td>
                                    <td>Paid </td>
                                    <td>TI-100</td>
                                    <td>No Bad </td>

                                </tr>
                                <tr>
                                    <td>02-Jan-23</td>
                                    <td>Mr.Sumon</td>
                                    <td>Mr.Sulaiman</td>
                                    <td>Item Name One</td>
                                    <td>2,00,000.00</td>
                                    <td>Paid </td>
                                    <td>TI-100</td>
                                    <td>No Bad </td>

                                </tr> --}}

                            </tbody>

                        </table>

                    </div>

                    <div class="tab-pane fade js-November-tab" id="js-November-tab" role="tabpanel">
                        <table class="customicTable datatable-basic">

                            <thead>

                                <tr class="bg-teal text-white text-small">
                                    <th style="width:10%;">Month</th>
                                    <th style="width:10%;">Total Salesman</th>
                                    <th style="width:10%;">Sales Target</th>
                                    <th style="width:15%;">Total Sales</th>
                                    <th style="width:20%;">Monthly AchV.(%)</th>
                                    <th style="width:15%;">Yearly AchV.(%)</th>
                                    <th style="width:10%">Difficiancies</th>
                                    <th style="width:10%">Status</th>

                                </tr>

                            </thead>
                            <tbody>

                                {{-- <tr class="text-small">
                                    <td>Jan</td>
                                    <td>20</td>
                                    <td>3,000,00</td>
                                    <td>00</td>
                                    <td>0.00%</td>
                                    <td>0.00%</td>
                                    <td>30,000,000.00</td>
                                    <td>Poor</td>

                                </tr> --}}

                                {{-- <tr class="text-small" style="font-weight: 600;">
                                    <td style="width:10%;">Date</td>
                                    <td style="width:10%;">Salesman</td>
                                    <td style="width:10%;">Client Name</td>
                                    <td style="width:15%;">Product</td>
                                    <td style="width:20%;">Order Value</td>
                                    <td style="width:15%;">Status</td>
                                    <td style="width:10%;">MR No.</td>
                                    <td style="width:10%">Comment</td>

                                </tr>

                                <tr>
                                    <td>01-Jan-23</td>
                                    <td>Mr.Sumon</td>
                                    <td>Mr.Sulaiman</td>
                                    <td>Item Name One</td>
                                    <td>2,00,000.00</td>
                                    <td>Paid </td>
                                    <td>TI-100</td>
                                    <td>No Bad </td>

                                </tr>
                                <tr>
                                    <td>02-Jan-23</td>
                                    <td>Mr.Sumon</td>
                                    <td>Mr.Sulaiman</td>
                                    <td>Item Name One</td>
                                    <td>2,00,000.00</td>
                                    <td>Paid </td>
                                    <td>TI-100</td>
                                    <td>No Bad </td>

                                </tr> --}}

                            </tbody>

                        </table>

                    </div>

                    <div class="tab-pane fade js-December-tab" id="js-December-tab" role="tabpanel">

                        <table class="customicTable datatable-basic">

                            <thead>

                                <tr class="bg-teal text-white text-small">
                                    <th style="width:10%;">Month</th>
                                    <th style="width:10%;">Total Salesman</th>
                                    <th style="width:10%;">Sales Target</th>
                                    <th style="width:15%;">Total Sales</th>
                                    <th style="width:20%;">Monthly AchV.(%)</th>
                                    <th style="width:15%;">Yearly AchV.(%)</th>
                                    <th style="width:10%">Difficiancies</th>
                                    <th style="width:10%">Status</th>

                                </tr>

                            </thead>
                            <tbody>

                                {{-- <tr class="text-small">
                                    <td>Jan</td>
                                    <td>20</td>
                                    <td>3,000,00</td>
                                    <td>00</td>
                                    <td>0.00%</td>
                                    <td>0.00%</td>
                                    <td>30,000,000.00</td>
                                    <td>Poor</td>

                                </tr> --}}

                                {{-- <tr class="text-small" style="font-weight: 600;">
                                    <td style="width:10%;">Date</td>
                                    <td style="width:10%;">Salesman</td>
                                    <td style="width:10%;">Client Name</td>
                                    <td style="width:15%;">Product</td>
                                    <td style="width:20%;">Order Value</td>
                                    <td style="width:15%;">Status</td>
                                    <td style="width:10%;">MR No.</td>
                                    <td style="width:10%">Comment</td>

                                </tr>

                                <tr>
                                    <td>01-Jan-23</td>
                                    <td>Mr.Sumon</td>
                                    <td>Mr.Sulaiman</td>
                                    <td>Item Name One</td>
                                    <td>2,00,000.00</td>
                                    <td>Paid </td>
                                    <td>TI-100</td>
                                    <td>No Bad </td>

                                </tr>
                                <tr>
                                    <td>02-Jan-23</td>
                                    <td>Mr.Sumon</td>
                                    <td>Mr.Sulaiman</td>
                                    <td>Item Name One</td>
                                    <td>2,00,000.00</td>
                                    <td>Paid </td>
                                    <td>TI-100</td>
                                    <td>No Bad </td>

                                </tr> --}}

                            </tbody>

                        </table>

                    </div>

                </div>


            </div>
        </div>

    </div>

</div>

@endsection


@push('scripts')

<script>
    $(document).ready(function() {
        var currentMonth = (new Date).getMonth() + 1;
        // alert(currentMonth);
        if (currentMonth == 1) {
            // alert(currentMonth);
            $("#js-January-tab").addClass("show");
            $(".js-January-tab").addClass("active");
            // $(".js-January-tab").addClass("bg-red");
        }else if (currentMonth == 2) {
            // alert(currentMonth);
            $("#js-February-tab").addClass("show");
            $(".js-February-tab").addClass("active");
            // $(".js-February-tab").addClass("bg-red");
        }else if (currentMonth == 3) {
            $("#js-March-tab").addClass("show");
            $(".js-March-tab").addClass("active");
            // $(".js-March-tab").addClass("bg-red");
        }else if (currentMonth == 4) {
            $("#js-April-tab").addClass("show");
            $(".js-April-tab").addClass("active");
            // $(".js-April-tab").addClass("bg-red");
        }else if (currentMonth == 5) {
            $("#js-May-tab").addClass("show");
            $(".js-May-tab").addClass("active");
            // $(".js-May-tab").addClass("bg-red");
        }else if (currentMonth == 6) {
            $("#js-June-tab").addClass("show");
            $(".js-June-tab").addClass("active");
            // $(".js-June-tab").addClass("bg-red");
        }else if (currentMonth == 7) {
            $("#js-July-tab").addClass("show");
            $(".js-July-tab").addClass("active");
            // $(".js-July-tab").addClass("bg-red");
        }else if (currentMonth == 8) {
            $("#js-August-tab").addClass("show");
            $(".js-August-tab").addClass("active");
            // $(".js-August-tab").addClass("bg-red");
        }else if (currentMonth == 9) {
            $("#js-September-tab").addClass("show");
            $(".js-September-tab").addClass("active");
            // $(".js-September-tab").addClass("bg-red");
        }else if (currentMonth == 10) {
            $("#js-October-tab").addClass("show");
            $(".js-October-tab").addClass("active");
            // $(".js-October-tab").addClass("bg-red");
        }else if (currentMonth == 11) {
            $("#js-November-tab").addClass("show");
            $(".js-November-tab").addClass("active");
            // $(".js-November-tab").addClass("bg-red");
        }else if (currentMonth == 12) {
            $("#js-December-tab").addClass("show");
            $(".js-December-tab").addClass("active");
            // $(".js-December-tab").addClass("bg-red");
        }

    });
</script>

@endpush
