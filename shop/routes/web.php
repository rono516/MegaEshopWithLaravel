<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\FrontendController;

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

//Route::get('/', function () {
  //  return view('welcome');
//});
Route::get('/', [FrontendController::class, 'index']);
Route::get('category', [FrontendController::class, 'category']);
Route::get('view-category/{slug}', [FrontendController::class, 'viewcategory']);
Route::get('view-category/{cate_slug}/{prod_meta_description}', [FrontendController::class, 'productview']);
Route::get('view-product/{product_id}', [FrontendController::class, 'productview']);
// Route::get('login', [LoginController::class, 'login']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('add-to-cart', [CartController::class, 'addProduct']);
Route::post('delete-cart-item', [CartController::class, 'deleteproduct']);
Route::post('update-cart', [CartController::class, 'updatecart']);
Route::get('cart', [CartController::class, 'viewcart']);

Route::get('checkout',[CheckoutController::class, 'index']);



Route::middleware(['auth'])->group(function () {
    //Route::get('cart', [CartController::class, 'viewcart']  );
    //Route::get('checkout',[CheckoutController::class, 'index']);
    Route::post('place-order', [CheckoutController::class, 'placeorder']);
    Route::get('orders', [FrontendController::class, 'my_orders']);
    Route::get('view_order/{id}', [FrontendController::class, 'view_order']);
});

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard','Admin\FrontendController@index');

    Route::get('categories', 'Admin\CategoryController@index');
    Route::get('add-category', 'Admin\CategoryController@add');

    Route::post('insert-category', 'Admin\CategoryController@insert' );
    Route::get('edit-category/{id}', [CategoryController::class, 'edit']);
    Route::put('update-category/{id}', [CategoryController::class, 'update']);
    Route::get('delete-category/{id}', [CategoryController::class, 'destroy']);

    Route::get('products', [ProductController::class,'index' ]);
    Route::get('add-products', [ProductController::class,'add' ]);
    Route::post('insert-product', [ProductController::class, 'insert']);

    Route::get('edit-product/{id}', [ProductController::class, 'edit']);
    Route::put('update-product/{id}', [ProductController::class, 'update']);
    Route::get('delete-product/{id}', [ProductController::class, 'destroy']);
});
?>
