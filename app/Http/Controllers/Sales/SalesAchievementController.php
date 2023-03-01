<?php

namespace App\Http\Controllers\Sales;


use App\Models\Admin\Rfq;
use Illuminate\Http\Request;
use App\Models\Admin\DealSas;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use App\Models\Admin\DealTypeSetting;
use App\Models\Admin\EffortRating;

class SalesAchievementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['rfqs'] = Rfq::where('rfq_type' , 'deal')->orderBy('id', 'DESC')->get();
        return view('admin.pages.sales-achievement.all',$data);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['rfq'] = Rfq::where('rfq_code', $id)->first();
        if ($data['rfq']->deal_type == 'new') {
            $data['deal_type_value'] = DealTypeSetting::where('deal_type', 'new')->value('value');
        } else {
            $data['deal_type_value'] = DealTypeSetting::where('deal_type', 'renew')->value('value');
        }

        $data['products'] = DealSas::where('rfq_id', $data['rfq']->id)->get();
        $data['efforts'] = EffortRating::latest()->get();
        $data['sourcing'] = DealSas::where('rfq_code' , $data['rfq']->rfq_code)->first();
        return view('admin.pages.sales-achievement.add',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
