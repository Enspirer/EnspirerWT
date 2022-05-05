<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\IMSController;
use App\Http\Controllers\Frontend\IMSProController;
use App\Http\Controllers\Frontend\WidgetController;
use App\Http\Controllers\Frontend\HeatMapDynamicControlloler;

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
Route::post('user_api_chat', [HomeController::class, 'user_api_chat'])->name('user_api_chat');
Route::post('user_api_chat_all', [HomeController::class, 'user_api_chat_all'])->name('user_api_chat_all');

Route::post('assigned_by', [IMSController::class, 'assigned_by'])->name('assigned_by');
Route::post('theme_changers', [HomeController::class, 'theme_changers'])->name('theme_changers');

Route::post('whatsapp_widget/redirection', [HomeController::class,'save_client'])->name('save_client');
Route::post('all_in_one_whatsapp_widget/redirection', [HomeController::class,'all_in_one_save_client'])->name('all_in_one_save_client');

Route::post('tawk_details_store', [HomeController::class,'tawk_details_store'])->name('tawk_details_store');
Route::post('log_checker', [HomeController::class,'log_checker'])->name('log_checker');

Route::post('heatmapdata', [HomeController::class,'heatmapdata'])->name('heatmapdata');
Route::post('session_rec', [HomeController::class,'session_rec'])->name('session_rec');


Route::post('event', [HomeController::class,'analytics_post'])->name('analytics_post');


Route::post('ims_chat', [HomeController::class, 'ims_chat'])->name('ims_chat');
Route::post('ims_chat_insert', [HomeController::class, 'ims_chat_insert'])->name('ims_chat_insert');
Route::post('ims_chat_user_insert', [HomeController::class, 'ims_chat_user_insert'])->name('ims_chat_user_insert');


Route::post('submit_chat', [IMSProController::class, 'submit_chat'])->name('submit_chat');
Route::post('responsible_ims_pro', [IMSProController::class, 'responsible_ims_pro'])->name('responsible_ims_pro');

Route::post('chat_user_details', [IMSProController::class, 'chat_user_details'])->name('chat_user_details');

Route::post('default_server_auth_status', [HomeController::class, 'default_server_auth_status'])->name('default_server_auth_status');
Route::post('project_server_auth_status', [HomeController::class, 'project_server_auth_status'])->name('project_server_auth_status');

Route::get('live_visitor_monitor_api/{project_id}', [HomeController::class, 'live_visitor_monitor_api'])->name('live_visitor_monitor_api');

Route::post('optimizer_realtime_view', [WidgetController::class, 'optimizer_realtime_view'])->name('optimizer_realtime_view');

Route::post('user_optimizer/realtime_invite', [WidgetController::class, 'realtime_invite'])->name('user_optimizer.realtime_invite');

Route::post('selected_conversation', [HomeController::class, 'selected_conversation'])->name('selected_conversation');

Route::get('check_project_available_days', [HomeController::class,'check_project_available_days'])->name('check_project_available_days');

Route::post('heatmap_dynamic/{id}', [HeatMapDynamicControlloler::class, 'store'])->name('heatmap_dynamic');
Route::post('get_heatmap_dynamic', [HeatMapDynamicControlloler::class, 'get_heatmap_dynamic'])->name('get_heatmap_dynamic');
