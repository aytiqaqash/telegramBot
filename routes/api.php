<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/auth/register', [AuthController::class, 'register']);
Route::post('/auth/login', [AuthController::class, 'login'])->name('login');

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/me', function (Request $request) {
        return auth()->user();
    });
    Route::post('/auth/logout', [AuthController::class, 'logout']);
});



















// When the route is not defined
Route::get('/{any}', function () {
    return response()->json([
        'status' => 'Error',
        'message' => "The route is not defind!"
    ], 404);
})->where('any', '.*')->name('notFound');


Route::post('/{any}', function () {
    return response()->json([
        'status' => 'Error',
        'message' => "The route is not defind!"
    ], 404);
})->where('any', '.*')->name('notFound');
