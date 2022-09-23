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

   Route::get('/persons', ['uses' => 'PersonsController@index', 'as' => 'admin.persons']);
   Route::get('/persons/create', ['uses' => 'PersonsController@create', 'as' => 'admin.persons.create']);
   Route::post('/persons', ['uses' => 'PersonsController@store', 'as' => 'admin.persons.store']);
   Route::get('/persons/{personById}', ['uses' => 'PersonsController@show', 'as' => 'admin.persons.show']);
   Route::get('/persons/{personById}/edit', ['uses' => 'PersonsController@edit', 'as' => 'admin.persons.edit']);
   Route::post('/persons/{personById}/update', ['uses' => 'PersonsController@update', 'as' => 'admin.persons.update']);
   Route::get('/persons/{personById}/delete', ['uses' => 'PersonsController@delete', 'as' => 'admin.persons.delete']);

   Route::get('/requests', ['uses' => 'RequestsController@index', 'as' => 'admin.requests']);
   Route::get('/requests/create', ['uses' => 'RequestsController@create', 'as' => 'admin.requests.create']);
   Route::post('/requests', ['uses' => 'RequestsController@store', 'as' => 'admin.requests.store']);
   Route::get('/requests/{requestById}', ['uses' => 'RequestsController@show', 'as' => 'admin.requests.show']);
   Route::get('/requests/{requestById}/edit', ['uses' => 'RequestsController@edit', 'as' => 'admin.requests.edit']);
   Route::post('/requests/{requestById}/update', ['uses' => 'RequestsController@update', 'as' => 'admin.requests.update']);
   Route::get('/requests/{requestById}/delete', ['uses' => 'RequestsController@delete', 'as' => 'admin.requests.delete']);
});

Route::get('/request', 'RequestController@index');
Route::post('/request/create', ['uses' => 'RequestController@create', 'as' => 'request.create']);

Route::get('person/info/{personById}', 'PersonController@info');

Route::get('{person}', function($person) {
    return (App::make('App\Http\Controllers\PersonController'))->callAction('show', [$person]);
})->where(['login' => '[a-zA-Z0-9]+']);