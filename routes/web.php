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

Route::group(['prefix' => 'customer'],function () {
  Route::get('/', 'customerController@home');
  Route::get('/aboutGMF', 'customerController@aboutGMF');

});


Route::group(['prefix' => 'products'],function () {
  Route::get('/form', 'productController@showform');
  Route::post('/form','productController@addproduct');
  Route::get('/tabel', 'productController@showtable');
  Route::get('/delete/{id}', 'productController@delete');

});
Route::group(['prefix' => 'news'],function () {
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
  Route::get('/customer-list', 'pagesController@showcustomer');
  Route::get('/customer-add', 'pagesController@addcustomer');
  Route::get('/contacts', 'pagesController@contacts');



});
