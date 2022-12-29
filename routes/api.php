<?php

use App\Http\Controllers\RedisController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/redis/set', [RedisController::class, 'set']);
Route::post('/redis/rename', [RedisController::class, 'rename']);
Route::post('/redis/delete', [RedisController::class, 'delete']);
Route::post('/redis/incr', [RedisController::class, 'incr']);
Route::post('/redis/decr', [RedisController::class, 'decr']);
Route::post('/redis/incr-by', [RedisController::class, 'incrBy']);
Route::post('/redis/decr-by', [RedisController::class, 'decrBy']);
Route::post('/redis/expire', [RedisController::class, 'expire']);
Route::post('/redis/push', [RedisController::class, 'push']);
Route::post('/redis/pop', [RedisController::class, 'pop']);
