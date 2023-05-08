<?php

use App\Http\Controllers\BookingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::get('/name',function(){
//     dd('asdasdad');
// });
Route::get('/user',[BookingController::class, 'index']);
Route::get('/user/{id}',[BookingController::class, 'show']);
Route::post('/user',[BookingController::class, 'store']);
// we can do it through apiResource controller method but it has alot of functions in the bookingController