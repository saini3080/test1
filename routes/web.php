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

Route::get('admin', 'admin\adminController@dashboard');

Route::match(['get','post'],'admin/login', 'admin\adminController@login')->middleware('guest');

Route::get('admin/logout', 'admin\adminController@logout');
Route::get('admin/home', 'admin\adminController@dashboard');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*** Subsciprtion ***/
Route::match(['get','post'],'/admin/add-subscription','subscriptionController@addSubscription');
Route::match(['get','post'],'/admin/edit-subscription/{id}','subscriptionController@editSubscription');
Route::match(['get','post'],'/admin/delete-subscription/{id}','subscriptionController@deleteSubscription');
Route::get('/admin/view-subscription','subscriptionController@viewSubscription');


/*** FAQ ***/
Route::match(['get','post'],'/admin/add-faq','FaqController@addFaq');
Route::match(['get','post'],'/admin/edit-faq/{id}','FaqController@editFaq');
Route::match(['get','post'],'/admin/delete-faq/{id}','FaqController@deleteFaq');
Route::get('/admin/view-faq','FaqController@viewFaq');


