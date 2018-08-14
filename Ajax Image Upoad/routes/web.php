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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user', 'HomeController@showList')->name('showuser');
Route::get('/userlist/{id}', 'HomeController@user')->name('user');
Route::post('/userUpdate/{id}', 'HomeController@saveData')->name('saveData');
Route::get('image','ImageController@index');
Route::post('imageUpload','ImageController@fileUpload');


Route::get('inviteuser','InviteUserController@index');
Route::post('inviteuser/create','InviteUserController@InviteCreate');
Route::get('chk','ChkController@index');

Route::get('getUser','ChkController@getUser');
Route::get('getId/{id}','ChkController@getId');

/*
 Bootstrap Modal
 */
Route::get('ModalReg','ModalController@index');
Route::post('save','ModalController@saveForm');



