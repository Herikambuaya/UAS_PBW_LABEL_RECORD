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
Route::group(['middleware' => ['guest']], function () {
    Route::get("/", "PageController@login")->name('login');
    Route::post("/login", "AuthController@ceklogin");
});

Route::group(['middleware' => ['auth']], function () {
    Route::get("/logout", "AuthController@ceklogout");
    Route::get("/user", "PageController@edituser");
    Route::post("/updateuser", "PageController@updateuser");
    Route::get("/home", "PageController@home")->middleware('auth');
    Route::get('/masterdata', 'PageController@masterdata')->middleware('auth');
    Route::get('/masterdata/form-add', 'PageController@addlabelrecord');
    Route::post('/save', 'PageController@savelabelrecord');
    Route::get('/about', 'PageController@about');
    Route::get('/faq', 'PageController@faq');
    Route::get("/form-edit/{id}", "PageController@editlabelRecord");
    Route::put('update/{id}',"PageController@updatelabelRecord" );
    Route::get('delete/{id}',"PageController@deletelabelRecord" );
});


