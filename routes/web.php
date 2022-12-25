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

Route::get('/', 'MainController@index')->name('main.index');
Route::get('/category/{category_id}', 'LotController@getLotsByCategory');
Route::get('/lot/{lot_id}', 'LotController@getLotById');
Route::get('/lot/remove/{lot_id}', 'LotController@removeLot')->name('lot.getLotById');
Route::get('/lot/edit/{lot_id}', 'LotController@editLot')->name('lot.editLot');
Route::post('/lot/lot_updated/{lot_id}', 'LotController@updateLot')->name('layouts.lot-saved');


