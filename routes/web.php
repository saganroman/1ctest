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
    return view('app');
});

Route::get('/countries','AdminController@getCountries');
Route::get('/deleteCountry/{id}','AdminController@deleteCountry');
Route::get('/deleteCity/{id}','AdminController@deleteCity');
Route::get('/addCountry','AdminController@addCountry');
Route::get('/addCity/{id}','AdminController@addCity');
Route::get('/storeCountry','AdminController@storeCountry');
Route::get('/storeCity','AdminController@storeCity');
Route::get('/editCountry/{id}','AdminController@editCountry');
Route::get('/editCity/{id}','AdminController@editCity');
Route::get('/updateCountry','AdminController@updateCountry');
Route::get('/updateCity','AdminController@updateCity');
Route::get('/showCountry/{id}','AdminController@showCountry');

Route::get('/contacts','AdminController@contacts');
Route::get('/storeContact','AdminController@storeContact');
Route::get('/deleteContact/{id}','AdminController@deleteContact');

Route::get('/addresses','AdminController@addresses');
Route::get('/storeAddress','AdminController@storeAddress');
Route::get('/deleteAddress/{id}','AdminController@deleteAddress');


Route::get('/contactors','AdminController@contactors');
Route::get('/contactor/{id}','AdminController@contactor');
Route::get('/getEContact/{id}','AdminController@getEContact');


/*Route::get('/test','AdminController@test');
DB::listen(function($query) {
    var_dump($query->sql, $query->bindings);
});*/
/*DB::listen(function($sql, $bindings, $time) {
    var_dump($sql);
    var_dump($bindings);
    var_dump($time);
});*/