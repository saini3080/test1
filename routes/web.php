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
Route::get('admin/dashboard', 'admin\adminController@dashboard');


Route::match(['get','post'],'admin/users/create', 'admin\usersController@create');

// adminagents
Route::get('admin/adminagents', 'admin\usersController@AdminAgentList');
Route::match(['get','post'],'admin/adminagents/{user}/update', 'admin\usersController@adminagentsupdate');
// Route::get('admin/adminagents/{user}', 'admin\usersController@adminagentsshow');
Route::get('admin/adminagents/{user}/delete', 'admin\usersController@adminagentsdelete');

// simpleagents
Route::get('admin/simpleagents', 'admin\usersController@AgentList');
Route::match(['get','post'],'admin/simpleagents/{user}/update', 'admin\usersController@simpleagentsupdate');
// Route::get('admin/simpleagents/{user}', 'admin\usersController@simpleagentsshow');
Route::get('admin/simpleagents/{user}/delete', 'admin\usersController@simpleagentsdelete');

// customers
Route::get('admin/customers', 'admin\usersController@CustomerList');
Route::match(['get','post'],'admin/customers/{user}/update', 'admin\usersController@customersupdate');
// Route::get('admin/customers/{user}', 'admin\usersController@customersshow');
Route::get('admin/customers/{user}/delete', 'admin\usersController@customersdelete');


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

/*** Pages ***/
Route::match(['get','post'],'/admin/add-page','PagesController@addPages');
Route::match(['get','post'],'/admin/edit-page/{id}','PagesController@editPages');
Route::match(['get','post'],'/admin/delete-page/{id}','PagesController@deletePages');
Route::get('/admin/view-page','PagesController@viewPages');

/*** Setting ***/
Route::match(['get','post'],'/admin/edit-profile','SettingController@editAdminprofile');


