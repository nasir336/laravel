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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function() {
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/', 'AdminController@index')->name('admin.dashboard');
  Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');



  // // Password reset routes
  // Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
  // Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
  // Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
  // Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');



  //post route here--------
Route::get('write/post','PostController@writePost')->name('write.post');

Route::post('store/post','PostController@StorePost')->name('store.post');

Route::get('all/post','PostController@AllPost')->name('all.post');


  });
Route::get('view/post/{id}','PostController@ViewPost');
Route::get('delete/post/{id}','PostController@DeletePost');
Route::get('edit/post/{id}','PostController@EditPost');

Route::post('update/post/{id}','PostController@UpdatePost');


//category route here

Route::get('/add_category','CategoryController@add_category')->name('add.category');



Route::post('store/category','CategoryController@StoreCategory')->name('store.category');

Route::get('all/category','CategoryController@AllCategory')->name('all.category');

Route::get('view/category/{id}','CategoryController@ViewCategory');

Route::get('delete/category/{id}','CategoryController@DeleteCategory');

Route::get('edit/category/{id}','CategoryController@EditCategory');
Route::post('update/category/{id}','CategoryController@UpdateCategory');

//product route here------
Route::get('/add_product','ProductController@add_product')->name('add.product');

Route::post('store/product','ProductController@StoreProduct')->name('store.product');

Route::get('all/product','ProductController@AllProduct')->name('all.product');

Route::get('view/product/{id}','ProductController@Viewproduct');

Route::get('delete/product/{id}','ProductController@DeleteProduct');

Route::get('edit/product/{id}','ProductController@Editproduct');

Route::post('update/product/{id}','ProductController@UpdateProduct');