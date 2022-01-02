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

Route::get('/', [
    'uses'      => 'App\Http\Controllers\MollaController@index',
    'as'        => '/'
]);

Route::get('/about-us', [
    'uses'      => 'App\Http\Controllers\MollaController@about',
    'as'        => 'about'
]);

Route::get('/contact-us', [
    'uses'      => 'App\Http\Controllers\MollaController@contact',
    'as'        => 'contact'
]);
Route::get('/category-product', [
    'uses'      => 'App\Http\Controllers\MollaController@categoryProduct',
    'as'        => 'category-product'
]);
Route::get('/product-detail', [
    'uses'      => 'App\Http\Controllers\MollaController@productDetail',
    'as'        => 'product-detail'
]);

Route::get('/dashboard', [
    'uses'      => 'App\Http\Controllers\DashboardController@index',
    'as'        => 'dashboard',
    'middleware' => ['auth:sanctum', 'verified']
]);

Route::get('/add-category', [
    'uses'      => 'App\Http\Controllers\CategoryController@index',
    'as'        => 'category.add',
    'middleware' => ['auth:sanctum', 'verified']
]);

Route::get('/manage-category', [
    'uses'      => 'App\Http\Controllers\CategoryController@manage',
    'as'        => 'category.manage',
    'middleware' => ['auth:sanctum', 'verified']
]);
Route::post('/new-category', [
    'uses'      => 'App\Http\Controllers\CategoryController@create',
    'as'        => 'manage.new',
    'middleware' => ['auth:sanctum', 'verified']
]);

Route::get('/edit-category/{id}', [
    'uses'      => 'App\Http\Controllers\CategoryController@edit',
    'as'        => 'category.edit',
    'middleware' => ['auth:sanctum', 'verified']
]);
Route::post('/update-category/{id}', [
    'uses'      => 'App\Http\Controllers\CategoryController@update',
    'as'        => 'category.update',
    'middleware' => ['auth:sanctum', 'verified']
]);
Route::post('/delete-category/{id}', [
    'uses'      => 'App\Http\Controllers\CategoryController@delete',
    'as'        => 'category.delete',
    'middleware' => ['auth:sanctum', 'verified']
]);







