<?php

Auth::routes();

Route::get('/', 'HomeController@index')
    ->middleware('auth')
    ->name('home');

//OVERVIEW
Route::get('/overview', 'GeneralController@index')
    ->middleware('auth')
    ->name('overview');

//TIMELINE CLIENT
    Route::get('/my-timeline', 'GeneralController@timelineCustomer')
    ->middleware('auth')
    ->name('timeline-client');

//ALLE CLIENTEN GEKOPPELD AAN ACC MNGR
Route::get('/{account-manager?}/portfolio', 'GeneralController@portfolioForClients')
    ->middleware('auth')
    ->name('account-manager-portfolio-clients');

//CLIENT IN PORTFOLIO VAN MNGR INFO
Route::get('/clients', function (){
   return view("client_overview");
});
