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
/**Admin Login Route**/
Route::match(['get','post'],'/dashboard','AdminController@dashboard')->name('admin-dashboard');

                            /**Admin Login Route**/
Route::get('/add_product',['uses'=>'ProductsController@getProductForm','as'=>'add_product_form']);
Route::post('/add_product',['uses'=>'ProductsController@storeProductFormData','as'=>'Store_add_form_data']);




});


/**Admin LogOut Route**/
Route::get('/logout', ['uses'=>'AdminController@logOut','as'=>'Admin-Logout']);
