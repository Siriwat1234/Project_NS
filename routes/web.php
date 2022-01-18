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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','IndexController@index')->name('welcome');


//route admin
Route::get('/admin/index','Admin\AdminController@index')->name('index');

//route category
Route::get('/admin/category/index','Admin\CategoryController@index')->name('category');
Route::get('/admin/category/addcategory','Admin\AddCategoryController@index')->name('addcategory');
Route::post('/admin/category/addcategory/create','Admin\CategoryController@create')->name('create');

Route::get('/admin/category/Edit/{id}','Admin\CategoryController@edit');
Route::post('/admin/category/Update/{id}','Admin\CategoryController@update');
Route::get('/admin/category/Delete/{id}','Admin\CategoryController@delete');

//route recommend
Route::get('/admin/recommend/index','Admin\RecommendController@index')->name('recommend');
Route::get('/admin/recommend/addrecommend','Admin\AddRecommendController@index')->name('addrecommend');
Route::post('/admin/recommend/addrecommend/create','Admin\RecommendController@create')->name('recommend.c');

Route::get('/admin/recommend/Edit/{id}','Admin\RecommendController@edit');
Route::post('/admin/recommend/Update/{id}','Admin\RecommendController@update');
Route::get('/admin/recommend/Delete/{id}','Admin\RecommendController@delete');

//route content
Route::get('/admin/content/index','Admin\ContentController@index')->name('content');
Route::get('/admin/content/addcontent','Admin\AddContentController@index')->name('addcontent');
Route::post('/admin/content/addcontent/create','Admin\ContentController@create')->name('content.c');

Route::get('/admin/content/Edit/{id}','Admin\ContentController@edit');
Route::post('/admin/content/Update/{id}','Admin\ContentController@update');
Route::get('/admin/content/Delete/{id}','Admin\ContentController@delete');

//route content2
Route::get('/admin/content2/index','Admin\Content2Controller@index')->name('content2');
Route::get('/admin/content2/addcontent2','Admin\AddContent2Controller@index')->name('addcontent2');
Route::post('/admin/content/addcontent2/create','Admin\Content2Controller@create')->name('content2.c');

Route::get('/admin/content2/Edit/{id}','Admin\Content2Controller@edit');
Route::post('/admin/content2/Update/{id}','Admin\Content2Controller@update');
Route::get('/admin/content2/Delete/{id}','Admin\Content2Controller@delete');

//route topup
Route::get('/admin/topup/index','Admin\TopupController@index')->name('topup');
Route::get('/admin/topup/addtopup','Admin\AddTopupController@index')->name('addtopup');
Route::post('/admin/topup/addtopup/create','Admin\TopupController@create')->name('topup.c');

Route::get('/admin/topup/Edit/{id}','Admin\TopupController@edit');
Route::post('/admin/topup/Update/{id}','Admin\TopupController@update');
Route::get('/admin/topup/Delete/{id}','Admin\TopupController@delete');


//route user
Route::get('/admin/user/index','Admin\UserController@index')->name('user');
Route::get('/admin/user/adduser','Admin\AddUserController@index')->name('adduser');
Route::post('/admin/user/adduser/create','Admin\UserController@create')->name('user.c');

Route::get('/admin/user/Edit/{id}','Admin\UserController@edit');
Route::post('/admin/user/Update/{id}','Admin\UserController@update');
Route::get('/admin/user/Delete/{id}','Admin\UserController@delete');


//route product
Route::get('/admin/product/index','Admin\ProductController@index')->name('product');


Auth::routes();

Route::get('/about', 'HomeController@about');

Route::get('/home', 'HomeController@index')->name('home');
