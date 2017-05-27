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

Route::any('/', function () {
//    return Auth::guard('web')->user();
    return view('dongyin.index');
});

Route::get('/','IndexController@index');
Route::get('introduce', function () {
    return view('dongyin.introduce');
});
Route::get('about', function () {
    return view('dongyin.about');
});
Route::get('products', 'DongyinController@products');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('test','IndexController@test');
$this->group(['prefix'=>'admin'], function(){
    $this->get('/','AdminController@index');
    $this->get('avatar', 'AdminController@avatar');
    $this->post('avatar', 'AdminController@changeAvatar');
    $this->get('products', 'ProductController@index');
    $this->get('products/create', 'ProductController@create');
    $this->post('products/create', 'ProductController@store');
    $this->get('products/{id}/edit', 'ProductController@edit');
    $this->post('products/{id}/edit', 'ProductController@save');
    $this->get('products/{id}/delete', 'ProductController@delete');
    $this->get('cates', 'CateController@index');
    $this->get('cates/create', 'CateController@create');
    $this->post('cates/create', 'CateController@store');
    $this->get('cates/{id}/delete', 'CateController@delete');
});