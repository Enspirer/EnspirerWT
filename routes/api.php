<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Frontend\HomeController;

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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::post('api_chat', [HomeController::class, 'api_chat'])->name('api_chat');
Route::post('theme_changers', [HomeController::class, 'theme_changers'])->name('theme_changers');

Route::post('whatsapp_widget/redirection', [HomeController::class,'save_client'])->name('save_client');
