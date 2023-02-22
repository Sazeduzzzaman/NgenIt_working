<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Rfq;
use App\Models\Admin\Income;
use Illuminate\Http\Request;
use App\Models\Frontend\Order;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Validator;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['incomes'] = Income::get();
        $data['rfqs'] = Rfq::select('rfqs.id', 'rfqs.name')->get();
        $data['orders'] = Order::select('orders.id', 'orders.name')->get();
        return view('admin.pages.income.all', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'rfq_id'        => 'required',
            ],
        );

        if ($validator->passes()) {
            Income::create([
                'rfq_id'         => $request->rfq_id,
                'order_id'       => $request->order_id,
                'date'           => date('Y-m-d H:i:s', strtotime($request->date)),
                'month'          => $request->month,
                'po_reference'   => $request->po_reference,
                'type'           => $request->type,
                'client_name'    => $request->client_name,
                'amount'         => $request->amount,
                'received_value' => $request->received_value,
            ]);
            Toastr::success('Data Insert Successfully');
        } else {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 30000]);
            }
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['income'] = Income::find($id);
        $data['rfqs'] = Rfq::select('rfqs.id', 'rfqs.name')->get();
        $data['orders'] = Order::select('orders.id', 'orders.name')->get();
        return view('admin.pages.income.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'rfq_id'        => 'required',
            ],
        );

        if ($validator->passes()) {
            Income::find($id)->update([
                'rfq_id'         => $request->rfq_id,
                'order_id'       => $request->order_id,
                'date'           => date('Y-m-d H:i:s', strtotime($request->date)),
                'month'          => $request->month,
                'po_reference'   => $request->po_reference,
                'type'           => $request->type,
                'client_name'    => $request->client_name,
                'amount'         => $request->amount,
                'received_value' => $request->received_value,
            ]);
            Toastr::success('Data updated Successfully');
        } else {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 30000]);
            }
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Income::find($id)->delete();
    }

    public function Overview()
    {
        return view('admin.pages.income.overview');
    }
}
