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

Route::get('/welcome',function(){
  return view('welcome');
});

Route::get('/', 'getProducts@index');

Route::get('/adminlogin',function(){
  return view('auth/adminlogin');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/adminpanel', 'adminPanelController@index');

Route::get('/addproduct',['uses'=>'addProductController@index']);

Route::post('/addproduct/add',['uses'=>'addProductController@addProduct']);


Route::get('/editproduct/{productId}',['uses'=>'editProductController@getProducts']);

Route::post('/editproduct/submit/{productId}',['uses'=>'editProductController@editProducts']);
