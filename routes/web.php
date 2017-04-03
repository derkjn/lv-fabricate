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

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web']], function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get("/", "AdminController@index");
        Route::get("/logout", "AdminController@logout");
    });
    /**
     * Login form submission
     */
    Route::any("/login", "AdminController@login");
});
