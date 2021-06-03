<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class BrandProduct extends Controller
{
    public function add_brand_product()
    {
        return View('admin.add_brand_product');
    }


    public function all_brand_product()
    {
        $all_brand_product = DB::table('tbl_brand_product')-> get();
        $manager = View('admin.all_brand_product')-> with('all_brand_product',$all_brand_product);
        return View('admin_layout')-> with('admin.all_brand_product',$manager);
    }

    public function save_brand_product(Request $request)
    {
        $data = array();
        $data['brand_name'] = $request -> brand_product_name;
        $data['brand_desc'] = $request -> brand_product_desc;
        $data['brand_status'] = $request -> brand_product_status;

        DB::table('tbl_brand_product')->insert($data);
        Session::put('message','Thêm thương hiệu sản phẩm thành công!');
        return Redirect::to('add-brand-product');
    }

    public function active_brand_product($brand_proID)
    {
        DB::table('tbl_brand_product')-> where('brand_id',$brand_proID)-> update(['brand_status'=>1]);
        Session::put('message','Kích hoạt thương hiệu sản phẩm thành công!');
        return Redirect::to('all-brand-product');
    }

    public function unactive_brand_product($brand_proID)
    {
        DB::table('tbl_brand_product')-> where('brand_id',$brand_proID)-> update(['brand_status'=>0]);
        Session::put('message','Ẩn thương hiệu sản phẩm thành công!');
        return Redirect::to('all-brand-product');
    }

    public function edit_brand_product($brand_proID)
    {
        $edit_brand_product = DB::table('tbl_brand_product')-> where('brand_id',$brand_proID)->get();
        $manager = View('admin.edit_brand_product')-> with('edit_brand_product',$edit_brand_product);
        return View('admin_layout')-> with('admin.edit_brand_product',$manager);
    }

    public function delete_brand_product($brand_proID)
    {
        DB::table('tbl_brand_product') ->where('brand_id',$brand_proID)-> delete();
        Session::put('message','Xóa thương hiệu sản phẩm thành công!');
        return Redirect::to('all-brand-product');
    }

    public function update_brand_product(Request $request,$brand_proID)
     {
        $data = array();
        $data['brand_name'] = $request->brand_product_name;
        $data['brand_desc'] = $request->brand_product_desc;
        DB::table('tbl_brand_product') ->where('brand_id',$brand_proID)-> update($data);
        Session::put('message','Cập nhật thương hiệu sản phẩm thành công!');
        return Redirect::to('all-brand-product');
    }


}
