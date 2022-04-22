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
use App\Http\Controllers\Frontend\User\BillingController;
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
use App\Http\Controllers\Frontend\TermsAndPrivacyController;
use App\Http\Controllers\Frontend\User\VisitorStatisticsController;
use App\Http\Controllers\Frontend\User\NotificationsController;
use App\Http\Controllers\Frontend\User\AnalyticController;
use App\Http\Controllers\Frontend\User\IMSProSettingsController;
use App\Http\Controllers\Frontend\IMSProController;
use App\Http\Controllers\Frontend\IMSLoginController;
use App\Http\Controllers\Frontend\NotFoundController;
use App\Http\Controllers\Frontend\MobileViewController;
use App\Http\Controllers\Frontend\PricingController;
use App\Http\Controllers\Frontend\MediaController;


/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact_us.store', [ContactController::class, 'store'])->name('contact_us.store');
Route::post('contact/send', [ContactController::class, 'send'])->name('contact.send');
Route::get('mobile_view',[MobileViewController::class,'mobile_view_armap'])->name('mobile_view_armap');
Route::post('mobile_view/setting_update',[MobileViewController::class,'setting_update'])->name('mobile_view.setting_update');
Route::get('mobile_view/home_page/{id}',[MobileViewController::class, 'index'])->name('mobile_view');
Route::get('mobile_view/mobile-notification',[MobileViewController::class, 'mobile_notification'])->name('mobile_notification');
Route::get('mobile_view/mobile-settings',[MobileViewController::class, 'mobile_settings'])->name('mobile_settings');
Route::get('mobile_view/mobile-register',[MobileViewController::class, 'mobile_register'])->name('mobile_register');
Route::get('mobile_view/mobile-login',[MobileViewController::class, 'mobile_login'])->name('mobile_login');
Route::get('mobile_view/mobile-analytics',[MobileViewController::class, 'mobile_analytics'])->name('mobile_analytics');
// Analytics Inner Pages
Route::get('mobile_view/mobile-analytics/analytics-browsers',[MobileViewController::class, 'mobile_analytics_browsers'])->name('analytics_browsers');
Route::get('mobile_view/mobile-analytics/analytics-campaigns',[MobileViewController::class, 'mobile_analytics_campaigns'])->name('analytics_campaigns');
Route::get('mobile_view/mobile-analytics/analytics-cities',[MobileViewController::class, 'mobile_analytics_cities'])->name('analytics_cities');
Route::get('mobile_view/mobile-analytics/analytics-continents',[MobileViewController::class, 'mobile_analytics_continents'])->name('analytics_continents');
Route::get('mobile_view/mobile-analytics/analytics-countries',[MobileViewController::class, 'mobile_analytics_countries'])->name('analytics_countries');
Route::get('mobile_view/mobile-analytics/analytics-devices',[MobileViewController::class, 'mobile_analytics_devices'])->name('analytics_devices');
Route::get('mobile_view/mobile-analytics/analytics-events',[MobileViewController::class, 'mobile_analytics_events'])->name('analytics_events');
Route::get('mobile_view/mobile-analytics/analytics-landing-pages',[MobileViewController::class, 'mobile_analytics_landing_pages'])->name('analytics_landing_pages');
Route::get('mobile_view/mobile-analytics/analytics-languages',[MobileViewController::class, 'mobile_analytics_languages'])->name('analytics_languages');
Route::get('mobile_view/mobile-analytics/analytics-operating-systems',[MobileViewController::class, 'mobile_analytics_operating_systems'])->name('analytics_operating_systems');
Route::get('mobile_view/mobile-analytics/analytics-pages',[MobileViewController::class, 'mobile_analytics_pages'])->name('analytics_pages');
Route::get('mobile_view/mobile-analytics/analytics-referrers',[MobileViewController::class, 'mobile_analytics_referrers'])->name('analytics_referrers');
Route::get('mobile_view/mobile-analytics/analytics-screen-resolutions',[MobileViewController::class, 'mobile_analytics_screen_resolutions'])->name('analytics_screen_resolutions');
Route::get('mobile_view/mobile-analytics/analytics-search-engines',[MobileViewController::class, 'mobile_analytics_search_engines'])->name('analytics_search_engines');
Route::get('mobile_view/mobile-analytics/analytics-social-networks',[MobileViewController::class, 'mobile_analytics_social_networks'])->name('analytics_social_networks');

Route::get('not_found',[NotFoundController::class, 'index'])->name('not_found');


Route::post('/aiz-uploader', [AizUploadController::class, 'show_uploader']);
Route::post('/aiz-uploader/upload', [AizUploadController::class, 'upload']);
Route::get('/aiz-uploader/get_uploaded_files', [AizUploadController::class, 'get_uploaded_files']);
Route::post('/aiz-uploader/get_file_by_ids', [AizUploadController::class, 'get_preview_files']);
Route::get('/aiz-uploader/download/{id}', [AizUploadController::class, 'attachment_download'])->name('download_attachment');
Route::get('uploads/all/{file_name}',[AizUploadController::class,'get_image_content']);

Route::get('static/{id}/mpaclic.js',[TestController::class, 'index'])->name('resource_widget');
Route::get('test_blade',[TestController::class, 'testblade'])->name('testblade');

Route::get('eshop',[EShopController::class, 'index'])->name('eshop');
Route::get('products/widget-lite',[ProductController::class, 'widget_lite'])->name('widget_lite');
Route::get('products/widget-pro',[ProductController::class, 'widget_pro'])->name('widget_pro');
Route::get('products/optimizer',[ProductController::class, 'optimizer'])->name('optimizer');
Route::get('resources',[ResourcesController::class, 'index'])->name('resources');
Route::get('services/marketplace',[ServicesController::class, 'marketplace'])->name('marketplace');
Route::get('services/portfolio',[ServicesController::class, 'portfolio'])->name('portfolio');
Route::get('services/expert-center',[ServicesController::class, 'expertCenter'])->name('expert_center');
Route::get('services/services',[ServicesController::class, 'services'])->name('services');
Route::get('media/latest-news',[MediaController::class, 'news'])->name('latest_news');
Route::get('media/latest-news/single-news/{id}',[MediaController::class, 'singleNews'])->name('single_news');
Route::get('media/promotions',[MediaController::class, 'promotions'])->name('promotions');
Route::get('media/home-blog',[MediaController::class, 'blogs'])->name('home_blog');
Route::get('media/tallentor-demo',[MediaController::class, 'tallentor_demo'])->name('tallentor_demo');
Route::get('solo_post/{id}',[BlogController::class, 'solo_post'])->name('solo_post');
Route::get('terms-condition',[TermsAndPrivacyController::class, 'terms_condition'])->name('terms_condition');
Route::get('privacy-policy',[TermsAndPrivacyController::class, 'privacy_policy'])->name('privacy_policy');
Route::get('pricing',[PricingController::class, 'pricing'])->name('pricing');


Route::get('generatePDF/{id}',[IMSController::class, 'generatePDF'])->name('generatePDF');
Route::get('analytics_generatePDF',[IMSController::class, 'analytics_generatePDF'])->name('analytics_generatePDF');

Route::get('generate_report_file_pdf/{project_id}/{phone_number}',[IMSProController::class, 'generate_report_file_pdf'])->name('generate_report_file_pdf');

Route::get('invoice_pdf/{id}',[BillingController::class, 'invoice_pdf'])->name('invoice_pdf');



Route::get('ims_login_page/{id}', [IMSLoginController::class, 'login_page'])->name('ims_login_page');
Route::post('ims_login_check', [IMSLoginController::class, 'ims_login_check'])->name('ims_login_check');
Route::get('ims_pro_logout/{id}', [IMSLoginController::class, 'ims_pro_logout'])->name('ims_pro_logout');


Route::get('user_widget/ims_pro_media_scan/{id}', [IMSProController::class, 'ims_pro_media_scan'])->name('user_widget.ims_pro_media_scan');
Route::get('user_widget/ims_pro_index/{id}/{phone_number}/{type}', [IMSProController::class, 'ims_pro_index'])->name('user_widget.ims_pro_index');
Route::get('user_widget/ims_pro_chat_summary/{id}', [IMSProController::class, 'ims_pro_chat_summary'])->name('user_widget.ims_pro_chat_summary');
Route::get('user_widget/ims_pro_my_inquiry/{id}', [IMSProController::class, 'ims_pro_my_inquiry'])->name('user_widget.ims_pro_my_inquiry');
Route::get('user_widget/ims_pro_contacts/{id}', [IMSProController::class, 'ims_pro_contacts'])->name('user_widget.ims_pro_contacts');
Route::get('user_widget/ims_pro_broadcast/{id}', [IMSProController::class, 'ims_pro_broadcast'])->name('user_widget.ims_pro_broadcast');

Route::post('user_widget/ims_pro_contacts_store', [IMSProController::class, 'ims_pro_contacts_store'])->name('user_widget.ims_pro_contacts_store');
Route::post('user_widget/ims_pro_contacts_update', [IMSProController::class, 'ims_pro_contacts_update'])->name('user_widget.ims_pro_contacts_update');
Route::get('user_widget/ims_pro_contacts_delete/{id}', [IMSProController::class, 'ims_pro_contacts_delete'])->name('user_widget.ims_pro_contacts_delete');


Route::post('conversation/delete', [IMSProController::class, 'conversation_delete'])->name('conversation.delete');



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
        Route::get('heatmap', [TestController::class, 'heatmap'])->name('heatmap');
        Route::get('session_player', [HomeController::class,'session_player'])->name('session_player');
        // User Account Specific
        Route::get('account', [AccountController::class, 'index'])->name('account');
        Route::get('projects', [ProjectController::class, 'index'])->name('project.index');

        // User Profile Specific
        Route::patch('profile/update', [ProfileController::class, 'update'])->name('profile.update');
        Route::post('profile_details/update', [SettingsController::class, 'profile_details_update'])->name('profile_details.update');
        Route::get('reports', [ReportsController::class, 'index'])->name('reports');
        Route::get('billing', [BillingController::class, 'index'])->name('billing');
        Route::get('unpaid_invoices/{id}', [BillingController::class, 'unpaid_invoices'])->name('unpaid_invoices');
        
        Route::get('settings', [SettingsController::class, 'index'])->name('settings.index');
        Route::get('notifications', [NotificationsController::class, 'index'])->name('notifications.index');
        Route::get('user_notifications_status/{id}', [NotificationsController::class, 'user_notifications_status'])->name('user_notifications_status');



        Route::get('project_details/{id}', [ProjectController::class, 'show'])->name('project.show');

        Route::get('project_details/{id}/seo',[SEOController::class, 'seo'])->name('project.seo');
        Route::get('project_details/{id}/security',[SecurityController::class, 'security'])->name('project.security');

        // Analytics
        Route::get('project_details/{id}/optimizer/analytics/overview',[AnalyticsController::class, 'analytics'])->name('project.analytics');
        Route::get('project_details/{id}/optimizer/analytics/behavior/page',[AnalyticsController::class, 'analyticsPages'])->name('projects.analytics.page');
        Route::get('project_details/{id}/optimizer/analytics/behavior/landing-page',[AnalyticsController::class, 'analyticsLandingPages'])->name('projects.analytics.landing_page');
        Route::get('project_details/{id}/optimizer/analytics/acquisitions/referrers',[AnalyticsController::class, 'analyticsReferrers'])->name('projects.analytics.referrers');
        Route::get('project_details/{id}/optimizer/analytics/acquisitions/search-engines',[AnalyticsController::class, 'analyticsSearchEngines'])->name('projects.analytics.search_engines');
        Route::get('project_details/{id}/optimizer/analytics/acquisitions/social-networks',[AnalyticsController::class, 'analyticsSocialNetworks'])->name('projects.analytics.social_networks');
        Route::get('project_details/{id}/optimizer/analytics/acquisitions/campaigns',[AnalyticsController::class, 'analyticsCampaigns'])->name('projects.analytics.campaigns');
        Route::get('project_details/{id}/optimizer/analytics/geographic/continents',[AnalyticsController::class, 'analyticsContinents'])->name('projects.analytics.continents');
        Route::get('project_details/{id}/optimizer/analytics/geographic/countries',[AnalyticsController::class, 'analyticsCountries'])->name('projects.analytics.countries');
        Route::get('project_details/{id}/optimizer/analytics/geographic/cities',[AnalyticsController::class, 'analyticsCities'])->name('projects.analytics.cities');
        Route::get('project_details/{id}/optimizer/analytics/geographic/languages',[AnalyticsController::class, 'analyticsLanguages'])->name('projects.analytics.languages');
        Route::get('project_details/{id}/optimizer/analytics/technology/operating-systems',[AnalyticsController::class, 'analyticsOperatingSystems'])->name('projects.analytics.operating_systems');
        Route::get('project_details/{id}/optimizer/analytics/technology/browsers',[AnalyticsController::class, 'analyticsBrowsers'])->name('projects.analytics.browsers');
        Route::get('project_details/{id}/optimizer/analytics/technology/screen-resolutions',[AnalyticsController::class, 'analyticsScreenResolutions'])->name('projects.analytics.screen_resolutions');
        Route::get('project_details/{id}/optimizer/analytics/technology/devices',[AnalyticsController::class, 'analyticsDevices'])->name('projects.analytics.devices');

        Route::get('project_details/{id}/widget',[ChatController::class, 'widget'])->name('project.chat');
        Route::get('project_details/{id}/widget_plus',[ChatController::class, 'widget_plus'])->name('project.widget_plus');
        Route::get('project_details/{id}/optimizer/realtime',[ChatController::class, 'optimizer'])->name('project.optimizer');
        Route::get('project_details/{id}/optimizer_plus',[ChatController::class, 'optimizer_plus'])->name('project.optimizer_plus');


        Route::post('user_projects/store', [DashboardController::class, 'user_projects_store'])->name('user_projects.store');

        
        Route::post('user_widget/store', [WidgetController::class, 'user_widget_store'])->name('user_widget.store');
        Route::get('user_widget/delete/{id}', [WidgetController::class, 'user_widget_destroy'])->name('user_widget.destroy');
        Route::post('user_optimizer/store', [WidgetController::class, 'user_optimizer_store'])->name('user_optimizer.store');
        Route::get('user_optimizer/delete/{id}', [WidgetController::class, 'user_optimizer_destroy'])->name('user_optimizer.destroy');
        Route::get('user_widget/settings/{id}', [WidgetController::class, 'user_widget_settings'])->name('user_widget.settings');
        Route::get('user_whatsapp_chat_preview/{widget_id}', [WidgetController::class, 'user_whatsapp_chat_preview'])->name('user_whatsapp_chat_preview');
        Route::post('user_widget/update', [WidgetController::class, 'user_widget_update'])->name('user_widget.update');
        Route::post('user_widget_ims_pro_settings/update', [WidgetController::class, 'user_widget_ims_pro_settings_update'])->name('user_widget_ims_pro_settings.update');


        


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

        Route::get('ims/visitor_statistics/{id}', [VisitorStatisticsController::class, 'index'])->name('ims.visitor_statistics');


        

        Route::post('user_widget_ims_pro_role_management/store', [IMSProSettingsController::class, 'user_widget_ims_pro_role_management_store'])->name('user_widget_ims_pro_role_management.store');
        Route::get('user_widget_ims_pro_role_management/getdetails/{id}', [IMSProSettingsController::class, 'user_widget_ims_pro_role_management_details'])->name('user_widget_ims_pro_role_management.getdetails');
        Route::get('user_widget_ims_pro_role_management/edit/{id}', [IMSProSettingsController::class, 'user_widget_ims_pro_role_management_edit'])->name('user_widget_ims_pro_role_management.edit');
        Route::post('user_widget_ims_pro_role_management/update', [IMSProSettingsController::class, 'user_widget_ims_pro_role_management_update'])->name('user_widget_ims_pro_role_management.update');
        Route::get('user_widget_ims_pro_role_management/delete/{id}', [IMSProSettingsController::class, 'user_widget_ims_pro_role_management_destroy'])->name('user_widget_ims_pro_role_management.destroy');
        


        Route::get('user_widget/analytics/overview/{id}', [AnalyticController::class, 'index'])->name('user_widget.analytics.overview');
        Route::get('user_widget/analytics/page/{id}', [AnalyticController::class, 'page'])->name('user_widget.analytics.page');
        Route::get('user_widget/analytics/landing_page/{id}', [AnalyticController::class, 'landing_page'])->name('user_widget.analytics.landing_page');
        Route::get('user_widget/analytics/referrers/{id}', [AnalyticController::class, 'referrers'])->name('user_widget.analytics.referrers');
        Route::get('user_widget/analytics/search_engines/{id}', [AnalyticController::class, 'search_engines'])->name('user_widget.analytics.search_engines');
        Route::get('user_widget/analytics/social_networks/{id}', [AnalyticController::class, 'social_networks'])->name('user_widget.analytics.social_networks');
        Route::get('user_widget/analytics/campaigns/{id}', [AnalyticController::class, 'campaigns'])->name('user_widget.analytics.campaigns');
        Route::get('user_widget/analytics/continents/{id}', [AnalyticController::class, 'continents'])->name('user_widget.analytics.continents');
        Route::get('user_widget/analytics/countries/{id}', [AnalyticController::class, 'countries'])->name('user_widget.analytics.countries');
        Route::get('user_widget/analytics/cities/{id}', [AnalyticController::class, 'cities'])->name('user_widget.analytics.cities');
        Route::get('user_widget/analytics/languages/{id}', [AnalyticController::class, 'languages'])->name('user_widget.analytics.languages');
        Route::get('user_widget/analytics/operating_systems/{id}', [AnalyticController::class, 'operating_systems'])->name('user_widget.analytics.operating_systems');
        Route::get('user_widget/analytics/browsers/{id}', [AnalyticController::class, 'browsers'])->name('user_widget.analytics.browsers');
        Route::get('user_widget/analytics/screen_resolutions/{id}', [AnalyticController::class, 'screen_resolutions'])->name('user_widget.analytics.screen_resolutions');
        Route::get('user_widget/analytics/devices/{id}', [AnalyticController::class, 'devices'])->name('user_widget.analytics.devices');
        Route::get('user_widget/analytics/events/{id}', [AnalyticController::class, 'events'])->name('user_widget.analytics.events');

        
        Route::get('user_widget/project_settings/{id}', [ProjectController::class, 'project_settings'])->name('project_settings');
        Route::post('user_widget/project_settings/update', [ProjectController::class, 'project_settings_update'])->name('user_widget.project_settings_update');

        // Route::post('img_pro/submit-chat', [IMSProController::class, 'submit_chat'])->name('submit_chat');



    });
});
