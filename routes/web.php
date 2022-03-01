<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\Hello4Controller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SiteController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/shop', [SiteController::class, 'shop'])->name('shop');

Route::get('/register', [SiteController::class, 'register'])->name('register');

Route::get('/product/details/{id}', [SiteController::class, 'product_details'])->name('product_details');

Route::get('/admin/products', [ProductController::class, 'index'])->name('products');

Route::get('/admin/products/read', [ProductController::class, 'read'])->name('read_products');

Route::get('/admin/products/create', [ProductController::class, 'create'])->name('create_product');

Route::post('/admin/products/stores', [ProductController::class, 'store'])->name('store_product');

Route::get('/admin/products/edit/{id}', [ProductController::class, 'edit'])->name('edit_product');

Route::post('/admin/products/update/{id}', [ProductController::class, 'update'])->name('update_product');

Route::delete('/admin/products/destroy/{id}', [ProductController::class, 'destroy'])->name('destroy_product');

Route::post('/products/store', [CommentController::class, 'store'])->name('store_comment');


Route::get('/login', [SiteController::class, 'login'])->name('login');
Route::get('/hola', function () {
    return '<h2>hola mundo</h2>';
});


Route::get('/hola2', function () {
    return view('hello');
});

Route::get('/hola3', [helloController::class, 'hello3']);

Route::get('/hola4', [hello4Controller::class, 'hello']);

Route::get('/hola5/{firsname?}/{lastname?}', [helloController::class, 'hello5'])->where(array('lastname' => '[a-z,A-Z]+'));
