<?php

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
Route::get('/customer', function () {
    return view('customer/pages/welcome');
}

Route::get('/', function () {

    $data['active'] = "";
    $data['active2'] = "";

    return view('admin.pages.index',$data);
});

Route::group(['prefix' => 'products'],function () {
  Route::get('/form', 'productController@showform');
  Route::get('/tabel', 'productController@showtable');

});
Route::group(['prefix' => 'news'],function () {
  Route::get('/form', 'newsController@showform');
  Route::get('/tabel', 'newsController@showtable');

});

Route::group(['prefix' => 'page-editor'],function () {
  Route::get('/homepage', 'pagesController@showhome');
  Route::get('/customer-list', 'pagesController@showcustomer');
  Route::get('/customer-add', 'pagesController@addcustomer');
});
