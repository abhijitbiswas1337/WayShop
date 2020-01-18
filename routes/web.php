<?php
//Route::get('/', function () {
//    return view('welcome');
//});


/**HomePage Route*****/

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::match(['get','post'],'/','IndexController@index');
/**Admin Route*****/
Route::match(['get','post'],'/admin','AdminController@login')->name('admin-login');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=>'admin','middleware'=>'auth'], function (){
/**Admin Login Route For Admin Dashboard**/
Route::match(['get','post'],'/dashboard','AdminController@dashboard')->name('admin-dashboard');

                              /**Category  Route**/
    Route::get('/add_category',['uses'=>'categoryController@AddCategoryFrom','as'=>'AddCategoryFrom']);
    Route::post('/add_category',['uses'=>'categoryController@storeCategoryFromData','as'=>'storeCategoryFromData']);
    Route::get('/view_category',['uses'=>'categoryController@ViewCategoryFrom','as'=>'ViewCategoryFrom']);


                            /**Products  Route**/
Route::get('/add_product',['uses'=>'ProductsController@getProductForm','as'=>'add_product_form']);
Route::post('/add_product',['uses'=>'ProductsController@storeProductFormData','as'=>'Store_add_form_data']);
Route::get('/viewProducts',['uses'=>'ProductsController@viewProducts','as'=>'ViewProducts']);
Route::get('/editProduct/{id}',['uses'=>'ProductsController@editProduct','as'=>'EditProduct']);
Route::post('/update-product',['uses'=>'ProductsController@StoreeditProduct','as'=>'StoreeditProduct']);
Route::get('/Delete-Product/{id}',['uses'=>'ProductsController@productDelete','as'=>'ProductDelete']);




});


/**Admin LogOut Route**/
Route::get('/logout', ['uses'=>'AdminController@logOut','as'=>'Admin-Logout']);
