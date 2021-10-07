<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//frontend
Route::get('/', 'HomeController@index');

Route::get('/trang-chu', 'HomeController@index');

//------sản phẩm trang chủ
Route::get('/danh-muc-san-pham/{category_proID}', 'CategoryProduct@show_category_home');
Route::get('/thuong-hieu-san-pham/{brand_proID}', 'BrandProduct@show_brand_home');
Route::get('/chi-tiet-san-pham/{brand_proID}', 'ProductController@details_product');

//backend
Route::get('/admin', 'AdminController@index');
Route::get('/dashboard', 'AdminController@showdashboard');
Route::get('/logout', 'AdminController@logout');
Route::post('/admin-dashboard', 'AdminController@dashboard');


//-----------category product
Route::get('/add-category-product', 'CategoryProduct@add_category_product');
Route::get('/all-category-product', 'CategoryProduct@all_category_product');
Route::get('/edit-category-product/{category_proID}', 'CategoryProduct@edit_category_product');
Route::get('/delete-category-product/{category_proID}', 'CategoryProduct@delete_category_product');

Route::get('/active-category-product/{category_proID}', 'CategoryProduct@active_category_product');
Route::get('/unactive-category-product/{category_proID}', 'CategoryProduct@unactive_category_product');

Route::post('/save-category-product', 'CategoryProduct@save_category_product');
Route::post('/update-category-product/{category_proID}', 'CategoryProduct@update_category_product');

//----------brand product
Route::get('/add-brand-product', 'BrandProduct@add_brand_product');
Route::get('/all-brand-product', 'BrandProduct@all_brand_product');
Route::get('/edit-brand-product/{brand_proID}', 'BrandProduct@edit_brand_product');
Route::get('/delete-brand-product/{brand_proID}', 'BrandProduct@delete_brand_product');

Route::get('/active-brand-product/{brand_proID}', 'BrandProduct@active_brand_product');
Route::get('/unactive-brand-product/{brand_proID}', 'BrandProduct@unactive_brand_product');

Route::post('/save-brand-product', 'BrandProduct@save_brand_product');
Route::post('/update-brand-product/{brand_proID}', 'BrandProduct@update_brand_product');

//------------product
Route::get('/add-product', 'ProductController@add_product');
Route::get('/all-product', 'ProductController@all_product');
Route::get('/edit-product/{product_proID}', 'ProductController@edit_product');
Route::get('/delete-product/{product_proID}', 'ProductController@delete_product');

Route::get('/active-product/{product_proID}', 'ProductController@active_product');
Route::get('/unactive-product/{product_proID}', 'ProductController@unactive_product');

Route::post('/save-product', 'ProductController@save_product');
Route::post('/update-product/{product_proID}', 'ProductController@update_product');

//cart
Route::post('/save-cart', 'CartController@save_cart');
Route::get('/show-cart', 'CartController@show_cart');
Route::get('/delete-to-cart/{rowId}', 'CartController@delete_to_cart');


//---------stattic page
Route::get('/contact', 'StaticPageController@contact');
Route::get('/blog', 'StaticPageController@blog');

//----------login
Route::get('/login', 'LoginController@login');
Route::get('/sign-up', 'LoginController@sign_up');
Route::get('/logout-user', 'LoginController@logout_user');
Route::post('/login-account', 'LoginController@login_account');