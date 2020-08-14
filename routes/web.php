<?php

use Illuminate\Support\Facades\Auth;
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


Route::get('login',function()
{
return view('login');
});
Route::get('/wlogin',function()
{
return view('wlogin');
});
Route::get('/contact',function()
{
return view('contact');
});
Route::get('/application',function()
{
return view('application');
});
Route::get('/single',function()
{
return view('single');
});

Route::get('/registeration',function()
{
return view('registeration');
});
Route::get('/partner',function()
{
return view('partner');
});                                                                                                                     
Auth::routes();
//Route::get('/dashboard','DashboardController@index')->name('dashboard');

    

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/products', 'ProductController@client')->name('products-list');
Route::get('/products/view/{id}', 'HomeController@product')->name('product-view');
Route::post('/products/view/comment/save', 'HomeController@comment')->name('product-comment');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');





Route::get('/product', 'ProductController@index')->name('product-list')->middleware('auth');
Route::get('/product/create', 'ProductController@create')->name('product-create');
Route::post('/product/store', 'ProductController@store')->name('product-store');
Route::get('/product/delete/{id}','ProductController@delete')->name('product-delete');
Route::get('/product/edit/{id}','ProductController@edit')->name('product-edit');
Route::post('/product/update','ProductController@update')->name('product-update');
Route::get('/user', 'UserController@index')->name('user-list')->middleware('auth');
Route::get('/user/create', 'UserController@create')->name('user-create');
Route::post('/user/save', 'UserController@save')->name('user-save');
Route::get('/user/delete/{id}','UserController@delete')->name('user-delete');
Route::get('/user/edit/{id}','UserController@edit')->name('user-edit');
Route::post('/user/update', 'UserController@update')->name('user-update');
Route::get('/vendors','VendorController@index')->name('vendor');
Route::get('/vendors/create', 'VendorController@create')->name('vendor-create');
Route::post('/vendors/save', 'VendorController@save')->name('vendor-save');
Route::get('/vendors/delete/{id}','VendorController@delete')->name('vendor-delete');
Route::get('/vendors/edit/{id}','VendorController@edit')->name('vendor-edit');
Route::post('/vendors/update', 'VendorController@update')->name('vendor-update');
Route::get('/carwash','CarwashController@index')->name('carwash');
Route::get('/carwash/create', 'CarwashController@create')->name('carwash-create');
Route::post('/carwash/save', 'CarwashController@save')->name('carwash-save');
Route::get('/carwash/delete/{id}','CarwashController@delete')->name('carwash-delete');
Route::get('/carwash/edit/{id}','CarwashController@edit')->name('carwash-edit');
Route::post('/carwash/update', 'CarwashController@update')->name('carwash-update');
Route::get('/cart','CartController@index')->name('cart');
Route::get('/cart/create/{id}','CartController@create')->name('cart-create');
Route::post('/cart/save', 'CartController@save')->name('cart-save');
Route::get('/cart/edit/{id} ', 'CartController@edit')->name('cart-edit');
Route::post('/cart/update', 'CartController@update')->name('cart-update');
// Route::get('/cart/delete/{id}',function(){
//     return 'odfkdojfdj';
// })->name('cart-delete');

Route::get('/cart/delete/{id}','CartController@delete')->name('cart-delete');


Route::get('/order','OrderController@index')->name('order');
Route::get('/order/create/{id}','OrderController@create')->name('order-create');
Route::post('/order/save', 'OrderController@save')->name('order-save');
Route::get('/order/edit/{id} ', 'OrderController@edit')->name('order-edit');
Route::post('/order/update', 'OrderController@update')->name('order-update');
Route::get('/order/delete/{id}','OrderController@delete')->name('order-delete');

// Password reset routes 

Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('user.password.email');
Route::get('/password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('user.password.request');
Route::post('/password/reset', 'Auth\ResetPasswordController@reset');
Route::get('/password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('user.password.reset');










Route::get('logoutt',function(){
    Auth::logout();
    return redirect('http://localhost/project');
    //
    
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'DashboardController@products')->name('product');