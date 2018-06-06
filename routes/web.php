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
Route::get('/','WelcomeController@index'); //home page of this project

Route::get('/portfolio','WelcomeController@portfolio'); //portfolio page of this project
Route::get('/services','WelcomeController@services'); //Service page of this project
Route::get('/contact','WelcomeController@contact'); //Contact page of this project
Route::get('/admin-login','AdminController@admin_login');
Route::get('/admin-dashboard','AdminController@index');
/*  admin panel routes start  */
Route::get('/add-blog','AdminController@add_blog');
Route::get('/manage-blog','AdminController@manage_blog');