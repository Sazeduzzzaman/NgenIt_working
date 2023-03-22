<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Admin\Product;
use Illuminate\Support\Facades\Session;
use Gloudemans\Shoppingcart\Facades\Cart;


class CartController extends Controller
{

    public function MyCart(){

        $data['cart_details'] = Cart::content();
        $cartItems = Cart::content();
        //dd($cartItems);
        $cartProductIds = $cartItems->pluck('id')->toArray();
        $cartProductCategories = Product::whereIn('id', $cartProductIds)
                                ->pluck('sub_cat_id')
                                ->unique()
                                ->toArray();

        // Get related products based on the categories in the cart
        $data['products'] = Product::whereIn('sub_cat_id', $cartProductCategories)
                                ->where('id', '!=', $cartProductIds) // exclude the current product
                                ->select('products.id','products.rfq','products.slug','products.name','products.thumbnail','products.price','products.discount')
                                ->limit(16)
                                ->get();

        return view('frontend.pages.cart.cart',$data);

    }// End Method



    public function AddToCart(Request $request){

        $data = $request->all();
        //dd($data);


        $id = $request->product_id;
        $product = Product::findOrFail($id);

        if ($product->discount == NULL) {
            //dd($data);
            Cart::add([

                'id' => $id,
                'name' => $request->name,
                'qty' => $request->qty,
                'price' => $product->price,
                'weight' => 1,
                'options' => [
                    'image' => $product->thumbnail,
                    // 'color' => $request->color,
                    // 'size' => $request->size,
                ],
            ]);
            Toastr::success('Successfully Added on Your Cart');
        return redirect()->back();

        }else{

            Cart::add([

                'id' => $id,
                'name' => $request->name,
                'qty' => $request->qty,
                'price' => $product->discount,
                'weight' => 1,
                'options' => [
                    'image' => $product->thumbnail,
                    // 'color' => $request->color,
                    // 'size'  => $request->size,
                ],
            ]);
            //dd(Cart::content()->count());
            Toastr::success('Successfully Added on Your Cart');
            return redirect()->back();


        }

    }// End Method




    public function updateCart(Request $request)
    {
        //dd($request->rowID);

        Cart::update($request->rowID , ['qty' => $request->qty]);

        Toastr::success('Successfully Updated Your Cart');
        return response()->json();
    }





    public function GetCartProduct(){

        $carts = Cart::content();
        $cartQty = Cart::count();
        $cartTotal = Cart::total();

        return response()->json(array(
            'carts' => $carts,
            'cartQty' => $cartQty,
            'cartTotal' => $cartTotal

        ));

    }// End Method


    public function CartRemove($rowId){
        Cart::remove($rowId);
        return response()->json(['success' => 'Successfully Remove From Cart' , 200]);

    }// End Method


    public function CartDecrement($rowId){

        $row = Cart::get($rowId);
        Cart::update($rowId, $row->qty -1);


        Toastr::success('Successfully Updated Your Cart');
        return response()->json('Decrement');

    }// End Method


     public function CartIncrement($rowId){

        $row = Cart::get($rowId);
        Cart::update($rowId, $row->qty +1);


        Toastr::success('Successfully Updated Your Cart');
        return response()->json('Increment');

    }// End Method

    public function CartDestroy(){
        Cart::destroy();
        Toastr::success('Successfully Deleted Your Cart');
        return redirect()->back();
    }// End Method









    public function CheckoutCreate(){

        if (Auth::guard('client')->check()) {

            if (Cart::total() > 0) {

                $data['carts'] = Cart::content();
                $data['cartQty'] = Cart::count();
                $data['cartTotal'] = Cart::total();


        return view('frontend.checkout.checkout_view',$data);


            }else{

            $notification = array(
            'message' => 'Shopping At list One Product',
            'alert-type' => 'error'
        );

        return redirect()->to('/')->with($notification);
            }



        }elseif (Auth::guard('partner')->check()) {
            # code...
        }
        else{

            $notification = array(
            'message' => 'You Need to Login First',
            'alert-type' => 'error'
        );

        return redirect()->route('login')->with($notification);
        }




    }// End Method
}
