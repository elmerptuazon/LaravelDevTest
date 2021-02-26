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

Route::get('/country', 'Modules\CountryStateCityController@getCountry')->name('getcountry');
Route::get('/state/{country_id}', 'Modules\CountryStateCityController@getState')->name('getState');
Route::get('/city/{state_id}', 'Modules\CountryStateCityController@getCity')->name('getCity');

Route::middleware(['auth'])->prefix('business')->group(function () {

    Route::get('/home', 'HomeController@index')->name('home');


    Route::resources([
        'customer' => 'Modules\CustomerController',
        'supplier' => 'Modules\SupplierController',
        'user' => 'Modules\UserController'
    ]);
    
    Route::prefix('form')->group(function() {
        Route::prefix('customer')->group(function() {
            Route::get('/add', 'Modules\CustomerController@renderAddCustomerForm')->name('customer_add');
        });

        Route::prefix('supplier')->group(function() {
            Route::get('/add', 'Modules\SupplierController@renderAddSupplierForm')->name('supplier_add');
        });
        
    });
  
});
