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
// Frontend
Route::get('/', 'HomeController@index');
Route::get('/product_by_categories/{categories_id}','HomeController@show_product_by_categories');
Route::get('/product_by_manufacture/{manufacture_id}','HomeController@show_product_by_manufacture');
Route::get('/product-details/{product_id}','homeController@product_details_by_id');
Route::get('advertise-details/{advertise_id}', 'homeController@advertise_details_by_id');
Route::get('contact-us', 'contactusController@index');
Route::post('save-contactus', 'contactusController@save_contactus');



// Backend
Route::get('admin', 'AdminController@index');
Route::get('admin_layout', 'SuperadminController@index');
Route::get('dashboard', 'SuperadminController@dashboard');
Route::post('admin-dashboard', 'adminController@dashboard');

// client-message cheak
Route::get('client-message', 'clientmessageController@index');
Route::get('delete_message/{client_id}', 'clientmessageController@delete_message');
// Slider
Route::get('add-slider', 'SliderController@index');
Route::post('/save-slider', 'SliderController@save_slider');
Route::get('all-slider', 'sliderController@all_slider');
Route::get('unactive_slider/{slider_id}', 'sliderController@unactive_slider');
Route::get('active_slider/{slider_id}', 'sliderController@active_slider');
Route::get('delete_slider/{slider_id}', 'sliderController@delete_slider');
// Categories
Route::get('add-categories', 'categoriesController@index');
Route::get('/save-categories', 'categoriesController@save_categories');
Route::get('all-categories', 'categoriesController@all_categories');
Route::get('unactive_categories/{categories_id}', 'categoriesController@unactive_categories');
Route::get('active_categories/{categories_id}', 'categoriesController@active_categories');
Route::get('delete_categories/{categories_id}', 'categoriesController@delete_categories');
Route::get('edit_categories/{categories_id}', 'categoriesController@edit_categories');
Route::post('/update-categories/{categories_id}','categoriesController@update_categories');

// Product
Route::get('add-product', 'productController@index');
Route::post('save-product', 'productController@save_product');
Route::get('all-product', 'productController@all_product');
Route::get('/unactive_product/{product_id}','productController@unactive_product');
Route::get('/active_product/{product_id}','productController@active_product');
Route::get('/delete-product/{product_id}','productController@delete_product');
Route::get('/edit-product/{product_id}','productController@edit_product');

Route::post('/update-product/{product_id}', 'productController@update_product');
// Manufacture
Route::get('add-manufacture', 'manufactureController@index');
Route::get('save-manufacture', 'manufactureController@save_manufacture');
Route::get('all-manufacture', 'manufactureController@all_manufacture');
Route::get('unactive_manufacture/{manufacture_id}', 'manufactureController@unactive_manufacture');
Route::get('active_manufacture/{manufacture_id}', 'manufactureController@active_manufacture');
Route::get('delete_manufacture/{manufacture_id}', 'manufactureController@delete_manufacture');
Route::get('edit_manufacture/{manufacture_id}', 'manufactureController@edit_manufacture');
Route::post('/update-manufacture/{manufacture_id}','manufactureController@update_manufacture');
// Shop Information
Route::get('add-shopinfo', 'shopinfoController@index');
Route::post('save-shopinfo', 'shopinfoController@save_shopinfo');
Route::get('all-shopinfo', 'shopinfoController@all_shopinfo');
Route::get('unactive_shop/{shop_id}', 'shopinfoController@unactive_shop');
Route::get('active_shop/{shop_id}', 'shopinfoController@active_shop');
Route::get('delete_shop/{shop_id}', 'shopinfoController@delete_shop');

// Advertisement
Route::get('add-advertise', 'advertisementController@index');
Route::post('save-advertise', 'advertisementController@save');
Route::get('all-advertise', 'advertisementController@all_advertise');
Route::get('unactive_advertise/{advertise_id', 'advertisementController@unactive_advertise');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
