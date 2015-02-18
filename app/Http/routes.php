<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', 'DashboardController@index');
Route::get('account', 'DashboardController@account');
Route::get('account/edit', 'DashboardController@edit');
Route::get('contact', 'DashboardController@contact');

Route::get('inv/{username}', 'InviteController@invite'); //TODO adicionar tbm uma key para saber de quem é o convite


Route::get('item', 'ProductController@index');