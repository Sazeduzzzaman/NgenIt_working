<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubSubCategory extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function SubSubCatproducts(){
        return $this->hasMany('App\Models\Admin\Product','sub_sub_cat_id','id');
    }
    public static function getProductBySubSubCat($slug){
        // dd($slug);
        return SubSubCategory::with('SubSubCatproducts')->where('slug',$slug)->first();
        // return Product::where('cat_id',$id)->where('child_cat_id',null)->paginate(10);
    }
}
