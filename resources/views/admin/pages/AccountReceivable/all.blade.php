@extends('admin.master')
@section('content')
    <div class="content">
        <!-- Table components -->
        <div class="card">
            <div class="col-lg-12">
                <table class="table table-xs table-bordered table-responsive">
                    <tr class="bg-success">
                        <th class="text-center text-white " colspan="4">
                            <a href="payable-receiveable-dashboard.html" class="bg-info float-start text-white"
                                style="padding:2px;border: 1px solid #e82127;"> Payable & Receivable Dashboard </a>
                            Details Receivable Information
                            <button type="button" class="bg-warning float-end text-white" data-bs-toggle="modal"
                                data-bs-target="#modal_account_payable"> <i class="ph-plus-circle ph-1x"></i></button>
                        </th>
                    </tr>
                    <tr>
                        <th class="bg-teal text-center" colspan="2" rowspan="2"> <a href="#" class="text-white">
                                Total Receivable </a>
                        </th>
                    </tr>
                    <tr>
                        <th class="bg-teal text-center"> <a href="#" class="text-white"> Paid </a> </th>
                        <td class="bg-teal text-center text-white"> 200.00</td>
                    </tr>
                    <tr>
                        <th colspan="2" class="text-center"> FY </th>
                        <th class="bg-teal text-center"> <a href="#" class="text-white"> Outstanding </a> </th>
                        <td class="bg-teal text-center text-white"> 150.00</td>
                    </tr>
                </table>
                <!-- model-start -->
                <div class="col-lg-12 float-left">
                </div>
                <!-- Basic modal for Closed -->
                <form action="{{ route('account-receivable.store') }}" class="form-validate-jquery-receivable"
                    method="post" enctype="multipart/form-data">
                    @csrf
                    <div id="modal_account_payable" class="modal fade" tabindex="-1">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Account Receivable </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-xs table-bordered table-responsive">
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
                                                    <label for="payment_type"> Payment Type <strong
                                                            class="text-danger">*</strong> </label>
                                                    <select name="payment_type" id="payment_type"
                                                        class="form-control form-control-sm" required>
                                                        <option value="0">--select--</option>
                                                        <option value="creditable">Creditable</option>
                                                        <option value="bank_loan">Bank Loan </option>
                                                        <option value="personal_loan">Personal Loan</option>
                                                        <option value="rol"> Rol </option>
                                                        <option value="capital"> Capital </option>
                                                        <option value="inter_company"> Inter Company </option>
                                                        <option value="Bad_debts"> Bad Debts</option>
                                                        <option value="interest"> Interest </option>
                                                        <option value="profit_share"> Profit Share </option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="po_date"> PO Date <strong class="text-danger">*</strong>
                                                    </label>
                                                    <input type="date" name="po_date" id="po_date"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="due_date"> Due Date <strong class="text-danger">*</strong>
                                                    </label>
                                                    <input type="date" name="due_date" id="due_date"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="client_po_number"> PO Client Number <strong
                                                            class="text-danger">*</strong> </label>
                                                    <input type="text" name="client_po_number" id="client_po_number"
                                                        placeholder="PO Client Numbe" class="form-control form-control-sm">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="client_name"> Client Name <strong
                                                            class="text-danger">*</strong> </label>
                                                    <input type="text" name="client_name" id="client_name"
                                                        placeholder="Client Name" class="form-control form-control-sm">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="client_po"> Client PO <strong
                                                            class="text-danger">*</strong> </label>
                                                    <input type="file" name="client_po" id="client_po">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="invoice"> Invoice <strong class="text-danger">*</strong>
                                                    </label>
                                                    <input type="file" name="invoice" id="invoice">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="client_amount">Client Amount<strong
                                                            class="text-danger">*</strong> </label>
                                                    <input type="number" name="client_amount" id="client_amount"
                                                        class="form-control form-control-sm" placeholder="00.00">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="client_payment_status"> Client Payment Status </label>
                                                    <select name="client_payment_status" id="client_payment_status"
                                                        class="form-control form-control-sm">
                                                        <option value="">--select--</option>
                                                        <option value="advance_paid">Advance Paid</option>
                                                        <option value="not_paid"> Not Paid</option>
                                                        <option value="half_paid">Half Paid</option>
                                                        <option value="paid">Paid</option>
                                                        <option value="delayed">Delayed</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="client_payment_value"> Client Payment Value <strong
                                                            class="text-danger">*</strong> </label>
                                                    <input type="text" name="client_payment_value"
                                                        id="client_payment_value" class="form-control form-control-sm"
                                                        placeholder="" placeholder="00.00">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="client_money_receipt"> Client Money Receipt <strong
                                                            class="text-danger">*</strong> </label>
                                                    <input type="text" name="client_money_receipt"
                                                        id="client_money_receipt" placeholder="PO Number"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">
                                                <div class="form-group">
                                                    <label for="credit_days">Credit Days </label>
                                                    <input type="text" name="credit_days" id="credit_days"
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
            </div>
        </div>
        <!-- tab menu start-->
        <ul class="nav nav-tabs mb-3" role="tablist">
            <li class="nav-item" role="presentation">
                <a href="#js-January-tab" class="nav-link active" data-bs-toggle="tab" aria-selected="true"
                    role="tab" tabindex="-1">
                    January
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#js-February-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab"
                    tabindex="-1">
                    February
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#js-March-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="March"
                    tabindex="-1">
                    March
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#js-April-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab"
                    tabindex="-1">
                    April
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
                    June
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#js-July-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab"
                    tabindex="-1">
                    July
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#js-August-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab"
                    tabindex="-1">
                    August
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#js-September-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab"
                    tabindex="-1">
                    September
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#js-October-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab"
                    tabindex="-1">
                    October
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#js-November-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab"
                    tabindex="-1">
                    November
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="#js-December-tab" class="nav-link" data-bs-toggle="tab" aria-selected="false" role="tab"
                    tabindex="-1">
                    December
                </a>
            </li>
        </ul>
        <!-- tab menu end -->
        <div class="card">
            <!-- Tab start -->
            <div class="card-body">
                <div class="tab-content table-responsive">
                    <div class="tab-pane fade active show" id="js-January-tab" role="tabpanel">
                        <table class="table table-xs datatable-basic table-bordered">
                            <thead>
                                <tr class="text-small">
                                    <th width="5%"> Id </th>
                                    <th width="5%"> Rfq Name </th>
                                    <th width="10%">Payment type </th>
                                    <th width="8%"> Po Value </th>
                                    <th width="8%"> due Date </th>
                                    <th width="8%"> Client Name </th>
                                    <th width="8%"> Client Po </th>
                                    <th width="8%"> Client Amount </th>
                                    <th width="8%"> Client Payment status </th>
                                    <th width="8%"> Client Payment Value </th>
                                    <th width="8%"> Client Money Receipt </th>
                                    <th width="10%">credit days </th>
                                    <th width="7%">Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($accountsReceivables as $key => $accountsReceivable)
                                    @if ($accountsReceivable->created_at->format('F') == 'January')
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ App\Models\Admin\Rfq::where('id', $accountsReceivable->rfq_id)->value('name') }}
                                            </td>
                                            <td>{{ $accountsReceivable->payment_type }}</td>
                                            <td>{{ $accountsReceivable->po_date }}</td>
                                            <td>{{ $accountsReceivable->due_date }}</td>
                                            <td>{{ $accountsReceivable->client_name }}</td>
                                            <td>{{ $accountsReceivable->client_po }}</td>
                                            <td>{{ $accountsReceivable->client_amount }}</td>
                                            <td>{{ $accountsReceivable->client_payment_status }}</td>
                                            <td>{{ $accountsReceivable->client_payment_value }}</td>
                                            <td>{{ $accountsReceivable->client_money_receipt }}</td>
                                            <td>{{ $accountsReceivable->credit_days }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('account-receivable.edit', [$accountsReceivable->id]) }}"
                                                    class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('account-receivable.destroy', [$accountsReceivable->id]) }}"
                                                    class="text-danger delete mx-2">
                                                    <i class="delete icon-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                    <td colspan="12" class="text-center"> Data not available</td>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="js-February-tab" role="tabpanel">
                        <table class="table table-xs datatable-basic table-bordered">
                            <thead>
                                <tr class="text-small">
                                    <th width="5%"> Id </th>
                                    <th width="5%"> Rfq Name </th>
                                    <th width="10%">Payment type </th>
                                    <th width="8%"> Po Value </th>
                                    <th width="8%"> due Date </th>
                                    <th width="8%"> Client Name </th>
                                    <th width="8%"> Client Po </th>
                                    <th width="8%"> Client Amount </th>
                                    <th width="8%"> Client Payment status </th>
                                    <th width="8%"> Client Payment Value </th>
                                    <th width="8%"> Client Money Receipt </th>
                                    <th width="10%">credit days </th>
                                    <th width="7%">Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($accountsReceivables as $key => $accountsReceivable)
                                    @if ($accountsReceivable->created_at->format('F') == 'February')
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ App\Models\Admin\Rfq::where('id', $accountsReceivable->rfq_id)->value('name') }}
                                            </td>
                                            <td>{{ $accountsReceivable->payment_type }}</td>
                                            <td>{{ $accountsReceivable->po_date }}</td>
                                            <td>{{ $accountsReceivable->due_date }}</td>
                                            <td>{{ $accountsReceivable->client_name }}</td>
                                            <td>{{ $accountsReceivable->client_po }}</td>
                                            <td>{{ $accountsReceivable->client_amount }}</td>
                                            <td>{{ $accountsReceivable->client_payment_status }}</td>
                                            <td>{{ $accountsReceivable->client_payment_value }}</td>
                                            <td>{{ $accountsReceivable->client_money_receipt }}</td>
                                            <td>{{ $accountsReceivable->credit_days }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('account-receivable.edit', [$accountsReceivable->id]) }}"
                                                    class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('account-receivable.destroy', [$accountsReceivable->id]) }}"
                                                    class="text-danger delete mx-2">
                                                    <i class="delete icon-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                    <td colspan="12" class="text-center"> Data not available</td>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="js-March-tab" role="tabpanel">
                        <table class="table table-xs datatable-basic table-bordered">
                            <thead>
                                <tr class="text-small">
                                    <th width="5%"> Id </th>
                                    <th width="5%"> Rfq Name </th>
                                    <th width="10%">Payment type </th>
                                    <th width="8%"> Po Value </th>
                                    <th width="8%"> due Date </th>
                                    <th width="8%"> Client Name </th>
                                    <th width="8%"> Client Po </th>
                                    <th width="8%"> Client Amount </th>
                                    <th width="8%"> Client Payment status </th>
                                    <th width="8%"> Client Payment Value </th>
                                    <th width="8%"> Client Money Receipt </th>
                                    <th width="10%">credit days </th>
                                    <th width="7%">Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($accountsReceivables as $key => $accountsReceivable)
                                    @if ($accountsReceivable->created_at->format('F') == 'March')
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ App\Models\Admin\Rfq::where('id', $accountsReceivable->rfq_id)->value('name') }}
                                            </td>
                                            <td>{{ $accountsReceivable->payment_type }}</td>
                                            <td>{{ $accountsReceivable->po_date }}</td>
                                            <td>{{ $accountsReceivable->due_date }}</td>
                                            <td>{{ $accountsReceivable->client_name }}</td>
                                            <td>{{ $accountsReceivable->client_po }}</td>
                                            <td>{{ $accountsReceivable->client_amount }}</td>
                                            <td>{{ $accountsReceivable->client_payment_status }}</td>
                                            <td>{{ $accountsReceivable->client_payment_value }}</td>
                                            <td>{{ $accountsReceivable->client_money_receipt }}</td>
                                            <td>{{ $accountsReceivable->credit_days }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('account-receivable.edit', [$accountsReceivable->id]) }}"
                                                    class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('account-receivable.destroy', [$accountsReceivable->id]) }}"
                                                    class="text-danger delete mx-2">
                                                    <i class="delete icon-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                    <td colspan="12" class="text-center"> Data not available</td>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="js-April-tab" role="tabpanel">
                        <table class="table table-xs datatable-basic table-bordered">
                            <thead>
                                <tr class="text-small">
                                    <th width="5%"> Id </th>
                                    <th width="5%"> Rfq Name </th>
                                    <th width="10%">Payment type </th>
                                    <th width="8%"> Po Value </th>
                                    <th width="8%"> due Date </th>
                                    <th width="8%"> Client Name </th>
                                    <th width="8%"> Client Po </th>
                                    <th width="8%"> Client Amount </th>
                                    <th width="8%"> Client Payment status </th>
                                    <th width="8%"> Client Payment Value </th>
                                    <th width="8%"> Client Money Receipt </th>
                                    <th width="10%">credit days </th>
                                    <th width="7%">Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($accountsReceivables as $key => $accountsReceivable)
                                    @if ($accountsReceivable->created_at->format('F') == 'April')
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ App\Models\Admin\Rfq::where('id', $accountsReceivable->rfq_id)->value('name') }}
                                            </td>
                                            <td>{{ $accountsReceivable->payment_type }}</td>
                                            <td>{{ $accountsReceivable->po_date }}</td>
                                            <td>{{ $accountsReceivable->due_date }}</td>
                                            <td>{{ $accountsReceivable->client_name }}</td>
                                            <td>{{ $accountsReceivable->client_po }}</td>
                                            <td>{{ $accountsReceivable->client_amount }}</td>
                                            <td>{{ $accountsReceivable->client_payment_status }}</td>
                                            <td>{{ $accountsReceivable->client_payment_value }}</td>
                                            <td>{{ $accountsReceivable->client_money_receipt }}</td>
                                            <td>{{ $accountsReceivable->credit_days }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('account-receivable.edit', [$accountsReceivable->id]) }}"
                                                    class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('account-receivable.destroy', [$accountsReceivable->id]) }}"
                                                    class="text-danger delete mx-2">
                                                    <i class="delete icon-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                    <td colspan="12" class="text-center"> Data not available</td>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="js-May-tab" role="tabpanel">
                        <table class="table table-xs datatable-basic table-bordered">
                            <thead>
                                <tr class="text-small">
                                    <th width="5%"> Id </th>
                                    <th width="5%"> Rfq Name </th>
                                    <th width="10%">Payment type </th>
                                    <th width="8%"> Po Value </th>
                                    <th width="8%"> due Date </th>
                                    <th width="8%"> Client Name </th>
                                    <th width="8%"> Client Po </th>
                                    <th width="8%"> Client Amount </th>
                                    <th width="8%"> Client Payment status </th>
                                    <th width="8%"> Client Payment Value </th>
                                    <th width="8%"> Client Money Receipt </th>
                                    <th width="10%">credit days </th>
                                    <th width="7%">Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($accountsReceivables as $key => $accountsReceivable)
                                    @if ($accountsReceivable->created_at->format('F') == 'May')
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ App\Models\Admin\Rfq::where('id', $accountsReceivable->rfq_id)->value('name') }}
                                            </td>
                                            <td>{{ $accountsReceivable->payment_type }}</td>
                                            <td>{{ $accountsReceivable->po_date }}</td>
                                            <td>{{ $accountsReceivable->due_date }}</td>
                                            <td>{{ $accountsReceivable->client_name }}</td>
                                            <td>{{ $accountsReceivable->client_po }}</td>
                                            <td>{{ $accountsReceivable->client_amount }}</td>
                                            <td>{{ $accountsReceivable->client_payment_status }}</td>
                                            <td>{{ $accountsReceivable->client_payment_value }}</td>
                                            <td>{{ $accountsReceivable->client_money_receipt }}</td>
                                            <td>{{ $accountsReceivable->credit_days }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('account-receivable.edit', [$accountsReceivable->id]) }}"
                                                    class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('account-receivable.destroy', [$accountsReceivable->id]) }}"
                                                    class="text-danger delete mx-2">
                                                    <i class="delete icon-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                    <td colspan="12" class="text-center"> Data not available</td>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="js-June-tab" role="tabpanel">
                        <table class="table table-xs datatable-basic table-bordered">
                            <thead>
                                <tr class="text-small">
                                    <th width="5%"> Id </th>
                                    <th width="5%"> Rfq Name </th>
                                    <th width="10%">Payment type </th>
                                    <th width="8%"> Po Value </th>
                                    <th width="8%"> due Date </th>
                                    <th width="8%"> Client Name </th>
                                    <th width="8%"> Client Po </th>
                                    <th width="8%"> Client Amount </th>
                                    <th width="8%"> Client Payment status </th>
                                    <th width="8%"> Client Payment Value </th>
                                    <th width="8%"> Client Money Receipt </th>
                                    <th width="10%">credit days </th>
                                    <th width="7%">Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($accountsReceivables as $key => $accountsReceivable)
                                    @if ($accountsReceivable->created_at->format('F') == 'June')
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ App\Models\Admin\Rfq::where('id', $accountsReceivable->rfq_id)->value('name') }}
                                            </td>
                                            <td>{{ $accountsReceivable->payment_type }}</td>
                                            <td>{{ $accountsReceivable->po_date }}</td>
                                            <td>{{ $accountsReceivable->due_date }}</td>
                                            <td>{{ $accountsReceivable->client_name }}</td>
                                            <td>{{ $accountsReceivable->client_po }}</td>
                                            <td>{{ $accountsReceivable->client_amount }}</td>
                                            <td>{{ $accountsReceivable->client_payment_status }}</td>
                                            <td>{{ $accountsReceivable->client_payment_value }}</td>
                                            <td>{{ $accountsReceivable->client_money_receipt }}</td>
                                            <td>{{ $accountsReceivable->credit_days }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('account-receivable.edit', [$accountsReceivable->id]) }}"
                                                    class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('account-receivable.destroy', [$accountsReceivable->id]) }}"
                                                    class="text-danger delete mx-2">
                                                    <i class="delete icon-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                    <td colspan="12" class="text-center"> Data not available</td>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="js-July-tab" role="tabpanel">
                        <table class="table table-xs datatable-basic table-bordered">
                            <thead>
                                <tr class="text-small">
                                    <th width="5%"> Id </th>
                                    <th width="5%"> Rfq Name </th>
                                    <th width="10%">Payment type </th>
                                    <th width="8%"> Po Value </th>
                                    <th width="8%"> due Date </th>
                                    <th width="8%"> Client Name </th>
                                    <th width="8%"> Client Po </th>
                                    <th width="8%"> Client Amount </th>
                                    <th width="8%"> Client Payment status </th>
                                    <th width="8%"> Client Payment Value </th>
                                    <th width="8%"> Client Money Receipt </th>
                                    <th width="10%">credit days </th>
                                    <th width="7%">Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($accountsReceivables as $key => $accountsReceivable)
                                    @if ($accountsReceivable->created_at->format('F') == 'July')
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ App\Models\Admin\Rfq::where('id', $accountsReceivable->rfq_id)->value('name') }}
                                            </td>
                                            <td>{{ $accountsReceivable->payment_type }}</td>
                                            <td>{{ $accountsReceivable->po_date }}</td>
                                            <td>{{ $accountsReceivable->due_date }}</td>
                                            <td>{{ $accountsReceivable->client_name }}</td>
                                            <td>{{ $accountsReceivable->client_po }}</td>
                                            <td>{{ $accountsReceivable->client_amount }}</td>
                                            <td>{{ $accountsReceivable->client_payment_status }}</td>
                                            <td>{{ $accountsReceivable->client_payment_value }}</td>
                                            <td>{{ $accountsReceivable->client_money_receipt }}</td>
                                            <td>{{ $accountsReceivable->credit_days }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('account-receivable.edit', [$accountsReceivable->id]) }}"
                                                    class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('account-receivable.destroy', [$accountsReceivable->id]) }}"
                                                    class="text-danger delete mx-2">
                                                    <i class="delete icon-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                    <td colspan="12" class="text-center"> Data not available</td>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="js-August-tab" role="tabpanel">
                        <table class="table table-xs datatable-basic table-bordered">
                            <thead>
                                <tr class="text-small">
                                    <th width="5%"> Id </th>
                                    <th width="5%"> Rfq Name </th>
                                    <th width="10%">Payment type </th>
                                    <th width="8%"> Po Value </th>
                                    <th width="8%"> due Date </th>
                                    <th width="8%"> Client Name </th>
                                    <th width="8%"> Client Po </th>
                                    <th width="8%"> Client Amount </th>
                                    <th width="8%"> Client Payment status </th>
                                    <th width="8%"> Client Payment Value </th>
                                    <th width="8%"> Client Money Receipt </th>
                                    <th width="10%">credit days </th>
                                    <th width="7%">Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($accountsReceivables as $key => $accountsReceivable)
                                    @if ($accountsReceivable->created_at->format('F') == 'August')
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ App\Models\Admin\Rfq::where('id', $accountsReceivable->rfq_id)->value('name') }}
                                            </td>
                                            <td>{{ $accountsReceivable->payment_type }}</td>
                                            <td>{{ $accountsReceivable->po_date }}</td>
                                            <td>{{ $accountsReceivable->due_date }}</td>
                                            <td>{{ $accountsReceivable->client_name }}</td>
                                            <td>{{ $accountsReceivable->client_po }}</td>
                                            <td>{{ $accountsReceivable->client_amount }}</td>
                                            <td>{{ $accountsReceivable->client_payment_status }}</td>
                                            <td>{{ $accountsReceivable->client_payment_value }}</td>
                                            <td>{{ $accountsReceivable->client_money_receipt }}</td>
                                            <td>{{ $accountsReceivable->credit_days }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('account-receivable.edit', [$accountsReceivable->id]) }}"
                                                    class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('account-receivable.destroy', [$accountsReceivable->id]) }}"
                                                    class="text-danger delete mx-2">
                                                    <i class="delete icon-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                    <td colspan="12" class="text-center"> Data not available</td>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="js-September-tab" role="tabpanel">
                        <table class="table table-xs datatable-basic table-bordered">
                            <thead>
                                <tr class="text-small">
                                    <th width="5%"> Id </th>
                                    <th width="5%"> Rfq Name </th>
                                    <th width="10%">Payment type </th>
                                    <th width="8%"> Po Value </th>
                                    <th width="8%"> due Date </th>
                                    <th width="8%"> Client Name </th>
                                    <th width="8%"> Client Po </th>
                                    <th width="8%"> Client Amount </th>
                                    <th width="8%"> Client Payment status </th>
                                    <th width="8%"> Client Payment Value </th>
                                    <th width="8%"> Client Money Receipt </th>
                                    <th width="10%">credit days </th>
                                    <th width="7%">Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($accountsReceivables as $key => $accountsReceivable)
                                    @if ($accountsReceivable->created_at->format('F') == 'September')
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ App\Models\Admin\Rfq::where('id', $accountsReceivable->rfq_id)->value('name') }}
                                            </td>
                                            <td>{{ $accountsReceivable->payment_type }}</td>
                                            <td>{{ $accountsReceivable->po_date }}</td>
                                            <td>{{ $accountsReceivable->due_date }}</td>
                                            <td>{{ $accountsReceivable->client_name }}</td>
                                            <td>{{ $accountsReceivable->client_po }}</td>
                                            <td>{{ $accountsReceivable->client_amount }}</td>
                                            <td>{{ $accountsReceivable->client_payment_status }}</td>
                                            <td>{{ $accountsReceivable->client_payment_value }}</td>
                                            <td>{{ $accountsReceivable->client_money_receipt }}</td>
                                            <td>{{ $accountsReceivable->credit_days }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('account-receivable.edit', [$accountsReceivable->id]) }}"
                                                    class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('account-receivable.destroy', [$accountsReceivable->id]) }}"
                                                    class="text-danger delete mx-2">
                                                    <i class="delete icon-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                    <td colspan="12" class="text-center"> Data not available</td>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="js-October-tab" role="tabpanel">
                        <table class="table table-xs datatable-basic table-bordered">
                            <thead>
                                <tr class="text-small">
                                    <th width="5%"> Id </th>
                                    <th width="5%"> Rfq Name </th>
                                    <th width="10%">Payment type </th>
                                    <th width="8%"> Po Value </th>
                                    <th width="8%"> due Date </th>
                                    <th width="8%"> Client Name </th>
                                    <th width="8%"> Client Po </th>
                                    <th width="8%"> Client Amount </th>
                                    <th width="8%"> Client Payment status </th>
                                    <th width="8%"> Client Payment Value </th>
                                    <th width="8%"> Client Money Receipt </th>
                                    <th width="10%">credit days </th>
                                    <th width="7%">Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($accountsReceivables as $key => $accountsReceivable)
                                    @if ($accountsReceivable->created_at->format('F') == 'October')
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ App\Models\Admin\Rfq::where('id', $accountsReceivable->rfq_id)->value('name') }}
                                            </td>
                                            <td>{{ $accountsReceivable->payment_type }}</td>
                                            <td>{{ $accountsReceivable->po_date }}</td>
                                            <td>{{ $accountsReceivable->due_date }}</td>
                                            <td>{{ $accountsReceivable->client_name }}</td>
                                            <td>{{ $accountsReceivable->client_po }}</td>
                                            <td>{{ $accountsReceivable->client_amount }}</td>
                                            <td>{{ $accountsReceivable->client_payment_status }}</td>
                                            <td>{{ $accountsReceivable->client_payment_value }}</td>
                                            <td>{{ $accountsReceivable->client_money_receipt }}</td>
                                            <td>{{ $accountsReceivable->credit_days }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('account-receivable.edit', [$accountsReceivable->id]) }}"
                                                    class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('account-receivable.destroy', [$accountsReceivable->id]) }}"
                                                    class="text-danger delete mx-2">
                                                    <i class="delete icon-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                    <td colspan="12" class="text-center"> Data not available</td>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="js-November-tab" role="tabpanel">
                        <table class="table table-xs datatable-basic table-bordered">
                            <thead>
                                <tr class="text-small">
                                    <th width="5%"> Id </th>
                                    <th width="5%"> Rfq Name </th>
                                    <th width="10%">Payment type </th>
                                    <th width="8%"> Po Value </th>
                                    <th width="8%"> due Date </th>
                                    <th width="8%"> Client Name </th>
                                    <th width="8%"> Client Po </th>
                                    <th width="8%"> Client Amount </th>
                                    <th width="8%"> Client Payment status </th>
                                    <th width="8%"> Client Payment Value </th>
                                    <th width="8%"> Client Money Receipt </th>
                                    <th width="10%">credit days </th>
                                    <th width="7%">Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($accountsReceivables as $key => $accountsReceivable)
                                    @if ($accountsReceivable->created_at->format('F') == 'November')
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ App\Models\Admin\Rfq::where('id', $accountsReceivable->rfq_id)->value('name') }}
                                            </td>
                                            <td>{{ $accountsReceivable->payment_type }}</td>
                                            <td>{{ $accountsReceivable->po_date }}</td>
                                            <td>{{ $accountsReceivable->due_date }}</td>
                                            <td>{{ $accountsReceivable->client_name }}</td>
                                            <td>{{ $accountsReceivable->client_po }}</td>
                                            <td>{{ $accountsReceivable->client_amount }}</td>
                                            <td>{{ $accountsReceivable->client_payment_status }}</td>
                                            <td>{{ $accountsReceivable->client_payment_value }}</td>
                                            <td>{{ $accountsReceivable->client_money_receipt }}</td>
                                            <td>{{ $accountsReceivable->credit_days }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('account-receivable.edit', [$accountsReceivable->id]) }}"
                                                    class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('account-receivable.destroy', [$accountsReceivable->id]) }}"
                                                    class="text-danger delete mx-2">
                                                    <i class="delete icon-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                    <td colspan="12" class="text-center"> Data not available</td>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="js-December-tab" role="tabpanel">
                        <table class="table table-xs datatable-basic table-bordered">
                            <thead>
                                <tr class="text-small">
                                    <th width="5%"> Id </th>
                                    <th width="5%"> Rfq Name </th>
                                    <th width="10%">Payment type </th>
                                    <th width="8%"> Po Value </th>
                                    <th width="8%"> due Date </th>
                                    <th width="8%"> Client Name </th>
                                    <th width="8%"> Client Po </th>
                                    <th width="8%"> Client Amount </th>
                                    <th width="8%"> Client Payment status </th>
                                    <th width="8%"> Client Payment Value </th>
                                    <th width="8%"> Client Money Receipt </th>
                                    <th width="10%">credit days </th>
                                    <th width="7%">Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($accountsReceivables as $key => $accountsReceivable)
                                    @if ($accountsReceivable->created_at->format('F') == 'December')
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ App\Models\Admin\Rfq::where('id', $accountsReceivable->rfq_id)->value('name') }}
                                            </td>
                                            <td>{{ $accountsReceivable->payment_type }}</td>
                                            <td>{{ $accountsReceivable->po_date }}</td>
                                            <td>{{ $accountsReceivable->due_date }}</td>
                                            <td>{{ $accountsReceivable->client_name }}</td>
                                            <td>{{ $accountsReceivable->client_po }}</td>
                                            <td>{{ $accountsReceivable->client_amount }}</td>
                                            <td>{{ $accountsReceivable->client_payment_status }}</td>
                                            <td>{{ $accountsReceivable->client_payment_value }}</td>
                                            <td>{{ $accountsReceivable->client_money_receipt }}</td>
                                            <td>{{ $accountsReceivable->credit_days }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('account-receivable.edit', [$accountsReceivable->id]) }}"
                                                    class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('account-receivable.destroy', [$accountsReceivable->id]) }}"
                                                    class="text-danger delete mx-2">
                                                    <i class="delete icon-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endif
                                @empty
                                    <td colspan="12" class="text-center"> Data not available</td>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end cart body -->
        </div>
    </div>
@endsection
@once
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
                client_po_number: {
                    number: true
                },
                client_po: {
                    number: true
                },
                client_amount: {
                    number: true
                },
                client_payment_value: {
                    number: true
                },
                client_money_receipt: {
                    number: true
                },
                credit_days: {
                    number: true
                },
            },
        });
    </script>
    @endpush
@endonce
