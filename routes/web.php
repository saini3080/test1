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

Route::get('admin', 'admin\adminController@dashboard')->middleware('is_admin')->name('admin');

Route::get('/admin/home', 'admin\adminController@dashboard');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*** Subsciprtion ***/
Route::match(['get','post'],'/admin/add-subscription','subscriptionController@addSubscription');
Route::match(['get','post'],'/admin/edit-subscription/{id}','subscriptionController@editSubscription');
Route::match(['get','post'],'/admin/delete-subscription/{id}','subscriptionController@deleteSubscription');
Route::get('/admin/view-subscription','subscriptionController@viewSubscription');


