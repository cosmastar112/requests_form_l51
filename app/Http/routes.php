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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'HomeController@index');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {
   Route::get('/', 'AdminController@index');
   Route::get('/persons', ['uses' => 'PersonsController@index', 'as' => 'admin_persons']);
   Route::get('/requests', ['uses' => 'RequestsController@index', 'as' => 'admin_requests']);
});

Route::get('/request', 'RequestController@index');
Route::post('/request/create', ['uses' => 'RequestController@create', 'as' => 'request.create']);

Route::get('person/info/{personById}', 'PersonController@info');

Route::get('{person}', function($person) {
    return (App::make('App\Http\Controllers\PersonController'))->callAction('show', [$person]);
})->where(['login' => '[a-zA-Z0-9]+']);