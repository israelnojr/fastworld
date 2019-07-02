<?php
use App\Http\Controllers\sliderController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\productController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\eventController;
use App\Http\Controllers\quotationController;
use App\Http\Controllers\projectController;
use App\Http\Controllers\partnerController;
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

Route::get('/','HomeController@index')->name('welcome');
Route::post('/quotation','quotationController@send')->name('quotation.send');
Route::post('/contact','contactController@send')->name('contact.send');
Route::get('products/category', 'categoryController@index')->name('category.products');
Route::get('category/{slug}', 'categoryController@show')->name('category.product');
Route::get('product/{slug}', 'categoryController@singleproduct')->name('product');
Route::get('events', 'eventController@index')->name('event');
Route::get('projects', 'projectController@index')->name('project');
Route::get('project/{id}', 'projectController@show')->name('projects.show');
Route::get('about', 'aboutController@page')->name('about.page');

Auth::routes();

Route::group(['prefix'=>'admin','middleware'=>'auth','namespace'=>'Admin'], function (){
    Route::get('dashboard', 'dashboardController@index')->name('dashboard');
    Route::resource('slider', 'sliderController');
    Route::resource('category', 'categoryController');
    Route::resource('product', 'productController');
    Route::resource('about', 'aboutController');
    Route::resource('event', 'eventController');
    Route::resource('project', 'projectController');
    Route::resource('partner', 'partnerContrller');

    Route::get('quotation','quotationController@index')->name('quotation.index');
    Route::post('quotation/{id}','quotationController@status')->name('quotation.status');
    Route::delete('quotation/{id}','quotationController@destory')->name('quotation.destory');
    Route::get('quotation/{id}','quotationController@show')->name('quotation.show');

    Route::get('contact','contactController@index')->name('contact.index');
    Route::get('contact/{id}','contactController@show')->name('contact.show');
    Route::delete('contact/{id}','contactController@destroy')->name('contact.destroy');

});
    