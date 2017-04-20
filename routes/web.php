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

        Route::get("prices", "PricesController@index");

        Route::get("printers", "PrinterController@index");
        Route::get("printers/new", "PrinterController@create");
        Route::get("printers/{id}", "PrinterController@edit");
        Route::post("printers/new", "PrinterController@store");
        Route::post("printers/{id}", "PrinterController@update");

        Route::get("scanners", "ScannerController@index");
        Route::get("scanners/new", "ScannerController@create");
        Route::get("scanners/{id}", "ScannerController@edit");
        Route::post("scanners/new", "ScannerController@store");
        Route::post("scanners/{id}", "ScannerController@update");

        Route::get("carvers", "CarverController@index");
        Route::get("carvers/new", "CarverController@create");
        Route::get("carvers/{id}", "CarverController@edit");
        Route::post("carvers/new", "CarverController@store");
        Route::post("carvers/{id}", "CarverController@update");

        Route::get("brands", "BrandsController@index");
        Route::get("brands/new", "BrandsController@create");
        Route::get("brands/{id}", "BrandsController@edit");
        Route::post("brands/new", "BrandsController@store");
        Route::post("brands/{id}", "BrandsController@update");

        Route::get("stores", "StoresController@index");
        Route::get("stores/new", "StoresController@create");
        Route::get("stores/{id}", "StoresController@edit");
        Route::post("stores/new", "StoresController@store");
        Route::post("stores/{id}", "StoresController@update");
    });
    /**
     * Login form submission
     */
    Route::any("/login", "AdminController@login");
});
Route::any("/", "AdminController@login");
