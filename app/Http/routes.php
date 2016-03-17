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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/notice',['as'=>'noticeBoard','uses'=>'noticeController@noticeBoard']);
Route::get('/{id}/noticeDetails',['as'=>'noticeDetails','uses'=>'noticeController@noticeDetails']);

Route::get('/addNotice',['as'=>'addNotice','uses'=>'noticeController@addNotice']);
Route::post('/addNotice',['as'=>'storeNotice','uses'=>'noticeController@storeNotice']);
Route::get('/adminPage',['as'=>'adminPage','uses'=>'noticeController@adminNoticeBoard']);