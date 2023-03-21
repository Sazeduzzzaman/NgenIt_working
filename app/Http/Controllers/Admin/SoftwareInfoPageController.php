<?php

namespace App\Http\Controllers\Admin;

use Helper;
use App\Models\Admin\Row;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\File;
use App\Models\Admin\SoftwareInfoPage;
use Illuminate\Support\Facades\Validator;

class SoftwareInfoPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['softwareInfoPages'] = SoftwareInfoPage::get();
        return view('admin.pages.softwareInfoPage.all', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['rows'] = Row::select('rows.id', 'rows.title')->get();
        return view('admin.pages.softwareInfoPage.add', $data);
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
                'banner_image'   => 'sometimes|image|mimes:png,jpg,jpeg|max:10000',
                'row_six_image'   => 'sometimes|image|mimes:png,jpg,jpeg|max:10000',
            ],
            [
                'mimes' => 'The :attribute must be a file of type: PNG - JPEG - JPG'
            ],
        );

        if ($validator->passes()) {
            $bannerImage = $request->banner_image;
            $rowSixImage = $request->row_six_image;
            $uploadPath = storage_path('app/public/');

            if (isset($bannerImage)) {
                $globalFunBannerImage = Helper::singleImageUpload($bannerImage, $uploadPath);
            } else {
                $globalFunBannerImage = ['status' => 0];
            }

            if (isset($rowSixImage)) {
                $globalFunRowSixImage = Helper::singleImageUpload($rowSixImage, $uploadPath);
            } else {
                $globalFunRowSixImage = ['status' => 0];
            }

            SoftwareInfoPage::create([
                'row_five_tab_one_id'         => $request->row_five_tab_one_id,
                'row_five_tab_two_id'         => $request->row_five_tab_two_id,
                'row_five_tab_three_id'       => $request->row_five_tab_three_id,
                'row_five_tab_four_id'        => $request->row_five_tab_four_id,
                'banner_image'                => $globalFunBannerImage['status'] == 1 ? $globalFunBannerImage['file_name'] : '',
                'banner_title'                => $request->banner_title,
                'banner_short_description'    => $request->banner_short_description,
                'banner_btn_name'             => $request->banner_btn_name,
                'banner_btn_link'             => $request->banner_btn_link,
                'row_two_title'               => $request->row_two_title,
                'row_two_short_description'   => $request->row_two_short_description,
                'row_two_title'               => $request->row_two_title,
                'row_two_short_description'   => $request->row_two_short_description,
                'row_four_title'              => $request->row_four_title,
                'row_four_sub_title'          => $request->row_four_sub_title,
                'row_four_short_description'  => $request->row_four_short_description,
                'row_four_video_link'         => $request->row_four_video_link,
                'row_four_btn_name'           => $request->row_four_btn_name,
                'row_four_btn_link'           => $request->row_four_btn_link,
                'row_five_title'              => $request->row_five_title,
                'row_five_short_description'  => $request->row_five_short_description,
                'row_six_title'               => $request->row_six_title,
                'row_six_short_description'   => $request->row_six_short_description,
                'row_six_btn_name'            => $request->row_six_btn_name,
                'row_six_btn_link'            => $request->row_six_btn_link,
                'row_six_image'               => $globalFunRowSixImage['status'] == 1 ? $globalFunRowSixImage['file_name'] : '',
                'row_seven_title'             => $request->row_seven_title,
                'row_eight_title'             => $request->row_eight_title,
                'row_eight_short_description' => $request->row_eight_short_description,
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
        $data['softwareInfoPage'] = SoftwareInfoPage::find($id);
        $data['rows'] = Row::select('rows.id', 'rows.title')->get();
        return view('admin.pages.softwareInfoPage.edit', $data);
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
                'banner_image'   => 'sometimes|image|mimes:png,jpg,jpeg|max:10000',
                'row_six_image'   => 'sometimes|image|mimes:png,jpg,jpeg|max:10000',
            ],
            [
                'mimes' => 'The :attribute must be a file of type: PNG - JPEG - JPG'
            ],
        );
        $softwareInfoPage = SoftwareInfoPage::find($id);

        if ($validator->passes()) {
            $bannerImage = $request->bannerImage;
            $rowSixImage = $request->row_six_image;
            $uploadPath = storage_path('app/public/');

            if (isset($bannerImage)) {
                $globalFunBannerImage = Helper::singleImageUpload($bannerImage, $uploadPath);
            } else {
                $globalFunBannerImage = ['status' => 0];
            }

            if (isset($rowSixImage)) {
                $globalFunRowSixImage = Helper::singleImageUpload($rowSixImage, $uploadPath);
            } else {
                $globalFunRowSixImage = ['status' => 0];
            }

            if ($globalFunBannerImage['status'] == 1) {
                File::delete(public_path('storage/') . $softwareInfoPage->banner_image);
                File::delete(public_path('storage/requestImg/') . $softwareInfoPage->banner_image);
                File::delete(public_path('storage/thumb/') . $softwareInfoPage->banner_image);
            }
            if ($globalFunRowSixImage['status'] == 1) {
                File::delete(public_path('storage/') . $softwareInfoPage->row_six_image);
                File::delete(public_path('storage/requestImg/') . $softwareInfoPage->row_six_image);
                File::delete(public_path('storage/thumb/') . $softwareInfoPage->row_six_image);
            }

            $softwareInfoPage->update([
                'row_five_tab_one_id'         => $request->row_five_tab_one_id,
                'row_five_tab_two_id'         => $request->row_five_tab_two_id,
                'row_five_tab_three_id'       => $request->row_five_tab_three_id,
                'row_five_tab_four_id'        => $request->row_five_tab_four_id,
                'banner_image'                => $globalFunBannerImage['status'] == 1 ? $globalFunBannerImage['file_name'] : '',
                'banner_title'                => $request->banner_title,
                'banner_short_description'    => $request->banner_short_description,
                'banner_btn_name'             => $request->banner_btn_name,
                'banner_btn_link'             => $request->banner_btn_link,
                'row_two_title'               => $request->row_two_title,
                'row_two_short_description'   => $request->row_two_short_description,
                'row_two_title'               => $request->row_two_title,
                'row_two_short_description'   => $request->row_two_short_description,
                'row_four_title'              => $request->row_four_title,
                'row_four_sub_title'          => $request->row_four_sub_title,
                'row_four_short_description'  => $request->row_four_short_description,
                'row_four_video_link'         => $request->row_four_video_link,
                'row_four_btn_name'           => $request->row_four_btn_name,
                'row_four_btn_link'           => $request->row_four_btn_link,
                'row_five_title'              => $request->row_five_title,
                'row_five_short_description'  => $request->row_five_short_description,
                'row_six_title'               => $request->row_six_title,
                'row_six_short_description'   => $request->row_six_short_description,
                'row_six_btn_name'            => $request->row_six_btn_name,
                'row_six_btn_link'            => $request->row_six_btn_link,
                'row_six_image'               => $globalFunRowSixImage['status'] == 1 ? $globalFunRowSixImage['file_name'] : '',
                'row_seven_title'             => $request->row_seven_title,
                'row_eight_title'             => $request->row_eight_title,
                'row_eight_short_description' => $request->row_eight_short_description,
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $softwareInfoPage = SoftwareInfoPage::find($id);

        //banner_image
        if (File::exists(public_path('storage/') . $softwareInfoPage->banner_image)) {
            File::delete(public_path('storage/') . $softwareInfoPage->banner_image);
        }
        if (File::exists(public_path('storage/requestImg/') . $softwareInfoPage->banner_image)) {
            File::delete(public_path('storage/requestImg/') . $softwareInfoPage->banner_image);
        }
        if (File::exists(public_path('storage/thumb/') . $softwareInfoPage->banner_image)) {
            File::delete(public_path('storage/thumb/') . $softwareInfoPage->banner_image);
        }

        //row_six_image
        if (File::exists(public_path('storage/') . $softwareInfoPage->row_six_image)) {
            File::delete(public_path('storage/') . $softwareInfoPage->row_six_image);
        }
        if (File::exists(public_path('storage/requestImg/') . $softwareInfoPage->row_six_image)) {
            File::delete(public_path('storage/requestImg/') . $softwareInfoPage->row_six_image);
        }
        if (File::exists(public_path('storage/thumb/') . $softwareInfoPage->row_six_image)) {
            File::delete(public_path('storage/thumb/') . $softwareInfoPage->row_six_image);
        }
        $softwareInfoPage->delete();
    }
}
