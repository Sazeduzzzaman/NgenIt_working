@extends('admin.master')
@section('content')
    <div class="content-wrapper">
        <div class="content">
            <!-- Table components -->
            <div class="card">
                <h3 class="text-center mt-2"> Income </h3>
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
                                <a href="{{ route('income.index') }}" class="nav-link active">Income</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('expense.index') }}" class="nav-link">Expense</a>
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
                            data-bs-target="#modal_income"> <i class="ph-plus-circle ph-1x"></i></button>
                    </div>
                </div>
                <!-- model-start for Submit-->
                <form action="{{ route('income.store') }}" class="form-validate-jquery" method="post">
                    @csrf
                    <div id="modal_income" class="modal fade" tabindex="-1">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-center">Income Information</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <table class="table -xs table-borderless table-responsive">
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="rfq_id"> RFQ ID <strong class="text-danger">*</strong>
                                                    </label>
                                                    <select name="rfq_id" id="rfq_id"
                                                        class="form-control form-control-sm" required>
                                                        <option>--select--</option>
                                                        @foreach ($rfqs as $rfq)
                                                            <option value="{{ $rfq->id }}"> {{ $rfq->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="order_id"> ORDER ID <strong class="text-danger">*</strong>
                                                    </label>
                                                    <select name="order_id" id="order_id"
                                                        class="form-control form-control-sm">
                                                        @foreach ($orders as $order)
                                                            <option value="{{ $order->id }}">
                                                                {{ $order->order_number . $order->client_type . App\Models\Client\Client::where('id', $order->client_id) }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="date">Date <strong class="text-danger">*</strong>
                                                    </label>
                                                    <input type="date" name="date" id="date" placeholder=""
                                                        class="form-control form-control-sm" required>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="month"> Month <strong class="text-danger">*</strong>
                                                    </label>
                                                    <select name="month" id="month"
                                                        class="form-control form-control-sm" required>
                                                        <option>--select--</option>
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
                                                    <label for="po_reference"> PO Reference <strong
                                                            class="text-danger">*</strong> </label>
                                                    <input type="text" name="po_reference" id="po_reference"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="type"> Type <strong class="text-danger">*</strong>
                                                    </label>
                                                    <select name="type" id="type"
                                                        class="form-control form-control-sm">
                                                        <option>--select--</option>
                                                        <option value="corporate"> Corporate</option>
                                                        <option value="online"> Online </option>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="client_name">Client Name <strong
                                                            class="text-danger">*</strong> </label>
                                                    <input type="text" name="client_name" id="client_name"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="amount"> Amount <strong class="text-danger">*</strong>
                                                    </label>
                                                    <input type="text" name="amount" id="amount"
                                                        placeholder="00.00" class="form-control form-control-sm">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="received_value">Received Amount <strong
                                                            class="text-danger">*</strong> </label>
                                                    <input type="text" name="received_value" id="received_value"
                                                        placeholder="00.00" class="form-control form-control-sm">
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
                <a href="#js-Income-all-tab" class="nav-link active" data-bs-toggle="tab" aria-selected="true"
                    role="tab" tabindex="-1">
                    All Income
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
                    <div class="tab-pane fade active show" id="js-Income-all-tab" role="tabpanel">
                        <table class="table table-bordered table-xs datatable-basic">
                            <thead>
                                <tr class="text-small">
                                    <th style="width:5%;">ID</th>
                                    <th style="width:15%;">RFQ Name</th>
                                    <th style="width:10%;">Date</th>
                                    <th style="width:10%"> Month </th>
                                    <th style="width:15%;">PO Ref.</th>
                                    <th style="width:15%;">Client Name</th>
                                    <th style="width:5%;">Type</th>
                                    <th style="width:10%"> Amount </th>
                                    <th style="width:5%;">Received Value</th>
                                    <th style="width:10%"> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($incomes)
                                    @foreach ($incomes as $key => $income)
                                        <tr>
                                            <td>{{ ++$key }} </td>
                                            <td> {{ app\Models\Admin\RfQ::where('id', $income->rfq_id)->value('name') }}
                                            </td>
                                            <td> {{ $income->date }}</td>
                                            <td> {{ $income->month }}</td>
                                            <td> {{ $income->po_reference }}</td>
                                            <td> {{ $income->client_name }}</td>
                                            <td> {{ $income->type }}</td>
                                            <td> {{ $income->amount }}</td>
                                            <td> {{ $income->received_value }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('income.edit', [$income->id]) }}" class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('income.destroy', [$income->id]) }}"
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
                        <table class="table january  table-bordered table-xs datatable-basic">
                            <thead>
                                <tr class="text-small">
                                    <th style="width:5%;">ID</th>
                                    <th style="width:15%;">RFQ Name</th>
                                    <th style="width:10%;">Date</th>
                                    <th style="width:10%"> Month </th>
                                    <th style="width:15%;">PO Ref.</th>
                                    <th style="width:15%;">Client Name</th>
                                    <th style="width:5%;">Type</th>
                                    <th style="width:10%"> Amount </th>
                                    <th style="width:5%;">Received Value</th>
                                    <th style="width:10%"> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($incomes as $key => $income)
                                    @if ($income->created_at->format('F') == 'January')
                                        <tr>
                                            <td>{{ ++$key }} </td>
                                            <td> {{ app\Models\Admin\RfQ::where('id', $income->rfq_id)->value('name') }}
                                            </td>
                                            <td> {{ $income->date }}</td>
                                            <td> {{ $income->month }}</td>
                                            <td> {{ $income->po_reference }}</td>
                                            <td> {{ $income->client_name }}</td>
                                            <td> {{ $income->type }}</td>
                                            <td> {{ $income->amount }}</td>
                                            <td> {{ $income->received_value }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('income.edit', [$income->id]) }}" class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('income.destroy', [$income->id]) }}"
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
                        <table class="table february  table-bordered table-xs datatable-basic">
                            <thead>
                                <tr class="text-small">
                                    <th style="width:5%;">ID</th>
                                    <th style="width:15%;">RFQ Name</th>
                                    <th style="width:10%;">Date</th>
                                    <th style="width:10%"> Month </th>
                                    <th style="width:15%;">PO Ref.</th>
                                    <th style="width:15%;">Client Name</th>
                                    <th style="width:5%;">Type</th>
                                    <th style="width:10%"> Amount </th>
                                    <th style="width:5%;">Received Value</th>
                                    <th style="width:10%"> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($incomes as $key => $income)
                                    @if ($income->created_at->format('F') == 'February')
                                        <tr>
                                            <td>{{ ++$key }} </td>
                                            <td> {{ app\Models\Admin\RfQ::where('id', $income->rfq_id)->value('name') }}
                                            </td>
                                            <td> {{ $income->date }}</td>
                                            <td> {{ $income->month }}</td>
                                            <td> {{ $income->po_reference }}</td>
                                            <td> {{ $income->client_name }}</td>
                                            <td> {{ $income->type }}</td>
                                            <td> {{ $income->amount }}</td>
                                            <td> {{ $income->received_value }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('income.edit', [$income->id]) }}" class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('income.destroy', [$income->id]) }}"
                                                    class="text-danger delete mx-2">
                                                    <i class="delete icon-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="js-March-tab" role="tabpanel">
                        <table class="table march  table-bordered table-xs datatable-basic">
                            <thead>
                                <tr class="text-small">
                                    <th style="width:5%;">ID</th>
                                    <th style="width:15%;">RFQ Name</th>
                                    <th style="width:10%;">Date</th>
                                    <th style="width:10%"> Month </th>
                                    <th style="width:15%;">PO Ref.</th>
                                    <th style="width:15%;">Client Name</th>
                                    <th style="width:5%;">Type</th>
                                    <th style="width:10%"> Amount </th>
                                    <th style="width:5%;">Received Value</th>
                                    <th style="width:10%"> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($incomes as $key => $income)
                                    @if ($income->created_at->format('F') == 'March')
                                        <tr>
                                            <td>{{ ++$key }} </td>
                                            <td> {{ app\Models\Admin\RfQ::where('id', $income->rfq_id)->value('name') }}
                                            </td>
                                            <td> {{ $income->date }}</td>
                                            <td> {{ $income->month }}</td>
                                            <td> {{ $income->po_reference }}</td>
                                            <td> {{ $income->client_name }}</td>
                                            <td> {{ $income->type }}</td>
                                            <td> {{ $income->amount }}</td>
                                            <td> {{ $income->received_value }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('income.edit', [$income->id]) }}" class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('income.destroy', [$income->id]) }}"
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
                        <table class="table april  may-bordered table-xs datatable-basic">
                            <thead>
                                <tr class="text-small">
                                    <th style="width:5%;">ID</th>
                                    <th style="width:15%;">RFQ Name</th>
                                    <th style="width:10%;">Date</th>
                                    <th style="width:10%"> Month </th>
                                    <th style="width:15%;">PO Ref.</th>
                                    <th style="width:15%;">Client Name</th>
                                    <th style="width:5%;">Type</th>
                                    <th style="width:10%"> Amount </th>
                                    <th style="width:5%;">Received Value</th>
                                    <th style="width:10%"> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($incomes as $key => $income)
                                    @if ($income->created_at->format('F') == 'April')
                                        <tr>
                                            <td>{{ ++$key }} </td>
                                            <td> {{ app\Models\Admin\RfQ::where('id', $income->rfq_id)->value('name') }}
                                            </td>
                                            <td> {{ $income->date }}</td>
                                            <td> {{ $income->month }}</td>
                                            <td> {{ $income->po_reference }}</td>
                                            <td> {{ $income->client_name }}</td>
                                            <td> {{ $income->type }}</td>
                                            <td> {{ $income->amount }}</td>
                                            <td> {{ $income->received_value }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('income.edit', [$income->id]) }}" class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('income.destroy', [$income->id]) }}"
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
                        <table class="table may  june-bordered table-xs datatable-basic">
                            <thead>
                                <tr class="text-small">
                                    <th style="width:5%;">ID</th>
                                    <th style="width:15%;">RFQ Name</th>
                                    <th style="width:10%;">Date</th>
                                    <th style="width:10%"> Month </th>
                                    <th style="width:15%;">PO Ref.</th>
                                    <th style="width:15%;">Client Name</th>
                                    <th style="width:5%;">Type</th>
                                    <th style="width:10%"> Amount </th>
                                    <th style="width:5%;">Received Value</th>
                                    <th style="width:10%"> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($incomes as $key => $income)
                                    @if ($income->created_at->format('F') == 'May')
                                        <tr>
                                            <td>{{ ++$key }} </td>
                                            <td> {{ app\Models\Admin\RfQ::where('id', $income->rfq_id)->value('name') }}
                                            </td>
                                            <td> {{ $income->date }}</td>
                                            <td> {{ $income->month }}</td>
                                            <td> {{ $income->po_reference }}</td>
                                            <td> {{ $income->client_name }}</td>
                                            <td> {{ $income->type }}</td>
                                            <td> {{ $income->amount }}</td>
                                            <td> {{ $income->received_value }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('income.edit', [$income->id]) }}" class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('income.destroy', [$income->id]) }}"
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
                        <table class="table june  july-bordered table-xs datatable-basic">
                            <thead>
                                <tr class="text-small">
                                    <th style="width:5%;">ID</th>
                                    <th style="width:15%;">RFQ Name</th>
                                    <th style="width:10%;">Date</th>
                                    <th style="width:10%"> Month </th>
                                    <th style="width:15%;">PO Ref.</th>
                                    <th style="width:15%;">Client Name</th>
                                    <th style="width:5%;">Type</th>
                                    <th style="width:10%"> Amount </th>
                                    <th style="width:5%;">Received Value</th>
                                    <th style="width:10%"> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($incomes as $key => $income)
                                    @if ($income->created_at->format('F') == 'June')
                                        <tr>
                                            <td>{{ ++$key }} </td>
                                            <td> {{ app\Models\Admin\RfQ::where('id', $income->rfq_id)->value('name') }}
                                            </td>
                                            <td> {{ $income->date }}</td>
                                            <td> {{ $income->month }}</td>
                                            <td> {{ $income->po_reference }}</td>
                                            <td> {{ $income->client_name }}</td>
                                            <td> {{ $income->type }}</td>
                                            <td> {{ $income->amount }}</td>
                                            <td> {{ $income->received_value }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('income.edit', [$income->id]) }}" class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('income.destroy', [$income->id]) }}"
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
                        <table class="table july  table-bordered table-xs datatable-basic">
                            <thead>
                                <tr class="text-small">
                                    <th style="width:5%;">ID</th>
                                    <th style="width:15%;">RFQ Name</th>
                                    <th style="width:10%;">Date</th>
                                    <th style="width:10%"> Month </th>
                                    <th style="width:15%;">PO Ref.</th>
                                    <th style="width:15%;">Client Name</th>
                                    <th style="width:5%;">Type</th>
                                    <th style="width:10%"> Amount </th>
                                    <th style="width:5%;">Received Value</th>
                                    <th style="width:10%"> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($incomes as $key => $income)
                                    @if ($income->created_at->format('F') == 'July')
                                        <tr>
                                            <td>{{ ++$key }} </td>
                                            <td> {{ app\Models\Admin\RfQ::where('id', $income->rfq_id)->value('name') }}
                                            </td>
                                            <td> {{ $income->date }}</td>
                                            <td> {{ $income->month }}</td>
                                            <td> {{ $income->po_reference }}</td>
                                            <td> {{ $income->client_name }}</td>
                                            <td> {{ $income->type }}</td>
                                            <td> {{ $income->amount }}</td>
                                            <td> {{ $income->received_value }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('income.edit', [$income->id]) }}" class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('income.destroy', [$income->id]) }}"
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
                        <table class="table august  table-bordered table-xs datatable-basic">
                            <thead>
                                <tr class="text-small">
                                    <th style="width:5%;">ID</th>
                                    <th style="width:15%;">RFQ Name</th>
                                    <th style="width:10%;">Date</th>
                                    <th style="width:10%"> Month </th>
                                    <th style="width:15%;">PO Ref.</th>
                                    <th style="width:15%;">Client Name</th>
                                    <th style="width:5%;">Type</th>
                                    <th style="width:10%"> Amount </th>
                                    <th style="width:5%;">Received Value</th>
                                    <th style="width:10%"> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($incomes as $key => $income)
                                    @if ($income->created_at->format('F') == 'August')
                                        <tr>
                                            <td>{{ ++$key }} </td>
                                            <td> {{ app\Models\Admin\RfQ::where('id', $income->rfq_id)->value('name') }}
                                            </td>
                                            <td> {{ $income->date }}</td>
                                            <td> {{ $income->month }}</td>
                                            <td> {{ $income->po_reference }}</td>
                                            <td> {{ $income->client_name }}</td>
                                            <td> {{ $income->type }}</td>
                                            <td> {{ $income->amount }}</td>
                                            <td> {{ $income->received_value }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('income.edit', [$income->id]) }}"
                                                    class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('income.destroy', [$income->id]) }}"
                                                    class="text-danger delete mx-2">
                                                    <i class="delete icon-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="js-September-tab" role="tabpanel">
                        <table class="table september  table-bordered table-xs datatable-basic">
                            <thead>
                                <tr class="text-small">
                                    <th style="width:5%;">ID</th>
                                    <th style="width:15%;">RFQ Name</th>
                                    <th style="width:10%;">Date</th>
                                    <th style="width:10%"> Month </th>
                                    <th style="width:15%;">PO Ref.</th>
                                    <th style="width:15%;">Client Name</th>
                                    <th style="width:5%;">Type</th>
                                    <th style="width:10%"> Amount </th>
                                    <th style="width:5%;">Received Value</th>
                                    <th style="width:10%"> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($incomes as $key => $income)
                                    @if ($income->created_at->format('F') == 'September')
                                        <tr>
                                            <td>{{ ++$key }} </td>
                                            <td> {{ app\Models\Admin\RfQ::where('id', $income->rfq_id)->value('name') }}
                                            </td>
                                            <td> {{ $income->date }}</td>
                                            <td> {{ $income->month }}</td>
                                            <td> {{ $income->po_reference }}</td>
                                            <td> {{ $income->client_name }}</td>
                                            <td> {{ $income->type }}</td>
                                            <td> {{ $income->amount }}</td>
                                            <td> {{ $income->received_value }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('income.edit', [$income->id]) }}"
                                                    class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('income.destroy', [$income->id]) }}"
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
                        <table class="table october  table-bordered table-xs datatable-basic">
                            <thead>
                                <tr class="text-small">
                                    <th style="width:5%;">ID</th>
                                    <th style="width:15%;">RFQ Name</th>
                                    <th style="width:10%;">Date</th>
                                    <th style="width:10%"> Month </th>
                                    <th style="width:15%;">PO Ref.</th>
                                    <th style="width:15%;">Client Name</th>
                                    <th style="width:5%;">Type</th>
                                    <th style="width:10%"> Amount </th>
                                    <th style="width:5%;">Received Value</th>
                                    <th style="width:10%"> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($incomes as $key => $income)
                                    @if ($income->created_at->format('F') == 'October')
                                        <tr>
                                            <td>{{ ++$key }} </td>
                                            <td> {{ app\Models\Admin\RfQ::where('id', $income->rfq_id)->value('name') }}
                                            </td>
                                            <td> {{ $income->date }}</td>
                                            <td> {{ $income->month }}</td>
                                            <td> {{ $income->po_reference }}</td>
                                            <td> {{ $income->client_name }}</td>
                                            <td> {{ $income->type }}</td>
                                            <td> {{ $income->amount }}</td>
                                            <td> {{ $income->received_value }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('income.edit', [$income->id]) }}"
                                                    class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('income.destroy', [$income->id]) }}"
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
                        <table class="table november  table-bordered table-xs datatable-basic">
                            <thead>
                                <tr class="text-small">
                                    <th style="width:5%;">ID</th>
                                    <th style="width:15%;">RFQ Name</th>
                                    <th style="width:10%;">Date</th>
                                    <th style="width:10%"> Month </th>
                                    <th style="width:15%;">PO Ref.</th>
                                    <th style="width:15%;">Client Name</th>
                                    <th style="width:5%;">Type</th>
                                    <th style="width:10%"> Amount </th>
                                    <th style="width:5%;">Received Value</th>
                                    <th style="width:10%"> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($incomes as $key => $income)
                                    @if ($income->created_at->format('F') == 'November')
                                        <tr>
                                            <td>{{ ++$key }} </td>
                                            <td> {{ app\Models\Admin\RfQ::where('id', $income->rfq_id)->value('name') }}
                                            </td>
                                            <td> {{ $income->date }}</td>
                                            <td> {{ $income->month }}</td>
                                            <td> {{ $income->po_reference }}</td>
                                            <td> {{ $income->client_name }}</td>
                                            <td> {{ $income->type }}</td>
                                            <td> {{ $income->amount }}</td>
                                            <td> {{ $income->received_value }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('income.edit', [$income->id]) }}"
                                                    class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('income.destroy', [$income->id]) }}"
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
                        <table class="table december  table-bordered table-xs datatable-basic">
                            <thead>
                                <tr class="text-small">
                                    <th style="width:5%;">ID</th>
                                    <th style="width:15%;">RFQ Name</th>
                                    <th style="width:10%;">Date</th>
                                    <th style="width:10%"> Month </th>
                                    <th style="width:15%;">PO Ref.</th>
                                    <th style="width:15%;">Client Name</th>
                                    <th style="width:5%;">Type</th>
                                    <th style="width:10%"> Amount </th>
                                    <th style="width:5%;">Received Value</th>
                                    <th style="width:10%"> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($incomes as $key => $income)
                                    @if ($income->created_at->format('F') == 'December')
                                        <tr>
                                            <td>{{ ++$key }} </td>
                                            <td> {{ app\Models\Admin\RfQ::where('id', $income->rfq_id)->value('name') }}
                                            </td>
                                            <td> {{ $income->date }}</td>
                                            <td> {{ $income->month }}</td>
                                            <td> {{ $income->po_reference }}</td>
                                            <td> {{ $income->client_name }}</td>
                                            <td> {{ $income->type }}</td>
                                            <td> {{ $income->amount }}</td>
                                            <td> {{ $income->received_value }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('income.edit', [$income->id]) }}"
                                                    class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('income.destroy', [$income->id]) }}"
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
                received_value: {
                    number: true
                },
            },
        });
        $('.january, .february, .march, .april, .may, .june, .july, .august, .september, .october, .november, .december')
            .DataTable({
                dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
                "iDisplayLength": 10,
                "lengthMenu": [10, 25, 30, 50],
                columnDefs: [{
                    orderable: false,
                    targets: [9],
                }, ],
            });
    </script>
@endpush
