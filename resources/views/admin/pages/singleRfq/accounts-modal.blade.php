    @if ($sourcing)
        <form action="{{ route('account-profit-loss.store') }}" class="form-validate-jquery-profit-loss" method="post"
            enctype="multiple/form-data">
            @csrf
            <div id="modal_account_profitLoss" class="modal fade" tabindex="-1">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Account Profit and Loss </h5>
                            &nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-sm btn-danger float-end"
                                data-bs-toggle="modal" data-bs-target="#show-sas"> <i class="ph-pen"></i> SAS
                            </button>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-xs table-bordered table-responsive">
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="RFQID"> RFQ ID <strong class="text-danger">*</strong>
                                            </label>
                                            <input type="hidden" name="rfq_id" value="{{$rfq_details->id}}">{{$rfq_details->rfq_code}}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="clientType"> Client Type <strong class="text-danger">*</strong>
                                            </label>

                                            <input type="hidden" name="clientType" value="{{$rfq_details->client_type}}">{{$rfq_details->client_type}}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="itemDescription"> Item Description <strong
                                                    class="text-danger">*</strong> </label>

                                                <textarea name="itemDescription" class="form-control form-control-sm">
                                                    @foreach ($deal_products as $key => $item)
                                                    {{ $item->item_name }}
                                                    @endforeach
                                                </textarea>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="sales_price">Sales Price <strong class="text-danger">*</strong>
                                            </label>
                                            <input type="number" name="sales_price" id="sales_price"
                                                value="{{ $sourcing->sub_total_sales }}" class="form-control form-control-sm">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="cost_price">Cost Price<strong class="text-danger">*</strong>
                                            </label>
                                            <input type="number" name="cost_price" id="cost_price" value="{{ $sourcing->sub_total_cost }}"
                                                class="form-control form-control-sm">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="grossMarkupPersentage"> Gross Markup Persentage <strong
                                                    class="text-danger">*</strong> </label>
                                            <input type="number" name="gross_makup_percentage"
                                                id="grossMarkupPersentage" value="{{ $sourcing->gross_profit_subtotal }}"
                                                class="form-control form-control-sm">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="grossMarkupAmount"> Gross Markup Amount <strong
                                                    class="text-danger">*</strong> </label>
                                            <input type="number" name="gross_makup_ammount" id="grossMarkupAmount"
                                            value="{{ $sourcing->gross_profit_amount }}" class="form-control form-control-sm">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="netProfitPersentage"> Net profit Persentage <strong
                                                    class="text-danger">*</strong> </label>
                                            <input type="number" name="net_profit_percentage"
                                                id="netProfitPersentage" value="{{ $sourcing->net_profit_percentage }}"
                                                class="form-control form-control-sm">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="form-group">
                                            <label for="NetprofitAmount"> Net profit Amount <strong
                                                    class="text-danger">*</strong> </label>
                                            <input type="number" name="net_profit_ammount" id="NetprofitAmount"
                                            value="{{ $sourcing->net_profit_amount }}" class="form-control form-control-sm">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-group">
                                            <label for="profit"> Profit <strong class="text-danger">*</strong>
                                            </label>
                                            <input type="number" name="profit" id="profit" value="{{ $sourcing->net_profit_amount }}"
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
    @endif


