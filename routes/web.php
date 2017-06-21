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

Route::get('/', 'customerController@home');
Route::get('/about', 'customerController@about');
Route::get('/testimoni', 'customerController@testimoni');
Route::get('/contact', 'customerController@contact');
Route::post('/contact', 'customerController@sendMessage');
Route::get('/product', 'customerController@product');
Route::get('/aftersales', 'customerController@aftersales');
Route::post('/aftersales', 'customerController@addaftersales');


Route::group(['prefix' => 'products'],function () {
  Route::get('/', 'customerController@product');
  Route::get('/ajax/{id}', 'productController@productAjax');
  Route::get('/type/{id}', 'productController@type');
  Route::get('/detail/{id}', 'productController@detail');
  Route::get('/form', 'productController@showform');
  Route::post('/form','productController@addproduct');
  Route::post('/send','productController@sendReview');
  Route::get('/update/{id}','productController@showupdate');
  Route::post('/update/{id}','productController@addupdate');
  Route::get('/tabel', 'productController@showtable');
  Route::get('/delete/{id}', 'productController@delete');

  Route::get('/deleteimp/{id}', 'productController@deletepic');


});
Route::group(['prefix' => 'news'],function () {
  Route::get('/', 'customerController@news');
  Route::get('/detail/{id}', 'newsController@showDetailNews');
  Route::get('/form', 'newsController@showform');
  Route::post('/form','newsController@addnews');
  Route::get('/tabel', 'newsController@showtable');
  Route::get('/update/{id}', 'newsController@showupdate');
  Route::post('/update/{id}', 'newsController@update');
  Route::get('/delete/{id}', 'newsController@delete');

  Route::get('/test/{id}','newsController@test');
});

Route::group(['prefix' => 'page-editor'],function () {
  Route::get('/homepage', 'pagesController@showhome');
  Route::post('/homepage', 'pagesController@updatehome');
  Route::get('/customer-list', 'pagesController@showcustomer');
  Route::get('/customer-add', 'pagesController@addcustomer');
  Route::post('/customer-add', 'pagesController@addcust');
  Route::get('/del-cust/{id}', 'pagesController@deletecustomer');

  Route::get('/contacts', 'pagesController@contacts');
  Route::post('/contacts', 'pagesController@contactsed');

  Route::get('/addaboutgmf','pagesController@showaboutgmf');
  Route::post('/addaboutgmf','pagesController@aboutgmf');

  Route::get('/addaboutgass','pagesController@showaboutgass');
  Route::post('/addaboutgass','pagesController@aboutgass');

  Route::get('/addourfacility','pagesController@showaboutfac');
  Route::post('/addourfacility','pagesController@aboutfac');

  Route::get('/addtestimony','pagesController@showtestimony');
  Route::post('/addtestimony','pagesController@addtestimony');


});

Route::group(['prefix' => 'inbox'],function () {
  Route::get('/messages', 'inboxController@messages');
  Route::get('/showmessage/{id}', 'inboxController@showmessage');
  Route::get('/deletemessage/{id}', 'inboxController@deletemessage');

  Route::get('/aftersales', 'inboxController@aftersales');
  Route::get('/showaftersale/{id}', 'inboxController@showaftersale');
});
