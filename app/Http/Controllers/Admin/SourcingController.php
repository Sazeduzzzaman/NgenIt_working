<?php

namespace App\Http\Controllers\Admin;

use Image;
use Carbon\Carbon;
use App\Models\Admin\Sas;
use App\Models\Admin\Brand;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Admin\Product;
use App\Models\Admin\Category;
use App\Models\Admin\Industry;
use App\Models\Admin\Sourcing;
use App\Models\Admin\MultiImage;
use App\Models\Admin\SubCategory;
use App\Models\Admin\MultiIndustry;
use App\Models\Admin\MultiSolution;
use App\Http\Controllers\Controller;
use App\Models\Admin\SolutionDetail;
use App\Models\Admin\SubSubCategory;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\File;
use App\Models\Admin\IndustryProduct;
use App\Models\Admin\SolutionProduct;
use App\Models\Admin\SubSubSubCategory;
use App\Models\Admin\SourcingMultiImage;
use Illuminate\Support\Facades\Validator;

class SourcingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['saved_products'] = Product::where('product_status' , 'sourcing')->where('action_status' , 'save')->latest()
        ->select('products.id','products.slug','products.thumbnail','products.price','products.discount','products.name','products.stock','products.source_one_price','products.source_two_price','products.action_status')
        ->get();
        $data['products'] = Product::where('product_status' , 'sourcing')->where('action_status' ,'!=' , 'save')->latest()
        ->select('products.id','products.slug','products.thumbnail','products.price','products.discount','products.name','products.stock','products.source_one_price','products.source_two_price','products.action_status')
        ->get();
        $data['real_products'] = Product::where('product_status' , 'product')->latest()
        ->select('products.id','products.slug','products.thumbnail','products.price','products.discount','products.name','products.stock','products.source_one_price','products.source_two_price','products.action_status')
        ->get();
        return view('admin.pages.product_sourcing.all',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['brands']              = Brand::latest()->get();
        $data['categories']          = Category::orderBy('id','DESC')->get();
        $data['sub_cats']            = SubCategory::orderBy('id','DESC')->get();
        $data['sub_sub_cats']        = SubSubCategory::orderBy('id','DESC')->get();
        $data['sub_sub_sub_cats']    = SubSubSubCategory::orderBy('id','DESC')->get();
        $data['industrys']           = Industry::orderBy('id','DESC')->get();
        $data['solutions']           = SolutionDetail::orderBy('id','DESC')->get();
        return view('admin.pages.product_sourcing.add',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$input   = $request->all();



        $validator = Validator::make(
            $request->all(),
            [
                'name'     => 'required|max:200',
                'thumbnail' => 'required|image|mimes:png,jpg,jpeg|max:5000',

            ],
            [
                'thumbnail' => [
                  'max'   => 'The image field must be smaller than 10 MB.',
                ],
                'thumbnail' => 'The file must be an image.',
                'mimes'     => 'The: attribute must be a file of type: PNG - JPEG - JPG'
            ]
        );

            //dd($request->all());
            if (($request->source_approval) == 'one') {
                $source_one_approval= '1';
                $source_two_approval= '0';
            } else {
                $source_one_approval= '0';
                $source_two_approval= '1';
            }
            if (($request->action) == 'save') {
                if ($validator->passes()) {
                //dd($input);
                $slug=Str::slug($request->name);
                $count=Product::where('slug',$slug)->count();
                if($count>0){
                    $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
                }
                $data['slug']=$slug;

                if (($request->rfq) !== NULL) {
                    $data['rfq'] = $request->rfq;
                } else {
                    $data['rfq'] = '0';
                }

                $ref_code='REF'.Str::random(7);
                $count=Product::where('ref_code',$ref_code)->count();
                if($count>0){
                    $ref_code=$ref_code.'.'.date('ymdis').'.'.rand(0,999);
                }
                $data['ref_code']=$ref_code;

                $image = $request->file('thumbnail');
                $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                $path = public_path('upload/Products/thumbnail/'.$name_gen);
                Image::make($image)->resize(376,282)->save($path);
                $save_url = 'upload/Products/thumbnail/'.$name_gen;

                $product_id = Product::insertGetId([

                    'name'                  => $request->name,
                    'ref_code'              => $data['ref_code'],
                    'slug'                  => $data['slug'],
                    'sku_code'              => $request->sku_code,
                    'mf_code'               => $request->mf_code,
                    'product_code'          => $request->product_code,
                    'tags'                  => $request->tags,
                    'size'                  => $request->size,
                    'color'                 => $request->color,
                    'short_desc'            => $request->short_desc,
                    'overview'              => $request->overview,
                    'specification'         => $request->specification,
                    'accessories'           => $request->accessories,
                    'warranty'              => $request->warranty,
                    'thumbnail'             => $save_url,
                    'stock'                 => $request->stock,
                    'qty'                   => $request->qty,
                    'rfq'                   => $data['rfq'],
                    // 'status'                => 'active',
                    // 'price'                 => $request->price,
                    // 'discount'              => $request->discount,
                    'deal'                  => $request->deal,
                    'refurbished'           => $request->refurbished,
                    'product_type'          => $request->product_type,
                    'cat_id'                => $request->cat_id,
                    'sub_cat_id'            => $request->sub_cat_id,
                    'sub_sub_cat_id'        => $request->sub_sub_cat_id,
                    'sub_sub_sub_cat_id'    => $request->sub_sub_sub_cat_id,
                    'brand_id'              => $request->brand_id,
                    'source_one_price'      => $request->source_one_price,
                    'source_two_price'      => $request->source_two_price,
                    'source_one_name'       => $request->source_one_name,
                    'source_two_name'       => $request->source_two_name,
                    'source_one_link'       => $request->source_one_link,
                    'source_two_link'       => $request->source_two_link,
                    'competetor_one_name'   => $request->competetor_one_name,
                    'competetor_one_price'  => $request->competetor_one_price,
                    'competetor_two_name'   => $request->competetor_two_name,
                    'competetor_two_price'  => $request->competetor_two_price,
                    'competetor_one_link'   => $request->competetor_one_link,
                    'competetor_two_link'   => $request->competetor_two_link,
                    'source_one_approval'   => $source_one_approval,
                    'source_two_approval'   => $source_two_approval,
                    'notification_days'     => $request->notification_days,
                    'create_date'           => date('Y-m-d', strtotime(Carbon::now())),
                    'solid_source'          => $request->solid_source,
                    'direct_principal'      => $request->direct_principal,
                    'agreement'             => $request->agreement,
                    'source_type'           => $request->source_type,
                    'source_contact'        => $request->source_contact,
                    'action_status'         => 'save',
                    'product_status'        => 'sourcing',
                    'created_at'            => Carbon::now(),

                ]);

                /// Multiple Image Upload From it //////

                $images = $request->file('multi_img');
                foreach($images as $img){
                    $make_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
                    $multi_path = public_path('upload/Products/multi-image/'.$make_name);
                    Image::make($img)->resize(376,282)->save($multi_path);
                    $uploadPath = 'upload/Products/multi-image/'.$make_name;

                    MultiImage::insert([

                        'product_id' => $product_id,
                        'photo' => $uploadPath,
                        'created_at' => Carbon::now(),

                    ]);
                    } // end foreach
                    if(!empty($request->industry_id)){
                    $industrys = $request->industry_id;
                    foreach($industrys as $industry){
                        MultiIndustry::insert([

                        'product_id' => $product_id,
                        'industry_id' => $industry,
                        'created_at' => Carbon::now(),

                        ]);
                    }
                }
                    if(!empty($request->solution_id)){
                    $solutions = $request->solution_id;
                    foreach($solutions as $solution){
                        MultiSolution::insert([

                        'product_id' => $product_id,
                        'solution_id' => $solution,
                        'created_at' => Carbon::now(),

                        ]);
                    }
                }



                    Toastr::success('Data Inserted Successfully');
                } else {
                    $messages = $validator->messages();
                    foreach ($messages->all() as $message) {
                        Toastr::error($message, 'Failed', ['timeOut' => 30000]);
                    }
                }
                return redirect()->back();

        } elseif (($request->action) == 'approval') {
            if ($validator->passes()) {
                //dd($input);
                $slug=Str::slug($request->name);
                $count=Product::where('slug',$slug)->count();
                if($count>0){
                    $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
                }
                $data['slug']=$slug;
                if (($request->rfq) !== NULL) {
                    $data['rfq'] = $request->rfq;
                } else {
                    $data['rfq'] = '0';
                }
                $ref_code='REF'.Str::random(7);
                $count=Product::where('ref_code',$ref_code)->count();
                if($count>0){
                    $ref_code=$ref_code.'.'.date('ymdis').'.'.rand(0,999);
                }
                $data['ref_code']=$ref_code;

                $image = $request->file('thumbnail');
                $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                $path = public_path('upload/Products/thumbnail/'.$name_gen);
                Image::make($image)->resize(376,282)->save($path);
                $save_url = 'upload/Products/thumbnail/'.$name_gen;

                $product_id = Product::insertGetId([

                    'name'                  => $request->name,
                    'ref_code'              => $data['ref_code'],
                    'slug'                  => $data['slug'],
                    'sku_code'              => $request->sku_code,
                    'mf_code'               => $request->mf_code,
                    'product_code'          => $request->product_code,
                    'tags'                  => $request->tags,
                    'size'                  => $request->size,
                    'color'                 => $request->color,
                    'short_desc'            => $request->short_desc,
                    'overview'              => $request->overview,
                    'specification'         => $request->specification,
                    'accessories'           => $request->accessories,
                    'warranty'              => $request->warranty,
                    'thumbnail'             => $save_url,
                    'stock'                 => $request->stock,
                    'qty'                   => $request->qty,
                    'rfq'                   => $data['rfq'],
                    // 'status'                => 'active',
                    // 'price'                 => $request->price,
                    // 'discount'              => $request->discount,
                    'deal'                  => $request->deal,
                    'refurbished'           => $request->refurbished,
                    'product_type'          => $request->product_type,
                    'cat_id'                => $request->cat_id,
                    'sub_cat_id'            => $request->sub_cat_id,
                    'sub_sub_cat_id'        => $request->sub_sub_cat_id,
                    'sub_sub_sub_cat_id'    => $request->sub_sub_sub_cat_id,
                    'brand_id'              => $request->brand_id,
                    'source_one_price'      => $request->source_one_price,
                    'source_two_price'      => $request->source_two_price,
                    'source_one_name'       => $request->source_one_name,
                    'source_two_name'       => $request->source_two_name,
                    'source_one_link'       => $request->source_one_link,
                    'source_two_link'       => $request->source_two_link,
                    'competetor_one_price'  => $request->competetor_one_price,
                    'competetor_two_price'  => $request->competetor_two_price,
                    'competetor_one_name'   => $request->competetor_one_name,
                    'competetor_two_name'   => $request->competetor_two_name,
                    'competetor_one_link'   => $request->competetor_one_link,
                    'competetor_two_link'   => $request->competetor_two_link,
                    'source_one_approval'   => $source_one_approval,
                    'source_two_approval'   => $source_two_approval,
                    'notification_days'     => $request->notification_days,
                    'create_date'           => date('Y-m-d', strtotime(Carbon::now())),
                    //'source_three_approval' => $request->source_three_approval,
                    'solid_source'          => $request->solid_source,
                    'direct_principal'      => $request->direct_principal,
                    'agreement'             => $request->agreement,
                    'source_type'           => $request->source_type,
                    'source_contact'        => $request->source_contact,
                    'action_status'         => 'listed',
                    'product_status'        => 'sourcing',
                    'created_at'            => Carbon::now(),

                ]);

                /// Multiple Image Upload From it //////

                $images = $request->file('multi_img');
                foreach($images as $img){
                $make_name = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();
                $multi_path = public_path('upload/Products/multi-image/'.$make_name);
                Image::make($img)->resize(376,282)->save($multi_path);
                $uploadPath = 'upload/Products/multi-image/'.$make_name;


                MultiImage::insert([

                    'product_id' => $product_id,
                    'photo' => $uploadPath,
                    'created_at' => Carbon::now(),

                ]);
                } // end foreach
                if(!empty($request->industry_id)){
                $industrys = $request->industry_id;
                foreach($industrys as $industry){
                    MultiIndustry::insert([

                    'product_id' => $product_id,
                    'industry_id' => $industry,
                    'created_at' => Carbon::now(),

                    ]);
                }
            }
                if(!empty($request->solution_id)){
                $solutions = $request->solution_id;
                foreach($solutions as $solution){
                    MultiSolution::insert([

                    'product_id' => $product_id,
                    'solution_id' => $solution,
                    'created_at' => Carbon::now(),

                    ]);
                }
            }




                    Toastr::success('Data Inserted Successfully');
                } else {
                    $messages = $validator->messages();
                    foreach ($messages->all() as $message) {
                        Toastr::error($message, 'Failed', ['timeOut' => 30000]);
                    }
                }
                $data['product'] = Product::where('id' , $product_id)->first();
                return redirect()->route('sourcing.sas',$data['product']->slug);
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
        $data['multiImgs'] = MultiImage::where('product_id',$id)->get();
       //$activeVendor = User::where('status','active')->where('role','vendor')->latest()->get();
        $data['brands']              = Brand::latest()->get();
        $data['categories']          = Category::orderBy('id','DESC')->get();
        $data['sub_cats']            = SubCategory::orderBy('id','DESC')->get();
        $data['sub_sub_cats']        = SubSubCategory::orderBy('id','DESC')->get();
        $data['sub_sub_sub_cats']    = SubSubSubCategory::orderBy('id','DESC')->get();
        $data['industrys']           = Industry::orderBy('id','DESC')->get();
        $data['solutions']           = SolutionDetail::orderBy('id','DESC')->get();
        $data['products']            = Product::findOrFail($id);
        return view('admin.pages.product_sourcing.edit',$data);
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
            $product_id = $id;
            //dd($product_id);
            if (($request->source_approval) == 'one') {
                $source_one_approval= '1';
                $source_two_approval= '0';
            } else {
                $source_one_approval= '0';
                $source_two_approval= '1';
            }


            $slug=Str::slug($request->name);
            $count=Product::where('slug',$slug)->count();
            if($count>0){
                $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
            }
            $data['slug']=$slug;
            if (($request->rfq) !== NULL) {
                $data['rfq'] = $request->rfq;
            } else {
                $data['rfq'] = '0';
            }

             Product::findOrFail($product_id)->update([


                    'name'                  => $request->name,
                    //'ref_code'              => $data['ref_code'],
                    'slug'                  => $data['slug'],
                    'sku_code'              => $request->sku_code,
                    'mf_code'               => $request->mf_code,
                    'product_code'          => $request->product_code,
                    'tags'                  => $request->tags,
                    'size'                  => $request->size,
                    'color'                 => $request->color,
                    'short_desc'            => $request->short_desc,
                    'overview'              => $request->overview,
                    'specification'         => $request->specification,
                    'accessories'           => $request->accessories,
                    'warranty'              => $request->warranty,
                    'stock'                 => $request->stock,
                    'qty'                   => $request->qty,
                    'rfq'                   => $data['rfq'],
                    // 'status'                => 'active',
                    // 'price'                 => $request->price,
                    // 'discount'              => $request->discount,
                    'deal'                  => $request->deal,
                    'refurbished'           => $request->refurbished,
                    'product_type'          => $request->product_type,
                    'cat_id'                => $request->cat_id,
                    'sub_cat_id'            => $request->sub_cat_id,
                    'sub_sub_cat_id'        => $request->sub_sub_cat_id,
                    'sub_sub_sub_cat_id'    => $request->sub_sub_sub_cat_id,
                    'brand_id'              => $request->brand_id,
                    'source_one_price'      => $request->source_one_price,
                    'source_two_price'      => $request->source_two_price,
                    'source_one_name'       => $request->source_one_name,
                    'source_two_name'       => $request->source_two_name,
                    'source_one_link'       => $request->source_one_link,
                    'source_two_link'       => $request->source_two_link,
                    'competetor_one_price'  => $request->competetor_one_price,
                    'competetor_two_price'  => $request->competetor_two_price,
                    'competetor_one_name'   => $request->competetor_one_name,
                    'competetor_two_name'   => $request->competetor_two_name,
                    'competetor_one_link'   => $request->competetor_one_link,
                    'competetor_two_link'   => $request->competetor_two_link,
                    'source_one_approval'   => $source_one_approval,
                    'source_two_approval'   => $source_two_approval,
                    'notification_days'     => $request->notification_days,
                    //'source_three_approval' => $request->source_three_approval,
                    'solid_source'          => $request->solid_source,
                    'direct_principal'      => $request->direct_principal,
                    'agreement'             => $request->agreement,
                    'source_type'           => $request->source_type,
                    'source_contact'        => $request->source_contact,
                    'action_status'         => 'listed',
                    'product_status'        => 'sourcing',
                    'updated_at'            => Carbon::now(),

        ]);

        Toastr::success('Product Updated Without Image Successfully');
        $product = Product::where('id',$product_id)->first();
        $sas = Sas::where('ref_code', $product->ref_code)->first();

        // if (!empty($sas)) {
        //     return redirect()->route('sas.edit', [$sas->ref_code]);
        // }else {
        //         $data['product'] = Product::where('id' , $product_id)->first();
        //         return redirect()->route('sourcing.sas',$data['product']->slug);
        // }


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
        $product = Product::findOrFail($id);
        //unlink($product->thumbnail);
        if (File::exists($product->thumbnail)) {
            File::delete($product->thumbnail);
        }
        Product::findOrFail($id)->delete();

        $imges = MultiImage::where('product_id',$id)->get();
        foreach($imges as $img){
            //unlink($img->photo_name);
            if (File::exists($img->photo_name)) {
                File::delete($img->photo_name);
            }
            MultiImage::where('product_id',$id)->delete();
        }

        // return redirect()->back();
    }

    public function ProductApprove()
    {

        $data['products'] = Product::where('product_status' , 'sourcing')->where('action_status' , 'seek_approval')->latest()->get();
        return view('admin.pages.product_sourcing.approve',$data);
    }

    public function StoreProductApproval(Request $request, $id)
    {
        //dd($request->all());
        $product_id = Product::where('slug', $id)->where('product_status' , 'sourcing')->first();
        Product::findOrFail($product_id->id)->update([
            'price'           => $request->price,
            'action_status'   => 'product_approved',
            'product_status' => 'product',
            ]);

        Toastr::success('Product has been approved Successfully');
        return redirect()->route('product-sourcing.index');
    }


}
