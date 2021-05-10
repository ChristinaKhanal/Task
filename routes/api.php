<?php

use App\Http\Controllers\Api\ClientController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/clients', [ App\Http\Controllers\Api\ClientController::class, 'index']);
Route::get('/export', [ App\Http\Controllers\Api\ClientController::class, 'CsvExport'])->name('export');
Route::group(['prefix' => 'client'], function () {
    Route::post('/create', [ App\Http\Controllers\Api\ClientController::class, 'create']);
    Route::get('edit/{id}', [ App\Http\Controllers\Api\ClientController::class, 'edit']);
    Route::post('update/{id}', [ App\Http\Controllers\Api\ClientController::class, 'update']);
    Route::delete('delete/{id}', [ App\Http\Controllers\Api\ClientController::class, 'delete']);

});
