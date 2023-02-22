<?php

namespace App\Http\Controllers\Admin;

use Helper;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Admin\Rfq;
use Illuminate\Support\Str;
use App\Models\Admin\Client;
use Illuminate\Http\Request;
use App\Models\Admin\DealSas;
use App\Models\Admin\Product;
use App\Notifications\RfqDeal;
use App\Models\Partner\Partner;
use App\Models\Admin\RfqProduct;
use App\Notifications\RfqAssign;
use App\Http\Controllers\Controller;
use App\Models\Admin\SolutionDetail;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Notification;

class RFQController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['users'] = User::where('role', 'sales')->select('users.id', 'users.name')->get();
        $data['rfqs'] = Rfq::where('rfq_type' , 'rfq')->where('status','rfq_created')->get();
        $data['deals'] = Rfq::where('rfq_type' , 'rfq')->where('status','assigned')->get();
        //dd($data);
        return view('admin.pages.rfq.all', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $data['users'] = User::where('role', 'sales')->select('users.id', 'users.name')->get();
        $data['products'] = Product::latest()->get();
        $data['solution_details'] = SolutionDetail::select('solution_details.id', 'solution_details.name')->get();
        $data['clients'] = Client::select('clients.id', 'clients.name')->get();
        $data['partners'] = Partner::select('partners.id', 'partners.name')->get();
        return view('admin.pages.rfq.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $user = User::where('role','admin')->get();
        Helper::imageDirectory();


            $data['deal_type'] = 'new';


            $rfq_code='RFQ-'.Str::random(6).date('dmy');
            $count=RFQ::where('rfq_code',$rfq_code)->count();
            if($count>0){
                $rfq_code=$rfq_code.Str::random(3);
            }
            $data['rfq_code']=$rfq_code;
            //dd($rfq_code);


            $validator = Validator::make($request->all(), [
                    'name' => 'required',
                    'email' => 'required',
                    'phone' => 'required',
                    'image' => 'file|mimes:jpeg,png,jpg|max:2048'
                ],
                [
                    'mimes' => 'The :attribute must be a file of type:PNG-JPEG-JPG'
                ],
            );
            //     $validator = Validator::make(
            //         $request->all(),
            //     [
            //         'name' => 'required',
            //         'email' => 'required',
            //         'phone' => 'required',
            //         'image' => 'file|mimes:jpeg,png,jpg,gif,svg|max:6000'
            //     ],
            //     [
            //         'mimes' => 'The :attribute must be a file of type:PNG-JPEG-JPG'
            //     ],
            // );


        if ($validator->passes()) {
            $mainFile = $request->file('image');
            $imgPath = storage_path('app/public/');

            if (isset($mainFile)) {
                $globalFunImage =  Helper::singleImageUpload($mainFile, $imgPath, 450, 350);
            } else {
                $globalFunImage = ['status' => 0];
            }

            $rfq_id = Rfq::insertGetId([

                        // 'sales_man_id_L1'      => $request->sales_man_id_L1,
                        // 'sales_man_id_T1'      => $request->sales_man_id_T1,
                        // 'sales_man_id_T2'      => $request->sales_man_id_T2,
                        'client_id'            => $request->client_id,
                        'partner_id'           => $request->partner_id,
                        'product_id'           => $request->product_id,
                        'solution_id'          => $request->solution_id,
                        'rfq_code'             => $data['rfq_code'],
                        'rfq_type'             => 'rfq',
                        'deal_type'            => $data['deal_type'],
                        'client_type'          => $request->client_type,
                        'name'                 => $request->name,
                        'email'                => $request->email,
                        'phone'                => $request->phone,
                        'company_name'         => $request->company_name,
                        'designation'          => $request->designation,
                        'address'              => $request->address,
                        'create_date'          => Carbon::now(),
                        'close_date'           => $request->close_date,
                        'image'                => $globalFunImage['status']  == 1 ? $globalFunImage['file_name'] : '',
                        'status'               => 'rfq_created',
                    ]);




                    $name = $request->name;

            Notification::send($user, new RfqDeal($name , $rfq_id));
            Toastr::success('Data Inserted Successfully');
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
        $data['users'] = User::where('role', 'sales')->select('users.id', 'users.name')->get();
        $data['products'] = Product::select('products.id', 'products.name')->get();
        $data['solution_details'] = SolutionDetail::select('solution_details.id', 'solution_details.name')->get();
        $data['clients'] = Client::select('clients.id', 'clients.name')->get();
        $data['partners'] = Partner::select('partners.id', 'partners.name')->get();
        $data['rfq'] = Rfq::find($id);
        return view('admin.pages.rfq.edit', $data);
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
        $rfq = Rfq::find($id);
        if (!empty($rfq)) {
            $validator =
                [
                    'name' => 'required',
                    'email' => 'required',
                    'phone' => 'required',
                    'image' => 'image|mimes:png,jpg,jpeg|max:5000',
                ];

        } else {
            $validator =
                [
                    'name' => 'required',
                    'email' => 'required',
                    'phone' => 'required',
                ];
        }
        $validator = Validator::make($request->all(), $validator);

        if ($validator->passes()) {
            $mainFile = $request->image;
            $uploadPath = storage_path('app/public/');

            if (isset($mainFile)) {
                $globalFunImg = Helper::singleImageUpload($mainFile, $uploadPath, 157, 87);
            } else {
                $globalFunImg['status'] = 0;
            }

            if (!empty($rfq)) {
                if ($globalFunImg['status'] == 1) {
                    File::delete(public_path($uploadPath . '/') . $rfq->image);
                    File::delete(public_path($uploadPath . '/thumb/') . $rfq->image);
                    File::delete(public_path($uploadPath . '/requestImg/') . $rfq->image);
                }

                $rfq->update([
                    'sales_man_id_L1'      => $request->sales_man_id_L1,
                    'sales_man_id_T1'      => $request->sales_man_id_T1,
                    'sales_man_id_T2'      => $request->sales_man_id_T2,
                    'client_id'            => $request->client_id,
                    'partner_id'           => $request->partner_id,
                    'product_id'           => $request->product_id,
                    'solution_id'          => $request->solution_id,
                    'rfq_code'             => $request->rfq_code,
                    'client_type'          => $request->client_type,
                    'name'                 => $request->name,
                    'email'                => $request->email,
                    'phone'                => $request->phone,
                    'company_name'         => $request->company_name,
                    'designation'          => $request->designation,
                    'address'              => $request->address,
                    'create_date'          => date('Y-m-d H:i:s', strtotime($request->create_date)),
                    'delivery_deadline'    => $request->delivery_deadline,
                    'work_order_no'        => $request->work_order_no,
                    'client_po_no'         => $request->client_po_no,
                    'pq_code'              => $request->pq_code,
                    'pqr_code_one'         => $request->pqr_code_one,
                    'pqr_code_two'         => $request->pqr_code_two,
                    'qty'                  => $request->qty,
                    'message'              => $request->message,
                    'call'                 => $request->call,
                    'validity'             => $request->validity,
                    'payment'              => $request->payment,
                    'payment_mode'         => $request->payment_mode,
                    'delivery'             => $request->delivery,
                    'delivery_location'    => $request->delivery_location,
                    'product_order'        => $request->product_order,
                    'installation_support' => $request->installation_support,
                    'pmt_condition'        => $request->pmt_condition,
                    'terms_nine'           => $request->terms_nine,
                    'terms_ten'            => $request->terms_ten,
                    'terms_eleven'         => $request->terms_eleven,
                    'tax'                  => $request->tax,
                    'vat'                  => $request->vat,
                    'total_price'          => $request->total_price,
                    'price_text'           => $request->price_text,
                    'status'               => 'pending',
                    'image' => $globalFunImg['status'] == 1 ? $globalFunImg['file_name'] : $rfq->image,
                ]);
            }

            Toastr::success('Data has been updated');
        } else {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 30000]);
            }
        }
        return redirect()->route('rfq.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $rfq = RFQ::find($id);

        if (File::exists(public_path('storage/') . $rfq->image)) {
            File::delete(public_path('storage/') . $rfq->image);
        }
        if (File::exists(public_path('storage/requestImg/') . $rfq->image)) {
            File::delete(public_path('storage/requestImg/') . $rfq->image);
        }
        if (File::exists(public_path('storage/thumb/') . $rfq->image)) {
            File::delete(public_path('storage/thumb/') . $rfq->image);
        }
        $rfq->delete();
    }

    public function AssignSalesMan(Request $request, $id)
    {
        $rfq = Rfq::where('rfq_code' , $id)->first();
        $user = User::where('role','admin')->get();
        if (!empty($rfq)) {


                $rfq->update([
                    'sales_man_id_L1'      => $request->sales_man_id_L1,
                    'sales_man_id_T1'      => $request->sales_man_id_T1,
                    'sales_man_id_T2'      => $request->sales_man_id_T2,
                    'status'               => 'assigned',
                ]);
            }
            //$user =

            Notification::send($user, new RfqAssign($name = $request->sales_man_id_L1 , $rfq_code = $rfq->rfq_code));
            Toastr::success('SalesMan has been Assigned');

        return redirect()->back();
    }

    public function DealConvert($id)
    {
        $data['users'] = User::where('role', 'sales')->select('users.id', 'users.name')->get();
        $data['products'] = Product::select('products.id', 'products.name')->get();
        $data['solution_details'] = SolutionDetail::select('solution_details.id', 'solution_details.name')->get();
        $data['clients'] = Client::select('clients.id', 'clients.name')->get();
        $data['partners'] = Partner::select('partners.id', 'partners.name')->get();
        $data['rfq'] = Rfq::find($id);
        return view('admin.pages.deal.deal_convert', $data);
    }

    public function ConvertDealStore(Request $request, $id)
    {
        //dd($request->all());
        if (!empty($request->account)) {
            if ($request->account == 'client') {
                $validator =
                [
                    'name' => 'required',
                    'email' => 'required|unique:clients',
                    'phone' => 'required',
                    'image' => 'image|mimes:png,jpg,jpeg|max:5000',
                ];
                $validator = Validator::make($request->all(), $validator);
                if ($validator->passes()) {
                    $client = Client::create([
                        'name'     => $request->name,
                        'email'    => $request->email,
                        'phone'    => $request->phone,
                        'status'   => 'inactive',
                        'password' => Hash::make($request->password),
                    ]);
                }
            } elseif ($request->account == 'partner') {
                $validator =
                [
                    'name' => 'required',
                    'email' => [
                        'required',
                        'email',
                        Rule::unique('partners', 'primary_email_address'),
                    ],
                    'phone' => 'required',
                    'image' => 'image|mimes:png,jpg,jpeg|max:5000',
                ];
                $validator = Validator::make($request->all(), $validator);
                if ($validator->passes()) {
                    $partner = Partner::create([
                        'name'                   => $request->name,
                        'primary_email_address'  => $request->email,
                        'phone_number'           => $request->phone,
                        'status'                 => 'inactive',
                        'password'               => Hash::make($request->password),


                    ]);
                }
            }
        }
        $rfq = Rfq::find($id);

            $validator =
                [
                    'name' => 'required',
                    'email' => 'required',
                    'phone' => 'required',
                    'image' => 'image|mimes:png,jpg,jpeg|max:5000',
                ];


        $data['pq_code'] = 'NG' . '-' . date('dmy');



        $validator = Validator::make($request->all(), $validator);

        if ($validator->passes()) {


            if (!empty($rfq)) {


                $rfq->update([
                'sales_man_id_L1'      => $request->sales_man_id_L1,
                'sales_man_id_T1'      => $request->sales_man_id_T1,
                'sales_man_id_T2'      => $request->sales_man_id_T2,
                'client_id'            => $request->client_id,
                'partner_id'           => $request->partner_id,
                'solution_id'          => $request->solution_id,
                'client_type'          => $request->client_type,
                'name'                 => $request->name,
                'email'                => $request->email,
                'phone'                => $request->phone,
                'company_name'         => $request->company_name,
                'designation'          => $request->designation,
                'address'              => $request->address,
                'close_date'           => $request->close_date,
                'pq_code'              => $data['pq_code'],
                'pqr_code_one'         => $request->pqr_code_one,
                'pqr_code_two'         => $request->pqr_code_two,
                'regular'              => $request->regular,
                'special'              => $request->special,
                'tax_status'           => $request->tax_status,
                'rfq_type'             => 'deal',
                'validity'             => $request->validity,
                'payment'              => $request->payment,
                'payment_mode'         => $request->payment_mode,
                'delivery'             => $request->delivery,
                'delivery_location'    => $request->delivery_location,
                'product_order'        => $request->product_order,
                'installation_support' => $request->installation_support,
                'pmt_condition'        => $request->pmt_condition,
                'terms_nine'           => $request->terms_nine,
                'terms_ten'            => $request->terms_ten,
                'terms_eleven'         => $request->terms_eleven,
                'tax'                  => $request->tax,
                'vat'                  => $request->vat,
                'total_price'          => $request->total_price,
                'price_text'           => $request->price_text,
                'status'               => 'deal_created',


                ]);
            }

            $rfq_id           = $rfq->id;
            $rfq_code         = $rfq->rfq_code;
            $item_name        = $request->item_name;
            $qty              = $request->qty;
            $unit_price       = $request->unit_price;




            for ($i = 0; $i < count($item_name); $i++) {
                $datasave = [
                    'rfq_id'           => $rfq_id,
                    'rfq_code'         => $rfq_code,
                    'item_name'        => $item_name[$i],
                    'qty'              => $qty[$i],
                    'unit_price'       => $unit_price[$i],
                    

                ];

                DealSas::insert($datasave);
            }

            Toastr::success('Deal has been created');
        } else {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 30000]);
            }
        }
        return redirect()->route('deal.index');
    }
}
