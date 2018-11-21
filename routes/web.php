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
    return view('welcome');
});

Route::get('/formulir/sknikah', function () {
    return view('/formulir/sknikah');
});
Route::get('/formulir/sknikahistri', function () {
    return view('/formulir/sknikahistri');
});

Route::get('/formulir/skorangtua','SuamiController@getOrtuSuami');
Route::get('/formulir/skorangtuaistri','SuamiController@getOrtuIstri');

Route::get('/formulir/skkematian', function () {
    return view('/formulir/skkematian');
});
Route::get('/formulir/spkehendaknikah','SuamiController@getKehendakNikah');
Route::get('/formulir/cetak','SuamiController@cetak');
Route::post('/formulir/sknikahistri', 'SuamiController@store');
Route::post('/formulir/skorangtua', 'SuamiController@storeIstri');
Route::post('/formulir/skorangtuaistri', 'SuamiController@storeOrtuSuami');
Route::post('/formulir/spkehendaknikah', 'SuamiController@storeOrtuIstri');
Route::post('/formulir/cetak', 'SuamiController@storeKehendakNikah');