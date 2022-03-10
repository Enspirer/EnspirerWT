<?php

use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\AizUploadController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\User\AccountController;
use App\Http\Controllers\Frontend\User\DashboardController;
use App\Http\Controllers\Frontend\User\ProfileController;
use App\Http\Controllers\Frontend\User\SettingsController;
use App\Http\Controllers\Frontend\TestController;
use App\Http\Controllers\Frontend\SEOController;
use App\Http\Controllers\Frontend\SecurityController;
use App\Http\Controllers\Frontend\ChatController;
use App\Http\Controllers\Frontend\ReportsController;
use App\Http\Controllers\Frontend\User\ProjectController;
use App\Http\Controllers\Frontend\AnalyticsController;
use App\Http\Controllers\Frontend\EShopController;
use App\Http\Controllers\Frontend\MarketPlaceController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\ResourcesController;
use App\Http\Controllers\Frontend\ServicesController;
use App\Http\Controllers\Frontend\WidgetController;
use App\Http\Controllers\Frontend\IMSController;
use App\Http\Controllers\Frontend\PortfolioController;
use App\Http\Controllers\Frontend\BlogController;

/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact_us.store', [ContactController::class, 'store'])->name('contact_us.store');
Route::post('contact/send', [ContactController::class, 'send'])->name('contact.send');


Route::post('/aiz-uploader', [AizUploadController::class, 'show_uploader']);
Route::post('/aiz-uploader/upload', [AizUploadController::class, 'upload']);
Route::get('/aiz-uploader/get_uploaded_files', [AizUploadController::class, 'get_uploaded_files']);
Route::post('/aiz-uploader/get_file_by_ids', [AizUploadController::class, 'get_preview_files']);
Route::get('/aiz-uploader/download/{id}', [AizUploadController::class, 'attachment_download'])->name('download_attachment');
Route::get('uploads/all/{file_name}',[AizUploadController::class,'get_image_content']);

Route::get('static/{id}/mpaclic.js',[TestController::class, 'index'])->name('resource_widget');
Route::get('test_blade',[TestController::class, 'testblade'])->name('testblade');

Route::get('eshop',[EShopController::class, 'index'])->name('eshop');
Route::get('market_place',[MarketPlaceController::class, 'index'])->name('market_place');
Route::get('products',[ProductController::class, 'index'])->name('products');
Route::get('resources',[ResourcesController::class, 'index'])->name('resources');
Route::get('services',[ServicesController::class, 'index'])->name('services');
Route::get('portfolio',[PortfolioController::class, 'index'])->name('portfolio');
Route::get('home_blog',[BlogController::class, 'index'])->name('home_blog');
Route::get('solo_post/{id}',[BlogController::class, 'solo_post'])->name('solo_post');



Route::get('generatePDF/{id}',[IMSController::class, 'generatePDF'])->name('generatePDF');
Route::get('analytics_generatePDF',[IMSController::class, 'analytics_generatePDF'])->name('analytics_generatePDF');


/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 * These routes can not be hit if the password is expired
 */
Route::group(['middleware' => ['auth', 'password_expires']], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        // User Dashboard Specific
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('project_dash/delete/{id}', [DashboardController::class, 'project_dash_destroy'])->name('project_dash.destroy');
              

        // User Account Specific
        Route::get('account', [AccountController::class, 'index'])->name('account');
        Route::get('projects', [ProjectController::class, 'index'])->name('project.index');

        // User Profile Specific
        Route::patch('profile/update', [ProfileController::class, 'update'])->name('profile.update');
        Route::post('profile_details/update', [SettingsController::class, 'profile_details_update'])->name('profile_details.update');


        Route::get('reports', [ReportsController::class, 'index'])->name('reports');

        Route::get('settings', [SettingsController::class, 'index'])->name('settings.index');


        Route::get('project_details/{id}', [ProjectController::class, 'show'])->name('project.show');

        Route::get('project_details/{id}/seo',[SEOController::class, 'seo'])->name('project.seo');
        Route::get('project_details/{id}/security',[SecurityController::class, 'security'])->name('project.security');
        Route::get('project_details/{id}/widget',[ChatController::class, 'widget'])->name('project.chat');
        Route::get('project_details/{id}/analytics',[AnalyticsController::class, 'analytics'])->name('project.analytics');

        Route::post('user_projects/store', [DashboardController::class, 'user_projects_store'])->name('user_projects.store');

        
        Route::post('user_widget/store', [WidgetController::class, 'user_widget_store'])->name('user_widget.store');
        Route::get('user_widget/delete/{id}', [WidgetController::class, 'user_widget_destroy'])->name('user_widget.destroy');
        Route::get('user_widget/settings/{id}', [WidgetController::class, 'user_widget_settings'])->name('user_widget.settings');
        Route::get('user_whatsapp_chat_preview/{widget_id}', [WidgetController::class, 'user_whatsapp_chat_preview'])->name('user_whatsapp_chat_preview');
        Route::post('user_widget/update', [WidgetController::class, 'user_widget_update'])->name('user_widget.update');
        Route::get('user_widget/ims/{id}', [IMSController::class, 'index'])->name('user_widget.ims');
        Route::get('user_widget/ims/individual_inbox/{id}', [IMSController::class, 'ims_individual_inbox'])->name('user_widget.ims_individual_inbox');
        Route::post('user_widget/individual_inbox/store', [IMSController::class, 'ims_individual_store'])->name('ims_individual_inbox.store');

        Route::get('user_widget/ims_inbox/{id}', [IMSController::class, 'ims_inbox'])->name('user_widget.ims_inbox');
        Route::get('user_widget/ims_assigned/{id}', [IMSController::class, 'ims_assigned'])->name('user_widget.ims_assigned');
        Route::get('user_widget/ims_unassigned/{id}', [IMSController::class, 'ims_unassigned'])->name('user_widget.ims_unassigned');
        Route::get('user_widget/ims_closed/{id}', [IMSController::class, 'ims_closed'])->name('user_widget.ims_closed');
        Route::get('user_widget/ims_spam/{id}', [IMSController::class, 'ims_spam'])->name('user_widget.ims_spam');
        Route::get('user_widget/ims_clients/{id}', [IMSController::class, 'ims_clients'])->name('user_widget.ims_clients');
        Route::get('user_widget/ims_clients/delete/{id}', [IMSController::class, 'ims_clients_destroy'])->name('ims_clients.destroy');
        Route::get('user_widget/ims_analytics/{id}', [IMSController::class, 'ims_analytics'])->name('user_widget.ims_analytics');
        Route::get('user_widget/ims_dashboard/{id}', [IMSController::class, 'ims_dashboard'])->name('user_widget.ims_dashboard');
        Route::post('user_widget/ims_dates_report', [IMSController::class, 'ims_dates_report'])->name('user_widget.ims_dates_report');

        
    });
});
