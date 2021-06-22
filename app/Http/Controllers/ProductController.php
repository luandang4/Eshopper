<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class ProductController extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }

    }

    public function add_product()
    {
        $this->AuthLogin();
        $cate_product = DB::table('tbl_category_product')-> orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand_product')-> orderby('brand_id','desc')->get();
        
        return View('admin.add_product')-> with('cate_product',$cate_product)-> with('brand_product',$brand_product);
    }


        
    public function all_product()
    {
        $this->AuthLogin();
        $all_product = DB::table('tbl_product')
        ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        ->join('tbl_brand_product','tbl_brand_product.brand_id','=','tbl_product.brand_id')
        -> orderby('tbl_product.product_id','desc') ->get();
        $manager = View('admin.all_product')-> with('all_product',$all_product);
        return View('admin_layout')-> with('admin.all_product',$manager);
    }

    public function save_product(Request $request)
    {
        $data = array();
        $data['product_name'] = $request -> product_name;
        $data['category_id'] = $request -> product_cate;
        $data['brand_id'] = $request -> product_brand;
        $data['product_desc'] = $request -> product_desc;
        $data['product_content'] = $request -> product_content;
        $data['product_price'] = $request -> product_price;
        $data['product_status'] = $request -> product_status;
        $get_image = $request -> file('product_image');
        if($get_image){
            $get_name_image = $get_image -> getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/upload/product',$new_image);
            $data['product_image'] = $new_image;
            DB::table('tbl_product')->insert($data);
            Session::put('message','Thêm sản phẩm thành công!');
            return Redirect::to('add-product');
        }else{
            $data['product_image'] = '';
            DB::table('tbl_product')->insert($data);
            Session::put('message','Thêm sản phẩm thành công!');
            return Redirect::to('add-product');
        }
    }

    public function active_product($brand_proID)
    {
        DB::table('tbl_product')-> where('product_id',$brand_proID)-> update(['product_status'=>1]);
        Session::put('message','Kích hoạt sản phẩm thành công!');
        return Redirect::to('all-product');
    }

    public function unactive_product($product_proID)
    {
        DB::table('tbl_product')-> where('product_id',$product_proID)-> update(['product_status'=>0]);
        Session::put('message','Ẩn sản phẩm thành công!');
        return Redirect::to('all-product');
    }

    public function edit_product($product_proID)
    {
        $this->AuthLogin();
        $cate_product = DB::table('tbl_category_product')-> orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand_product')-> orderby('brand_id','desc')->get();

        $edit_product = DB::table('tbl_product')-> where('product_id',$product_proID)->get();
        $manager = View('admin.edit_product')-> with('edit_product',$edit_product)-> with('cate_product',$cate_product)-> with('brand_product',$brand_product);
        return View('admin_layout')-> with('admin.edit_product',$manager);
    }

    public function delete_product($product_proID)
    {
        DB::table('tbl_product') ->where('product_id',$product_proID)-> delete();
        Session::put('message','Xóa sản phẩm thành công!');
        return Redirect::to('all-product');
    }

    public function update_product(Request $request,$product_proID)
     {
        $data = array();
        $data['product_name'] = $request -> product_name;
        $data['category_id'] = $request -> product_cate;
        $data['brand_id'] = $request -> product_brand;
        $data['product_desc'] = $request -> product_desc;
        $data['product_content'] = $request -> product_content;
        $data['product_price'] = $request -> product_price;
        $get_image = $request -> file('product_image');
        if($get_image){
            $get_name_image = $get_image -> getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/upload/product',$new_image);
            $data['product_image'] = $new_image;
            DB::table('tbl_product')->where('product_id',$product_proID)->update($data);
            Session::put('message','Cập nhật sản phẩm thành công!');
            return Redirect::to('all-product');
        }else{
            DB::table('tbl_product')->where('product_id',$product_proID)->update($data);
            Session::put('message','Cập nhật sản phẩm thành công!');
            return Redirect::to('all-product');
        }
    }

    public function details_product($product_proID)
    {
        $cate_product = DB::table('tbl_category_product')->where('category_status','1')-> orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand_product')->where('brand_status','1')-> orderby('brand_id','desc')->get();
        $details_product = DB::table('tbl_product')
        ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        ->join('tbl_brand_product','tbl_brand_product.brand_id','=','tbl_product.brand_id')->where('tbl_product.product_id',$product_proID)->get();

        foreach ($details_product as $key => $value) {
            $brands_id = $value ->brand_id;
        }

        $related_product = DB::table('tbl_product')
        ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        ->join('tbl_brand_product','tbl_brand_product.brand_id','=','tbl_product.brand_id')->where('tbl_brand_product.brand_id',$brands_id)->whereNotIn('tbl_product.product_id',[$product_proID])->get();

        return View('pages.product.show_details')->with('category',$cate_product)->with('brand',$brand_product)->with('product_details',$details_product)->with('related',$related_product);  
    }
}
