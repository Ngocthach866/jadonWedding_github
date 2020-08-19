<?php

use App\Http\Controllers\VendorController;
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
    return view('welcome');
});

// //Edit tbVendor
// Route::get('edit','VendorController@vendor')->name('vendor');
// Route::post('vendor/postCreate','VendorController@vendorcreate');
// Route::get('vendor/update/{id}','VendorController@update');
// Route::post('vendor/postUpdate/{id}','VendorController@postUpdate');
// Route::get('vendor/delete/{id}', 'VendorController@delete');
// //Edit tbProduct
// Route::post('product/postCreate','VendorController@productcreate');
// Route::get('product/update/{id}','VendorController@productupdate');
// Route::post('product/postUpdate/{id}','VendorController@productpostUpdate');
// Route::get('product/delete/{id}', 'VendorController@productdelete');
// //Edit tbPurchasing
// Route::post('purchasing/postCreate','VendorController@purchasingcreate');
// Route::get('purchasing/update/{id}','VendorController@purchasingupdate');
// Route::post('purchasing/postUpdate/{id}','VendorController@purchasingpostUpdate');
// Route::get('purchasing/delete/{id}', 'VendorController@purchasingdelete');
// //Edit tbPurchasingtype
// Route::post('purchasingtype/postCreate','VendorController@purchasingtypecreate');
// Route::get('purchasingtype/update/{id}','VendorController@purchasingtypeupdate');
// Route::post('purchasingtype/postUpdate/{id}','VendorController@purchasingtypepostUpdate');
// Route::get('purchasingtype/delete/{id}', 'VendorController@purchasingtypedelete');
// //Edit tbPurchasingtypeset
// Route::post('purchasingtypeset/postCreate','VendorController@purchasingtypesetcreate');
// Route::get('purchasingtypeset/update/{id}','VendorController@purchasingtypesetupdate');
// Route::post('purchasingtypeset/postUpdate/{id}','VendorController@purchasingtypesetpostUpdate');
// Route::get('purchasingtypeset/delete/{id}', 'VendorController@purchasingtypesetdelete');
//Auth
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Edit tbVendor
Route::get('Ven','VendorController@vendor')->name('vendor');
Route::post('vendor/postCreate','VendorController@vendorcreate');
Route::get('vendor/update/{id}','VendorController@update');
Route::post('vendor/postUpdate/{id}','VendorController@postUpdate');
Route::get('vendor/delete/{id}', 'VendorController@delete');
//Edit tbProduct
Route::get('Pro','ProductController@product')->name('product');
Route::post('product/postCreate','ProductController@productcreate');
Route::get('product/update/{id}','ProductController@productupdate');
Route::post('product/postUpdate/{id}','ProductController@productpostUpdate');
Route::get('product/delete/{id}', 'ProductController@productdelete');
// //Edit tbPurchasing
Route::get('Pcs','PurchasingController@purchasing')->name('purchasing');
Route::post('purchasing/postCreate','PurchasingController@purchasingcreate');
Route::get('purchasing/update/{id}','PurchasingController@purchasingupdate');
Route::post('purchasing/postUpdate/{id}','PurchasingController@purchasingpostUpdate');
Route::get('purchasing/delete/{id}', 'PurchasingController@purchasingdelete');
//Edit tbPurchasingtype
Route::get('Pct','PurchasingtypeController@purchasingtype')->name('purchasingtype');
Route::post('purchasingtype/postCreate','PurchasingtypeController@purchasingtypecreate');
Route::get('purchasingtype/update/{id}','PurchasingtypeController@purchasingtypeupdate');
Route::post('purchasingtype/postUpdate/{id}','PurchasingtypeController@purchasingtypepostUpdate');
Route::get('purchasingtype/delete/{id}', 'PurchasingtypeController@purchasingtypedelete');
//Edit tbPurchasingtypeset
Route::get('Pts','PurchasingtypesetController@purchasingtypeset')->name('purchasingtypeset');
Route::post('purchasingtypeset/postCreate','PurchasingtypesetController@purchasingtypesetcreate');
Route::get('purchasingtypeset/update/{id}','PurchasingtypesetController@purchasingtypesetupdate');
Route::post('purchasingtypeset/postUpdate/{id}','PurchasingtypesetController@purchasingtypesetpostUpdate');
Route::get('purchasingtypeset/delete/{id}', 'PurchasingtypesetController@purchasingtypesetdelete');
