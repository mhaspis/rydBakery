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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/ingredients', 'IngredientController@list')->name('ingredient.list');
Route::get('/ingredients/crear', 'IngredientController@create')->name('ingredient.create');
Route::get('/ingredients/editar/{id}', 'IngredientController@edit')->name('ingredient.edit');
Route::patch('/ingredients/editar/{id}', 'IngredientController@update')->name('ingredient.update');
Route::post('/ingredients/store', 'IngredientController@store')->name('ingredient.store');
