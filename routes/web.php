<?php

use App\Http\Controllers\CartController;
// use App\Http\Controllers\ProductController;
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
use \App\Category;
use \App\Featured_Products;
use \App\Recent_Products;



Route::get('/', function () {
     $categories= Category::all();
    $featured_products=Featured_Products::all();
    $recent_products=Recent_Products::all();

    //  $data = [];
    // $data['category'] = Category::all()
    //  $data['product'] = Product:all();
    // dd($categories);
   return view('frontend.index', compact('categories', 'featured_products','recent_products'));
});


//   Frontend routes
 Route::get('/shop','FrontendController@shop')->name('shop');
 Route::get('/homes','FrontendController@homes')->name('homes');
 Route::get('/shopdetail','FrontendController@shopdetail')->name('shopdetail');
//  Route::get('/cart','FrontendController@cart')->name('cart');
 Route::get('/checkout','FrontendController@checkout')->name('checkout');
 Route::get('/contact','FrontendController@contact')->name('contact');
 Route::post('/contactsaveform','FrontendController@contactsaveform')->name('contactsaveform');
 Route::get('/userlogin','FrontendController@userlogin')->name('userlogin');
 Route::post('/userloginsave','FrontendController@userloginsave')->name('userloginsave');
 Route::get('/userregister','FrontendController@userregister')->name('userregister');
 Route::post('/userregistersave','FrontendController@userregistersave')->name('userregistersave');
 Route::get('/verify','FrontendController@verify')->name('verify');



//backend routes

Route::get('/admin/dashboard','DashboardController@index')->name('admin/dashboard');
Route::get('/a_dashboard','DashboardController@a_dashboard')->name('a_dashboard');
Route::get('/adminlogin','DashboardController@adminlogin')->name('adminlogin');
Route::post('/adminloginsave','DashboardController@adminloginsave')->name('adminloginsave');
Route::get('/adminregister','DashboardController@adminregister')->name('adminregister');
Route::post('/adminregistersave','DashboardController@adminregistersave')->name('adminregistersave');
Route::get('/home','DashboardController@home')->name('home');
Route::get('/productform','DashboardController@productform')->name('productform');
Route::post('/productsaveform','DashboardController@productsaveform')->name('productsaveform');
Route::get('/categoryshowform','DashboardController@categoryshowform')->name('categoryshowform');
Route::post('/categorysaveform','DashboardController@categorysaveform')->name('categorysaveform');
Route::get('/brandform','DashboardController@brandform')->name('brandform');
Route::get('/orderform','DashboardController@orderform')->name('orderform');

Auth::routes();

// Route::get('/admin/dashboard', 'DashboardController@index')->name('dashboard');

//cart routes

// Route::get('/', [ProductController::class, 'productList'])->name('products.list');
Route::get('cart', [CartController::class, 'cart'])->name('cart');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
