@extends('admin.master')
@section('content')
    <div class="content-wrapper">

        <!-- Inner content -->
        <div class="content-inner">

            <!-- Page header -->
            <div class="page-header page-header-light shadow">
                <div class="page-header-content d-lg-flex">
                    <div class="d-flex">
                        <h4 class="page-title mb-0">
                            Sales - <span class="fw-normal">Profit Loss</span>
                        </h4>

                        <a href="#page_header"
                            class="btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto"
                            data-bs-toggle="collapse">
                            <i class="ph-caret-down collapsible-indicator ph-sm m-1"></i>
                        </a>
                    </div>


                </div>


            </div>
            <!-- /page header -->



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
            </style>


            <!-- Content area -->
            <div class="content">

                <!-- Table components -->
                <div class="card m-auto w-50 mb-3 p-2">
                    <table class="table table-bordered table-xs table-responsive">
                        <tr>
                            <th colspan="7">
                                <h5 class="mb-0"> Sales Profit & Loss

                                    <button type="button" class="bg-teal float-end text-white" data-bs-toggle="modal"
                                        data-bs-target="#modal_sale_profit_loss"> <i
                                            class="ph-plus-circle ph-1x"></i></button>

                                </h5>
                            </th>
                        </tr>

                        <tr class="text-center">

                            <th class="bg-primary text-white">Total Sales </th>
                            <th class="bg-success text-white"> Profit / Loss </th>
                            <th class="bg-secondary text-white"> % </th>

                        </tr>

                        <tr class="text-center">
                            <td class="bg-primary text-white"> 0.00</td>
                            <td class="bg-success text-white"> 0.00</td>
                            <td class="bg-secondary text-white"> 0 %</td>
                        </tr>

                    </table>
                </div>

                <!-- Basic modal for profit save -->
                <form action="" class="form-validate-jquery-profit-loss" method="post" enctype="multipart/form-data">
                    <div id="modal_sale_profit_loss" class="modal fade" tabindex="-1">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Sales Profit and Loss </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-xs table-bordered table-responsive">
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="RFQID"> RFQ ID <strong class="text-danger">*</strong>
                                                    </label>
                                                    <select name="rfq_id" id="RFQID"
                                                        class="form-control form-control-sm" required>
                                                        <option value="0">--select--</option>
                                                        <option value="1"> Q1</option>
                                                        <option value="2"> Q2 </option>
                                                        <option value="3"> Q3</option>
                                                        <option value="4"> Q4 </option>
                                                    </select>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="form-group">
                                                    <label for="clientType"> Client Type <strong
                                                            class="text-danger">*</strong> </label>
                                                    <select name="client_type" id="clientType"
                                                        class="form-control form-control-sm" required>
                                                        <option value="">--select--</option>
                                                        <option value="client"> Client </option>
                                                        <option value="partner"> Partner </option>

                                                    </select>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="form-group">

                                                    <label for="itemDescription"> Item Description <strong
                                                            class="text-danger">*</strong> </label>
                                                    <input type="text" name="item_description" id="itemDescription"
                                                        placeholder="Item Description" class="form-control form-control-sm">
                                                </div>
                                            </td>


                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-group">

                                                    <label for="SalesAmount">Sales <strong class="text-danger">*</strong>
                                                    </label>
                                                    <input type="number" name="sales" id="SalesAmount"
                                                        placeholder="00.00" class="form-control form-control-sm">
                                                </div>
                                            </td>

                                            <td>
                                                <div class="form-group">

                                                    <label for="CostAmount">Cost <strong class="text-danger">*</strong>
                                                    </label>
                                                    <input type="number" name="cost" id="CostAmount" placeholder="00.00"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </td>

                                            <td>
                                                <div class="form-group">
                                                    <label for="grossMarkupPersentage"> Gross Markup Persentage <strong
                                                            class="text-danger">*</strong> </label>
                                                    <input type="text" name="gross_markup_persentage"
                                                        id="grossMarkupPersentage" placeholder="00"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>

                                            <td>
                                                <div class="form-group">
                                                    <label for="grossMarkupAmount"> Gross Markup Amount <strong
                                                            class="text-danger">*</strong> </label>
                                                    <input type="number" name="gross_markup_amount"
                                                        id="grossMarkupAmount" placeholder="00"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="netProfitPersentage"> Net profit Persentage <strong
                                                            class="text-danger">*</strong> </label>
                                                    <input type="number" name="net_profit_persentage"
                                                        id="netProfitPersentage" placeholder="00"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </td>

                                            <td>
                                                <div class="form-group">
                                                    <label for="NetprofitAmount"> Net profit Amount <strong
                                                            class="text-danger">*</strong> </label>
                                                    <input type="number" name="net_profit_amount" id="NetprofitAmount"
                                                        placeholder="00" class="form-control form-control-sm">
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>

                                            <td>
                                                <div class="form-group">
                                                    <label for="profit"> Profit <strong class="text-danger">*</strong>
                                                    </label>
                                                    <input type="number" name="profit" id="profit" placeholder="00"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </td>
                                            <td colspan="2">
                                                <div class="form-group">
                                                    <label for="loss"> Loss <strong class="text-danger">*</strong>
                                                    </label>
                                                    <input type="number" name="loss" id="loss" placeholder="00"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </td>

                                        </tr>




                                    </table>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <!-- model-end -->
                <!-- Basic modal for profit Update -->
                <form action="" class="form-validate-jquery-profit-loss" method="post"
                    enctype="multipart/form-data">
                    <div id="modal_sale_profit_loss_update" class="modal fade" tabindex="-1">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Edit Sales Profit and Loss Information</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-xs table-bordered table-responsive">
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="RFQID"> RFQ ID <strong class="text-danger">*</strong>
                                                    </label>
                                                    <select name="rfq_id" id="RFQID"
                                                        class="form-control form-control-sm" required>
                                                        <option value="0">--select--</option>
                                                        <option value="1"> Q1</option>
                                                        <option value="2"> Q2 </option>
                                                        <option value="3"> Q3</option>
                                                        <option value="4"> Q4 </option>
                                                    </select>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="form-group">
                                                    <label for="clientType"> Client Type <strong
                                                            class="text-danger">*</strong> </label>
                                                    <select name="client_type" id="clientType"
                                                        class="form-control form-control-sm" required>
                                                        <option value="">--select--</option>
                                                        <option value="client"> Client </option>
                                                        <option value="partner"> Partner </option>

                                                    </select>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="form-group">

                                                    <label for="itemDescription"> Item Description <strong
                                                            class="text-danger">*</strong> </label>
                                                    <input type="text" name="item_description" id="itemDescription"
                                                        placeholder="Item Description"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </td>


                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="form-group">

                                                    <label for="SalesAmount">Sales <strong class="text-danger">*</strong>
                                                    </label>
                                                    <input type="number" name="sales" id="SalesAmount"
                                                        placeholder="00.00" class="form-control form-control-sm">
                                                </div>
                                            </td>

                                            <td>
                                                <div class="form-group">

                                                    <label for="CostAmount">Cost <strong class="text-danger">*</strong>
                                                    </label>
                                                    <input type="number" name="cost" id="CostAmount"
                                                        placeholder="00.00" class="form-control form-control-sm">
                                                </div>
                                            </td>

                                            <td>
                                                <div class="form-group">
                                                    <label for="grossMarkupPersentage"> Gross Markup Persentage <strong
                                                            class="text-danger">*</strong> </label>
                                                    <input type="text" name="gross_markup_persentage"
                                                        id="grossMarkupPersentage" placeholder="00"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>

                                            <td>
                                                <div class="form-group">
                                                    <label for="grossMarkupAmount"> Gross Markup Amount <strong
                                                            class="text-danger">*</strong> </label>
                                                    <input type="number" name="gross_markup_amount"
                                                        id="grossMarkupAmount" placeholder="00"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="netProfitPersentage"> Net profit Persentage <strong
                                                            class="text-danger">*</strong> </label>
                                                    <input type="number" name="net_profit_persentage"
                                                        id="netProfitPersentage" placeholder="00"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </td>

                                            <td>
                                                <div class="form-group">
                                                    <label for="NetprofitAmount"> Net profit Amount <strong
                                                            class="text-danger">*</strong> </label>
                                                    <input type="number" name="net_profit_amount" id="NetprofitAmount"
                                                        placeholder="00" class="form-control form-control-sm">
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>

                                            <td>
                                                <div class="form-group">
                                                    <label for="profit"> Profit <strong class="text-danger">*</strong>
                                                    </label>
                                                    <input type="number" name="profit" id="profit" placeholder="00"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </td>
                                            <td colspan="2">
                                                <div class="form-group">
                                                    <label for="loss"> Loss <strong class="text-danger">*</strong>
                                                    </label>
                                                    <input type="number" name="loss" id="loss" placeholder="00"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </td>

                                        </tr>





                                    </table>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                <!-- model-Update end -->





                <div class="card">

                    <!-- tab menu start-->
                    <ul class="nav nav-tabs mb-3" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="#js-January-tab" class="nav-link active" data-bs-toggle="tab" aria-selected="true"
                                role="tab" tabindex="-1">
                                January
                            </a>
                        </li>

                        <li class="nav-item" role="presentation">
                            <a href="#js-February-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                                role="tab" tabindex="-1">
                                February
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#js-March-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                                role="March" tabindex="-1">
                                March
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#js-April-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                                role="tab" tabindex="-1">
                                April
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#js-May-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                                role="tab" tabindex="-1">
                                May
                            </a>
                        </li>

                        <li class="nav-item" role="presentation">
                            <a href="#js-June-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                                role="tab" tabindex="-1">
                                June
                            </a>
                        </li>

                        <li class="nav-item" role="presentation">
                            <a href="#js-July-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                                role="tab" tabindex="-1">
                                July
                            </a>
                        </li>

                        <li class="nav-item" role="presentation">
                            <a href="#js-August-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                                role="tab" tabindex="-1">
                                August
                            </a>
                        </li>

                        <li class="nav-item" role="presentation">
                            <a href="#js-September-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                                role="tab" tabindex="-1">
                                September
                            </a>
                        </li>

                        <li class="nav-item" role="presentation">
                            <a href="#js-October-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                                role="tab" tabindex="-1">
                                October
                            </a>
                        </li>

                        <li class="nav-item" role="presentation">
                            <a href="#js-November-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                                role="tab" tabindex="-1">
                                November
                            </a>
                        </li>

                        <li class="nav-item" role="presentation">
                            <a href="#js-December-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                                role="tab" tabindex="-1">
                                December
                            </a>
                        </li>


                    </ul>

                    <!-- tab menu end -->


                    <!-- monthly table view start  -->

                    <div class="card-body">

                        <div class="tab-content table-responsive">

                            <div class="tab-pane fade active show" id="js-January-tab" role="tabpanel">

                                <table class="table table-xs table-bordered datatable-basic">
                                    <thead>
                                        <tr>
                                            <th style="width:5%;">SL</th>
                                            <th style="width:15%;">Date</th>
                                            <th style="width:20%;">Client / Principal</th>
                                            <th style="width:15%;">Sales </th>
                                            <th style="width:15%;">Profit / Loss</th>
                                            <th style="width:10%;">%</th>
                                            <th style="width:20%">Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> 01 </td>
                                            <td> 03-01-2023 </td>
                                            <td> Partner </td>
                                            <td> 2,898,764.00 </td>
                                            <td> 2,898,764.00 </td>
                                            <td> 12 % </td>
                                            <td class="text-center">
                                                <a href="#" class="text-primary" data-bs-toggle="modal"
                                                    data-bs-target="#modal_sale_profit_loss_update"><i
                                                        class="icon-pencil"></i> </a>
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#modal_details_jan" class="text-primary"><i
                                                        class="ph-gear"></i> </a>
                                                <a href="#" class="text-danger delete"><i
                                                        class="delete icon-trash"></i> </a>

                                                <!-- Small modal -->
                                                <div id="modal_details_jan" class="modal fade" tabindex="-1">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Sales Profit and Loss Details
                                                                    Information</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"></button>
                                                            </div>

                                                            <div class="modal-body">

                                                                <table class="table table-xs table-bordered">
                                                                    <tr>
                                                                        <th> Date </th>
                                                                        <td> 01-02-2023 </td>
                                                                        <th> RFQ ID </th>
                                                                        <td> dxfsdfd </td>
                                                                        <th> Client / Principal </th>
                                                                        <td> a </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Item Description </th>
                                                                        <td> a </td>
                                                                        <th>Sales Price </th>
                                                                        <td> 00.00 </td>
                                                                        <th> Cost Price </th>
                                                                        <td> 00.00 </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th> Gross Markup Percentage </th>
                                                                        <td> 10% </td>
                                                                        <th> Gross Markup Amount </th>
                                                                        <td> 00.00 </td>
                                                                        <th> Net Profit Percentage</th>
                                                                        <td> 2 % </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Net Profit Amount</th>
                                                                        <td> 00.00 </td>
                                                                        <th>Profit </th>
                                                                        <td> </td>
                                                                        <th>Loss </th>
                                                                        <td> </td>
                                                                    </tr>


                                                                </table>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /small modal -->


                                            </td>

                                        </tr>
                                    </tbody>
                                </table>


                            </div>


                            <div class="tab-pane fade" id="js-February-tab" role="tabpanel">

                                <table class="table table-xs table-bordered datatable-basic">
                                    <thead>
                                        <tr>
                                            <th style="width:5%;">SL</th>
                                            <th style="width:15%;">Date</th>
                                            <th style="width:20%;">Client / Principal</th>
                                            <th style="width:15%;">Sales </th>
                                            <th style="width:15%;">Profit / Loss</th>
                                            <th style="width:10%;">%</th>
                                            <th style="width:20%">Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> 01 </td>
                                            <td> 03-01-2023 </td>
                                            <td> Partner </td>
                                            <td> 2,898,764.00 </td>
                                            <td> 2,898,764.00 </td>
                                            <td> 12 % </td>
                                            <td class="text-center">
                                                <a href="#" class="text-primary" data-bs-toggle="modal"
                                                    data-bs-target="#modal_sale_profit_loss_update"><i
                                                        class="icon-pencil"></i> </a>
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#modal_details_February" class="text-primary"><i
                                                        class="ph-gear"></i> </a>
                                                <a href="#" class="text-danger delete"><i
                                                        class="delete icon-trash"></i> </a>

                                                <!-- Small modal -->
                                                <div id="modal_details_February" class="modal fade" tabindex="-1">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Sales Profit and Loss Details
                                                                    Information</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"></button>
                                                            </div>

                                                            <div class="modal-body">

                                                                <table class="table table-xs table-bordered">
                                                                    <tr>
                                                                        <th> Date </th>
                                                                        <td> 01-02-2023 </td>
                                                                        <th> RFQ ID </th>
                                                                        <td> dxfsdfd </td>
                                                                        <th> Client / Principal </th>
                                                                        <td> a </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Item Description </th>
                                                                        <td> a </td>
                                                                        <th>Sales Price </th>
                                                                        <td> 00.00 </td>
                                                                        <th> Cost Price </th>
                                                                        <td> 00.00 </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th> Gross Markup Percentage </th>
                                                                        <td> 10% </td>
                                                                        <th> Gross Markup Amount </th>
                                                                        <td> 00.00 </td>
                                                                        <th> Net Profit Percentage</th>
                                                                        <td> 2 % </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Net Profit Amount</th>
                                                                        <td> 00.00 </td>
                                                                        <th>Profit </th>
                                                                        <td> </td>
                                                                        <th>Loss </th>
                                                                        <td> </td>
                                                                    </tr>


                                                                </table>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /small modal -->


                                            </td>

                                        </tr>
                                    </tbody>
                                </table>

                            </div>

                            <div class="tab-pane fade" id="js-March-tab" role="tabpanel">

                                <table class="table table-xs table-bordered datatable-basic">
                                    <thead>
                                        <tr>
                                            <th style="width:5%;">SL</th>
                                            <th style="width:15%;">Date</th>
                                            <th style="width:20%;">Client / Principal</th>
                                            <th style="width:15%;">Sales </th>
                                            <th style="width:15%;">Profit / Loss</th>
                                            <th style="width:10%;">%</th>
                                            <th style="width:20%">Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> 01 </td>
                                            <td> 03-01-2023 </td>
                                            <td> Partner </td>
                                            <td> 2,898,764.00 </td>
                                            <td> 2,898,764.00 </td>
                                            <td> 12 % </td>
                                            <td class="text-center">
                                                <a href="#" class="text-primary" data-bs-toggle="modal"
                                                    data-bs-target="#modal_sale_profit_loss_update"><i
                                                        class="icon-pencil"></i> </a>
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#modal_details_March" class="text-primary"><i
                                                        class="ph-gear"></i> </a>
                                                <a href="#" class="text-danger delete"><i
                                                        class="delete icon-trash"></i> </a>

                                                <!-- Small modal -->
                                                <div id="modal_details_March" class="modal fade" tabindex="-1">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Sales Profit and Loss Details
                                                                    Information</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"></button>
                                                            </div>

                                                            <div class="modal-body">

                                                                <table
                                                                    class="table table-xs table-bordered table-bordered">
                                                                    <tr>
                                                                        <th> Date </th>
                                                                        <td> 01-02-2023 </td>
                                                                        <th> RFQ ID </th>
                                                                        <td> dxfsdfd </td>
                                                                        <th> Client / Principal </th>
                                                                        <td> a </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Item Description </th>
                                                                        <td> a </td>
                                                                        <th>Sales Price </th>
                                                                        <td> 00.00 </td>
                                                                        <th> Cost Price </th>
                                                                        <td> 00.00 </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th> Gross Markup Percentage </th>
                                                                        <td> 10% </td>
                                                                        <th> Gross Markup Amount </th>
                                                                        <td> 00.00 </td>
                                                                        <th> Net Profit Percentage</th>
                                                                        <td> 2 % </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Net Profit Amount</th>
                                                                        <td> 00.00 </td>
                                                                        <th>Profit </th>
                                                                        <td> </td>
                                                                        <th>Loss </th>
                                                                        <td> </td>
                                                                    </tr>


                                                                </table>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /small modal -->


                                            </td>

                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                            <div class="tab-pane fade" id="js-April-tab" role="tabpanel">
                                <table class="table table-xs table-bordered datatable-basic">
                                    <thead>
                                        <tr>
                                            <th style="width:5%;">SL</th>
                                            <th style="width:15%;">Date</th>
                                            <th style="width:20%;">Client / Principal</th>
                                            <th style="width:15%;">Sales </th>
                                            <th style="width:15%;">Profit / Loss</th>
                                            <th style="width:10%;">%</th>
                                            <th style="width:20%">Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> 01 </td>
                                            <td> 03-01-2023 </td>
                                            <td> Partner </td>
                                            <td> 2,898,764.00 </td>
                                            <td> 2,898,764.00 </td>
                                            <td> 12 % </td>
                                            <td class="text-center">
                                                <a href="#" class="text-primary" data-bs-toggle="modal"
                                                    data-bs-target="#modal_sale_profit_loss_update"><i
                                                        class="icon-pencil"></i> </a>
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#modal_details_April" class="text-primary"><i
                                                        class="ph-gear"></i> </a>
                                                <a href="#" class="text-danger delete"><i
                                                        class="delete icon-trash"></i> </a>

                                                <!-- Small modal -->
                                                <div id="modal_details_April" class="modal fade" tabindex="-1">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Sales Profit and Loss Details
                                                                    Information</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"></button>
                                                            </div>

                                                            <div class="modal-body">

                                                                <table class="table table-xs table-bordered">
                                                                    <tr>
                                                                        <th> Date </th>
                                                                        <td> 01-02-2023 </td>
                                                                        <th> RFQ ID </th>
                                                                        <td> dxfsdfd </td>
                                                                        <th> Client / Principal </th>
                                                                        <td> a </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Item Description </th>
                                                                        <td> a </td>
                                                                        <th>Sales Price </th>
                                                                        <td> 00.00 </td>
                                                                        <th> Cost Price </th>
                                                                        <td> 00.00 </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th> Gross Markup Percentage </th>
                                                                        <td> 10% </td>
                                                                        <th> Gross Markup Amount </th>
                                                                        <td> 00.00 </td>
                                                                        <th> Net Profit Percentage</th>
                                                                        <td> 2 % </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Net Profit Amount</th>
                                                                        <td> 00.00 </td>
                                                                        <th>Profit </th>
                                                                        <td> </td>
                                                                        <th>Loss </th>
                                                                        <td> </td>
                                                                    </tr>


                                                                </table>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /small modal -->


                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="tab-pane fade" id="js-May-tab" role="tabpanel">
                                <table class="table table-bordered table-xs datatable-basic">
                                    <thead>
                                        <tr>
                                            <th style="width:5%;">SL</th>
                                            <th style="width:15%;">Date</th>
                                            <th style="width:20%;">Client / Principal</th>
                                            <th style="width:15%;">Sales </th>
                                            <th style="width:15%;">Profit / Loss</th>
                                            <th style="width:10%;">%</th>
                                            <th style="width:20%">Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> 01 </td>
                                            <td> 03-01-2023 </td>
                                            <td> Partner </td>
                                            <td> 2,898,764.00 </td>
                                            <td> 2,898,764.00 </td>
                                            <td> 12 % </td>
                                            <td class="text-center">
                                                <a href="#" class="text-primary" data-bs-toggle="modal"
                                                    data-bs-target="#modal_sale_profit_loss_update"><i
                                                        class="icon-pencil"></i> </a>
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#modal_details_May" class="text-primary"><i
                                                        class="ph-gear"></i> </a>
                                                <a href="#" class="text-danger delete"><i
                                                        class="delete icon-trash"></i> </a>

                                                <!-- Small modal -->
                                                <div id="modal_details_May" class="modal fade" tabindex="-1">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Sales Profit and Loss Details
                                                                    Information</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"></button>
                                                            </div>

                                                            <div class="modal-body">

                                                                <table class="table table-xs table-bordered">
                                                                    <tr>
                                                                        <th> Date </th>
                                                                        <td> 01-02-2023 </td>
                                                                        <th> RFQ ID </th>
                                                                        <td> dxfsdfd </td>
                                                                        <th> Client / Principal </th>
                                                                        <td> a </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Item Description </th>
                                                                        <td> a </td>
                                                                        <th>Sales Price </th>
                                                                        <td> 00.00 </td>
                                                                        <th> Cost Price </th>
                                                                        <td> 00.00 </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th> Gross Markup Percentage </th>
                                                                        <td> 10% </td>
                                                                        <th> Gross Markup Amount </th>
                                                                        <td> 00.00 </td>
                                                                        <th> Net Profit Percentage</th>
                                                                        <td> 2 % </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Net Profit Amount</th>
                                                                        <td> 00.00 </td>
                                                                        <th>Profit </th>
                                                                        <td> </td>
                                                                        <th>Loss </th>
                                                                        <td> </td>
                                                                    </tr>


                                                                </table>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /small modal -->


                                            </td>

                                        </tr>
                                    </tbody>
                                </table>

                            </div>

                            <div class="tab-pane fade" id="js-June-tab" role="tabpanel">
                                <table class="table table-bordered table-xs datatable-basic">
                                    <thead>
                                        <tr>
                                            <th style="width:5%;">SL</th>
                                            <th style="width:15%;">Date</th>
                                            <th style="width:20%;">Client / Principal</th>
                                            <th style="width:15%;">Sales </th>
                                            <th style="width:15%;">Profit / Loss</th>
                                            <th style="width:10%;">%</th>
                                            <th style="width:20%">Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> 01 </td>
                                            <td> 03-01-2023 </td>
                                            <td> Partner </td>
                                            <td> 2,898,764.00 </td>
                                            <td> 2,898,764.00 </td>
                                            <td> 12 % </td>
                                            <td class="text-center">
                                                <a href="#" class="text-primary" data-bs-toggle="modal"
                                                    data-bs-target="#modal_sale_profit_loss_update"><i
                                                        class="icon-pencil"></i> </a>
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#modal_details_june" class="text-primary"><i
                                                        class="ph-gear"></i> </a>
                                                <a href="#" class="text-danger delete"><i
                                                        class="delete icon-trash"></i> </a>

                                                <!-- Small modal -->
                                                <div id="modal_details_june" class="modal fade" tabindex="-1">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Sales Profit and Loss Details
                                                                    Information</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"></button>
                                                            </div>

                                                            <div class="modal-body">

                                                                <table class="table table-xs table-bordered">
                                                                    <tr>
                                                                        <th> Date </th>
                                                                        <td> 01-02-2023 </td>
                                                                        <th> RFQ ID </th>
                                                                        <td> dxfsdfd </td>
                                                                        <th> Client / Principal </th>
                                                                        <td> a </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Item Description </th>
                                                                        <td> a </td>
                                                                        <th>Sales Price </th>
                                                                        <td> 00.00 </td>
                                                                        <th> Cost Price </th>
                                                                        <td> 00.00 </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th> Gross Markup Percentage </th>
                                                                        <td> 10% </td>
                                                                        <th> Gross Markup Amount </th>
                                                                        <td> 00.00 </td>
                                                                        <th> Net Profit Percentage</th>
                                                                        <td> 2 % </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Net Profit Amount</th>
                                                                        <td> 00.00 </td>
                                                                        <th>Profit </th>
                                                                        <td> </td>
                                                                        <th>Loss </th>
                                                                        <td> </td>
                                                                    </tr>


                                                                </table>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /small modal -->


                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                            <div class="tab-pane fade" id="js-July-tab" role="tabpanel">
                                <table class="table table-bordered table-xs datatable-basic">
                                    <thead>
                                        <tr>
                                            <th style="width:5%;">SL</th>
                                            <th style="width:15%;">Date</th>
                                            <th style="width:20%;">Client / Principal</th>
                                            <th style="width:15%;">Sales </th>
                                            <th style="width:15%;">Profit / Loss</th>
                                            <th style="width:10%;">%</th>
                                            <th style="width:20%">Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> 01 </td>
                                            <td> 03-01-2023 </td>
                                            <td> Partner </td>
                                            <td> 2,898,764.00 </td>
                                            <td> 2,898,764.00 </td>
                                            <td> 12 % </td>
                                            <td class="text-center">
                                                <a href="#" class="text-primary" data-bs-toggle="modal"
                                                    data-bs-target="#modal_sale_profit_loss_update"><i
                                                        class="icon-pencil"></i> </a>
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#modal_details_july" class="text-primary"><i
                                                        class="ph-gear"></i> </a>
                                                <a href="#" class="text-danger delete"><i
                                                        class="delete icon-trash"></i> </a>

                                                <!-- Small modal -->
                                                <div id="modal_details_july" class="modal fade" tabindex="-1">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Sales Profit and Loss Details
                                                                    Information</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"></button>
                                                            </div>

                                                            <div class="modal-body">

                                                                <table class="table table-xs table-bordered">
                                                                    <tr>
                                                                        <th> Date </th>
                                                                        <td> 01-02-2023 </td>
                                                                        <th> RFQ ID </th>
                                                                        <td> dxfsdfd </td>
                                                                        <th> Client / Principal </th>
                                                                        <td> a </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Item Description </th>
                                                                        <td> a </td>
                                                                        <th>Sales Price </th>
                                                                        <td> 00.00 </td>
                                                                        <th> Cost Price </th>
                                                                        <td> 00.00 </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th> Gross Markup Percentage </th>
                                                                        <td> 10% </td>
                                                                        <th> Gross Markup Amount </th>
                                                                        <td> 00.00 </td>
                                                                        <th> Net Profit Percentage</th>
                                                                        <td> 2 % </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Net Profit Amount</th>
                                                                        <td> 00.00 </td>
                                                                        <th>Profit </th>
                                                                        <td> </td>
                                                                        <th>Loss </th>
                                                                        <td> </td>
                                                                    </tr>


                                                                </table>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /small modal -->


                                            </td>

                                        </tr>
                                    </tbody>
                                </table>


                            </div>

                            <div class="tab-pane fade" id="js-August-tab" role="tabpanel">
                                <table class="table table-bordered table-xs datatable-basic">
                                    <thead>
                                        <tr>
                                            <th style="width:5%;">SL</th>
                                            <th style="width:15%;">Date</th>
                                            <th style="width:20%;">Client / Principal</th>
                                            <th style="width:15%;">Sales </th>
                                            <th style="width:15%;">Profit / Loss</th>
                                            <th style="width:10%;">%</th>
                                            <th style="width:20%">Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> 01 </td>
                                            <td> 03-01-2023 </td>
                                            <td> Partner </td>
                                            <td> 2,898,764.00 </td>
                                            <td> 2,898,764.00 </td>
                                            <td> 12 % </td>
                                            <td class="text-center">
                                                <a href="#" class="text-primary" data-bs-toggle="modal"
                                                    data-bs-target="#modal_sale_profit_loss_update"><i
                                                        class="icon-pencil"></i> </a>
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#modal_details_August" class="text-primary"><i
                                                        class="ph-gear"></i> </a>
                                                <a href="#" class="text-danger delete"><i
                                                        class="delete icon-trash"></i> </a>

                                                <!-- Small modal -->
                                                <div id="modal_details_August" class="modal fade" tabindex="-1">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Sales Profit and Loss Details
                                                                    Information</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"></button>
                                                            </div>

                                                            <div class="modal-body">

                                                                <table class="table table-xs table-bordered">
                                                                    <tr>
                                                                        <th> Date </th>
                                                                        <td> 01-02-2023 </td>
                                                                        <th> RFQ ID </th>
                                                                        <td> dxfsdfd </td>
                                                                        <th> Client / Principal </th>
                                                                        <td> a </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Item Description </th>
                                                                        <td> a </td>
                                                                        <th>Sales Price </th>
                                                                        <td> 00.00 </td>
                                                                        <th> Cost Price </th>
                                                                        <td> 00.00 </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th> Gross Markup Percentage </th>
                                                                        <td> 10% </td>
                                                                        <th> Gross Markup Amount </th>
                                                                        <td> 00.00 </td>
                                                                        <th> Net Profit Percentage</th>
                                                                        <td> 2 % </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Net Profit Amount</th>
                                                                        <td> 00.00 </td>
                                                                        <th>Profit </th>
                                                                        <td> </td>
                                                                        <th>Loss </th>
                                                                        <td> </td>
                                                                    </tr>


                                                                </table>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /small modal -->


                                            </td>

                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                            <div class="tab-pane fade" id="js-September-tab" role="tabpanel">
                                <table class="table table-bordered table-xs datatable-basic">
                                    <thead>
                                        <tr>
                                            <th style="width:5%;">SL</th>
                                            <th style="width:15%;">Date</th>
                                            <th style="width:20%;">Client / Principal</th>
                                            <th style="width:15%;">Sales </th>
                                            <th style="width:15%;">Profit / Loss</th>
                                            <th style="width:10%;">%</th>
                                            <th style="width:20%">Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> 01 </td>
                                            <td> 03-01-2023 </td>
                                            <td> Partner </td>
                                            <td> 2,898,764.00 </td>
                                            <td> 2,898,764.00 </td>
                                            <td> 12 % </td>
                                            <td class="text-center">
                                                <a href="#" class="text-primary" data-bs-toggle="modal"
                                                    data-bs-target="#modal_sale_profit_loss_update"><i
                                                        class="icon-pencil"></i> </a>
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#modal_details_September" class="text-primary"><i
                                                        class="ph-gear"></i> </a>
                                                <a href="#" class="text-danger delete"><i
                                                        class="delete icon-trash"></i> </a>

                                                <!-- Small modal -->
                                                <div id="modal_details_September" class="modal fade" tabindex="-1">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Sales Profit and Loss Details
                                                                    Information</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"></button>
                                                            </div>

                                                            <div class="modal-body">

                                                                <table class="table table-xs table-bordered">
                                                                    <tr>
                                                                        <th> Date </th>
                                                                        <td> 01-02-2023 </td>
                                                                        <th> RFQ ID </th>
                                                                        <td> dxfsdfd </td>
                                                                        <th> Client / Principal </th>
                                                                        <td> a </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Item Description </th>
                                                                        <td> a </td>
                                                                        <th>Sales Price </th>
                                                                        <td> 00.00 </td>
                                                                        <th> Cost Price </th>
                                                                        <td> 00.00 </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th> Gross Markup Percentage </th>
                                                                        <td> 10% </td>
                                                                        <th> Gross Markup Amount </th>
                                                                        <td> 00.00 </td>
                                                                        <th> Net Profit Percentage</th>
                                                                        <td> 2 % </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Net Profit Amount</th>
                                                                        <td> 00.00 </td>
                                                                        <th>Profit </th>
                                                                        <td> </td>
                                                                        <th>Loss </th>
                                                                        <td> </td>
                                                                    </tr>


                                                                </table>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /small modal -->


                                            </td>

                                        </tr>
                                    </tbody>
                                </table>

                            </div>

                            <div class="tab-pane fade" id="js-October-tab" role="tabpanel">

                                <table class="table table-bordered table-xs datatable-basic">
                                    <thead>
                                        <tr>
                                            <th style="width:5%;">SL</th>
                                            <th style="width:15%;">Date</th>
                                            <th style="width:20%;">Client / Principal</th>
                                            <th style="width:15%;">Sales </th>
                                            <th style="width:15%;">Profit / Loss</th>
                                            <th style="width:10%;">%</th>
                                            <th style="width:20%">Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> 01 </td>
                                            <td> 03-01-2023 </td>
                                            <td> Partner </td>
                                            <td> 2,898,764.00 </td>
                                            <td> 2,898,764.00 </td>
                                            <td> 12 % </td>
                                            <td class="text-center">
                                                <a href="#" class="text-primary" data-bs-toggle="modal"
                                                    data-bs-target="#modal_sale_profit_loss_update"><i
                                                        class="icon-pencil"></i> </a>
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#modal_details_Octorber" class="text-primary"><i
                                                        class="ph-gear"></i> </a>
                                                <a href="#" class="text-danger delete"><i
                                                        class="delete icon-trash"></i> </a>

                                                <!-- Small modal -->
                                                <div id="modal_details_Octorber" class="modal fade" tabindex="-1">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Sales Profit and Loss Details
                                                                    Information</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"></button>
                                                            </div>

                                                            <div class="modal-body">

                                                                <table class="table table-xs table-bordered">
                                                                    <tr>
                                                                        <th> Date </th>
                                                                        <td> 01-02-2023 </td>
                                                                        <th> RFQ ID </th>
                                                                        <td> dxfsdfd </td>
                                                                        <th> Client / Principal </th>
                                                                        <td> a </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Item Description </th>
                                                                        <td> a </td>
                                                                        <th>Sales Price </th>
                                                                        <td> 00.00 </td>
                                                                        <th> Cost Price </th>
                                                                        <td> 00.00 </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th> Gross Markup Percentage </th>
                                                                        <td> 10% </td>
                                                                        <th> Gross Markup Amount </th>
                                                                        <td> 00.00 </td>
                                                                        <th> Net Profit Percentage</th>
                                                                        <td> 2 % </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Net Profit Amount</th>
                                                                        <td> 00.00 </td>
                                                                        <th>Profit </th>
                                                                        <td> </td>
                                                                        <th>Loss </th>
                                                                        <td> </td>
                                                                    </tr>


                                                                </table>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /small modal -->


                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="tab-pane fade" id="js-November-tab" role="tabpanel">
                                <table class="table table-bordered table-xs datatable-basic">
                                    <thead>
                                        <tr>
                                            <th style="width:5%;">SL</th>
                                            <th style="width:15%;">Date</th>
                                            <th style="width:20%;">Client / Principal</th>
                                            <th style="width:15%;">Sales </th>
                                            <th style="width:15%;">Profit / Loss</th>
                                            <th style="width:10%;">%</th>
                                            <th style="width:20%">Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> 01 </td>
                                            <td> 03-01-2023 </td>
                                            <td> Partner </td>
                                            <td> 2,898,764.00 </td>
                                            <td> 2,898,764.00 </td>
                                            <td> 12 % </td>
                                            <td class="text-center">
                                                <a href="#" class="text-primary" data-bs-toggle="modal"
                                                    data-bs-target="#modal_sale_profit_loss_update"><i
                                                        class="icon-pencil"></i> </a>
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#modal_details_November" class="text-primary"><i
                                                        class="ph-gear"></i> </a>
                                                <a href="#" class="text-danger delete"><i
                                                        class="delete icon-trash"></i> </a>

                                                <!-- Small modal -->
                                                <div id="modal_details_November" class="modal fade" tabindex="-1">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Sales Profit and Loss Details
                                                                    Information</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"></button>
                                                            </div>

                                                            <div class="modal-body">

                                                                <table class="table table-xs table-bordered">
                                                                    <tr>
                                                                        <th> Date </th>
                                                                        <td> 01-02-2023 </td>
                                                                        <th> RFQ ID </th>
                                                                        <td> dxfsdfd </td>
                                                                        <th> Client / Principal </th>
                                                                        <td> a </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Item Description </th>
                                                                        <td> a </td>
                                                                        <th>Sales Price </th>
                                                                        <td> 00.00 </td>
                                                                        <th> Cost Price </th>
                                                                        <td> 00.00 </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th> Gross Markup Percentage </th>
                                                                        <td> 10% </td>
                                                                        <th> Gross Markup Amount </th>
                                                                        <td> 00.00 </td>
                                                                        <th> Net Profit Percentage</th>
                                                                        <td> 2 % </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Net Profit Amount</th>
                                                                        <td> 00.00 </td>
                                                                        <th>Profit </th>
                                                                        <td> </td>
                                                                        <th>Loss </th>
                                                                        <td> </td>
                                                                    </tr>


                                                                </table>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /small modal -->


                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="tab-pane fade" id="js-December-tab" role="tabpanel">
                                <table class="table table-bordered table-xs datatable-basic">
                                    <thead>
                                        <tr>
                                            <th style="width:5%;">SL</th>
                                            <th style="width:15%;">Date</th>
                                            <th style="width:20%;">Client / Principal</th>
                                            <th style="width:15%;">Sales </th>
                                            <th style="width:15%;">Profit / Loss</th>
                                            <th style="width:10%;">%</th>
                                            <th style="width:20%">Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> 01 </td>
                                            <td> 03-01-2023 </td>
                                            <td> Partner </td>
                                            <td> 2,898,764.00 </td>
                                            <td> 2,898,764.00 </td>
                                            <td> 12 % </td>
                                            <td class="text-center">
                                                <a href="#" class="text-primary" data-bs-toggle="modal"
                                                    data-bs-target="#modal_sale_profit_loss_update"><i
                                                        class="icon-pencil"></i> </a>
                                                <a href="#" data-bs-toggle="modal"
                                                    data-bs-target="#modal_details_December" class="text-primary"><i
                                                        class="ph-gear"></i> </a>
                                                <a href="#" class="text-danger delete"><i
                                                        class="delete icon-trash"></i> </a>

                                                <!-- Small modal -->
                                                <div id="modal_details_December" class="modal fade" tabindex="-1">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Sales Profit and Loss Details
                                                                    Information</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"></button>
                                                            </div>

                                                            <div class="modal-body">

                                                                <table class="table table-xs table-bordered">
                                                                    <tr>
                                                                        <th> Date </th>
                                                                        <td> 01-02-2023 </td>
                                                                        <th> RFQ ID </th>
                                                                        <td> dxfsdfd </td>
                                                                        <th> Client / Principal </th>
                                                                        <td> a </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Item Description </th>
                                                                        <td> a </td>
                                                                        <th>Sales Price </th>
                                                                        <td> 00.00 </td>
                                                                        <th> Cost Price </th>
                                                                        <td> 00.00 </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <th> Gross Markup Percentage </th>
                                                                        <td> 10% </td>
                                                                        <th> Gross Markup Amount </th>
                                                                        <td> 00.00 </td>
                                                                        <th> Net Profit Percentage</th>
                                                                        <td> 2 % </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Net Profit Amount</th>
                                                                        <td> 00.00 </td>
                                                                        <th>Profit </th>
                                                                        <td> </td>
                                                                        <th>Loss </th>
                                                                        <td> </td>
                                                                    </tr>


                                                                </table>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /small modal -->


                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>


                        <!-- monthly table view End  -->




                    </div>


                </div>

            </div>


        </div>
        <!-- /content area -->








        <!-- Footer -->
        <div class="navbar navbar-sm navbar-footer border-top">
            <div class="container-fluid">
                <span>&copy; 2022 <a
                        href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328">NGenIT</a></span>

                <ul class="nav">
                    <li class="nav-item">
                        <a href="https://kopyov.ticksy.com/" class="navbar-nav-link navbar-nav-link-icon rounded"
                            target="_blank">
                            <div class="d-flex align-items-center mx-md-1">
                                <i class="ph-lifebuoy"></i>
                                <span class="d-none d-md-inline-block ms-2">Support</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item ms-md-1">
                        <a href="https://demo.interface.club/limitless/demo/Documentation/index.html"
                            class="navbar-nav-link navbar-nav-link-icon rounded" target="_blank">
                            <div class="d-flex align-items-center mx-md-1">
                                <i class="ph-file-text"></i>
                                <span class="d-none d-md-inline-block ms-2">Docs</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item ms-md-1">
                        <a href="https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov"
                            class="navbar-nav-link navbar-nav-link-icon text-primary bg-primary bg-opacity-10 fw-semibold rounded"
                            target="_blank">
                            <div class="d-flex align-items-center mx-md-1">
                                <i class="ph-shopping-cart"></i>
                                <span class="d-none d-md-inline-block ms-2">Purchase</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /footer -->

    </div>
    <!-- /inner content -->

    </div>
@endsection
