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

Route::get('/', 'MainController@GetAllRealty');
Route::get('/mainpage', 'MainController@GetAllRealty');

Auth::routes();

Route::get('home', 'HomeController@index');
Route::get('profile', 'HomeController@profile');

Route::get('bossMenu', 'BossController@GetMenu');
Route::get('bossEmploees', 'BossController@GetEmployees');
Route::get('bossDeals', 'BossController@GetDeals');
Route::get('bossRate', 'BossController@GetRating');

Route::get('clientDeals', 'ClientController@GetDeals');
Route::get('clientProfile', 'ClientController@GetProfile');
Route::get('clientRealties', 'ClientController@GetRealties');
Route::get('clientAddForm', 'ClientController@GetAddFormInfo');
Route::post('clientAdd', 'ClientController@AddRealty');
Route::get('clientMenu', 'ClientController@GetMenu');

Route::get('realtorDeals', 'RealtorController@GetDeals');
Route::get('realtorClients', 'RealtorController@GetClients');
Route::get('realtorAddForm', 'RealtorController@GetAddFormInfo');
Route::post('realtorAdd', 'RealtorController@AddDeal');
Route::get('realtorMenu', 'RealtorController@GetMenu');
