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


Auth::routes();


//==================================================================================
//========================= Route yang Dibuat Fornt End ============================
//==================================================================================


Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('admin')
    ->namespace('Admin')
    ->group(function () {

        Route::get('/userDemographic', 'UserDemographicController@index')
            ->name('userDemographic');

        Route::get('/categoryPurchase', 'CategoryPurchaseController@index')
            ->name('categoryPurchase');

        Route::get('/categoryPurchase-detail', 'CategoryPurchaseController@detail')
            ->name('categoryPurchase-detail');
    });
