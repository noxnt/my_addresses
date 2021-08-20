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

// Main
Route::get('/', function () {
    return redirect('addresses');
});

// Addresses
Route::group(['namespace' => 'Address', 'prefix' => 'addresses'], function () {
    route::get('/', 'IndexController')->name('addresses.index');
    route::post('/', 'StoreController')->name('addresses.store');
    route::get('/{address}/edit', 'EditController')->name('addresses.edit');
    route::patch('/{address}', 'UpdateController')->name('addresses.update');
    route::delete('/{address}', 'DestroyController')->name('addresses.destroy');
});
