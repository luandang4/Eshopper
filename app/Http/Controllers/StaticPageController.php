<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class StaticPageController extends Controller
{
    public function contact(){
        return View('pages.staticPage.contact');
    }

     public function blog(){
        return View('pages.staticPage.blog');
    }
}
