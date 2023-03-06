@extends('admin.master')
@section('content')
<style>
    .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active{
        background-color: #b51313;
    }
    .bg-red {
        background-color: #b51313 !important;
    }
</style>
    <div class="content-wrapper">
        <div class="content">
            <!-- Table components -->
            <div class="card m-auto mb-3" style="width: 50%;">
                <div class="col-lg-12">
                    <table class="table table-xs table-bordered table-responsive">
                        <tr class="bg-black">
                            <th class="text-center text-white py-1" colspan="2">
                                Purchase Order
                                <button type="button" class="bg-warning float-end text-white" data-bs-toggle="modal"
                                    data-bs-target="#modal_purchase_order_save"> <i
                                        class="ph-plus-circle ph-1x"></i></button>
                            </th>
                        </tr>
                        <tr>
                            <th class="bg-black text-center text-white"> Total Amount </th>
                            <th class="bg-black text-center text-white"> Total Number </th>
                        </tr>
                        <tr>
                            <td class="text-center"> 00.00</td>
                            <td class="text-center"> 00</td>
                        </tr>
                    </table>
                        @include('admin.pages.purchase.add')
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
            <div class="card">
                <!-- Tab start -->
                <div class="card-body">
                    <div class="tab-content table-responsive">
                        <div class="tab-pane fade js-January-tab" id="js-January-tab" role="tabpanel">
                            <table class="table table-xs datatable-basic january">
                                <thead>
                                    <tr class="text-small">
                                        <th style="width:5%;">ID</th>
                                        <th style="width:13%;">RFQ Name</th>
                                        <th style="width:10%;">PQ Reference</th>
                                        <th style="width:15%;">PO Reference</th>
                                        <th style="width:30%;">Principal Name</th>
                                        <th style="width:15%;"> Amount</th>
                                        <th style="width:12%"> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($purchases as $key => $purchase)
                                        @if ($purchase->created_at->format('F') == 'January')
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ App\Models\Admin\Rfq::where('id', $purchase->rfq_id)->value('name') }}
                                                </td>
                                                <td>{{ $purchase->pq_reference }}</td>
                                                <td>{{ $purchase->po_reference }}</td>
                                                <td>{{ $purchase->principal_name }}</td>
                                                <td>{{ $purchase->payment_amount_reference }}</td>
                                                <td class="text-center">
                                                    <a href="{{ route('purchase.show', [$purchase->id]) }}"
                                                        class="text-info">
                                                        <i class="icon-gear"></i>
                                                    </a>
                                                    <a href="{{ route('purchase.edit', [$purchase->id]) }}"
                                                        class="text-primary">
                                                        <i class="icon-pencil"></i>
                                                    </a>
                                                    <a href="{{ route('purchase.destroy', [$purchase->id]) }}"
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
                        <div class="tab-pane fade js-February-tab" id="js-February-tab" role="tabpanel">
                            <table class="table table-xs datatable-basic february">
                                <thead>
                                    <tr class="text-small">
                                        <th style="width:5%;">ID</th>
                                        <th style="width:13%;">RFQ Name</th>
                                        <th style="width:10%;">PQ Reference</th>
                                        <th style="width:15%;">PO Reference</th>
                                        <th style="width:30%;">Principal Name</th>
                                        <th style="width:15%;"> Amount</th>
                                        <th style="width:12%"> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($purchases as $key => $purchase)
                                        @if ($purchase->created_at->format('F') == 'February')
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ App\Models\Admin\Rfq::where('id', $purchase->rfq_id)->value('name') }}
                                                </td>
                                                <td>{{ $purchase->pq_reference }}</td>
                                                <td>{{ $purchase->po_reference }}</td>
                                                <td>{{ $purchase->principal_name }}</td>
                                                <td>{{ $purchase->payment_amount_reference }}</td>
                                                <td class="text-center">
                                                    <a href="{{ route('purchase.show', [$purchase->id]) }}"
                                                        class="text-info">
                                                        <i class="icon-gear"></i>
                                                    </a>
                                                    <a href="{{ route('purchase.edit', [$purchase->id]) }}"
                                                        class="text-primary">
                                                        <i class="icon-pencil"></i>
                                                    </a>
                                                    <a href="{{ route('purchase.destroy', [$purchase->id]) }}"
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
                        <div class="tab-pane fade js-March-tab" id="js-March-tab" role="tabpanel">
                            <table class="table table-xs datatable-basic march">
                                <thead>
                                    <tr class="text-small">
                                        <th style="width:5%;">ID</th>
                                        <th style="width:13%;">RFQ Name</th>
                                        <th style="width:10%;">PQ Reference</th>
                                        <th style="width:15%;">PO Reference</th>
                                        <th style="width:30%;">Principal Name</th>
                                        <th style="width:15%;"> Amount</th>
                                        <th style="width:12%"> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($purchases as $key => $purchase)
                                        @if ($purchase->created_at->format('F') == 'March')
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ App\Models\Admin\Rfq::where('id', $purchase->rfq_id)->value('name') }}
                                                </td>
                                                <td>{{ $purchase->pq_reference }}</td>
                                                <td>{{ $purchase->po_reference }}</td>
                                                <td>{{ $purchase->principal_name }}</td>
                                                <td>{{ $purchase->payment_amount_reference }}</td>
                                                <td class="text-center">
                                                    <a href="{{ route('purchase.show', [$purchase->id]) }}"
                                                        class="text-info">
                                                        <i class="icon-gear"></i>
                                                    </a>
                                                    <a href="{{ route('purchase.edit', [$purchase->id]) }}"
                                                        class="text-primary">
                                                        <i class="icon-pencil"></i>
                                                    </a>
                                                    <a href="{{ route('purchase.destroy', [$purchase->id]) }}"
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
                        <div class="tab-pane fade js-April-tab" id="js-April-tab" role="tabpanel">
                            <table class="table table-xs datatable-basic april">
                                <thead>
                                    <tr class="text-small">
                                        <th style="width:5%;">ID</th>
                                        <th style="width:13%;">RFQ Name</th>
                                        <th style="width:10%;">PQ Reference</th>
                                        <th style="width:15%;">PO Reference</th>
                                        <th style="width:30%;">Principal Name</th>
                                        <th style="width:15%;"> Amount</th>
                                        <th style="width:12%"> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($purchases as $key => $purchase)
                                        @if ($purchase->created_at->format('F') == 'April')
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ App\Models\Admin\Rfq::where('id', $purchase->rfq_id)->value('name') }}
                                                </td>
                                                <td>{{ $purchase->pq_reference }}</td>
                                                <td>{{ $purchase->po_reference }}</td>
                                                <td>{{ $purchase->principal_name }}</td>
                                                <td>{{ $purchase->payment_amount_reference }}</td>
                                                <td class="text-center">
                                                    <a href="{{ route('purchase.show', [$purchase->id]) }}"
                                                        class="text-info">
                                                        <i class="icon-gear"></i>
                                                    </a>
                                                    <a href="{{ route('purchase.edit', [$purchase->id]) }}"
                                                        class="text-primary">
                                                        <i class="icon-pencil"></i>
                                                    </a>
                                                    <a href="{{ route('purchase.destroy', [$purchase->id]) }}"
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
                        <div class="tab-pane fade js-May-tab" id="js-May-tab" role="tabpanel">
                            <table class="table table-xs datatable-basic may">
                                <thead>
                                    <tr class="text-small">
                                        <th style="width:5%;">ID</th>
                                        <th style="width:13%;">RFQ Name</th>
                                        <th style="width:10%;">PQ Reference</th>
                                        <th style="width:15%;">PO Reference</th>
                                        <th style="width:30%;">Principal Name</th>
                                        <th style="width:15%;"> Amount</th>
                                        <th style="width:12%"> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($purchases as $key => $purchase)
                                        @if ($purchase->created_at->format('F') == 'May')
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ App\Models\Admin\Rfq::where('id', $purchase->rfq_id)->value('name') }}
                                                </td>
                                                <td>{{ $purchase->pq_reference }}</td>
                                                <td>{{ $purchase->po_reference }}</td>
                                                <td>{{ $purchase->principal_name }}</td>
                                                <td>{{ $purchase->payment_amount_reference }}</td>
                                                <td class="text-center">
                                                    <a href="{{ route('purchase.show', [$purchase->id]) }}"
                                                        class="text-info">
                                                        <i class="icon-gear"></i>
                                                    </a>
                                                    <a href="{{ route('purchase.edit', [$purchase->id]) }}"
                                                        class="text-primary">
                                                        <i class="icon-pencil"></i>
                                                    </a>
                                                    <a href="{{ route('purchase.destroy', [$purchase->id]) }}"
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
                        <div class="tab-pane fade js-June-tab" id="js-June-tab" role="tabpanel">
                            <table class="table table-xs datatable-basic june">
                                <thead>
                                    <tr class="text-small">
                                        <th style="width:5%;">ID</th>
                                        <th style="width:13%;">RFQ Name</th>
                                        <th style="width:10%;">PQ Reference</th>
                                        <th style="width:15%;">PO Reference</th>
                                        <th style="width:30%;">Principal Name</th>
                                        <th style="width:15%;"> Amount</th>
                                        <th style="width:12%"> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($purchases as $key => $purchase)
                                        @if ($purchase->created_at->format('F') == 'June')
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ App\Models\Admin\Rfq::where('id', $purchase->rfq_id)->value('name') }}
                                                </td>
                                                <td>{{ $purchase->pq_reference }}</td>
                                                <td>{{ $purchase->po_reference }}</td>
                                                <td>{{ $purchase->principal_name }}</td>
                                                <td>{{ $purchase->payment_amount_reference }}</td>
                                                <td class="text-center">
                                                    <a href="{{ route('purchase.show', [$purchase->id]) }}"
                                                        class="text-info">
                                                        <i class="icon-gear"></i>
                                                    </a>
                                                    <a href="{{ route('purchase.edit', [$purchase->id]) }}"
                                                        class="text-primary">
                                                        <i class="icon-pencil"></i>
                                                    </a>
                                                    <a href="{{ route('purchase.destroy', [$purchase->id]) }}"
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
                        <div class="tab-pane fade js-July-tab" id="js-July-tab" role="tabpanel">
                            <table class="table table-xs datatable-basic july">
                                <thead>
                                    <tr class="text-small">
                                        <th style="width:5%;">ID</th>
                                        <th style="width:13%;">RFQ Name</th>
                                        <th style="width:10%;">PQ Reference</th>
                                        <th style="width:15%;">PO Reference</th>
                                        <th style="width:30%;">Principal Name</th>
                                        <th style="width:15%;"> Amount</th>
                                        <th style="width:12%"> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($purchases as $key => $purchase)
                                        @if ($purchase->created_at->format('F') == 'July')
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ App\Models\Admin\Rfq::where('id', $purchase->rfq_id)->value('name') }}
                                                </td>
                                                <td>{{ $purchase->pq_reference }}</td>
                                                <td>{{ $purchase->po_reference }}</td>
                                                <td>{{ $purchase->principal_name }}</td>
                                                <td>{{ $purchase->payment_amount_reference }}</td>
                                                <td class="text-center">
                                                    <a href="{{ route('purchase.show', [$purchase->id]) }}"
                                                        class="text-info">
                                                        <i class="icon-gear"></i>
                                                    </a>
                                                    <a href="{{ route('purchase.edit', [$purchase->id]) }}"
                                                        class="text-primary">
                                                        <i class="icon-pencil"></i>
                                                    </a>
                                                    <a href="{{ route('purchase.destroy', [$purchase->id]) }}"
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
                        <div class="tab-pane fade js-August-tab" id="js-August-tab" role="tabpanel">
                            <table class="table table-xs datatable-basic august">
                                <thead>
                                    <tr class="text-small">
                                        <th style="width:5%;">ID</th>
                                        <th style="width:13%;">RFQ Name</th>
                                        <th style="width:10%;">PQ Reference</th>
                                        <th style="width:15%;">PO Reference</th>
                                        <th style="width:30%;">Principal Name</th>
                                        <th style="width:15%;"> Amount</th>
                                        <th style="width:12%"> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($purchases as $key => $purchase)
                                        @if ($purchase->created_at->format('F') == 'August')
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ App\Models\Admin\Rfq::where('id', $purchase->rfq_id)->value('name') }}
                                                </td>
                                                <td>{{ $purchase->pq_reference }}</td>
                                                <td>{{ $purchase->po_reference }}</td>
                                                <td>{{ $purchase->principal_name }}</td>
                                                <td>{{ $purchase->payment_amount_reference }}</td>
                                                <td class="text-center">
                                                    <a href="{{ route('purchase.show', [$purchase->id]) }}"
                                                        class="text-info">
                                                        <i class="icon-gear"></i>
                                                    </a>
                                                    <a href="{{ route('purchase.edit', [$purchase->id]) }}"
                                                        class="text-primary">
                                                        <i class="icon-pencil"></i>
                                                    </a>
                                                    <a href="{{ route('purchase.destroy', [$purchase->id]) }}"
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
                        <div class="tab-pane fade js-September-tab" id="js-September-tab" role="tabpanel">
                            <table class="table table-xs datatable-basic september">
                                <thead>
                                    <tr class="text-small">
                                        <th style="width:5%;">ID</th>
                                        <th style="width:13%;">RFQ Name</th>
                                        <th style="width:10%;">PQ Reference</th>
                                        <th style="width:15%;">PO Reference</th>
                                        <th style="width:30%;">Principal Name</th>
                                        <th style="width:15%;"> Amount</th>
                                        <th style="width:12%"> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($purchases as $key => $purchase)
                                        @if ($purchase->created_at->format('F') == 'September')
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ App\Models\Admin\Rfq::where('id', $purchase->rfq_id)->value('name') }}
                                                </td>
                                                <td>{{ $purchase->pq_reference }}</td>
                                                <td>{{ $purchase->po_reference }}</td>
                                                <td>{{ $purchase->principal_name }}</td>
                                                <td>{{ $purchase->payment_amount_reference }}</td>
                                                <td class="text-center">
                                                    <a href="{{ route('purchase.show', [$purchase->id]) }}"
                                                        class="text-info">
                                                        <i class="icon-gear"></i>
                                                    </a>
                                                    <a href="{{ route('purchase.edit', [$purchase->id]) }}"
                                                        class="text-primary">
                                                        <i class="icon-pencil"></i>
                                                    </a>
                                                    <a href="{{ route('purchase.destroy', [$purchase->id]) }}"
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
                        <div class="tab-pane fade js-October-tab" id="js-October-tab" role="tabpanel">
                            <table class="table table-xs datatable-basic october">
                                <thead>
                                    <tr class="text-small">
                                        <th style="width:5%;">ID</th>
                                        <th style="width:13%;">RFQ Name</th>
                                        <th style="width:10%;">PQ Reference</th>
                                        <th style="width:15%;">PO Reference</th>
                                        <th style="width:30%;">Principal Name</th>
                                        <th style="width:15%;"> Amount</th>
                                        <th style="width:12%"> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($purchases as $key => $purchase)
                                        @if ($purchase->created_at->format('F') == 'October')
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ App\Models\Admin\Rfq::where('id', $purchase->rfq_id)->value('name') }}
                                                </td>
                                                <td>{{ $purchase->pq_reference }}</td>
                                                <td>{{ $purchase->po_reference }}</td>
                                                <td>{{ $purchase->principal_name }}</td>
                                                <td>{{ $purchase->payment_amount_reference }}</td>
                                                <td class="text-center">
                                                    <a href="{{ route('purchase.show', [$purchase->id]) }}"
                                                        class="text-info">
                                                        <i class="icon-gear"></i>
                                                    </a>
                                                    <a href="{{ route('purchase.edit', [$purchase->id]) }}"
                                                        class="text-primary">
                                                        <i class="icon-pencil"></i>
                                                    </a>
                                                    <a href="{{ route('purchase.destroy', [$purchase->id]) }}"
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
                        <div class="tab-pane fade js-November-tab" id="js-November-tab" role="tabpanel">
                            <table class="table table-xs datatable-basic november">
                                <thead>
                                    <tr class="text-small">
                                        <th style="width:5%;">ID</th>
                                        <th style="width:13%;">RFQ Name</th>
                                        <th style="width:10%;">PQ Reference</th>
                                        <th style="width:15%;">PO Reference</th>
                                        <th style="width:30%;">Principal Name</th>
                                        <th style="width:15%;"> Amount</th>
                                        <th style="width:12%"> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($purchases as $key => $purchase)
                                        @if ($purchase->created_at->format('F') == 'November')
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ App\Models\Admin\Rfq::where('id', $purchase->rfq_id)->value('name') }}
                                                </td>
                                                <td>{{ $purchase->pq_reference }}</td>
                                                <td>{{ $purchase->po_reference }}</td>
                                                <td>{{ $purchase->principal_name }}</td>
                                                <td>{{ $purchase->payment_amount_reference }}</td>
                                                <td class="text-center">
                                                    <a href="{{ route('purchase.show', [$purchase->id]) }}"
                                                        class="text-info">
                                                        <i class="icon-gear"></i>
                                                    </a>
                                                    <a href="{{ route('purchase.edit', [$purchase->id]) }}"
                                                        class="text-primary">
                                                        <i class="icon-pencil"></i>
                                                    </a>
                                                    <a href="{{ route('purchase.destroy', [$purchase->id]) }}"
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
                        <div class="tab-pane fade js-December-tab" id="js-December-tab" role="tabpanel">
                            <table class="table table-xs datatable-basic december">
                                <thead>
                                    <tr class="text-small">
                                        <th style="width:5%;">ID</th>
                                        <th style="width:13%;">RFQ Name</th>
                                        <th style="width:10%;">PQ Reference</th>
                                        <th style="width:15%;">PO Reference</th>
                                        <th style="width:30%;">Principal Name</th>
                                        <th style="width:15%;"> Amount</th>
                                        <th style="width:12%"> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($purchases as $key => $purchase)
                                        @if ($purchase->created_at->format('F') == 'December')
                                            <tr>
                                                <td>{{ ++$key }}</td>
                                                <td>{{ App\Models\Admin\Rfq::where('id', $purchase->rfq_id)->value('name') }}
                                                </td>
                                                <td>{{ $purchase->pq_reference }}</td>
                                                <td>{{ $purchase->po_reference }}</td>
                                                <td>{{ $purchase->principal_name }}</td>
                                                <td>{{ $purchase->payment_amount_reference }}</td>
                                                <td class="text-center">
                                                    <a href="{{ route('purchase.show', [$purchase->id]) }}"
                                                        class="text-info">
                                                        <i class="icon-gear"></i>
                                                    </a>
                                                    <a href="{{ route('purchase.edit', [$purchase->id]) }}"
                                                        class="text-primary">
                                                        <i class="icon-pencil"></i>
                                                    </a>
                                                    <a href="{{ route('purchase.destroy', [$purchase->id]) }}"
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
    </div>
@endsection
@push('scripts')
    <script type="text/javascript">
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
                subtotal: {
                    number: true
                },
                shipping: {
                    number: true
                },
                tax: {
                    number: true
                },
                others: {
                    number: true
                },
                total: {
                    number: true
                },
            },
        });
        $('.january, .february, .march, .april, .may, .june, .july, .august, .september, .october, .november, .december').DataTable({
            dom: '<"datatable-header"fl><"datatable-scroll"t><"datatable-footer"ip>',
            "iDisplayLength": 10,
            "lengthMenu": [10, 25, 30, 50],
            columnDefs: [{
                orderable: false,
                targets: [6],
            }, ],
        });
    </script>

<script>
    $(document).ready(function() {
        var currentMonth = (new Date).getMonth() + 1;
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
