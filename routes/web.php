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

Route::get( '/', function () {
    return Redirect::to( '/site-home' );
    //return view('frontend.home');
} );

//Route::get('/customer-order', function () {
//    return view('frontend.order');
//})->name('customer.order');

Auth::routes();

Route::get( '/home', 'HomeController@index' )->name( 'home' );
Route::get( 'site-home', 'FrontendController@index' )->name( 'site.home' );
Route::get( 'site-about', 'FrontendController@aboutUs' )->name( 'site.about' );
//Route::get( 'site-order', 'FrontendController@customerOrder' )->name( 'site.order' );

Route::resource( 'category', 'CategoryController' )->middleware( 'customer' );
Route::resource( 'products', 'ProductsController' )->middleware( 'customer' );
Route::resource( 'units', 'UnitController' )->middleware( 'customer' );

Route::get( '/orderlist/{status}', 'MedicineOrderController@listOfOrders' )->name( "order.list" );
Route::get( '/orderdetails/{id?}', 'MedicineOrderController@orderdetails' )->name( "order.details" );
Route::post( '/orderaccept', 'MedicineOrderController@orderaccept' )->name( "order.accept" );
Route::post( '/ordercancel', 'MedicineOrderController@ordercancel' )->name( "order.cancel" );
Route::post( '/orderdelivery', 'MedicineOrderController@orderdelivery' )->name( "order.delivery" );
Route::post( '/orderprocess/{status?}', 'MedicineOrderController@orderprocess' )->name( "order.process" );
Route::get( '/orderpdf/{id?}', 'MedicineOrderController@orderPdf' )->name( "order.pdf" );

//Route::get( '/showprescription/{id?}', 'MedicineOrderController@prescription' )->name( "order.show-prescription" );
//Route::get( '/prescriptionorder/{id?}', 'MedicineOrderController@prescription' )->name( "order.prescription" );

Route::resource( 'order', 'MedicineOrderController' );
Route::resource( 'employee', 'EmployeeController' );

Route::get( '/categorywise/{category?}', 'ProductsController@productsByCategory' )->name( 'products.categorywise' );
Route::post( '/products-search', 'ProductsController@getProducts' )->name( 'products.search' );

//Route::get('/order/{id}','MedicineOrderController@');
Route::resource( 'pos', 'PosController' );

//Route::resource( 'prescription', 'PrescriptionOrderController' );
//Route::resource( '/prescription-order', 'PrescriptionOrderController' );
Route::get( '/prescription-order/{id?}', 'PrescriptionOrderController@prescriptionOrder' )->name( "prescription.order" );
Route::post( '/prescription-order-update', 'PrescriptionOrderController@store' )->name( "prescription.update" );
//Route::get( '/prescription-order/{id?}', 'PrescriptionOrderController@prescriptionOrder' )->name( "prescription.order" );

Route::post( 'customer-order', 'PosController@storeWithoutAuth' )->name( "pos.customer.order" );

//Route::post('/user_order', 'PosController@storeWithoutAuth')->name("pos.user.order");

//});
