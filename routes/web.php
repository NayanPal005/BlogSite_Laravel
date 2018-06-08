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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

\Illuminate\Support\Facades\Schema::defaultStringLength(191);
Route::get('/','WelcomeController@index'); //home page of this project

Route::get('/portfolio','WelcomeController@portfolio'); //portfolio page of this project
Route::get('/services','WelcomeController@services'); //Service page of this project
Route::get('/contact','WelcomeController@contact'); //Contact page of this project
/*================Admin Routes==============================*/
Route::get('/admin-login','AdminController@admin_login');
Route::get('/admin-logout','SuperAdminController@admin_logout');
Route::get('/admin-dashboard','SuperAdminController@index');
Route::post('/admin-login-check','AdminController@admin_login_check');

/*  admin panel routes start  */
Route::get('/add-blog','AdminController@add_blog');
Route::get('/manage-blog','AdminController@manage_blog');
Route::get('/add-category','AdminController@add_category');
Route::post('/save-category','AdminController@save_category');