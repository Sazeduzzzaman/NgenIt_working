<?php

namespace App\Http\Controllers\Frontend;

use Share;
use App\Models\User;
use App\Models\Admin\Blog;
use App\Models\Admin\Brand;
use App\Models\Admin\Client;
use App\Models\Admin\Policy;
use Illuminate\Http\Request;
use App\Models\Admin\Product;
use App\Models\Admin\Setting;
use App\Models\Admin\Success;
use App\Models\Admin\Category;
use App\Models\Admin\Homepage;
use App\Models\Admin\Industry;
use App\Models\Admin\LearnMore;
use App\Models\Admin\TechGlossy;
use App\Models\Admin\ClientStory;
use App\Models\Admin\SubCategory;
use App\Models\Admin\IndustryPage;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Admin\SubSubCategory;
use App\Models\Admin\SubSubSubCategory;
use App\Http\Controllers\Admin\ClientController;
use App\Models\Admin\BrandPage;
use App\Models\Admin\Feature;
use App\Models\Admin\Row;
use App\Models\Admin\SolutionCard;
use App\Models\Admin\SolutionDetail;

class HomeController extends Controller
{

    //Client Authentication

    public function login()
    {
        return view('frontend.auth.login');
    }

    public function register()
    {
        return view('frontend.auth.register');
    }



    //Homepage

    public function index()
    {
        $data['home'] = Homepage::first();

        $data['top_brands'] = Brand::where('category','Top')->latest()->get();
        if ($data['top_brands']) {
            $data['products'] = DB::table('products')
                        ->join('brands', 'products.brand_id', '=', 'brands.id')
                        ->where('brands.category', '=', 'Top')
                        ->where('product_status', '=', 'product')
                        ->distinct()
                        ->select('products.id','products.rfq','products.slug','products.name','products.thumbnail','products.price','products.discount')
                        ->limit(12)->get();
        }else{
            $data['products'] = DB::table('products')->inRandomOrder()->where('product_status', 'product')
            ->select('products.id','products.rfq','products.slug','products.name','products.thumbnail','products.price','products.discount')
            ->limit(12)->get()->unique('products.brand_id');
        }

        if ($data['home']) {
        $data['feature1'] = Feature::where('id', $data['home']->story1_id)->first();
        $data['feature2'] = Feature::where('id',$data['home']->story2_id)->first();
        $data['feature3'] = Feature::where('id',$data['home']->story3_id)->first();
        $data['feature4'] = Feature::where('id',$data['home']->story4_id)->first();
        $data['feature5'] = Feature::where('id',$data['home']->story5_id)->first();
        $data['success1'] = Success::where('id',$data['home']->success1_id)->first();
        //dd($data['success1']);
        $data['success2'] = Success::where('id',$data['home']->success2_id)->first();
        $data['success3'] = Success::where('id',$data['home']->success3_id)->first();
        $data['story1'] = ClientStory::where('id',$data['home']->solution1_id)->first();
        $data['story2'] = ClientStory::where('id',$data['home']->solution2_id)->first();
        $data['story3'] = ClientStory::where('id',$data['home']->solution3_id)->first();
        $data['story4'] = ClientStory::where('id',$data['home']->solution4_id)->first();
        $data['techglossy'] = TechGlossy::where('id',$data['home']->techglossy_id)->first();
        }

        $data['setting'] = Setting::latest()->first();
        return view('frontend.pages.home.index',$data);
    }

    //Learn More

    public function LearnMore()
    {
        $data['learnmore'] = LearnMore::orderBy('id','DESC')->first();
        if ($data['learnmore']) {

                $data['story1'] = ClientStory::where('id',$data['learnmore']->success_story_one_id)->first();
                $data['story2'] = ClientStory::where('id',$data['learnmore']->success_story_two_id)->first();
                $data['story3'] = ClientStory::where('id',$data['learnmore']->success_story_three_id)->first();

                } else {

                }
        $data['industrys'] = Industry::select('industries.id','industries.logo','industries.title')->limit(8)->get();
        $data['random_industries'] = Industry::inRandomOrder()->select('industries.id','industries.title')->limit(4)->get();
        $data['setting'] = Setting::latest()->first();
        return view('frontend.pages.learnmore.view',$data);
    }

    //What We Do

    public function whatWeDo()
    {
        return view('frontend.pages.whatwedo.whatwedo');
    }

    public function softwareInfo()
    {
        $data['learnmore'] = LearnMore::orderBy('id','DESC')->select('learn_mores.industry_header','learn_mores.consult_title','learn_mores.consult_short_des','learn_mores.background_image')->first();
        $data['categories'] = Category::orderBy('id' ,'DESC')->limit(8)->get();
        $data['products'] = Product::where('product_type','software')->where('product_status', 'product')
                            ->select('products.id','products.rfq','products.slug','products.name','products.thumbnail','products.price','products.discount')
                            ->inRandomOrder()
                            ->limit(16)
                            ->get();
        $data['industrys'] = Industry::select('industries.id','industries.logo','industries.title')->limit(8)->get();
        $data['random_industries'] = Industry::inRandomOrder()->select('industries.id','industries.title')->limit(4)->get();
        //dd($data['categories']);
        return view('frontend.pages.software.software_info',$data);
    }

    public function hardwareInfo()
    {
        $data['learnmore'] = LearnMore::orderBy('id','DESC')->select('learn_mores.industry_header','learn_mores.consult_title','learn_mores.consult_short_des','learn_mores.background_image')->first();
        $data['categories'] = Category::orderBy('id' ,'DESC')->limit(8)->get();
        $data['products'] = Product::where('product_type','software')->where('product_status', 'product')
                            ->select('products.id','products.rfq','products.slug','products.name','products.thumbnail','products.price','products.discount')
                            ->inRandomOrder()
                            ->limit(16)
                            ->get();
        $data['industrys'] = Industry::select('industries.id','industries.logo','industries.title')->limit(8)->get();
        $data['random_industries'] = Industry::inRandomOrder()->select('industries.id','industries.title')->limit(4)->get();
        return view('frontend.pages.hardware.hardware_info',$data);
    }

    //Feature Details
    public function FeatureDetails($id){
        $data['learnmore'] = LearnMore::orderBy('id','DESC')->select('learn_mores.industry_header','learn_mores.consult_title','learn_mores.consult_short_des','learn_mores.background_image')->first();
        $data['feature'] = Feature::where('id',$id)->first();
        $data['row_one'] = Row::where('id',$data['feature']->row_one_id)->first();
        $data['row_two'] = Row::where('id',$data['feature']->row_two_id)->first();
        $data['features'] = Feature::where('id' , '!=' , $id )->select('logo','id','badge','header')->get();
        return view('frontend.pages.feature.feature_details',$data);
    }

    //Feature Details
    public function SolutionDetails($id){
        $data['solution'] = SolutionDetail::where('id',$id)->first();
        $data['row_one'] = Row::where('id',$data['solution']->row_one_id)->first();
        $data['card1'] = SolutionCard::where('id',$data['solution']->solution_card_one_id)->first();
        $data['card2'] = SolutionCard::where('id',$data['solution']->solution_card_two_id)->first();
        $data['card3'] = SolutionCard::where('id',$data['solution']->solution_card_three_id)->first();
        $data['card4'] = SolutionCard::where('id',$data['solution']->solution_card_four_id)->first();
        $data['card5'] = SolutionCard::where('id',$data['solution']->solution_card_five_id)->first();
        $data['card6'] = SolutionCard::where('id',$data['solution']->solution_card_six_id)->first();
        $data['card7'] = SolutionCard::where('id',$data['solution']->solution_card_seven_id)->first();
        $data['card8'] = SolutionCard::where('id',$data['solution']->solution_card_eight_id)->first();
        $data['row_four'] = Row::where('id',$data['solution']->row_four_id)->first();
        $data['solutions'] = SolutionDetail::where('id' , '!=' , $id )->get();
        return view('frontend.pages.solution.solution_details',$data);
    }




    //Contact, Support, Location, RFQ

    public function location()
    {
        return view('frontend.contact.location');
    }

    public function contact()
    {
        $data['setting'] = Setting::latest()->first();

        return view('frontend.pages.contact.contact',$data);
    }

    public function Support()
    {
        $data['setting'] = Setting::latest()->first();
        return view('frontend.pages.contact.support',$data);
    }

    public function RFQCommon()
    {
        $data['setting'] = Setting::latest()->first();
        return view('frontend.pages.common.rfq_common',$data);
    }




    //Client Story All Controller
    public function AllStory()
    {
        $data['tag'] = DB::table('client_stories')->pluck('tags');
        $data['tag_items'] = json_decode($data['tag'], true);
        $data['featured_storys'] = ClientStory::where('featured','=', '1')->inRandomOrder()->limit(4)->get();
        $data['client_storys'] = ClientStory::orderBy('id','Desc')->paginate(3);
        $data['industries'] = Industry::latest()->select('id','title')->limit(6)->get();
        $data['categories'] = Category::latest()->select('id','title','slug')->limit(6)->get();
        $data['brands'] = Brand::latest()->select('id','title','slug')->limit(6)->get();

        return view('frontend.pages.story.all_story',$data);
    }

    public function StoryDetails($id)
    {
        // $data['shareComponent'] = Share::page(
        //     'https://www.positronx.io/create-autocomplete-search-in-laravel-with-typeahead-js/',
        //     'Your share text comes here',
        // )
        // ->facebook()
        // ->twitter()
        // ->linkedin()
        // ->telegram()
        // ->whatsapp()
        // ->reddit();
        //$data['industry'] = Industry::where('id',$id)->first();
        $data['blog'] = ClientStory::where('id',$id)->first();
        //$data['industry_page'] = IndustryPage::where('industry_id', $data['industry']->id)->get();
        $data['storys'] = ClientStory::inRandomOrder()->limit(4)->get();
        $data['setting'] = Setting::latest()->first();
        return view('frontend.pages.story.story_details', $data);
    }




    //Blogs All Controller

    public function AllBlog()
    {
        $data['tag'] = DB::table('blogs')->pluck('tags');
        $data['tag_items'] = json_decode($data['tag'], true);
        $data['featured_storys'] = Blog::where('featured','=', '1')->inRandomOrder()->limit(4)->get();
        $data['client_storys'] = Blog::orderBy('id','Desc')->paginate(3);
        $data['industries'] = Industry::latest()->select('id','title')->limit(6)->get();
        $data['categories'] = Category::latest()->select('id','title','slug')->limit(6)->get();
        $data['brands'] = Brand::latest()->select('id','title','slug')->limit(6)->get();

        return view('frontend.pages.blogs.blogs_all',$data);
    }

    public function BlogDetails($id)
    {
        //$data['industry'] = Industry::where('id',$id)->first();
        $data['blog'] = Blog::where('id',$id)->first();
        //$data['industry_page'] = IndustryPage::where('industry_id', $data['industry']->id)->get();
        $data['storys'] = Blog::inRandomOrder()->limit(4)->get();
        $data['setting'] = Setting::latest()->first();
        return view('frontend.pages.blogs.blog_details', $data);
    }



    //Tech Glossy All Controller

    public function AllTechGlossy()
    {
        $data['tag'] = DB::table('tech_glossies')->pluck('tags');
        $data['tag_items'] = json_decode($data['tag'], true);
        $data['featured_storys'] = TechGlossy::where('featured','=', '1')->inRandomOrder()->limit(4)->get();
        $data['client_storys'] = TechGlossy::orderBy('id','Desc')->paginate(3);
        $data['industries'] = Industry::latest()->select('id','title')->limit(6)->get();
        $data['categories'] = Category::latest()->select('id','title','slug')->limit(6)->get();
        $data['brands'] = Brand::latest()->select('id','title','slug')->limit(6)->get();

        return view('frontend.pages.tech.techglossy_all',$data);
    }

    public function TechGlossyDetails($id)
    {
        //$data['industry'] = Industry::where('id',$id)->first();
        $data['techglossy'] = TechGlossy::where('id',$id)->first();
        //$data['industry_page'] = IndustryPage::where('industry_id', $data['industry']->id)->get();
        $data['storys'] = TechGlossy::inRandomOrder()->limit(7)->get();
        $data['setting'] = Setting::latest()->first();
        return view('frontend.pages.tech.techglossy_details', $data);
    }


    //Shop All Controller

    public function shop_html()
    {
        $data['products'] = Product::inRandomOrder()->where('product_status', 'product')
                            ->select('products.id','products.rfq','products.slug','products.name','products.thumbnail','products.price','products.discount')
                            ->limit(16)
                            ->get();
        $data['all_categories'] = Category::orderBy('id','DESC')->limit(8)->get();
        $data['software_categories'] = DB::table('sub_categories')
                                ->join('products', 'sub_categories.id', '=', 'products.sub_cat_id')
                                ->where('products.product_type', '=', 'software')
                                ->select('sub_categories.id','sub_categories.slug','sub_categories.title','sub_categories.image')
                                ->distinct()->get();
        $data['hardware_categories'] = DB::table('sub_categories')
                                ->join('products', 'sub_categories.id', '=', 'products.sub_cat_id')
                                ->where('products.product_type', '=', 'hardware')
                                ->select('sub_categories.id','sub_categories.slug','sub_categories.title','sub_categories.image')
                                ->distinct()->get();
                                // dd($data['hardware_categories']);
        $data['training_categories'] = DB::table('categories')
                                ->join('products', 'categories.id', '=', 'products.cat_id')
                                ->where('products.product_type', '=', 'training')
                                ->select('categories.id','categories.slug','categories.title','categories.image')
                                ->distinct()->get();
        $data['book_categories'] = DB::table('categories')
                                ->join('products', 'categories.id', '=', 'products.cat_id')
                                ->where('products.product_type', '=', 'book')
                                ->select('categories.id','categories.slug','categories.title','categories.image')
                                ->distinct()->get();
        $data['categories'] = Category::latest()
                            ->select('categories.id','categories.slug','categories.title','categories.image')
                            ->get();
        $data['brands'] = BrandPage::orderBy('id', 'Desc')
                        ->select('brand_pages.id','brand_pages.brand_id')
                        ->limit(18)
                        ->get();
        $data['techglossy'] = Blog::inRandomOrder()->first();
        return view('frontend.pages.product.shop_html', $data);
    }


    //Tech Deals
    public function TechDeal(){
        $data['products'] = Product::whereNotNull('deal')->where('product_status', 'product')->paginate(10);
        $data['brands'] = DB::table('brands')
                        ->join('products', 'brands.id', '=', 'products.brand_id')
                        ->whereNotNull('products.deal')
                        ->select('brands.id','brands.slug','brands.title','brands.image')
                        ->distinct()->get();
        $data['categories'] = DB::table('categories')
                                ->join('products', 'categories.id', '=', 'products.cat_id')
                                ->whereNotNull('products.deal')
                                ->select('categories.id','categories.slug','categories.title','categories.image')
                                ->distinct()->get();
                                //dd($data['categories']);
        $data['refurbished_products'] = Product::where('refurbished' , '1')->where('product_status', 'product')->get();
        //dd($data['refurbished_products']);
        return view('frontend.pages.tech.deal',$data);
    }

    public function Refurbished(){
        $data['products'] = Product::where('refurbished' , '1')->where('product_status', 'product')->paginate(10);
        $data['brands'] = DB::table('brands')
                        ->join('products', 'brands.id', '=', 'products.brand_id')
                        ->where('products.refurbished', '=', '1')
                        ->select('brands.id','brands.slug','brands.title','brands.image')
                        ->distinct()->get();
        $data['categories'] = DB::table('categories')
                                ->join('products', 'categories.id', '=', 'products.cat_id')
                                ->where('products.refurbished', '=', '1')
                                ->select('categories.id','categories.slug','categories.title','categories.image')
                                ->distinct()->get();
                                //dd($data['categories']);
        $data['techdeal_products'] = Product::whereNotNull('deal')->where('product_status', 'product')->get();
        //dd($data['refurbished_products']);
        return view('frontend.pages.tech.refurbished',$data);
    }




    //Product Details

    public function ProductDetails($id)
    {
        //dd($id);

            $data['sproduct'] = Product::where('slug',$id)->where('product_status', 'product')->first();
            //dd($data['sproduct']);


        if (!empty($data['sproduct']->cat_id)) {
            $data['products'] = Product::where('cat_id', $data['sproduct']->cat_id)
                                ->where('product_status', 'product')
                                ->select('products.id','products.rfq','products.slug','products.name','products.thumbnail','products.price','products.discount')
                                ->limit(12)
                                ->distinct()
                                ->get();
        } else {
            $data['products'] = Product::inRandomOrder()->where('product_status', 'product')->limit(8)->get();
        }

        return view('frontend.pages.product.product_details', $data);
    }





    //Category All PAge

    public function CategoryCommon($category)
    {
        if ((Category::where('slug',$category)->count()) > 0) {
            $data['category'] = Category::where('slug',$category)->first();
            $data['sub_cats'] = SubCategory::where('cat_id',$data['category']->id)->get();
            $data['sub_sub_cats'] = SubSubCategory::where('cat_id',$data['category']->id)->get();
            //$data['sub_sub_sub_cats'] = SubSubSubCategory::where('cat_id',$data['category']->id)->get();

            $data['products'] = Product::where('cat_id', $data['category']->id)->where('product_status', 'product')
                                ->select('products.id','products.rfq','products.slug','products.name','products.thumbnail','products.price','products.discount')
                                ->paginate(8);

            $data['brands'] = DB::table('brands')
                            ->join('products', 'brands.id', '=', 'products.brand_id')
                            ->join('categories','products.cat_id', '=','categories.id' )
                            ->where('categories.id', '=', $data['category']->id)
                            ->select('brands.id','brands.title','brands.image')
                            ->distinct()
                            ->paginate(18);
        } elseif((SubCategory::where('slug',$category)->count()) > 0) {
            $data['category'] = SubCategory::where('slug',$category)->first();
            $data['sub_cats'] = SubSubCategory::where('sub_cat_id',$data['category']->id)->get();
            $data['sub_sub_cats'] = SubSubSubCategory::where('sub_sub_cat_id',$data['category']->id)->get();
            //$data['sub_sub_sub_cats'] = SubSubSubCategory::where('cat_id',$data['category']->id)->get();

            $data['products'] = Product::where('sub_cat_id', $data['category']->id)->where('product_status', 'product')
                                ->select('products.id','products.rfq','products.slug','products.name','products.thumbnail','products.price','products.discount')
                                ->paginate(8);
            $data['brands'] = DB::table('brands')
                            ->join('products', 'brands.id', '=', 'products.brand_id')
                            ->join('sub_categories','products.sub_cat_id', '=','sub_categories.id' )
                            ->where('sub_categories.id', '=', $data['category']->id)
                            ->select('brands.id','brands.title','brands.image')
                            ->distinct()
                            ->paginate(18);

        }

        elseif((SubSubCategory::where('slug',$category)->count()) > 0) {
            $data['category'] = SubSubCategory::where('slug',$category)->first();
            $data['sub_cats'] = '';
            $data['sub_sub_cats'] = '';
            //$data['sub_sub_sub_cats'] = SubSubSubCategory::where('cat_id',$data['category']->id)->get();

            $data['products'] = Product::where('sub_sub_cat_id', $data['category']->id)->where('product_status', 'product')
                                ->select('products.id','products.rfq','products.slug','products.name','products.thumbnail','products.price','products.discount')
                                ->paginate(8);
            $data['brands'] = DB::table('brands')
                            ->join('products', 'brands.id', '=', 'products.brand_id')
                            ->join('sub_sub_categories','products.sub_sub_cat_id', '=','sub_sub_categories.id' )
                            ->where('sub_sub_categories.id', '=', $data['category']->id)
                            ->select('brands.id','brands.title','brands.image')
                            ->distinct()
                            ->paginate(18);

        }

        return view('frontend.pages.category.category', $data);
    }


    public function AllCategory()
    {
        $data['categorys'] = Category::orderBy('title' , 'ASC')->limit(8)->get();
        $data['others'] = Category::orderBy('title' , 'ASC')->select('categories.id','categories.slug','categories.title')->get();
        $data['sub_cats'] = SubCategory::orderBy('title' , 'ASC')->select('sub_categories.id','sub_categories.slug','sub_categories.title','sub_categories.image')->get();
        $data['sub_sub_cats'] = SubSubCategory::orderBy('title' , 'ASC')->select('sub_sub_categories.id','sub_sub_categories.slug','sub_sub_categories.title','sub_sub_categories.image')->get();
        $data['sub_sub_sub_cats'] = SubSubSubCategory::orderBy('title' , 'ASC')->select('sub_sub_sub_categories.id','sub_sub_sub_categories.slug','sub_sub_sub_categories.title','sub_sub_sub_categories.image')->get();

        $data['products'] = DB::table('products')
                            ->join('brands', 'products.brand_id', '=', 'brands.id')
                            ->select('products.id','products.rfq','products.slug','products.name','products.thumbnail','products.price','products.discount')
                            ->where('brands.category', '=', 'Top')
                            ->limit(16)
                            ->get();

        return view('frontend.pages.category.category_all',$data);
    }



   ///Brand All Page


    public function BrandCommon($brand)
    {
        //dd($brand);
        $data['brand'] = Brand::where('slug' , $brand)->first();
        $data['top_brands'] = BrandPage::orderBy('id', 'Desc')->limit(10)->get();
        //dd($data['top_brands']);
        $data['featured_brands'] = Brand::where('category' , 'featured')->get();
        $data['others'] = Brand::where('category' , 'others')->get();
        //dd($data['brand']);
        // $data['sub_cats'] = SubCategory::where('cat_id',$data['category']->id)->get();
        // $data['sub_sub_cats'] = SubSubCategory::where('cat_id',$data['category']->id)->get();
        // $data['sub_sub_sub_cats'] = SubSubSubCategory::where('cat_id',$data['category']->id)->get();

        $data['products'] = Product::where('brand_id', $data['brand']->id)->where('product_status', 'product')->get();
        $data['categories'] = DB::table('categories')
                        ->join('products', 'categories.id', '=', 'products.cat_id')
                        ->join('brands','products.brand_id', '=','brands.id' )
                        ->where('brands.id', '=', $brand)
                        ->select('categories.id','categories.title','categories.image','categories.slug')
                        ->get();

        return view('frontend.pages.brand.brand_common', $data);
    }

    public function BrandPage($id)
    {
        $data['brand'] = Brand::where('slug' , $id)->first();
        $data['brandpage'] = BrandPage::where('brand_id' , $data['brand']->id)->first();
        $data['storys'] = ClientStory::inRandomOrder()->limit(4)->get();
        $data['setting'] = Setting::latest()->first();

        $data['products'] = Product::where('brand_id', $data['brand']->id)
                        ->where('product_status', '=', 'product')
                        ->distinct()
                        ->select('products.id','products.rfq','products.slug','products.name','products.thumbnail','products.price','products.discount')
                        ->limit(12)->get();


        if ($data['brandpage']) {
            $data['row_one'] = Row::where('id', $data['brandpage']->row_four_id)->first();
            $data['row_three'] = Row::where('id',$data['brandpage']->row_five_id)->first();
            $data['row_four'] = Row::where('id',$data['brandpage']->row_seven_id)->first();
            $data['row_five'] = Row::where('id',$data['brandpage']->row_eight_id)->first();
            $data['card1'] = SolutionCard::where('id',$data['brandpage']->solution_card_one_id)->first();
            $data['card2'] = SolutionCard::where('id',$data['brandpage']->solution_card_two_id)->first();
            $data['card3'] = SolutionCard::where('id',$data['brandpage']->solution_card_three_id)->first();


        }

        return view('frontend.pages.brand.brand_page', $data);
    }

    public function AllBrand()
    {
        $data['top_brands'] = BrandPage::orderBy('id', 'Desc')->select('brand_pages.brand_id','brand_pages.id')->paginate(18);
        $data['featured_brands'] = Brand::where('category','Featured')->orderBy('id','DESC')->paginate(18);
        $data['featured_techglossys'] = Blog::inRandomOrder()->first();
        $data['others'] = Brand::select('brands.id','brands.title','brands.slug')->orderBy('title','ASC')->get();
        $data['setting'] = Setting::latest()->first();
        return view('frontend.pages.brand.brand',$data);
    }





    //Industry All Page

    public function AllIndustry()
    {
        // $data['learnmore'] = LearnMore::orderBy('id','DESC')->select('learn_mores.industry_header')->first();
        $data['learnmore'] = LearnMore::orderBy('id','DESC')->select('learn_mores.industry_header','learn_mores.consult_title','learn_mores.consult_short_des')->first();
        $data['setting'] = Setting::latest()->first();
        $data['industrys'] = Industry::latest()->select('industries.id','industries.logo','industries.title')->get();
        $data['random_industries'] = Industry::inRandomOrder()->select('industries.id','industries.title')->limit(4)->get();
        // $data['features'] = Feature::limit(6)->get();
        $data['story3'] = ClientStory::inRandomOrder()->first();
        $data['story4'] = ClientStory::inRandomOrder()->where('id', '!=', $data['story3']->id)->first();
        $data['story1'] = Blog::inRandomOrder()->first();
        $data['story2'] = Blog::inRandomOrder()->where('id', '!=', $data['story1']->id)->first();
        $data['techglossy'] = TechGlossy::inRandomOrder()->first();
        // $data['featured_techglossy'] = TechGlossy::inRandomOrder()->first();
        return view('frontend.pages.industry.all_industry',$data);
    }

    public function IndustryDetails($id)
    {
        $data['industry'] = Industry::where('id',$id)->first();
        $data['techglossy'] = TechGlossy::inRandomOrder()->first();
        $data['industry_page'] = IndustryPage::where('industry_id', $data['industry']->id)->get();
        $data['storys'] = Blog::inRandomOrder()->limit(6)->get();
        $data['setting'] = Setting::latest()->first();
        return view('frontend.pages.industry.industry_details', $data);
    }


    //Software All Page

    // public function AllSoftare()
    // {
    //     $data['top_brands'] = Brand::where('category','Top')->latest()->get();
    //     $data['featured_brands'] = Brand::where('category','Featured')->orderBy('id','DESC')->get();
    //     $data['others'] = Brand::select('brands.id','brands.title','brands.slug')->orderBy('title','ASC')->get();
    //     $data['featured_techglossys'] = TechGlossy::inRandomOrder()->first();
    //     $data['setting'] = Setting::latest()->first();

    //     return view('frontend.pages.brand.brand',$data);
    // }

    public function SoftwareCommon()
    {
        $data['learnmore'] = LearnMore::orderBy('id','DESC')->select('learn_mores.industry_header','learn_mores.consult_title','learn_mores.consult_short_des','learn_mores.background_image')->first();
        $data['products'] = Product::where('product_type','software')->where('product_status', 'product')
                            ->select('products.id','products.rfq','products.slug','products.name','products.thumbnail','products.price','products.discount')
                            ->inRandomOrder()
                            ->limit(16)
                            ->get();
        $data['hardware'] = Product::where('product_type','hardware')->where('product_status', 'product')
                            ->select('products.id','products.rfq','products.slug','products.name','products.thumbnail','products.price','products.discount')
                            ->inRandomOrder()
                            ->paginate(8);
        $data['categories'] = DB::table('sub_categories')
                            ->join('products', 'sub_categories.id', '=', 'products.sub_cat_id')
                            ->where('products.product_type', '=', 'software')
                            ->select('sub_categories.id','sub_categories.slug','sub_categories.title','sub_categories.image')
                            ->distinct()->paginate(8);

        $data['brands']     = DB::table('brands')
                            ->join('products', 'brands.id', '=', 'products.brand_id')
                            ->where('products.product_type', '=', 'software')
                            ->select('brands.id','brands.slug','brands.title','brands.image')
                            ->distinct()->paginate(8);

        $data['software_products'] = Product::where('product_type','software')->where('product_status', 'product')->paginate(10)->unique('brand_id');
        $data['story1'] = Blog::inRandomOrder()->first();
        $data['story2'] = Blog::inRandomOrder()->where('id','!=',$data['story1']->id)->first();
        $data['story3'] = ClientStory::inRandomOrder()->first();
        $data['story4'] = ClientStory::inRandomOrder()->where('id','!=',$data['story3']->id)->first();
        $data['industrys'] = Industry::latest()->select('industries.id','industries.logo','industries.title')->get();
        $data['random_industries'] = Industry::inRandomOrder()->select('industries.id','industries.title')->limit(4)->get();
        return view('frontend.pages.software.allsoftware',$data);
    }

    //Hardware All Pge

    public function HardwareCommon()
    {
        $data['learnmore'] = LearnMore::orderBy('id','DESC')->select('learn_mores.industry_header','learn_mores.consult_title','learn_mores.consult_short_des','learn_mores.background_image')->first();
        $data['products'] = Product::where('product_type','hardware')->where('product_status', 'product')->latest()->paginate(10);
        $data['hardware'] = Product::where('product_type','hardware')->where('product_status', 'product')->latest()->paginate(10);
        $data['categories'] = DB::table('categories')
                            ->join('products', 'categories.id', '=', 'products.cat_id')
                            ->where('products.product_type', '=', 'hardware')
                            ->select('categories.id','categories.slug','categories.title','categories.image')
                            ->distinct()->paginate(10);

        $data['brands']     = DB::table('brands')
                            ->join('products', 'brands.id', '=', 'products.brand_id')
                            ->where('products.product_type', '=', 'hardware')
                            ->select('brands.id','brands.slug','brands.title','brands.image')
                            ->distinct()->paginate(10);
        // $data['industries']  = DB::table('industries')
        //                     ->join('products', 'industires.id', '=', 'products.brand_id')
        //                     ->where('products.product_type', '=', 'software')
        //                     ->select('brands.id','brands.slug','brands.title','brands.image')
        //                     ->distinct()->get();

        $data['featured_brands'] = Brand::where('category','Featured')->orderBy('id','DESC')->get();
        $data['others'] = Brand::all();
        $data['story1'] = TechGlossy::inRandomOrder()->first();
        $data['story2'] = Blog::inRandomOrder()->first();
        $data['story3'] = ClientStory::inRandomOrder()->first();
        $data['techglossy'] = TechGlossy::inRandomOrder()->first();
        $data['features'] = Client::inRandomOrder()->limit(2)->get();
        $data['setting'] = Setting::latest()->first();
        $data['industrys'] = Industry::latest()->select('industries.id','industries.logo','industries.title')->get();
        $data['random_industries'] = Industry::inRandomOrder()->select('industries.id','industries.title')->limit(4)->get();
        return view('frontend.pages.hardware.allhardware',$data);
    }










    //Search All Controller

    public function search(Request $request)
    {
        if ($request->keyword != '') {
            $sproducts = Product::where('title', 'LIKE', '%' . $request->keyword . '%')->where('product_status', 'product')->get();
        }
        return response()->json([
            'sproducts' => $sproducts
        ]);
    }


     // Product Seach
	public function ProductSearch(Request $request){

		$request->validate(["search" => "required"]);

		$item = $request->search;
        //dd($request->search);
		// echo "$item";
        //$categories = Category::orderBy('title','ASC')->get();
        if (Product::where('name', $item)->where('product_status', 'product')->where('product_status', 'product')->first()) {
            $data['sproduct'] = Product::where('name', $item)->where('product_status', 'product')->where('product_status', 'product')->first();
            $data['products'] = Product::where('cat_id', $data['sproduct']->cat_id)->where('product_status', 'product')->where('product_status', 'product')->get();
            return view('frontend.pages.product.product_details', $data);
        } else {
            $data['categories'] = Category::orderBy('title','ASC')->get();
            $data['brands'] = Brand::orderBy('title','ASC')->get();
            $data['newProduct'] = Product::orderBy('id','DESC')->where('product_status', 'product')->limit(3)->get();
            $data['products'] = Product::where('name','LIKE','%'.$item.'%')->where('product_status', 'product')->paginate(10);
		return view('frontend.pages.product.shop_page',$data);
        }



	} // end method


	///// Advance Search Options

	public function SearchProduct(Request $request){


        $query = $request->get('term','');
            //dd($query);
            $products = Product::where('name','LIKE','%'.$query.'%')->where('product_status', 'product')->get();
            $data = array();
            foreach ($products as $product) {
                $data[] = array('value' =>$product->name , 'id' =>$product->id);
            }
            if (count($data)) {
                return $data;
            }
            else {
               return ['value'=>"No Result Found", 'id'=>''];
            }


	} // end method



    //Terms & Policy
    public function TermsPolicy()
    {
        $data['terms'] = Policy::where('condition','terms')->get();
        $data['sale_terms'] = Policy::where('condition','sale_terms')->get();
        $data['service_terms'] = Policy::where('condition','service_terms')->get();
        $data['policy'] = Policy::where('condition','policy')->get();
        return view('frontend.pages.policy.terms_policy',$data);
    }

    public function TermsPolicyDetails($id)
    {
        $data['terms'] = Policy::where('condition','terms')->get();
        $data['sale_terms'] = Policy::where('condition','sale_terms')->get();
        $data['service_terms'] = Policy::where('condition','service_terms')->get();
        $data['policy'] = Policy::where('condition','policy')->get();
        if ($id) {
            $data['details'] = Policy::where('id', $id)->first();
        } else {
            $data['details'] = '';
        }


        return view('frontend.pages.policy.terms_policy',$data);
    }




























//Common Products

    public function ProductCommon($id)
    {


        $data['products'] = Product::where('product_type', $id)->where('product_status', 'product')->get();
        // $data['brands'] = DB::table('brands')
        //                 ->join('products', 'brands.id', '=', 'products.brand_id')
        //                 ->join('categories','products.cat_id', '=','categories.id' )
        //                 ->where('categories.id', '=', $category)
        //                 ->select('brands.id','brands.title','brands.image')
        //                 ->get();

        return view('frontend.pages.product.product_common', $data);
    }

    public function rfqCreate(Request $request)
    {

        $data['sales_mans'] = User::where('role', 'sales')->select('users.id', 'users.name')->get();
        return view('frontend.pages.rfq.rfq', $data);
    }



}
