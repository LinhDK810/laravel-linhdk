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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('form-login', 'LoginController@index')->name('form.login');
Route::get('/',  function (){
    return view('welcome');
});
Route::post('post-login', 'UserController@create')->middleware('set.token','checkrole')->name('check.login');

Route::get('year', 'ValidateRuleCustomController@show');
//Route::post('year', 'ValidateRuleCustomController@validateCustom')->name('next');
Route::post('show', 'ValidateRuleCustomController@valid')->name('next');



Auth::routes(['register' => true]);

Route::get('/home', 'HomeController@index')->name('home');
