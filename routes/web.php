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

Route::get('/','WellcomeController@index')->name('welcome') ;/* function () {
    return view('welcome');
}); */

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/adminHome', 'AdminControler@index')->name('adminHome');

Route::post('/addVideo', 'AdminControler@addVideo')->name('addVideo');
Route::get('/addVideo', 'AdminControler@addVideo')->name('addVideo');


Route::post('/searchVideo', 'AdminControler@searchVideo')->name('searchVideo');
Route::get('/searchVideo', 'AdminControler@searchVideo')->name('searchVideo');\

Route::get('/displayPlayer/youtube_id/{youtube_id}', 'PlayerController@displayPlayer')->name('displayPlayer');
