<?php

namespace App\Http\Controllers\Sales;

use Image;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Admin\Country;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class SalesAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['countries'] = Country::latest()->get();
        $data['salesmans'] = User::where('role' , 'sales')->orderBy('id','DESC')->get();
        return view('admin.pages.SalesAccount.all',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['countries'] = Country::latest()->get();
        return view('admin.pages.SalesAccount.add',$data);
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

        $validator = Validator::make(
            $request->all(),
            [
                'name'     => 'required',
                'email'    => 'required|unique:users',
                'image'   => 'image|mimes:png,jpg,jpeg|max:5000',
                'password' => 'required|confirmed',
            ],
            [
                'image'   => [
                    'max' => 'The image field must be smaller than 4 MB.',
                ],
                'image'   => 'The file must be an image.',
                'mimes'   => 'The :attribute must be a file of type: PNG - JPEG - JPG'
            ]
        );
        if ($request->photo)
                {
                    $destination = 'upload/Profile/Admin/'.$request->photo;
                    if (File::exists($destination))
                    {
                        File::delete($destination);
                    }
                    $image = $request->file('photo');
                    $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                    $path = public_path('upload/Profile/Admin/'.$name_gen);
                    Image::make($image)->resize(176,176)->save($path);
                    $data['photo'] = $name_gen;
                }
        else{
            $data['photo'] ="";
        }
        if ($validator->passes()) {
            $salesmanager = User::create([
                'name'     => $request->name,
                'email'    => $request->email,
                'phone'    => $request->phone,
                'country'     => $request->country,
                'address'    => $request->address,
                'postal'    => $request->postal,
                'status'   => 'inactive',
                'role'   => 'sales',
                'photo'   => $data['photo'],
                'password' => Hash::make($request->password),
            ]);

            Toastr::success('You have registered Successfully');
            return redirect()->route('sales-account.index');
        } else {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 30000]);
            }
            return redirect()->back();
        }
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

    public function SalesStatus(Request $request)
    {

        //dd($request->id);
        if ($request->mode == 'true') {
            DB::table('users')->where('id', $request->id)->update(['status' => 'inactive']);
        } else {


            DB::table('users')->where('id', $request->id)->update(['status' => 'active']);
        }
        return response()->json(['msg' => 'Successfully Updated Status', 'status' => true]);
    }
}
