<?php

Route::get ('/'   , 'indexController@index')->name('index'); 

Route::get ('/hotels/{City?}'   , 'hotelsController@index')->name('index.hotels'); 
Route::get ('/hotel/{Hotel}/'   , 'hotelsController@Hotel')->name('hotel'); 
Route::POST('/hotels/reserve/'   , 'hotelsController@reserve')->name('post.hotels.reserve'); 
Route::get ('/hotels/reserve/confirmation'   , 'hotelsController@confirmation')->name('hotels.confirmation'); 


Route::get ('/ecotourisms/{City?}'   , 'ecotourismsController@index')->name('index.ecotourisms'); 
Route::get ('/ecotourism/{Hotel}/'   , 'ecotourismsController@Hotel')->name('hotel.ecotourisms'); 

Route::get ('/trains'   , 'trainController@index')->name('index.train'); 
Route::POST('/trains/reserve/'   , 'trainController@reserve')->name('post.trains.reserve'); 
Route::get ('/trains/reserve/confirmation'   , 'trainController@confirmation')->name('trains.confirmation'); 

Route::get ('/flight'   , 'flightController@index')->name('index.flight'); 
Route::POST('/flight/reserve/'   , 'flightController@reserve')->name('post.flight.reserve'); 
Route::get ('/flight/reserve/confirmation'   , 'flightController@confirmation')->name('flight.confirmation'); 

Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});