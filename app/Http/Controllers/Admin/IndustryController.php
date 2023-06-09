<?php

namespace App\Http\Controllers\Admin;

use Image;
use Helper;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Admin\Industry;
use App\Models\Admin\SubIndustry;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use function GuzzleHttp\Promise\all;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class IndustryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['industrys'] = Industry::latest()->get();
        // $data['sub_industrys'] = SubIndustry::latest()->get();
        return view('admin.pages.industry.all', $data);
    } 


    public function create()
    {
        $data['industrys'] = Industry::latest()->get();
        return view('admin.pages.industry.add', $data);
    } 


    public function store(Request $request)
    {
        //Helper::imageDirectory();
        Helper::imageDirectory();
        $validator = Validator::make(
            $request->all(),
            [
                'title'      => 'required',
                'logo'       => 'required|image|mimes:png,jpg,jpeg|max:10000',
                'image'      => 'required|image|mimes:png,jpg,jpeg|max:10000',
                'short_desc' => 'required|max:600',
            ]
        );

        if ($validator->passes()) {
            $logoMainFile = $request->logo;
            $imageMainFile = $request->image;
            $uploadPath = storage_path('app/public/');
            if (isset($logoMainFile)) {
                $globalFunImgLogo = Helper::singleImageUpload($logoMainFile, $uploadPath);
            } else {
                $globalFunImgLogo = ['status' => 0];
            }

            if (isset($imageMainFile)) {
                $globalFunImage = Helper::singleImageUpload($imageMainFile, $uploadPath, 500, 300);
            } else {
                $globalFunImage = ['status' => 0];
            }
            Industry::create([
                'title'      => $request->title,
                'logo'       => $globalFunImgLogo['status'] == 1 ? $globalFunImgLogo['file_name'] : '',
                'image'      => $globalFunImage['status']  == 1 ? $globalFunImage['file_name'] : '',
                'short_desc' => $request->short_desc,
                'link'  => $request->link,

            ]);
            Toastr::success('Data has been created');
        } else {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 30000]);
            }
        }

        return redirect()->back();
    } 


    // public function edit($id)
    // {
    //     if (Industry::findOrFail($id)) {
    //         $data['industry'] = Industry::findOrFail($id);
    //     } else {
    //         $data['sub_industry'] = SubIndustry::findOrFail($id);
    //     }

    //     return view('admin.pages.industry.edit', $data);
    // } 


    public function update(Request $request, $id)
    {
        $industry = Industry::find($id);
        if (!empty($industry)) {
            $validator =
                [
                    'title'      => 'required',
                    'short_desc' => 'required|max:600',

                ];
        } else {
            $validator =
                [

                    'title'      => 'required',
                    'short_desc' => 'required|max:600',

                ];
        }
        $validator = Validator::make($request->all(), $validator);

        if ($validator->passes()) {
            $logoMainFile  = $request->logo;
            $imageMainFile = $request->image;
            $uploadPath    = storage_path('app/public/');
            if (isset($logoMainFile)) {
                $globalFunImgLogo = Helper::singleImageUpload($logoMainFile, $uploadPath);
            } else {
                $globalFunImgLogo = ['status' => 0];
            }

            if (isset($imageMainFile)) {
                $globalFunImage = Helper::singleImageUpload($imageMainFile, $uploadPath, 500, 300);
            } else {
                $globalFunImage = ['status' => 0];
            }

            if ($globalFunImgLogo['status'] == 1) {
                File::delete(public_path('storage/') . $industry->logo);
                File::delete(public_path('storage/requestImg/') . $industry->logo);
                File::delete(public_path('storage/thumb/') . $industry->logo);
            }
            if ($globalFunImage['status'] == 1) {
                File::delete(public_path('storage/') . $industry->image);
                File::delete(public_path('storage/requestImg/') . $industry->image);
                File::delete(public_path('storage/thumb/') . $industry->image);
            }

            $industry->update([
                'title'      => $request->title,
                'logo'       => $globalFunImgLogo['status'] == 1 ? $globalFunImgLogo['file_name'] : $industry->logo,
                'image'      => $globalFunImage['status']   == 1 ? $globalFunImage['file_name']  : $industry->image,
                'short_desc' => $request->short_desc,
                'link'       => $request->link,

            ]);
            Toastr::success('Data has been updated');
        } else {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 30000]);
            }
        }
        return redirect()->back();
    } 


    public function destroy($id)
    {
        $industry = Industry::find($id);

        //logo
        if (File::exists(public_path('storage/') . $industry->logo)) {
            File::delete(public_path('storage/') . $industry->logo);
        }
        if (File::exists(public_path('storage/requestImg/') . $industry->logo)) {
            File::delete(public_path('storage/requestImg/') . $industry->logo);
        }
        if (File::exists(public_path('storage/thumb/') . $industry->logo)) {
            File::delete(public_path('storage/thumb/') . $industry->logo);
        }

        //image
        if (File::exists(public_path('storage/') . $industry->image)) {
            File::delete(public_path('storage/') . $industry->image);
        }
        if (File::exists(public_path('storage/requestImg/') . $industry->image)) {
            File::delete(public_path('storage/requestImg/') . $industry->image);
        }
        if (File::exists(public_path('storage/thumb/') . $industry->image)) {
            File::delete(public_path('storage/thumb/') . $industry->image);
        }
        $industry->delete();
    } 


}
