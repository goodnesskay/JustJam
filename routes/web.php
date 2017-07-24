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

Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Auth::routes();

    //Dashboard
    Route::get('/home',[
        'uses'=>'HomeController@index',
        'as'=>'home',
        'middleware'=>'auth'
    ]);

    /**
     *  Profile
    */
    Route::get('edit-profile/{id}/{name}',[
        'uses'=>'UserController@edit',
        'as'=>'edit-profile',
        'middleware'=>'auth'
    ]);

    Route::post('edit-profile/{id}/{name}',[
        'uses'=>'UserController@update',
        'as'=>'edit-profile',
        'middleware'=>'auth'
    ]);

    /**
     *  Password
     */
    Route::get('reset-password/{id}/{name}',[
        'uses'=>'UserController@passwordView',
        'as'=>'reset-password',
        'middleware'=>'auth'
    ]);

    Route::post('reset-password/{id}/{name}',[
        'uses'=>'UserController@changePassword',
        'as'=>'reset-password',
        'middleware'=>'auth'
    ]);

    /**
     *  Specialty
     */
    Route::get('my-specialties',[
        'uses'=>'SpecialtyController@show',
        'as'=>'my-specialties',
        'middleware'=>'auth'
    ]);

    /**
     *  Performances
     */
    Route::get('my-performances',[
        'uses'=>'PerformanceController@show',
        'as'=>'my-performances',
        'middleware'=>'auth'
    ]);

    /**
     *  Search
     */
    Route::get('find-music-pal',[
        'uses'=>'SearchController@searchView',
        'as'=>'find-music-pal',
        'middleware'=>'auth'
    ]);

});


