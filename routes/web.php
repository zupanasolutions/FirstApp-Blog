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

/*
Route::get('/hello', function () {
    //return view('welcome');
    return '<h2>hello world</h2>';
});


Route::get('/users/{id}/{name}', function($name, $id){
    return 'This is user '.$name. ' with id '.$id;
    
    });
*/


Route::get('/index', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/services', 'PagesController@services');

Route::resource('/posts', 'PostsController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
