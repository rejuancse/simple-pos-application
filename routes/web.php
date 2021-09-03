<?php

use Illuminate\Support\Facades\Route;
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
    return view('welcome');
});

Route::get('groups', 'App\Http\Controllers\UserGroupsController@index');
Route::get('users', 'App\Http\Controllers\UsersController@index');

Route::get('test', function () {
    return 'This is test message';
});

Route::get('about', 'App\Http\Controllers\HomeController@index');

Route::get('contact', 'App\Http\Controllers\ContactController@contact');
