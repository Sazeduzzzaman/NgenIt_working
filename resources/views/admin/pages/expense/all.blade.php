@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <div class="content">
            <!-- Table components -->
            <div class="card">
                <h3 class="text-center mt-2"> Expense </h3>
                <div class="col-lg-12 float-start">
                    <div class="col-lg-8 offset-lg-2 float-start  mb-1">
                        <!-- insite menu start-->
                        <ul class="nav nav-pills nav-pills-outline nav-pills-toolbar">
                            <li class="nav-item">
                                <a href="{{ route('income-expense.overview') }}" class="nav-link">Overview</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('income-expense.ledger') }}" class="nav-link">Ledger Book</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('income.index') }}" class="nav-link">Income</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('expense.index') }}" class="nav-link active">Expense</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="true">Cataagorical</a>
                                <div class="dropdown-menu dropdown-menu-end" data-popper-placement="top-end"
                                    style="position: absolute; inset: auto 0px 0px auto; margin: 0px; transform: translate(0px, -46px);">
                                    <a href="cataagorical.html" class="dropdown-item">Cataagorical</a>
                                    <a href="cataagorical.html" class="dropdown-item">Debts</a>
                                </div>
                            </li>
                        </ul>
                        <!-- insite menu end-->
                    </div>
                    <div class="col-lg-2 float-start">
                        <button type="button" class="btn bg-warning float-end text-white me-2" data-bs-toggle="modal"
                            data-bs-target="#modal_expense"> <i class="ph-plus-circle ph-1x"></i></button>
                    </div>
                </div>
                <!-- model-start for Submit-->
                <form action="{{ route('expense.store') }}" class="form-validate-jquery" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div id="modal_expense" class="modal fade" tabindex="-1">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-center">Expense Information</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-xs table-borderless table-responsive">
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="date"> Date <strong class="text-danger">*</strong>
                                                    </label>
                                                    <input type="date" name="date" id="date"
                                                        class="form-control form-control-sm" required>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="month"> Month <strong class="text-danger">*</strong>
                                                    </label>
                                                    <select name="month" id="month"
                                                        class="form-control form-control-sm" required>
                                                        <option >--select--</option>
                                                        <option value="january"> January</option>
                                                        <option value="february"> February</option>
                                                        <option value="march"> March</option>
                                                        <option value="april"> April</option>
                                                        <option value="may"> May</option>
                                                        <option value="june"> June</option>
                                                        <option value="july"> July</option>
                                                        <option value="august"> August</option>
                                                        <option value="september"> September</option>
                                                        <option value="october"> October</option>
                                                        <option value="november"> November</option>
                                                        <option value="december"> December</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="category"> Category <strong
                                                            class="text-danger">*</strong></label>
                                                    <select name="category" id="category"
                                                        class="form-control form-control-sm">
                                                        <option value="">--select--</option>
                                                        <option value="office_rent"> Office Rent</option>
                                                        <option value="utility_bills"> Utility Bills </option>
                                                        <option value="service_bill"> Service Bill</option>
                                                        <option value="sales_cog"> Sales CoG </option>
                                                        <option value="purchase"> Purchase </option>
                                                        <option value="marketing"> Marketing </option>
                                                        <option value="remuneration"> Remuneration </option>
                                                        <option value="conveyance"> Conveyance </option>
                                                        <option value="groceries"> Stationariers </option>
                                                        <option value="groceries"> Groceries </option>
                                                        <option value="old_debts ">Old / Debts </option>
                                                        <option value="incentives">Incentives </option>
                                                        <option value="return">Return </option>
                                                        <option value="tender_securities">Tender Securities
                                                        </option>
                                                        <option value="md_personal">Md Personal </option>
                                                        <option value="outstrading">Outstrading </option>
                                                        <option value="travel_tour">Travel / Tour </option>
                                                        <option value="entertainment"> Entertainment </option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="type"> Type <strong
                                                            class="text-danger">*</strong></label>
                                                    <select name="type" id="type"
                                                        class="form-control form-control-sm">
                                                        <option value="">--select--</option>
                                                        <option value="loan"> Loan</option>
                                                        <option value="house">House</option>
                                                        <option value="electricity"> Electricity </option>
                                                        <option value="water"> Water </option>
                                                        <option value="telephone_mobile"> Telephone/Mobile
                                                        </option>
                                                        <option value="internet"> Internet </option>
                                                        <option value="entertainment"> Entertainment </option>
                                                        <option value="repairing"> Repairing </option>
                                                        <option value="furniture"> Furniture </option>
                                                        <option value="accessories"> Accessories </option>
                                                        <option value="equipments ">Equipments </option>
                                                        <option value="electric"> Electric </option>
                                                        <option value="advertisements"> Advertisements </option>
                                                        <option value="other_Service">Other's Service
                                                        </option>
                                                        <option value="maintenance">Maintenance</option>
                                                        <option value="sale_pro">Sales Pro </option>
                                                        <option value="outside_pro">Outside Pro </option>
                                                        <option value="mkt_com_op">Mkt/Com/Op </option>
                                                        <option value="card_expense">Card Expense </option>
                                                        <option value="consultancy_fee">Consultancy Fee
                                                        </option>
                                                        <option value="monthly_selary">Monthly Selary </option>
                                                        <option value="wages">Wages</option>
                                                        <option value="asset">Asset</option>
                                                        <option value="items">Items</option>
                                                        <option value="mescellinuous">Mescellinuous</option>
                                                        <option value="delivery">Delivery</option>
                                                        <option value="monthly">Monthly</option>
                                                        <option value="job_circular">Job circular</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="particulars"> Particulars <strong
                                                            class="text-danger">*</strong> </label>
                                                    <input type="text" name="particulars" id="particulars"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="voucher">Voucher </label>
                                                    <input type="file" name="voucher"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="amount"> Amount <strong class="text-danger">*</strong>
                                                    </label>
                                                    <input type="text" name="amount" id="amount"
                                                        placeholder="00.00" class="form-control form-control-sm">
                                                </div>
                                            </td>
                                            <td colspan="2">
                                                <div class="form-group">
                                                    <label for="comment">Comment </label>
                                                    <input type="text" name="comment" id="comment"
                                                        placeholder="Comment" class="form-control form-control-sm">
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                </form>
                <!-- model-end -->
            </div>
        </div>
        <!-- tab menu start-->
        <ul class="nav nav-tabs mb-3" role="tablist">
            <li class="nav-item" role="presentation">
                <a href="#js-All-Expense-tab" class="nav-link active" data-bs-toggle="tab" aria-selected="true"
                    role="tab" tabindex="-1">
                    All Expense
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#js-January-tab" class="nav-link" data-bs-toggle="tab" aria-selected="true" role="tab"
                    tabindex="-1">
                    Jan
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#js-February-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab"
                    tabindex="-1">
                    Feb
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#js-March-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="March"
                    tabindex="-1">
                    Mar
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#js-April-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab"
                    tabindex="-1">
                    Apr
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#js-May-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab"
                    tabindex="-1">
                    May
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#js-June-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab"
                    tabindex="-1">
                    Jun
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#js-July-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab"
                    tabindex="-1">
                    Jul
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#js-August-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab"
                    tabindex="-1">
                    Aug
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#js-September-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab"
                    tabindex="-1">
                    Sep
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#js-October-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab"
                    tabindex="-1">
                    Oct
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#js-November-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab"
                    tabindex="-1">
                    Nov
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#js-December-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab"
                    tabindex="-1">
                    Dec
                </a>
            </li>
        </ul>
        <!-- tab menu end -->
        <div class="card">
            <!-- Tab start -->
            <div class="card-body">
                <div class="tab-content table-responsive">
                    <div class="tab-pane fade active show" id="js-All-Expense-tab" role="tabpanel">
                        <table class="table table-bordered table-xs datatable-basic">
                            <thead>
                                <tr class="text-small">
                                    <th style="width:10%;">SL.No</th>
                                    <th style="width:15%;">Particulars</th>
                                    <th style="width:12%;">Date</th>
                                    <th style="width:15%;">Month</th>
                                    <th style="width:20%;">Amount</th>
                                    <th style="width:15%;">Category</th>
                                    <th style="width:13%"> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($expenses)
                                    @foreach ($expenses as $key => $expense)
                                        <tr>
                                            <td>{{ ++$key }} </td>
                                            <td> {{ $expense->particulars }}</td>
                                            <td> {{ $expense->date }}</td>
                                            <td> {{ $expense->month }}</td>
                                            <td> {{ $expense->amount }}</td>
                                            <td> {{ $expense->category }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                    class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('expense.destroy', [$expense->id]) }}"
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
                    <div class="tab-pane fade" id="js-January-tab" role="tabpanel">
                        <table class="table january table-bordered table-xs datatable-basic">
                            <thead>
                                <tr class="text-small">
                                    <th style="width:10%;">SL.No</th>
                                    <th style="width:15%;">Particulars</th>
                                    <th style="width:12%;">Date</th>
                                    <th style="width:15%;">Month</th>
                                    <th style="width:20%;">Amount</th>
                                    <th style="width:15%;">Category</th>
                                    <th style="width:13%"> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($expenses as $key => $expense)
                                    @if ($expense->created_at->format('F') == 'January')
                                        <tr>
                                            <td>{{ ++$key }} </td>
                                            <td> {{ $expense->particulars }}</td>
                                            <td> {{ $expense->date }}</td>
                                            <td> {{ $expense->month }}</td>
                                            <td> {{ $expense->amount }}</td>
                                            <td> {{ $expense->category }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                    class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('expense.destroy', [$expense->id]) }}"
                                                    class="text-danger delete mx-2">
                                                    <i class="delete icon-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="js-February-tab" role="tabpanel">
                        <table class="table february table-bordered table-xs datatable-basic">
                            <thead>
                                <tr class="text-small">
                                    <th style="width:10%;">SL.No</th>
                                    <th style="width:15%;">Particulars</th>
                                    <th style="width:12%;">Date</th>
                                    <th style="width:15%;">Month</th>
                                    <th style="width:20%;">Amount</th>
                                    <th style="width:15%;">Category</th>
                                    <th style="width:13%"> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($expenses as $key => $expense)
                                    @if ($expense->created_at->format('F') == 'February')
                                        <tr>
                                            <td>{{ ++$key }} </td>
                                            <td> {{ $expense->particulars }}</td>
                                            <td> {{ $expense->date }}</td>
                                            <td> {{ $expense->month }}</td>
                                            <td> {{ $expense->amount }}</td>
                                            <td> {{ $expense->category }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                    class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('expense.destroy', [$expense->id]) }}"
                                                    class="text-danger delete mx-2">
                                                    <i class="delete icon-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="js-March-tab" role="tabpanel">
                        <table class="table march table-bordered table-xs datatable-basic">
                            <thead>
                                <tr class="text-small">
                                    <th style="width:10%;">SL.No</th>
                                    <th style="width:15%;">Particulars</th>
                                    <th style="width:12%;">Date</th>
                                    <th style="width:15%;">Month</th>
                                    <th style="width:20%;">Amount</th>
                                    <th style="width:15%;">Category</th>
                                    <th style="width:13%"> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($expenses as $key => $expense)
                                    @if ($expense->created_at->format('F') == 'March')
                                        <tr>
                                            <td>{{ ++$key }} </td>
                                            <td> {{ $expense->particulars }}</td>
                                            <td> {{ $expense->date }}</td>
                                            <td> {{ $expense->month }}</td>
                                            <td> {{ $expense->amount }}</td>
                                            <td> {{ $expense->category }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                    class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('expense.destroy', [$expense->id]) }}"
                                                    class="text-danger delete mx-2">
                                                    <i class="delete icon-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="js-April-tab" role="tabpanel">
                        <table class="table april table-bordered table-xs datatable-basic">
                            <thead>
                                <tr class="text-small">
                                    <th style="width:10%;">SL.No</th>
                                    <th style="width:15%;">Particulars</th>
                                    <th style="width:12%;">Date</th>
                                    <th style="width:15%;">Month</th>
                                    <th style="width:20%;">Amount</th>
                                    <th style="width:15%;">Category</th>
                                    <th style="width:13%"> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($expenses as $key => $expense)
                                    @if ($expense->created_at->format('F') == 'April')
                                        <tr>
                                            <td>{{ ++$key }} </td>
                                            <td> {{ $expense->particulars }}</td>
                                            <td> {{ $expense->date }}</td>
                                            <td> {{ $expense->month }}</td>
                                            <td> {{ $expense->amount }}</td>
                                            <td> {{ $expense->category }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                    class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('expense.destroy', [$expense->id]) }}"
                                                    class="text-danger delete mx-2">
                                                    <i class="delete icon-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="js-May-tab" role="tabpanel">
                        <table class="table may table-bordered table-xs datatable-basic">
                            <thead>
                                <tr class="text-small">
                                    <th style="width:10%;">SL.No</th>
                                    <th style="width:15%;">Particulars</th>
                                    <th style="width:12%;">Date</th>
                                    <th style="width:15%;">Month</th>
                                    <th style="width:20%;">Amount</th>
                                    <th style="width:15%;">Category</th>
                                    <th style="width:13%"> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($expenses as $key => $expense)
                                    @if ($expense->created_at->format('F') == 'May')
                                        <tr>
                                            <td>{{ ++$key }} </td>
                                            <td> {{ $expense->particulars }}</td>
                                            <td> {{ $expense->date }}</td>
                                            <td> {{ $expense->month }}</td>
                                            <td> {{ $expense->amount }}</td>
                                            <td> {{ $expense->category }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                    class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('expense.destroy', [$expense->id]) }}"
                                                    class="text-danger delete mx-2">
                                                    <i class="delete icon-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="js-June-tab" role="tabpanel">
                        <table class="table june table-bordered table-xs datatable-basic">
                            <thead>
                                <tr class="text-small">
                                    <th style="width:10%;">SL.No</th>
                                    <th style="width:15%;">Particulars</th>
                                    <th style="width:12%;">Date</th>
                                    <th style="width:15%;">Month</th>
                                    <th style="width:20%;">Amount</th>
                                    <th style="width:15%;">Category</th>
                                    <th style="width:13%"> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($expenses as $key => $expense)
                                    @if ($expense->created_at->format('F') == 'June')
                                        <tr>
                                            <td>{{ ++$key }} </td>
                                            <td> {{ $expense->particulars }}</td>
                                            <td> {{ $expense->date }}</td>
                                            <td> {{ $expense->month }}</td>
                                            <td> {{ $expense->amount }}</td>
                                            <td> {{ $expense->category }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                    class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('expense.destroy', [$expense->id]) }}"
                                                    class="text-danger delete mx-2">
                                                    <i class="delete icon-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="js-July-tab" role="tabpanel">
                        <table class="table july table-bordered table-xs datatable-basic">
                            <thead>
                                <tr class="text-small">
                                    <th style="width:10%;">SL.No</th>
                                    <th style="width:15%;">Particulars</th>
                                    <th style="width:12%;">Date</th>
                                    <th style="width:15%;">Month</th>
                                    <th style="width:20%;">Amount</th>
                                    <th style="width:15%;">Category</th>
                                    <th style="width:13%"> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($expenses as $key => $expense)
                                    @if ($expense->created_at->format('F') == 'July')
                                        <tr>
                                            <td>{{ ++$key }} </td>
                                            <td> {{ $expense->particulars }}</td>
                                            <td> {{ $expense->date }}</td>
                                            <td> {{ $expense->month }}</td>
                                            <td> {{ $expense->amount }}</td>
                                            <td> {{ $expense->category }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                    class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('expense.destroy', [$expense->id]) }}"
                                                    class="text-danger delete mx-2">
                                                    <i class="delete icon-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="js-August-tab" role="tabpanel">
                        <table class="table august table-bordered table-xs datatable-basic">
                            <thead>
                                <tr class="text-small">
                                    <th style="width:10%;">SL.No</th>
                                    <th style="width:15%;">Particulars</th>
                                    <th style="width:12%;">Date</th>
                                    <th style="width:15%;">Month</th>
                                    <th style="width:20%;">Amount</th>
                                    <th style="width:15%;">Category</th>
                                    <th style="width:13%"> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($expenses as $key => $expense)
                                    @if ($expense->created_at->format('F') == 'August')
                                        <tr>
                                            <td>{{ ++$key }} </td>
                                            <td> {{ $expense->particulars }}</td>
                                            <td> {{ $expense->date }}</td>
                                            <td> {{ $expense->month }}</td>
                                            <td> {{ $expense->amount }}</td>
                                            <td> {{ $expense->category }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                    class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('expense.destroy', [$expense->id]) }}"
                                                    class="text-danger delete mx-2">
                                                    <i class="delete icon-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="js-September-tab" role="tabpanel">
                        <table class="table september table-bordered table-xs datatable-basic">
                            <thead>
                                <tr class="text-small">
                                    <th style="width:10%;">SL.No</th>
                                    <th style="width:15%;">Particulars</th>
                                    <th style="width:12%;">Date</th>
                                    <th style="width:15%;">Month</th>
                                    <th style="width:20%;">Amount</th>
                                    <th style="width:15%;">Category</th>
                                    <th style="width:13%"> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($expenses as $key => $expense)
                                    @if ($expense->created_at->format('F') == 'September')
                                        <tr>
                                            <td>{{ ++$key }} </td>
                                            <td> {{ $expense->particulars }}</td>
                                            <td> {{ $expense->date }}</td>
                                            <td> {{ $expense->month }}</td>
                                            <td> {{ $expense->amount }}</td>
                                            <td> {{ $expense->category }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                    class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('expense.destroy', [$expense->id]) }}"
                                                    class="text-danger delete mx-2">
                                                    <i class="delete icon-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="js-October-tab" role="tabpanel">
                        <table class="table october table-bordered table-xs datatable-basic">
                            <thead>
                                <tr class="text-small">
                                    <th style="width:10%;">SL.No</th>
                                    <th style="width:15%;">Particulars</th>
                                    <th style="width:12%;">Date</th>
                                    <th style="width:15%;">Month</th>
                                    <th style="width:20%;">Amount</th>
                                    <th style="width:15%;">Category</th>
                                    <th style="width:13%"> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($expenses as $key => $expense)
                                    @if ($expense->created_at->format('F') == 'October')
                                        <tr>
                                            <td>{{ ++$key }} </td>
                                            <td> {{ $expense->particulars }}</td>
                                            <td> {{ $expense->date }}</td>
                                            <td> {{ $expense->month }}</td>
                                            <td> {{ $expense->amount }}</td>
                                            <td> {{ $expense->category }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                    class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('expense.destroy', [$expense->id]) }}"
                                                    class="text-danger delete mx-2">
                                                    <i class="delete icon-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="js-November-tab" role="tabpanel">
                        <table class="table november table-bordered table-xs datatable-basic">
                            <thead>
                                <tr class="text-small">
                                    <th style="width:10%;">SL.No</th>
                                    <th style="width:15%;">Particulars</th>
                                    <th style="width:12%;">Date</th>
                                    <th style="width:15%;">Month</th>
                                    <th style="width:20%;">Amount</th>
                                    <th style="width:15%;">Category</th>
                                    <th style="width:13%"> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($expenses as $key => $expense)
                                    @if ($expense->created_at->format('F') == 'November')
                                        <tr>
                                            <td>{{ ++$key }} </td>
                                            <td> {{ $expense->particulars }}</td>
                                            <td> {{ $expense->date }}</td>
                                            <td> {{ $expense->month }}</td>
                                            <td> {{ $expense->amount }}</td>
                                            <td> {{ $expense->category }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                    class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('expense.destroy', [$expense->id]) }}"
                                                    class="text-danger delete mx-2">
                                                    <i class="delete icon-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="js-December-tab" role="tabpanel">
                        <table class="table december table-bordered table-xs datatable-basic">
                            <thead>
                                <tr class="text-small">
                                    <th style="width:10%;">SL.No</th>
                                    <th style="width:15%;">Particulars</th>
                                    <th style="width:12%;">Date</th>
                                    <th style="width:15%;">Month</th>
                                    <th style="width:20%;">Amount</th>
                                    <th style="width:15%;">Category</th>
                                    <th style="width:13%"> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($expenses as $key => $expense)
                                    @if ($expense->created_at->format('F') == 'December')
                                        <tr>
                                            <td>{{ ++$key }} </td>
                                            <td> {{ $expense->particulars }}</td>
                                            <td> {{ $expense->date }}</td>
                                            <td> {{ $expense->month }}</td>
                                            <td> {{ $expense->amount }}</td>
                                            <td> {{ $expense->category }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('expense.edit', [$expense->id]) }}"
                                                    class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('expense.destroy', [$expense->id]) }}"
                                                    class="text-danger delete mx-2">
                                                    <i class="delete icon-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- model-start for Update-->
                {{-- <form action="{{ route('expense.update') }}" class="form-validate-jquery" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div id="modal_expense_edit" class="modal fade" tabindex="-1">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-center">Edit Expense Information</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-xs table-borderless table-responsive">
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="RFQID"> Date <strong class="text-danger">*</strong>
                                                    </label>
                                                    <input type="date" name="date" id="date"
                                                        class="form-control form-control-sm" required>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="monthEdit"> Month <strong class="text-danger">*</strong>
                                                    </label>
                                                    <select name="month" id="monthEdit"
                                                        class="form-control form-control-sm" required>
                                                        <option value="">--select--</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="C"> C <strong
                                                            class="text-danger">*</strong></label>
                                                    <select name="C" id="C"
                                                        class="form-control form-control-sm">
                                                        <option value="">--select--</option>
                                                        <option value="office_rent"> Office Rent</option>
                                                        <option value="utility_bills"> Utility Bills </option>
                                                        <option value="service_bill"> Service Bill</option>
                                                        <option value="sales_cog"> Sales CoG </option>
                                                        <option value="purchase"> Purchase </option>
                                                        <option value="marketing"> Marketing </option>
                                                        <option value="remuneration"> Remuneration </option>
                                                        <option value="conveyance"> Conveyance </option>
                                                        <option value="groceries"> Stationariers </option>
                                                        <option value="groceries"> Groceries </option>
                                                        <option value="old_debts ">Old / Debts </option>
                                                        <option value="incentives">Incentives </option>
                                                        <option value="return">Return </option>
                                                        <option value="tender_securities">Tender Securities
                                                        </option>
                                                        <option value="md_personal">Md Personal </option>
                                                        <option value="outstrading">Outstrading </option>
                                                        <option value="travel_tour">Travel / Tour </option>
                                                        <option value="entertainment"> Entertainment </option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="type"> Type <strong
                                                            class="text-danger">*</strong></label>
                                                    <select name="type" id="type"
                                                        class="form-control form-control-sm">
                                                        <option value="">--select--</option>
                                                        <option value="loan"> Loan</option>
                                                        <option value="house">House</option>
                                                        <option value="electricity"> Electricity </option>
                                                        <option value="water"> Water </option>
                                                        <option value="telephone_mobile"> Telephone/Mobile
                                                        </option>
                                                        <option value="internet"> Internet </option>
                                                        <option value="entertainment"> Entertainment </option>
                                                        <option value="repairing"> Repairing </option>
                                                        <option value="furniture"> Furniture </option>
                                                        <option value="accessories"> Accessories </option>
                                                        <option value="equipments ">Equipments </option>
                                                        <option value="electric"> Electric </option>
                                                        <option value="advertisements"> Advertisements </option>
                                                        <option value="other_Service">Other's Service
                                                        </option>
                                                        <option value="maintenance">Maintenance</option>
                                                        <option value="sale_pro">Sales Pro </option>
                                                        <option value="outside_pro">Outside Pro </option>
                                                        <option value="mkt_com_op">Mkt/Com/Op </option>
                                                        <option value="card_expense">Card Expense </option>
                                                        <option value="consultancy_fee">Consultancy Fee
                                                        </option>
                                                        <option value="monthly_selary">Monthly Selary </option>
                                                        <option value="wages">Wages</option>
                                                        <option value="asset">Asset</option>
                                                        <option value="items">Items</option>
                                                        <option value="mescellinuous">Mescellinuous</option>
                                                        <option value="delivery">Delivery</option>
                                                        <option value="monthly">Monthly</option>
                                                        <option value="job_circular">Job circular</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="particulars"> Particulars <strong
                                                            class="text-danger">*</strong> </label>
                                                    <input type="text" name="particulars" id="particulars"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="voucher">Voucher </label>
                                                    <input type="file" name="voucher" id="voucher"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="amount"> Amount <strong class="text-danger">*</strong>
                                                    </label>
                                                    <input type="text" name="amount" id="amount"
                                                        placeholder="00.00" class="form-control form-control-sm">
                                                </div>
                                            </td>
                                            <td colspan="2">
                                                <div class="form-group">
                                                    <label for="comment">Comment </label>
                                                    <input type="text" name="comment" id="comment"
                                                        placeholder="Comment" class="form-control form-control-sm">
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-link" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                </form> --}}
                <!-- model-end -->
            </div>
            <!-- end cart body -->
        </div>
    </div>
    </div>
    </div>
@endsection


@push('scripts')
    <script>
        // Initialize
        const validator = $('.form-validate-jquery').validate({
            ignore: 'input[type=hidden], .select2-search__field', // ignore hidden fields
            errorClass: 'validation-invalid-label',
            successClass: 'validation-valid-label',
            validClass: 'validation-valid-label',
            highlight: function(element, errorClass) {
                $(element).removeClass(errorClass);
            },
            unhighlight: function(element, errorClass) {
                $(element).removeClass(errorClass);
            },
            success: function(label) {
                label.addClass('validation-valid-label').text('success.'); // remove to hide Success message
            },

            // Different components require proper error label placement
            errorPlacement: function(error, element) {

                // Input with icons and Select2
                if (element.hasClass('select2-hidden-accessible')) {
                    error.appendTo(element.parent());
                }

                // Input group, form checks and custom controls
                else if (element.parents().hasClass('form-control-feedback') || element.parents().hasClass(
                        'form-check') || element.parents().hasClass('input-group')) {
                    error.appendTo(element.parent().parent());
                }

                // Other elements
                else {
                    error.insertAfter(element);
                }
            },
            rules: {
                amount: {
                    number: true
                },
            },
        });


        $('.january, .february, .march, .april, .may, .june, .july, .august, .september, .october, .november, .december')
            .DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 26, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [6],
                }, ],
            });
    </script>
@endpush
