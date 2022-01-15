<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','ArticleController@index')->name('articles.index');

Route::resource('articles', 'ArticleController')->except('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('hello/',function()use ($html){
//     return $html;
// });

// Route::get('hello',function(){
//     return '<html><body><h1>hello</h1></body></html><p>This is sample page</p>';
// });