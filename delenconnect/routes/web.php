<?php

Auth::routes();

Route::get('/', 'HomeController@index')
    ->middleware('auth')
    ->name('delen-connect-home');;

Route::get('/overzicht-gebeurtenissen', 'HomeController@index')
    ->middleware('auth')
    ->name('delen-connect-gebeurtenissen');

Route::get('/{?customer}/mijn-tijdlijn', 'HomeController@timelineCustomer')
    ->middleware('auth')
    ->name('tijdlijn-voor-klant');

Route::get('/{?account-manager}/mijn-klanten', 'HomeController@customers')
    ->middleware('auth')
    ->name('tijdlijn-voor-account-manager');
