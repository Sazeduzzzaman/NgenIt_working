<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function SubCatproducts(){
        return $this->hasMany('App\Models\Admin\Product','sub_cat_id','id');
    }
    public static function getProductBySubCat($slug){
        // dd($slug);
        return SubCategory::with('SubCatproducts')->where('slug',$slug)->first();
        // return Product::where('cat_id',$id)->where('child_cat_id',null)->paginate(10);
    }
}
