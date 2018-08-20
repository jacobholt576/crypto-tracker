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

Route::get('/page-2', 'Page2Controller')->name('page-2');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/market', 'MarketController@getMarket')->name('market');
Route::get('/create-portfolio', 'CreatePortfolioController@form');
Route::get('/dashboard/{id}', 'Dashboard@getDashboard')->name('dashboard');
//Route::get('/dashboard/{id}/trades', 'Dashboard@getTrades')->name('trades');
Route::get('/dashboard/{id}/trades/add-trade', 'AddTrade@form')->name('add-trade');

Auth::routes();

Route::post('/createportfolio', 'CreatePortfolioController@createPortfolio')->name('portfolio.create');
Route::post('/addtrade', 'AddTrade@addTrade')->name('add.trade');

Route::get('/home', 'HomeController@index')->name('home');
