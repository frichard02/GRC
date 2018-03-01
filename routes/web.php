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
    return view('vendor/adminlte/login');
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/tableau-bord', 'TableauBordController@index')->middleware('auth');

//formulaire test
Route::get('/form-test', 'FormulaireTestController@index')->middleware('auth');
Route::get('/form-test', 'FormulaireTestController@create')->middleware('auth');
Route::post('/form-test', 'FormulaireTestController@store')->middleware('auth');
Route::post('/form-test/update', 'FormulaireTestController@update')->middleware('auth')->name('form-test.update');
Route::post('/form-test/delete', 'FormulaireTestController@destroy')->middleware('auth')->name('form-test.delete');
//article
Route::get('/article', 'ArticleController@index')->middleware('auth')->name('article');
Route::post('/article', 'ArticleController@store')->middleware('auth')->name('article');
Route::get('/article{id}', 'ArticleController@destroy')->middleware('auth')->name('article/delete');
Route::get('/article/test', 'ArticleController@test')->middleware('auth')->name('article/test');

//traduction route
Route::name('language')->get('language/{lang}', 'HomeController@language');
