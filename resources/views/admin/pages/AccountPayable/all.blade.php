@extends('admin.master')
@section('content')
    <style>
        .tab-pane {
            height: 25rem;
        }
    </style>
    <!-- Content area -->
    <div class="content">
        <!-- Table components -->
        <div class="card">
            <div class="col-lg-12">
                <table class="table table-xs table-bordered table-responsive">
                    <tr class="bg-success">
                        <th class="text-center text-white " colspan="4">
                            <a href="payable-receiveable-dashboard.html" class="bg-info float-start text-white"
                                style="padding:2px;border: 1px solid #e82127;"> Payable & Receivable Dashboard </a>
                            Details Payable Information
                            <button type="button" class="bg-warning float-end text-white" data-bs-toggle="modal"
                                data-bs-target="#modal_account_payable"> <i class="ph-plus-circle ph-1x"></i></button>
                        </th>
                    </tr>
                    <tr>
                        <th class="bg-teal text-center" colspan="2" rowspan="2"> <a href="#" class="text-white">
                                Total Payable </a>
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
                <!-- Basic modal for Closed -->
                <form action="{{ route('account-payable.store') }}" class="form-validate-jquery-payable" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div id="modal_account_payable" class="modal fade" tabindex="-1">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Account Payable</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-xs table-bordered table-responsive">
                                        <tr>
                                            <td width="33%">
                                                <div class="form-group">
                                                    <label for="rfq_id"> RFQ Name <strong class="text-danger">*</strong>
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
                                            <td width="33%">
                                                <div class="form-group">
                                                    <label for="payment_type"> Payment Type <strong
                                                            class="text-danger">*</strong> </label>
                                                    <select name="payment_type" id="payment_type"
                                                        class="form-control form-control-sm" required>
                                                        <option >--select--</option>
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
                                            <td width="33%">
                                                <div class="form-group">
                                                    <label for="invoice"> Invoice <strong class="text-danger">*</strong>
                                                    </label>
                                                    <input type="file" name="invoice" id="invoice">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="po_value"> PO Value <strong class="text-danger">*</strong>
                                                    </label>
                                                    <input type="text" name="po_value" id="po_value"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </td>
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
                                                    <label for="principal_name"> Principal Name <strong
                                                            class="text-danger">*</strong> </label>
                                                    <input type="text" name="principal_name" id="principal_name"
                                                        placeholder="Principal" class="form-control form-control-sm">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="principal_po"> Principal PO <strong
                                                            class="text-danger">*</strong> </label>
                                                    <input type="file" name="principal_po" id="principal_po">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="principal_po_number"> Principal PO Number <strong
                                                            class="text-danger">*</strong> </label>
                                                    <input type="text" name="principal_po_number"
                                                        id="principal_po_number" placeholder="PO Number"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="principal_amount"> Principal Amount <strong
                                                            class="text-danger">*</strong> </label>
                                                    <input type="text" name="principal_amount" id="principal_amount"
                                                        placeholder="00.00" class="form-control form-control-sm">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="principal_payment_status"> Principal Payment Status
                                                    </label>
                                                    <select name="principal_payment_status" id="principal_payment_status"
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
                                                    <label for="principal_payment_value"> Principal Payment Value <strong
                                                            class="text-danger">*</strong></label>
                                                    <input type="text" name="principal_payment_value"
                                                        id="principal_payment_value" class="form-control form-control-sm">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <label for="delivery_date">Delivery Date </label>
                                                    <input type="date" name="delivery_date" id="delivery_date"
                                                        class="form-control form-control-sm">
                                                </div>
                                            </td>
                                            <td>
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
                                    <th width="8%"> Principal Name </th>
                                    <th width="8%"> Principal Po number </th>
                                    <th width="8%"> Principal Amount </th>
                                    <th width="8%"> Principal Payment status </th>
                                    <th width="8%"> Principal Payment Value </th>
                                    <th width="8%"> delivery Date </th>
                                    <th width="10%">credit days </th>
                                    <th width="7%">Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($accountsPayables as $key => $accountsPayable)
                                    @if ($accountsPayable->created_at->format('F') == 'January')
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ App\Models\Admin\Rfq::where('id', $accountsPayable->rfq_id)->value('name') }}
                                            </td>
                                            <td>{{ $accountsPayable->payment_type }}</td>
                                            <td>{{ $accountsPayable->po_value }}</td>
                                            <td>{{ $accountsPayable->due_date }}</td>
                                            <td>{{ $accountsPayable->principal_name }}</td>
                                            <td>{{ $accountsPayable->principal_po_number }}</td>
                                            <td>{{ $accountsPayable->principal_amount }}</td>
                                            <td>{{ $accountsPayable->principal_payment_status }}</td>
                                            <td>{{ $accountsPayable->principal_payment_value }}</td>
                                            <td>{{ $accountsPayable->delivery_date }}</td>
                                            <td>{{ $accountsPayable->credit_days }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('account-payable.edit', [$accountsPayable->id]) }}"
                                                    class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('account-payable.destroy', [$accountsPayable->id]) }}"
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
                                    <th width="8%"> Principal Name </th>
                                    <th width="8%"> Principal Po number </th>
                                    <th width="8%"> Principal Amount </th>
                                    <th width="8%"> Principal Payment status </th>
                                    <th width="8%"> Principal Payment Value </th>
                                    <th width="8%"> delivery Date </th>
                                    <th width="10%">credit days </th>
                                    <th width="7%">Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($accountsPayables as $key => $accountsPayable)
                                    @if ($accountsPayable->created_at->format('F') == 'February')
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ App\Models\Admin\Rfq::where('id', $accountsPayable->rfq_id)->value('name') }}
                                            </td>
                                            <td>{{ $accountsPayable->payment_type }}</td>
                                            <td>{{ $accountsPayable->po_value }}</td>
                                            <td>{{ $accountsPayable->due_date }}</td>
                                            <td>{{ $accountsPayable->principal_name }}</td>
                                            <td>{{ $accountsPayable->principal_po_number }}</td>
                                            <td>{{ $accountsPayable->principal_amount }}</td>
                                            <td>{{ $accountsPayable->principal_payment_status }}</td>
                                            <td>{{ $accountsPayable->principal_payment_value }}</td>
                                            <td>{{ $accountsPayable->delivery_date }}</td>
                                            <td>{{ $accountsPayable->credit_days }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('account-payable.edit', [$accountsPayable->id]) }}"
                                                    class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('account-payable.destroy', [$accountsPayable->id]) }}"
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
                                    <th width="8%"> Principal Name </th>
                                    <th width="8%"> Principal Po number </th>
                                    <th width="8%"> Principal Amount </th>
                                    <th width="8%"> Principal Payment status </th>
                                    <th width="8%"> Principal Payment Value </th>
                                    <th width="8%"> delivery Date </th>
                                    <th width="10%">credit days </th>
                                    <th width="7%">Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($accountsPayables as $key => $accountsPayable)
                                    @if ($accountsPayable->created_at->format('F') == 'March')
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ App\Models\Admin\Rfq::where('id', $accountsPayable->rfq_id)->value('name') }}
                                            </td>
                                            <td>{{ $accountsPayable->payment_type }}</td>
                                            <td>{{ $accountsPayable->po_value }}</td>
                                            <td>{{ $accountsPayable->due_date }}</td>
                                            <td>{{ $accountsPayable->principal_name }}</td>
                                            <td>{{ $accountsPayable->principal_po_number }}</td>
                                            <td>{{ $accountsPayable->principal_amount }}</td>
                                            <td>{{ $accountsPayable->principal_payment_status }}</td>
                                            <td>{{ $accountsPayable->principal_payment_value }}</td>
                                            <td>{{ $accountsPayable->delivery_date }}</td>
                                            <td>{{ $accountsPayable->credit_days }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('account-payable.edit', [$accountsPayable->id]) }}"
                                                    class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('account-payable.destroy', [$accountsPayable->id]) }}"
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
                                    <th width="8%"> Principal Name </th>
                                    <th width="8%"> Principal Po number </th>
                                    <th width="8%"> Principal Amount </th>
                                    <th width="8%"> Principal Payment status </th>
                                    <th width="8%"> Principal Payment Value </th>
                                    <th width="8%"> delivery Date </th>
                                    <th width="10%">credit days </th>
                                    <th width="7%">Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($accountsPayables as $key => $accountsPayable)
                                    @if ($accountsPayable->created_at->format('F') == 'April')
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ App\Models\Admin\Rfq::where('id', $accountsPayable->rfq_id)->value('name') }}
                                            </td>
                                            <td>{{ $accountsPayable->payment_type }}</td>
                                            <td>{{ $accountsPayable->po_value }}</td>
                                            <td>{{ $accountsPayable->due_date }}</td>
                                            <td>{{ $accountsPayable->principal_name }}</td>
                                            <td>{{ $accountsPayable->principal_po_number }}</td>
                                            <td>{{ $accountsPayable->principal_amount }}</td>
                                            <td>{{ $accountsPayable->principal_payment_status }}</td>
                                            <td>{{ $accountsPayable->principal_payment_value }}</td>
                                            <td>{{ $accountsPayable->delivery_date }}</td>
                                            <td>{{ $accountsPayable->credit_days }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('account-payable.edit', [$accountsPayable->id]) }}"
                                                    class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('account-payable.destroy', [$accountsPayable->id]) }}"
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
                                    <th width="8%"> Principal Name </th>
                                    <th width="8%"> Principal Po number </th>
                                    <th width="8%"> Principal Amount </th>
                                    <th width="8%"> Principal Payment status </th>
                                    <th width="8%"> Principal Payment Value </th>
                                    <th width="8%"> delivery Date </th>
                                    <th width="10%">credit days </th>
                                    <th width="7%">Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($accountsPayables as $key => $accountsPayable)
                                    @if ($accountsPayable->created_at->format('F') == 'May')
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ App\Models\Admin\Rfq::where('id', $accountsPayable->rfq_id)->value('name') }}
                                            </td>
                                            <td>{{ $accountsPayable->payment_type }}</td>
                                            <td>{{ $accountsPayable->po_value }}</td>
                                            <td>{{ $accountsPayable->due_date }}</td>
                                            <td>{{ $accountsPayable->principal_name }}</td>
                                            <td>{{ $accountsPayable->principal_po_number }}</td>
                                            <td>{{ $accountsPayable->principal_amount }}</td>
                                            <td>{{ $accountsPayable->principal_payment_status }}</td>
                                            <td>{{ $accountsPayable->principal_payment_value }}</td>
                                            <td>{{ $accountsPayable->delivery_date }}</td>
                                            <td>{{ $accountsPayable->credit_days }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('account-payable.edit', [$accountsPayable->id]) }}"
                                                    class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('account-payable.destroy', [$accountsPayable->id]) }}"
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
                                    <th width="8%"> Principal Name </th>
                                    <th width="8%"> Principal Po number </th>
                                    <th width="8%"> Principal Amount </th>
                                    <th width="8%"> Principal Payment status </th>
                                    <th width="8%"> Principal Payment Value </th>
                                    <th width="8%"> delivery Date </th>
                                    <th width="10%">credit days </th>
                                    <th width="7%">Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($accountsPayables as $key => $accountsPayable)
                                    @if ($accountsPayable->created_at->format('F') == 'June')
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ App\Models\Admin\Rfq::where('id', $accountsPayable->rfq_id)->value('name') }}
                                            </td>
                                            <td>{{ $accountsPayable->payment_type }}</td>
                                            <td>{{ $accountsPayable->po_value }}</td>
                                            <td>{{ $accountsPayable->due_date }}</td>
                                            <td>{{ $accountsPayable->principal_name }}</td>
                                            <td>{{ $accountsPayable->principal_po_number }}</td>
                                            <td>{{ $accountsPayable->principal_amount }}</td>
                                            <td>{{ $accountsPayable->principal_payment_status }}</td>
                                            <td>{{ $accountsPayable->principal_payment_value }}</td>
                                            <td>{{ $accountsPayable->delivery_date }}</td>
                                            <td>{{ $accountsPayable->credit_days }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('account-payable.edit', [$accountsPayable->id]) }}"
                                                    class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('account-payable.destroy', [$accountsPayable->id]) }}"
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
                                    <th width="8%"> Principal Name </th>
                                    <th width="8%"> Principal Po number </th>
                                    <th width="8%"> Principal Amount </th>
                                    <th width="8%"> Principal Payment status </th>
                                    <th width="8%"> Principal Payment Value </th>
                                    <th width="8%"> delivery Date </th>
                                    <th width="10%">credit days </th>
                                    <th width="7%">Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($accountsPayables as $key => $accountsPayable)
                                    @if ($accountsPayable->created_at->format('F') == 'July')
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ App\Models\Admin\Rfq::where('id', $accountsPayable->rfq_id)->value('name') }}
                                            </td>
                                            <td>{{ $accountsPayable->payment_type }}</td>
                                            <td>{{ $accountsPayable->po_value }}</td>
                                            <td>{{ $accountsPayable->due_date }}</td>
                                            <td>{{ $accountsPayable->principal_name }}</td>
                                            <td>{{ $accountsPayable->principal_po_number }}</td>
                                            <td>{{ $accountsPayable->principal_amount }}</td>
                                            <td>{{ $accountsPayable->principal_payment_status }}</td>
                                            <td>{{ $accountsPayable->principal_payment_value }}</td>
                                            <td>{{ $accountsPayable->delivery_date }}</td>
                                            <td>{{ $accountsPayable->credit_days }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('account-payable.edit', [$accountsPayable->id]) }}"
                                                    class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('account-payable.destroy', [$accountsPayable->id]) }}"
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
                                    <th width="8%"> Principal Name </th>
                                    <th width="8%"> Principal Po number </th>
                                    <th width="8%"> Principal Amount </th>
                                    <th width="8%"> Principal Payment status </th>
                                    <th width="8%"> Principal Payment Value </th>
                                    <th width="8%"> delivery Date </th>
                                    <th width="10%">credit days </th>
                                    <th width="7%">Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($accountsPayables as $key => $accountsPayable)
                                    @if ($accountsPayable->created_at->format('F') == 'August')
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ App\Models\Admin\Rfq::where('id', $accountsPayable->rfq_id)->value('name') }}
                                            </td>
                                            <td>{{ $accountsPayable->payment_type }}</td>
                                            <td>{{ $accountsPayable->po_value }}</td>
                                            <td>{{ $accountsPayable->due_date }}</td>
                                            <td>{{ $accountsPayable->principal_name }}</td>
                                            <td>{{ $accountsPayable->principal_po_number }}</td>
                                            <td>{{ $accountsPayable->principal_amount }}</td>
                                            <td>{{ $accountsPayable->principal_payment_status }}</td>
                                            <td>{{ $accountsPayable->principal_payment_value }}</td>
                                            <td>{{ $accountsPayable->delivery_date }}</td>
                                            <td>{{ $accountsPayable->credit_days }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('account-payable.edit', [$accountsPayable->id]) }}"
                                                    class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('account-payable.destroy', [$accountsPayable->id]) }}"
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
                                    <th width="8%"> Principal Name </th>
                                    <th width="8%"> Principal Po number </th>
                                    <th width="8%"> Principal Amount </th>
                                    <th width="8%"> Principal Payment status </th>
                                    <th width="8%"> Principal Payment Value </th>
                                    <th width="8%"> delivery Date </th>
                                    <th width="10%">credit days </th>
                                    <th width="7%">Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($accountsPayables as $key => $accountsPayable)
                                    @if ($accountsPayable->created_at->format('F') == 'September')
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ App\Models\Admin\Rfq::where('id', $accountsPayable->rfq_id)->value('name') }}
                                            </td>
                                            <td>{{ $accountsPayable->payment_type }}</td>
                                            <td>{{ $accountsPayable->po_value }}</td>
                                            <td>{{ $accountsPayable->due_date }}</td>
                                            <td>{{ $accountsPayable->principal_name }}</td>
                                            <td>{{ $accountsPayable->principal_po_number }}</td>
                                            <td>{{ $accountsPayable->principal_amount }}</td>
                                            <td>{{ $accountsPayable->principal_payment_status }}</td>
                                            <td>{{ $accountsPayable->principal_payment_value }}</td>
                                            <td>{{ $accountsPayable->delivery_date }}</td>
                                            <td>{{ $accountsPayable->credit_days }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('account-payable.edit', [$accountsPayable->id]) }}"
                                                    class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('account-payable.destroy', [$accountsPayable->id]) }}"
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
                                    <th width="8%"> Principal Name </th>
                                    <th width="8%"> Principal Po number </th>
                                    <th width="8%"> Principal Amount </th>
                                    <th width="8%"> Principal Payment status </th>
                                    <th width="8%"> Principal Payment Value </th>
                                    <th width="8%"> delivery Date </th>
                                    <th width="10%">credit days </th>
                                    <th width="7%">Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($accountsPayables as $key => $accountsPayable)
                                    @if ($accountsPayable->created_at->format('F') == 'October')
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ App\Models\Admin\Rfq::where('id', $accountsPayable->rfq_id)->value('name') }}
                                            </td>
                                            <td>{{ $accountsPayable->payment_type }}</td>
                                            <td>{{ $accountsPayable->po_value }}</td>
                                            <td>{{ $accountsPayable->due_date }}</td>
                                            <td>{{ $accountsPayable->principal_name }}</td>
                                            <td>{{ $accountsPayable->principal_po_number }}</td>
                                            <td>{{ $accountsPayable->principal_amount }}</td>
                                            <td>{{ $accountsPayable->principal_payment_status }}</td>
                                            <td>{{ $accountsPayable->principal_payment_value }}</td>
                                            <td>{{ $accountsPayable->delivery_date }}</td>
                                            <td>{{ $accountsPayable->credit_days }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('account-payable.edit', [$accountsPayable->id]) }}"
                                                    class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('account-payable.destroy', [$accountsPayable->id]) }}"
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
                                    <th width="8%"> Principal Name </th>
                                    <th width="8%"> Principal Po number </th>
                                    <th width="8%"> Principal Amount </th>
                                    <th width="8%"> Principal Payment status </th>
                                    <th width="8%"> Principal Payment Value </th>
                                    <th width="8%"> delivery Date </th>
                                    <th width="10%">credit days </th>
                                    <th width="7%">Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($accountsPayables as $key => $accountsPayable)
                                    @if ($accountsPayable->created_at->format('F') == 'November')
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ App\Models\Admin\Rfq::where('id', $accountsPayable->rfq_id)->value('name') }}
                                            </td>
                                            <td>{{ $accountsPayable->payment_type }}</td>
                                            <td>{{ $accountsPayable->po_value }}</td>
                                            <td>{{ $accountsPayable->due_date }}</td>
                                            <td>{{ $accountsPayable->principal_name }}</td>
                                            <td>{{ $accountsPayable->principal_po_number }}</td>
                                            <td>{{ $accountsPayable->principal_amount }}</td>
                                            <td>{{ $accountsPayable->principal_payment_status }}</td>
                                            <td>{{ $accountsPayable->principal_payment_value }}</td>
                                            <td>{{ $accountsPayable->delivery_date }}</td>
                                            <td>{{ $accountsPayable->credit_days }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('account-payable.edit', [$accountsPayable->id]) }}"
                                                    class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('account-payable.destroy', [$accountsPayable->id]) }}"
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
                                    <th width="8%"> Principal Name </th>
                                    <th width="8%"> Principal Po number </th>
                                    <th width="8%"> Principal Amount </th>
                                    <th width="8%"> Principal Payment status </th>
                                    <th width="8%"> Principal Payment Value </th>
                                    <th width="8%"> delivery Date </th>
                                    <th width="10%">credit days </th>
                                    <th width="7%">Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($accountsPayables as $key => $accountsPayable)
                                    @if ($accountsPayable->created_at->format('F') == 'December')
                                        <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ App\Models\Admin\Rfq::where('id', $accountsPayable->rfq_id)->value('name') }}
                                            </td>
                                            <td>{{ $accountsPayable->payment_type }}</td>
                                            <td>{{ $accountsPayable->po_value }}</td>
                                            <td>{{ $accountsPayable->due_date }}</td>
                                            <td>{{ $accountsPayable->principal_name }}</td>
                                            <td>{{ $accountsPayable->principal_po_number }}</td>
                                            <td>{{ $accountsPayable->principal_amount }}</td>
                                            <td>{{ $accountsPayable->principal_payment_status }}</td>
                                            <td>{{ $accountsPayable->principal_payment_value }}</td>
                                            <td>{{ $accountsPayable->delivery_date }}</td>
                                            <td>{{ $accountsPayable->credit_days }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('account-payable.edit', [$accountsPayable->id]) }}"
                                                    class="text-primary">
                                                    <i class="icon-pencil"></i>
                                                </a>
                                                <a href="{{ route('account-payable.destroy', [$accountsPayable->id]) }}"
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
@push('scripts')
    <script>
        // Initialize ==========Closed Form valitation
        const validator = $('.form-validate-jquery-payable').validate({
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
                label.addClass('validation-valid-label').text('Success.'); // remove to hide Success message
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
                password: {
                    minlength: 5
                },
                repeat_password: {
                    equalTo: '#password'
                },
                email: {
                    email: true
                },
                repeat_email: {
                    equalTo: '#email'
                },
                minimum_characters: {
                    minlength: 10
                },
                maximum_characters: {
                    maxlength: 10
                },
                minimum_number: {
                    min: 10
                },
                maximum_number: {
                    max: 10
                },
                number_range: {
                    range: [10, 20]
                },
                url: {
                    url: true
                },
                date: {
                    date: true
                },
                date_iso: {
                    dateISO: true
                },
                numbers: {
                    number: true
                },
                PrincipalPO: {
                    number: true
                },
                PrincipalPONumber: {
                    number: true
                },
                PrincipalAmount: {
                    number: true
                },
                PrincipalValue: {
                    number: true
                },
                POValue: {
                    text: true
                },
                Principal: {
                    text: true
                },
                digits: {
                    digits: true
                },
                creditcard: {
                    creditcard: true
                },
                basic_checkbox: {
                    minlength: 2
                },
                styled_checkbox: {
                    minlength: 2
                },
                switch_group: {
                    minlength: 2
                }
            },
            messages: {
                custom: {
                    required: 'This is a custom error message'
                },
                basic_checkbox: {
                    minlength: 'Please select at least {0} checkboxes'
                },
                styled_checkbox: {
                    minlength: 'Please select at least {0} checkboxes'
                },
                switch_group: {
                    minlength: 'Please select at least {0} switches'
                },
                agree: 'Please accept our policy'
            }
        });
    </script>
@endpush
