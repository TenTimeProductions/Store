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


Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
    	'auth' => 'Auth\AuthController',
    	'password' => 'Auth\PasswordController',
    ]);



/***************************************************************************************
 *
 *      Páginas Basicas
 *
 ***************************************************************************************/

Route::get('/', 'InviteController@invite');
//Route::get('home', 'InviteController@invite');

Route::get('inv/{username}', 'InviteController@invite'); //TODO adicionar tbm uma key para saber de quem é o convite

//Route::get('login', 'InviteController@invite');
//Route::get('logout', 'InviteController@invite');
//Route::get('register', 'InviteController@invite');

//Route::get('faq', 'InviteController@invite');
//Route::get('about', 'InviteController@invite');
//Route::get('about/fm', 'InviteController@invite');
//Route::get('contact', 'InviteController@invite');
//Route::get('terms', 'InviteController@invite');
//Route::get('privacy', 'InviteController@invite');

//Route::get('newsletter', 'InviteController@invite');
//Route::get('promo', 'InviteController@invite');

/***************************************************************************************
 *
 *      Store
 *
 ***************************************************************************************/


//Route::get('store/home', 'ProductController@index');
//Route::get('store/detail/{id}/{name}', 'ProductController@index');
//Route::get('store/cart', 'ProductController@index');
//Route::get('store/checkout', 'ProductController@index');
//Route::get('store/item', 'ProductController@index');
//Route::get('store/item', 'ProductController@index');
//Route::get('store/search', 'ProductController@index');
//Route::get('store/search/{word}', 'ProductController@index');

Route::get('store/item', 'ProductController@index');

/***************************************************************************************
 *
 *      DashBoard
 *
 ***************************************************************************************/

Route::get('/dashboard', 'DashboardController@index');                       //Pagina Inicial

//Route::get('dashboard/login', 'DashboardController@index');               //LogIn
//Route::get('dashboard/logout', 'DashboardController@index');              //LogOut

Route::get('/dashboard/account', 'DashboardController@account');             //Conta
Route::get('/dashboard/account/edit', 'DashboardController@account_edit');          //Editar Conta
//Route::get('dashboard/account/share', 'DashboardController@index');       //Partilhar conta de Vendedor

//Route::get('dashboard/shop/going', 'DashboardController@index');          //Compras a decorrer
//Route::get('dashboard/shop/complete', 'DashboardController@index');       //Compras completas
//Route::get('dashboard/shop/standby', 'DashboardController@index');        //Compras pendentes

Route::get('/dashboard/team', 'DashboardController@team');                   //Equipa

//Route::get('dashboard/email', 'DashboardController@index');               //Email
//Route::get('dashboard/email/new', 'DashboardController@index');           //Novo Email

//Route::get('dashboard/events', 'DashboardController@index');              //Eventos

/*
|--------------------------------------------------------------------------
| Only for Admin
|--------------------------------------------------------------------------
|
| Produtos
| Categorias
| Utilizadores
| Promoções
|
*/

//Route::get('dashboard/admin/item', 'DashboardController@account');                  //Conta
//Route::get('dashboard/admin/item/new', 'DashboardController@index');                //Compras a decorrer
//Route::get('dashboard/admin/item/edit/{id}', 'DashboardController@index');          //Editar Conta
//Route::get('dashboard/admin/item/delete/{id}', 'DashboardController@index');        //Partilhar conta de Vendedor

//Route::get('dashboard/admin/category', 'DashboardController@index');                //Compras completas
//Route::get('dashboard/admin/category/new', 'DashboardController@index');            //Compras completas
//Route::get('dashboard/admin/category/edit/{id}', 'DashboardController@index');      //Compras completas
//Route::get('dashboard/admin/category/delete/{id}', 'DashboardController@index');    //Compras completas

//Route::get('dashboard/admin/user', 'DashboardController@index');                    //Compras completas
//Route::get('dashboard/admin/user/new', 'DashboardController@index');                //Compras completas
//Route::get('dashboard/admin/user/edit/{id}', 'DashboardController@index');          //Compras completas
//Route::get('dashboard/admin/user/delete/{id}', 'DashboardController@index');        //Compras completas

//Route::get('dashboard/admin/promo', 'DashboardController@index');                   //Compras completas
//Route::get('dashboard/admin/promo/new', 'DashboardController@index');               //Compras completas
//Route::get('dashboard/admin/promo/edit/{id}', 'DashboardController@index');         //Compras completas
//Route::get('dashboard/admin/promo/delete/{id}', 'DashboardController@index');       //Compras completas