<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;

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

Route::get('/houses',[APIController::class,'gethouses']);

Route::post('/houses/post',[APIController::class,'createhouses']);
Route::delete('/houses/delete/{id}',[APIController::class,'deletehouses']);
Route::put('/update/houses/{id}',[APIController::class,'updatehouses']);
