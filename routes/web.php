<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\OrderController;

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
//Route::resource('Products', ProductController::class);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('cart_items', CartItemController::class);
Route::resource('orders', OrderController::class);

require __DIR__.'/auth.php';

//Route::resource('Products', ProductController::class)->only([
//    'index', 'show', 'store', 'update', 'destroy'
//]);
Route::get('products', [ProductController::class,'index'])->name("products.index");
Route::get('products/{product}', [ProductController::class,'show'])->name("products.show");
Route::get('products/create', [ProductController::class,'create'])->name("products.create");
Route::post('products', [ProductController::class,'store'])->name("products.store");
Route::get('products/{product}/edit', [ProductController::class,'edit'])->name("products.edit");
Route::patch('products/{product}', [ProductController::class,'update'])->name("products.update");
Route::delete('products/{product}', [ProductController::class,'destroy'])->name("products.destroy");
//每一個路由名稱所用的URL、HTTP方法(或稱HTTP動詞)、與所串接的控制器&方法
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
//七個Products路由應該有的作用
//products.index    作用:顯示所有有的產品資料
//products.show     作用:顯示指定的產品資料
//products.create   作用:顯示新增產品資料的頁面
//products.store    作用:products.create的產品資料新增到資料庫
//products.edit     作用:編輯指定的產品資料
//products.update   作用:更新指定的產品資料
//products.destroy  作用:刪除指定的產品資料
//四個GET路由所串接的控制器方法
//ProductController@index
//ProductController@show
//ProductController@create
//ProductController@edit
//其他三個非GET路由所串接的控制器方法
//ProductController@store
//ProductController@update
//ProductController@destroy
