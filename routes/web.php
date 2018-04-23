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

Route::get('/','HomeController@HomePage');

Route::get('/about','AboutController@AboutJunyi');

Route::get('/BusinessItems','BusinessController@JunyiBusiness');

Route::get('/performance','PerformanceController@Performance');

Route::group(['prefix' => 'contact'], function (){

	Route::get('/','ContactController@ContactJunyi');

	// Route::post('/insert','ContactController@insertdata');
});

Route::get('/news','NewsController@NewsList');
Route::get('/news?ID={Page_ID}','NewsController@JunyiNews');

Route::group(['prefix' => 'jobs'], function(){

	Route::get('/','JobsController@recruitment');

	Route::get('/{job_ID}','JobsController@recruitmentItem');

	Route::get('/test/{ID}','JobsController@TestItem');
});

Route::get('/file','FilesController@uploadForm')->name('upload.file');

Route::post('/file','FilesController@storeFile');