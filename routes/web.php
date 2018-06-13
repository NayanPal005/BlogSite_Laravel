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
Route::post('/save-blog','AdminController@save_blog');
Route::get('/manage-blog','SuperAdminController@manage_blog');
Route::get('/delete-blog/{id}','SuperAdminController@delete_blog');
Route::get('/unpublish-blog/{id}','SuperAdminController@unpublish_blog');
Route::get('/publish-blog/{id}','SuperAdminController@publish_blog');
Route::get('/harddelete-blog/{id}','SuperAdminController@harddelete_blog');
Route::get('/edit-blog/{id}','SuperAdminController@edit_blog');
Route::post('/update-blog','SuperAdminController@update_blog');





Route::get('/add-category','AdminController@add_category');
Route::get('/manage-category','SuperAdminController@manage_category');
Route::post('/save-category','AdminController@save_category');
Route::get('/unpublish-category/{id}','SuperAdminController@unpublish_category');
Route::get('/publish-category/{id}','SuperAdminController@publish_category');
Route::get('/delete-category/{id}','SuperAdminController@delete_category');
Route::get('/hardDelete-category/{id}','SuperAdminController@hardDelete_category');
Route::get('/edit-category/{id}','SuperAdminController@edit_category');
Route::post('/edited-category','SuperAdminController@edited_category');
