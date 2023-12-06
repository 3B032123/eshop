<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('Products', ProductController::class);
//  每一個路由名稱所用的URL、HTTP方法(或稱HTTP動詞)、與所串接的控制器&方法
//products.index    URL:products                HTTP方法:GET|HEAD 控制器&方法:ProductController@index
//products.show     URL:products/{product}      HTTP方法:GET|HEAD 控制器&方法:ProductController@show
//products.create   URL:products/create         HTTP方法:GET|HEAD 控制器&方法:ProductController@create
//products.store    URL:products                HTTP方法:POST     控制器&方法:ProductController@store
//products.edit     URL:products/{product}/edit HTTP方法:GET|HEAD 控制器&方法:ProductController@edit
//products.update   URL:products/{product}      HTTP方法:PUT|PATCH控制器&方法:ProductController@update
//products.destroy  URL:products/{product}      HTTP方法:DELETE   控制器&方法:ProductController@destroy
//  GET|HEAD        Products .................................. Products.index › ProductController@index
//  POST            Products .................................. Products.store › ProductController@store
//  GET|HEAD        Products/create ......................... Products.create › ProductController@create
//  GET|HEAD        Products/{Product} .......................... Products.show › ProductController@show
//  PUT|PATCH       Products/{Product} ...................... Products.update › ProductController@update
//  DELETE          Products/{Product} .................... Products.destroy › ProductController@destroy
//  GET|HEAD        Products/{Product}/edit ..................... Products.edit › ProductController@edit
