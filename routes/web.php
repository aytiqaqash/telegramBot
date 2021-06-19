<?php

use App\Http\Controllers\TelegramBotController;
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

Route::get('/', function () {
    return \Illuminate\Support\Facades\Redirect::away('https://www.youtube.com/c/AyTiQaqa%C5%9F/videos');
});
Route::get('/setWebhook',[TelegramBotController::class,'setWebhook']);
Route::get('/getWebhookInfo',[TelegramBotController::class,'getWebhookInfo']);
Route::post(env('TELEGRAM_BOT_TOKEN') .'/webhook', [TelegramBotController::class,'handleRequest']);


