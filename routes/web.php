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

Route::get('/', function () {
    return view('welcome');
});

//Edit tbVendor
Route::get('Ven', 'VendorController@vendor')->name('vendor');
Route::post('vendor/postCreate', 'VendorController@vendorcreate');
Route::get('vendor/update/{id}', 'VendorController@update');
Route::post('vendor/postUpdate/{id}', 'VendorController@postUpdate');
Route::get('vendor/delete/{id}', 'VendorController@delete');
//Edit tbProduct
Route::get('Pro', 'ProductController@product')->name('product');
Route::post('product/postCreate', 'ProductController@productcreate');
Route::get('product/update/{id}', 'ProductController@productupdate');
Route::post('product/postUpdate/{id}', 'ProductController@productpostUpdate');
Route::get('product/delete/{id}', 'ProductController@productdelete');
// //Edit tbPurchasing
Route::get('Pcs', 'PurchasingController@purchasing')->name('purchasing');
Route::post('purchasing/postCreate', 'PurchasingController@purchasingcreate');
Route::get('purchasing/update/{id}', 'PurchasingController@purchasingupdate');
Route::post('purchasing/postUpdate/{id}', 'PurchasingController@purchasingpostUpdate');
Route::get('purchasing/delete/{id}', 'PurchasingController@purchasingdelete');
//Edit tbPurchasingtype
Route::get('Pct', 'PurchasingtypeController@purchasingtype')->name('purchasingtype');
Route::post('purchasingtype/postCreate', 'PurchasingtypeController@purchasingtypecreate');
Route::get('purchasingtype/update/{id}', 'PurchasingtypeController@purchasingtypeupdate');
Route::post('purchasingtype/postUpdate/{id}', 'PurchasingtypeController@purchasingtypepostUpdate');
Route::get('purchasingtype/delete/{id}', 'PurchasingtypeController@purchasingtypedelete');
//Edit tbPurchasingtypeset
Route::get('Pts', 'PurchasingtypesetController@purchasingtypeset')->name('purchasingtypeset');
Route::post('purchasingtypeset/postCreate', 'PurchasingtypesetController@purchasingtypesetcreate');
Route::get('purchasingtypeset/update/{id}', 'PurchasingtypesetController@purchasingtypesetupdate');
Route::post('purchasingtypeset/postUpdate/{id}', 'PurchasingtypesetController@purchasingtypesetpostUpdate');
Route::get('purchasingtypeset/delete/{id}', 'PurchasingtypesetController@purchasingtypesetdelete');

<<<<<<< Updated upstream
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
=======
//Thach - venuetype-location-venue

//url nhom venueType

Route::get('venuetype/index', 'VenuetypeController@index');
Route::get('venuetype/create', 'VenuetypeController@create');
Route::post('venuetype/postCreate', 'VenuetypeController@postCreate');
Route::get('venuetype/update/{id}', 'VenuetypeController@update');
Route::post('venuetype/postUpdate/{id}', 'VenuetypeController@postUpdate');
Route::get('venuetype/delete/{id}', 'VenuetypeController@delete');
Route::get('venuetype/detail/{id}', 'VenuetypeController@detail');

Route::get('venuetype', function () {
    return view('fontend.clientview');
});

//-----------------------------------------------------------

//url nhom Venue
Route::get('venue/index', 'VenueController@index');
Route::get('venue/create', 'VenueController@create');
Route::post('venue/postCreate', 'VenueController@postCreate');
Route::get('venue/update/{id}', 'VenueController@update');
Route::post('venue/postUpdate/{id}', 'VenueController@postUpdate');
Route::get('venue/delete/{id}', 'VenueController@delete');
Route::get('venue/detail/{id}', 'VenueController@detail');
//-----------------------------------------------------------

//url nhom location
Route::get('location/index', 'LocationController@index');
Route::get('location/create', 'LocationController@create');
Route::post('location/postCreate', 'LocationController@postCreate');
Route::get('location/update/{id}', 'LocationController@update');
Route::post('location/postUpdate/{id}', 'LocationController@postUpdate');
Route::get('location/delete/{id}', 'LocationController@delete');
Route::get('location/detail/{id}', 'LocationController@detail');

//-----------------------------------------------------------
>>>>>>> Stashed changes
