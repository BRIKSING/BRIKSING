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
Route::get('/mainpage', 'MainController@GetAllRealty');

Auth::routes();

Route::get('home', 'HomeController@index');
Route::get('profile', 'HomeController@profile');

Route::get('bossMenu', 'BossController@GetMenu');
Route::get('bossEmploees', 'BossController@GetEmployees');
Route::get('bossDeals', 'BossController@GetDeals');
Route::get('bossRate', 'BossController@GetRating');
