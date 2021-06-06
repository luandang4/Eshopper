<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class CategoryProduct extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id){
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }

    }

    public function add_category_product()
    {
        $this->AuthLogin();
        return View('admin.add_category_product');
    }


    public function all_category_product()
    {
        $this->AuthLogin();
        $all_category_product = DB::table('tbl_category_product')-> get();
        $manager = View('admin.all_category_product')-> with('all_category_product',$all_category_product);
        return View('admin_layout')-> with('admin.all_category_product',$manager);
    }

    public function save_category_product(Request $request)
    {
        $data = array();
        $data['category_name'] = $request -> category_product_name;
        $data['category_desc'] = $request -> category_product_desc;
        $data['category_status'] = $request -> category_product_status;

        DB::table('tbl_category_product')->insert($data);
        Session::put('message','Thêm danh mục sản phẩm thành công!');
        return Redirect::to('add-category-product');
    }

    public function active_category_product($category_proID)
    {
        DB::table('tbl_category_product')-> where('category_id',$category_proID)-> update(['category_status'=>1]);
        Session::put('message','Kích hoạt danh mục sản phẩm thành công!');
        return Redirect::to('all-category-product');
    }

    public function unactive_category_product($category_proID)
    {
        DB::table('tbl_category_product')-> where('category_id',$category_proID)-> update(['category_status'=>0]);
        Session::put('message','Ẩn danh mục sản phẩm thành công!');
        return Redirect::to('all-category-product');
    }

    public function edit_category_product($category_proID)
    {
        $this->AuthLogin();
        $edit_category_product = DB::table('tbl_category_product')-> where('category_id',$category_proID)->get();
        $manager = View('admin.edit_category_product')-> with('edit_category_product',$edit_category_product);
        return View('admin_layout')-> with('admin.edit_category_product',$manager);
    }

    public function delete_category_product($category_proID)
    {
        DB::table('tbl_category_product') ->where('category_id',$category_proID)-> delete();
        Session::put('message','Xóa danh mục sản phẩm thành công!');
        return Redirect::to('all-category-product');
    }

    public function update_category_product(Request $request,$category_proID)
     {
        $data = array();
        $data['category_name'] = $request->category_product_name;
        $data['category_desc'] = $request->category_product_desc;
        DB::table('tbl_category_product') ->where('category_id',$category_proID)-> update($data);
        Session::put('message','Cập nhật danh mục sản phẩm thành công!');
        return Redirect::to('all-category-product');
    }


}
