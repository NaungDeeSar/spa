<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

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


// //show item
// Route::get('/item',[ItemController::class,'index']);
// //add item
// Route::post('/item',[ItemController::class,'store']);
// //retrieve item id
// Route::get('/item/{id}',[ItemController::class,'show']);
// //upddate
// Route::put('/item/{id}',[ItemController::class,'update']);
// //delete
// Route::delete('/item/{id}',[ItemController::class,'destroy']);

Route::apiResource('/item',ItemController::class);
