<?php

use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\AizUploadController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\User\AccountController;
use App\Http\Controllers\Frontend\User\DashboardController;
use App\Http\Controllers\Frontend\User\ProfileController;
use App\Http\Controllers\Frontend\TestController;
use App\Http\Controllers\Frontend\SEOController;
use App\Http\Controllers\Frontend\SecurityController;
use App\Http\Controllers\Frontend\ChatController;
use App\Http\Controllers\Frontend\ReportsController;
use App\Http\Controllers\Frontend\User\ProjectController;

/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact/send', [ContactController::class, 'send'])->name('contact.send');

Route::post('/aiz-uploader', [AizUploadController::class, 'show_uploader']);
Route::post('/aiz-uploader/upload', [AizUploadController::class, 'upload']);
Route::get('/aiz-uploader/get_uploaded_files', [AizUploadController::class, 'get_uploaded_files']);
Route::post('/aiz-uploader/get_file_by_ids', [AizUploadController::class, 'get_preview_files']);
Route::get('/aiz-uploader/download/{id}', [AizUploadController::class, 'attachment_download'])->name('download_attachment');
Route::get('uploads/all/{file_name}',[AizUploadController::class,'get_image_content']);

Route::get('static/{id}/mpaclic.js',[TestController::class, 'index'])->name('resource_widget');
Route::get('test_blade',[TestController::class, 'testblade'])->name('testblade');

Route::get('seo',[SEOController::class, 'index'])->name('seo');
Route::get('security',[SecurityController::class, 'index'])->name('security');
Route::get('chat',[ChatController::class, 'index'])->name('chat');



/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 * These routes can not be hit if the password is expired
 */
Route::group(['middleware' => ['auth', 'password_expires']], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        // User Dashboard Specific
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // User Account Specific
        Route::get('account', [AccountController::class, 'index'])->name('account');

        // User Profile Specific
        Route::patch('profile/update', [ProfileController::class, 'update'])->name('profile.update');

        Route::get('reports', [ReportsController::class, 'index'])->name('reports');


        Route::get('project_details/{id}', [ProjectController::class, 'show'])->name('project.show');
    });
});
