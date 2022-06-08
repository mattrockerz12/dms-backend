<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\ProjectDocumentDetailController;
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

Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/projects/{id}', [ProjectController::class, 'show']);
Route::get('projects/details/{id}', [ProjectController::class, 'permits']);
Route::get('details', [ProjectDocumentDetailController::class, 'index']);
Route::post('/projects', [ProjectController::class, 'store']);
Route::put('/projects/{id}', [ProjectController::class, 'update']);
Route::get('/documents', [DocumentController::class, 'index']);
Route::post('/documents', [DocumentController::class, 'store']);

