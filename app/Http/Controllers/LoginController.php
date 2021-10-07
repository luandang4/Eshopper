<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class LoginController extends Controller
{
    public function login(){
        return View('pages/login/login');
    }

    public function AuthLogin(){
        $admin_id = Session::get('user_id');
        if($admin_id){
            return Redirect::to('/trang-chu');
        }else{
            return Redirect::to('/login')->send();
        }
    }

    public function login_account(Request $request){
        $user_name  = $request -> user_name;
        $user_password = MD5($request -> user_password);

        $result = DB::table('tbl_user')-> where('user_name',$user_name) ->where('user_password',$user_password)->first();
        if($result)
        {
            Session::put('user_name',$result->user_name);
            Session::put('user_id',$result->user_id);
            return Redirect::to('/trang-chu');
        }else
        {
            Session::put('message','Tên đăng nhập hoặc mật khẩu không đúng!');

            return Redirect::to('/login');
        }
    }

    public function logout_user()
    {
        $this->AuthLogin();
        Session::put('user_name',"Tài Khoản");
        Session::put('user_id',null);
        return Redirect::to('/trang-chu');
    }

    public function sign_up(){
        return View('pages/login/sign_up');
    }


}
