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

Route::get('/', array('as'=>'home','uses'=>'PagesController@home'));
Route::get('information', array('as'=>'info','uses'=>'PagesController@info'));
Route::post('search', array('before'=>'csrf','uses'=>'PagesController@search'));
Route::get('tourist', array('as'=>'tour','uses'=>'PagesController@tour'));
Route::post('tour', array('before'=>'csrf','uses'=>'PagesController@tourist'));
Route::get('institution', array('as'=>'inst','uses'=>'PagesController@inst'));
Route::post('inst', array('before'=>'csrf','uses'=>'PagesController@institution'));
Route::get('wholesale', array('as'=>'whole','uses'=>'PagesController@whole'));
Route::post('whole', array('before'=>'csrf','uses'=>'PagesController@wholesale'));
Route::get('pincode', array('as'=>'pin','uses'=>'PagesController@pin'));
Route::post('pin', array('before'=>'csrf','uses'=>'PagesController@pincode'));
Route::get('railway', array('as'=>'rail','uses'=>'PagesController@rail'));
Route::post('rail', array('before'=>'csrf','uses'=>'PagesController@search_rail'));
Route::get('login',array('as'=>'rail','uses'=>'PagesController@login'));
Route::post('log', array('before'=>'csrf','uses'=>'PagesController@log'));
Route::get('logout',array('as'=>'logout','uses'=>'PagesController@logout'));



Route::get('electricity', array('as'=>'electricity','uses'=>'VisionController@electricity'));
Route::get('water', array('as'=>'water','uses'=>'VisionController@water'));
Route::get('house', array('as'=>'house','uses'=>'VisionController@house'));
