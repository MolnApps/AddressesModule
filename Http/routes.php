<?php

Route::group(['middleware' => 'web', 'prefix' => 'addresses', 'namespace' => 'Modules\Addresses\Http\Controllers'], function()
{
    Route::get('/', 'AddressesController@index');
});
