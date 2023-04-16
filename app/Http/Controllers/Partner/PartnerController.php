<?php

namespace App\Http\Controllers\Partner;

use Illuminate\Http\Request;
use App\Models\Partner\Partner;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Validator;

class PartnerController extends Controller
{

    public function partnerProfile()
    {
        if (Auth::guard('partner')->user()->id) {
            $data['data'] = Partner::where('id', Auth::guard('partner')->user()->id)->first();
            return view('partner.pages.profile.profile', $data);
        } else {
            Toastr::error('Login first.');
            return redirect()->back();
        }
    }

    public function partnerProfileStore(Request $request){
        $data = $request->all();

        $check = Partner::where('primary_email_address', $data['primary_email_address'])->first();

        if ($check) {
            $validator = Validator::make(

                $request->all(),
                //dd($request->all()),
                [
                    'name'    => 'required',
                    'logo'   => 'image|mimes:png,jpg,jpeg|max:5000',
                ],
                [
                    'image'   => [
                        'max' => 'The image field must be smaller than 4 MB.',
                    ],
                    'image'   => 'The file must be an image.',
                    'mimes'   => 'The :attribute must be a file of type: PNG - JPEG - JPG'
                ]
            );
        } else {
            $validator = Validator::make(
                $request->all(),
                [
                    'name'    => 'required|',
                    'primary_email_address'   => 'required|email|unique:users,email',
                    'logo'   => 'image|mimes:png,jpg,jpeg|max:5000',
                ],
                [
                    'image'   => [
                        'max' => 'The image field must be smaller than 4 MB.',
                    ],
                    'image'   => 'The file must be an image.',
                    'mimes'   => 'The :attribute must be a file of type: PNG - JPEG - JPG'
                ]
            );
        }



        if ($validator->passes()) {
            $id = Auth::guard('partner')->user()->id;
            $profile = Partner::find($id);
            if ($check) {
                $request->except('primary_email_address');
            } else {
                $data = $request->all();
            }

            //$data = $request->all();

            if ($request->logo)
                {
                    $destination = 'upload/Profile/user/'.$profile->logo;
                    if (File::exists($destination))
                    {
                        File::delete($destination);
                    }
                    $image = $request->file('logo');
                    $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                    $path = public_path('upload/Profile/user/'.$name_gen);
                    Image::make($image)->resize(176,176)->save($path);
                    $data['logo'] = $name_gen;
                }

            $status = $profile->fill($data)->save();
            Toastr::success('Your Profile Updated Successfully');
            return redirect()->route('partner.profile');
        } else {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 30000]);
            }
            return redirect()->back();
        }


    } // End Mehtod

    public function dashboard()
    {

        $data['partner'] = Auth::guard('partner');
        //dd($data['partner']);
        return view('partner.pages.dashboard.index', $data);
    }

    public function index()
    {
        return view('partner.auth.register');
    }
    public function PartnerRegistration(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name'     => 'required',
                'email'    => 'required|unique:partners|max: 70',
                'password' => 'required|confirmed',
            ],
        );

        if ($validator->passes()) {
            $partner = Partner::create([
                'name'     => $request->name,
                'email'    => $request->email,
                'status'   => 'inactive',
                'password' => Hash::make($request->password),

            ]);

            event(new Registered($partner));

            Auth::guard('partner')->login($partner);
            Toastr::success('You have registered Successfully');
            return redirect()->route('partner.dashboard');
        } else {

            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 30000]);
            }
            return redirect('partner/login');
        }
    }


    public function showLoginForm()
    {
        if (Auth::guard('partner')->check()) {
            return redirect()->route('partner.dashboard');
        } else {
            return view('partner.auth.login');
        }
    }

    /**
     * Handle an incoming admin authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function Partnerlogin(Request $request)
    {
        //dd($request->all());
        $validator = Validator::make(
            $request->all(),
            [
                'primary_email_address' => 'required|max:70',
                'password' => 'required|max:70',
            ],
        );

        if ($validator->passes()) {
            $credentials = $request->only('primary_email_address', 'password');
            //dd($credentials);
            if (Auth::guard('partner')->attempt(['primary_email_address' => $request->primary_email_address, 'password' => $request->password], $request->get('remember'))) {
                //if (Auth::guard('partner')->attempt(['primary_email_address' => $credentials['primary_email_address'], 'password' => $credentials['password'],])) {
                //dd($credentials);
                Toastr::success('You have Successfully logged in.');
                return redirect()->route('partner.dashboard');
            } else {
                Toastr::error('Login details are not valid');
                return redirect("partner/login");
            }
        } else {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 30000]);
            }
            return redirect("partner/login");
        }
    }

    // public function PartnerLogin(){
    //     return view('partner.auth.login');
    // } // End Mehtod

    public function logout(Request $request)
    {
        Auth::guard('partner')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/partner/login');
    } // End Mehtod
}
