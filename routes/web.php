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

Route::get ('/'   , 'indexController@index')->name('index'); 
// Route::POST('/'   , 'indexController@index')->name('index'); 

Route::get ('/hotels'   , 'hotelsController@index')->name('index.hotels'); 
Route::get ('/hotels/{Hotel}/{id}/'   , 'hotelsController@Hotel')->name('hotel'); 




Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});