<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\caseController;

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

Route::get('/', [IndexController::class, 'index']);

Route::get('/form', [AuthController::class, 'form']);

Route::post('/welcome', [AuthController::class, 'submit']); 

Route::get ('/data-tables', [IndexController::class, 'data']);

//Crud cast
Route::get ('/cast/create', [caseController::class, 'create']);
Route::post ('/cast', [caseController::class, 'save']);

//readd
route::get ('/cast', [caseController::class, 'index' ]);
route::get ('/cast/{cast_id}', [caseController::class, 'show' ]);

//update
Route::get('/cast/{cast_id}/edit', [caseController::class, 'edit']); 
Route::put('/cast/{cast_id}', [caseController::class, 'update']);

//delete
Route::delete('cast/{cast_id}', [caseController::class, 'delete']);