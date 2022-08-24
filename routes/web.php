<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\WorkSubsectionController;
use App\Http\Controllers\FundingSourceController;
use Illuminate\Http\Request;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade'); 
	 Route::get('map', function () {return view('pages.maps');})->name('map');
	 Route::get('icons', function () {return view('pages.icons');})->name('icons'); 
	 Route::get('table-list', function () {return view('pages.tables');})->name('table');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

Route::get('/token', function () {
	return csrf_token(); 
});

Route::post('/department/insert', [DepartmentController::class, 'store']);
Route::get('/department/show', [DepartmentController::class, 'show']);
Route::post('/department/delete/{id}', [DepartmentController::class, 'destroy']);
Route::post('/department/update', [DepartmentController::class, 'update']);

Route::post('/WorkSubsection/insert', [WorkSubsectionController::class, 'store']);
Route::get('/WorkSubsection/show', [WorkSubsectionController::class, 'show']);
Route::post('/WorkSubsection/delete/{id}', [WorkSubsectionController::class, 'destroy']);
Route::post('/WorkSubsection/update', [WorkSubsectionController::class, 'update']);

Route::post('/FundingSource/insert', [FundingSourceController::class, 'store']);
Route::get('/FundingSource/show', [FundingSourceController::class, 'show']);
Route::post('/FundingSource/delete/{id}', [FundingSourceController::class, 'destroy']);
Route::post('/FundingSource/update', [FundingSourceController::class, 'update']);
