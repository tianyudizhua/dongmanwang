<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get("/",function(){
   return response()->view("main");
});

Route::get("/m1",function(){
   return response()->view("content/m1");
});

Route::get("/main2",function(){
   return response()->view("main2");
});

Route::get("/play","PlayController@getPlay");
Route::get("/play/video","PlayController@getMp4");

Route::get("/main","MainController@getMain");

Route::get("/admin","AdminController@admin");
Route::post("/admin/login","AdminController@login");
Route::group(["middleware"=>"admin"],function(){
    Route::get("/admin/home","AdminController@getHome");
    Route::post("/admin/home/addCategery","AdminController@addCategery");
    Route::post("/admin/home/deleteCategery","AdminController@deleteCategery");
    Route::post("/admin/home/deleteCategerys","AdminController@deleteCategerys");
    Route::post("/admin/home/renameCategery","AdminController@renameCategery");
    Route::post("/admin/home/uploadPoster","AdminController@uploadPoster");
    Route::post("/admin/home/uploadVideo","AdminController@uploadVideo");

    Route::get("/admin/videoManage","AdminController@getVideoManage");
    Route::post("/admin/videoManage/deleteV","AdminController@deleteV");
    Route::post("/admin/videoManage/deleteVs","AdminController@deleteVs");
});


