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

Route::get('/contact','ContactController@ContactJunyi');


// Route::get('/jobs','JobsController@recruitment');
// Route::get('/jobs/{job_ID}','JobsController@recruitmentItem');

Route::get('/news','NewsController@NewsList');
Route::get('/news?ID={Page_ID}','NewsController@JunyiNews');

Route::group(['prefix' => 'jobs'], function(){

	Route::get('/','JobsController@recruitment');

	Route::get('/{job_ID}','JobsController@recruitmentItem');
});