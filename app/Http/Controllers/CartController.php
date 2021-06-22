<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Cart;
use Illuminate\Support\Facades\Redirect;
session_start();

class CartController extends Controller
{
    public function save_cart(Request $request){
        

        $productID = $request->productid_hidden;
        $quantity = $request->qty;

        $product_info = DB::table('tbl_product')->where('tbl_product.product_id',$productID)->first();

        $data['id'] = $product_info ->product_id;
        $data['qty'] = $quantity;
        $data['name'] = $product_info ->product_name;
        $data['price'] = $product_info ->product_price;
        $data['weight'] = $product_info ->product_price;
        $data['options']['image'] = $product_info ->product_image;
        Cart::add($data);


        return Redirect::to('/show-cart');
        
    }
    public function show_cart(){
        $cate_product = DB::table('tbl_category_product')->where('category_status','1')-> orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand_product')->where('brand_status','1')-> orderby('brand_id','desc')->get();
        return View('pages.cart.show_cart')->with('category',$cate_product)->with('brand',$brand_product);
    }

    public function delete_to_cart($rowId){
        Cart::update($rowId,0);
        return Redirect::to('/show-cart');
    }
}
