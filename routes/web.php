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

Route::get('/', function () {
    return "hello from home";
});

Route::get('/about', function () {
    return "hello from teh other side";
});

//belajar route parameter - untuk custom page berdasarkan routenya
//? untuk default function
Route::get('/profile/{username?}', function ($username = "anonymous") {
    return "This is profile page for user:".$username;
});

Route::get('/profile/{username}/comment/{id}', function ($username,$id) {
    return "comment ID: ".$id. " for user: ".$username;
});
