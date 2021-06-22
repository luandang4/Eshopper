<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function contact(){
        return View('pages.staticPage.contact');
    }

     public function blog(){
        return View('pages.staticPage.blog');
    }
}
