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

// ~~~~~~~~~~~~~~~~~~~~~~~~~pass var with URL
// Route::get('/users/{id}', function($id) {
//     return 'Well, hello there, '.$id;
// });


Route::get('/', 'PagesController@index');
// Route::get('/about', 'PagesController@about');


Route::resource('task', 'TaskController');

Route::auth();

Route::get('/home', 'HomeController@index');
