<?php
//Pages
Route::get('/', ['as' =>'pages.index', 'uses' => 'PagesController@index']);
Route::get('cegunkrol', ['as' =>'pages.about', 'uses' => 'PagesController@about']);
Route::get('termekek', ['as' =>'pages.products', 'uses' => 'PagesController@products']);
Route::get('kapcsolat', ['as' =>'pages.contact', 'uses' => 'PagesController@contact']);

//Mail
Route::post('contact', ['as' => 'contact.mail', 'uses' => 'PagesController@sendEmailToSupport']);

//Auth
// Auth::routes();
// Route::get('/home', 'HomeController@index');
