<?php

Route::get ('/'   , 'indexController@index')->name('index'); 

Route::get ('/hotels/{City?}'   , 'hotelsController@index')->name('index.hotels'); 
Route::get ('/hotel/{Hotel}/'   , 'hotelsController@Hotel')->name('hotel'); 
Route::POST('/hotels/reserve/'   , 'hotelsController@reserve')->name('post.hotels.reserve'); 
Route::get ('/hotels/reserve/confirmation'   , 'hotelsController@confirmation')->name('hotels.confirmation'); 




Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('cache:clear');
    return '<h1>Cache facade value cleared</h1>';
});