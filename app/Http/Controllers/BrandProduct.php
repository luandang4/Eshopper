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
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }

    }

    public function add_brand_product()
    {
        $this->AuthLogin();
        return View('admin.add_brand_product');
    }


    public function all_brand_product()
    {
        $this->AuthLogin();
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
        $this->AuthLogin();
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
    //end function admin page

    public function show_brand_home($brand_proID)
    {
       $cate_product = DB::table('tbl_category_product')->where('category_status','1')-> orderby('category_id','desc')->get();
       $brand_product = DB::table('tbl_brand_product')->where('brand_status','1')-> orderby('brand_id','desc')->get();

       $brand_by_id = DB::table('tbl_product')->join('tbl_brand_product','tbl_product.brand_id','=','tbl_brand_product.brand_id')->where('tbl_product.brand_id',$brand_proID)->get();
       $brandName = DB::table('tbl_brand_product')->where('tbl_brand_product.brand_id',$brand_proID)->limit(1)->get();

       return View('pages.brand.show_brand')->with('category',$cate_product)->with('brand',$brand_product)->with('brand_by_id',$brand_by_id)->with('brandName',$brandName);
   }


}
