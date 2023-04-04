<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function Catproducts(){
        return $this->hasMany('App\Models\Admin\Product','cat_id','id');
    }



    // public function sub_products(){
    //     return $this->hasMany('App\Models\Product','child_cat_id','id')->where('status','active');
    // }
    public static function getProductByCat($slug){
        // dd($slug);
        return Category::with('Catproducts')->where('slug',$slug)->first();
        // return Product::where('cat_id',$id)->where('child_cat_id',null)->paginate(10);
    }

    public function Softwareproducts()
    {
        return $this->hasMany(Product::class)->where('product_type', '=', 'software')->where('product_status', 'product')->paginate(10);
    }

    public function Hardwareproducts()
    {
        return $this->hasMany(Product::class)->where('product_type', '=', 'hardware')->where('product_status', 'product')->paginate(10);
    }


    public static function getSubcatByCat($slug){


        return SubCategory::where('cat_id',$slug)->get();

    }



}
