<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Admin\TierCalculation;
use Illuminate\Support\Facades\Validator;

class TierCalculationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['tierCalculations']   = TierCalculation::latest()->get();
        return view('admin.pages.tierCalculation.all', $data);
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
                'point'    => 'nullable|numeric|min:1|max:15',
                'tier'     => 'nullable|numeric|min:1|max:15',
                'rebates'  => 'nullable|numeric|min:1|max:15',
                'benifits' => 'nullable|numeric|min:1|max:15',
                'amount'   => 'nullable|numeric|min:1|max:15',
                'value'    => 'nullable|numeric|min:1|max:15',
            ]
        );

        if ($validator->passes()) {
            TierCalculation::create([
                'point'    => $request->point,
                'tier'     => $request->tier,
                'rebates'  => $request->rebates,
                'benifits' => $request->benifits,
                'amount'   => $request->amount,
                'value'    => $request->value,
            ]);
            Toastr::success('Data Insert Successfully.');
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
        $data['tierCalculations']   = TierCalculation::find($id);
        return view('admin.pages.tierCalculation.all', $data);
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
                'point'    => 'nullable|numeric|min:1|max:15',
                'tier'     => 'nullable|numeric|min:1|max:15',
                'rebates'  => 'nullable|numeric|min:1|max:15',
                'benifits' => 'nullable|numeric|min:1|max:15',
                'amount'   => 'nullable|numeric|min:1|max:15',
                'value'    => 'nullable|numeric|min:1|max:15',
            ]
        );

        if ($validator->passes()) {
            TierCalculation::find($id)->update([
                'point'    => $request->point,
                'tier'     => $request->tier,
                'rebates'  => $request->rebates,
                'benifits' => $request->benifits,
                'amount'   => $request->amount,
                'value'    => $request->value,
            ]);
            Toastr::success('Data Updated Successfully.');
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
        TierCalculation::find($id)->delete();
    }
}
