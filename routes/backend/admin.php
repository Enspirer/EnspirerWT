<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\FileManagerController;
use App\Http\Controllers\Backend\SettingsController;
use App\Http\Controllers\Backend\ModuleExplorerController;
use App\Http\Controllers\Backend\ProjectsController;
use App\Http\Controllers\Backend\ProjectTypeController;
use App\Http\Controllers\Backend\ContactUsController;
use App\Http\Controllers\Backend\HelpCategoryController;
use App\Http\Controllers\Backend\HelpSupportsController;
use App\Http\Controllers\Backend\WidgetController;
use App\Http\Controllers\Frontend\TestController;
use App\Http\Controllers\Backend\WidgetSettingController;
use App\Http\Controllers\Backend\IMSProWidgetsController;
use App\Http\Controllers\Backend\UserProjectController;
use App\Http\Controllers\Backend\PushNotificationController;
use App\Http\Controllers\Backend\TallentorDemoController;
use App\Http\Controllers\Backend\SeoManagementController;
use App\Http\Controllers\Backend\PrivacyController;
use App\Http\Controllers\Backend\CustomPaymentController;



// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');


Route::get('file_manager', [FileManagerController::class, 'index'])->name('file_manager.index');
Route::get('file_manager/getdetails', [FileManagerController::class, 'getdetails'])->name('file_manager.getdetails');
Route::get('file_manager/delete/{id}', [FileManagerController::class, 'destroy'])->name('file_manager.destroy');

Route::get('module-explorer', [ModuleExplorerController::class, 'index'])->name('module.index');
Route::get('module-explorer/show/{slug}', [ModuleExplorerController::class, 'show'])->name('module.show');
Route::post('module-explorer/install/', [ModuleExplorerController::class, 'install'])->name('module.install');
Route::post('module-explorer/uninstall/', [ModuleExplorerController::class, 'uninstall'])->name('module.uninstall');

Route::get('settings', [SettingsController::class, 'index'])->name('settings.index');
Route::post('settings/update', [SettingsController::class, 'settings_update'])->name('settings_update');

Route::get('about_us', [SettingsController::class, 'about_us'])->name('about_us');
Route::post('about_us/update', [SettingsController::class, 'about_us_update'])->name('about_us_update');

Route::get('privacy_policy', [SettingsController::class, 'privacy_policy'])->name('privacy_policy');
Route::post('privacy_policy/update', [SettingsController::class, 'privacy_policy_update'])->name('privacy_policy_update');

Route::get('terms_and_conditions', [SettingsController::class, 'terms_and_conditions'])->name('terms_and_conditions');
Route::post('terms_and_conditions_update/update', [SettingsController::class, 'terms_and_conditions_update'])->name('terms_and_conditions_update');

Route::get('contactus_thanks', [SettingsController::class, 'contactus_thanks'])->name('contactus_thanks');
Route::post('contactus_thanks_update/update', [SettingsController::class, 'contactus_thanks_update'])->name('contactus_thanks_update');

Route::get('default_whatsapp_server', [SettingsController::class, 'default_whatsapp_server'])->name('default_whatsapp_server');
Route::post('default_whatsapp_server_update/update', [SettingsController::class, 'default_whatsapp_server_update'])->name('default_whatsapp_server_update');

Route::post('push_notification', [PushNotificationController::class, 'push_notification'])->name('push_notification');



Route::get('projects', [ProjectsController::class, 'index'])->name('projects.index');
Route::get('projects/create', [ProjectsController::class, 'create'])->name('projects.create');
Route::get('projects/show/{id}', [ProjectsController::class, 'show'])->name('projects.show');
Route::post('projects/store', [ProjectsController::class, 'store'])->name('projects.store');
Route::get('projects/getdetails', [ProjectsController::class, 'getdetails'])->name('projects.getdetails');
Route::get('projects/edit/{id}', [ProjectsController::class, 'edit'])->name('projects.edit');
Route::post('projects/update', [ProjectsController::class, 'update'])->name('projects.update');
Route::get('projects/delete/{id}', [ProjectsController::class, 'destroy'])->name('projects.destroy');
Route::get('projects/seo_report/{id}', [ProjectsController::class, 'seo_report'])->name('projects.seo_report');

Route::get('projects/bots/{id}', [ProjectsController::class, 'bots'])->name('projects.bots');
Route::get('projects/bots_getdetails/{id}', [ProjectsController::class, 'bots_getdetails'])->name('projects.bots_getdetails');
Route::get('projects/bots_edit/{id}', [ProjectsController::class, 'bots_edit'])->name('projects.bots_edit');
Route::post('projects/bots_update', [ProjectsController::class, 'bots_update'])->name('projects.bots_update');
Route::get('projects/bots/bots_delete/{id}', [ProjectsController::class, 'bots_destroy'])->name('projects.bots_destroy');

Route::get('projects/security_backend/{id}', [ProjectsController::class, 'security_backend'])->name('projects.security_backend');

Route::get('projects/heatmap/{id}', [ProjectsController::class, 'heatmap'])->name('projects.heatmap');
Route::get('projects/heatmap_getdetails/{id}', [ProjectsController::class, 'heatmap_getdetails'])->name('projects.heatmap_getdetails');
Route::get('projects/heatmap_edit/{id}', [ProjectsController::class, 'heatmap_edit'])->name('projects.heatmap_edit');


Route::get('projects/widget_manager/{id}', [WidgetController::class, 'index'])->name('projects.widget_manager');
Route::get('projects/widget_manager/create/{id}', [WidgetController::class, 'create'])->name('projects.widget_manager.create');
Route::post('projects/widget_manager/store', [WidgetController::class, 'store'])->name('projects.widget_manager.store');
Route::get('projects/widget_manager/getdetails/{id}', [WidgetController::class, 'getdetails'])->name('projects.widget_manager.getdetails');
Route::get('projects/widget_manager/edit/{id}', [WidgetController::class, 'edit'])->name('projects.widget_manager.edit');
Route::get('projects/widget_manager/settings/{id}', [WidgetController::class, 'settings'])->name('projects.widget_manager.settings');
Route::post('projects/widget_manager/update', [WidgetController::class, 'update'])->name('projects.widget_manager.update');
Route::get('projects/widget_manager/delete/{id}', [WidgetController::class, 'destroy'])->name('projects.widget_manager.destroy');
Route::post('projects/widget_manager/settings_update', [WidgetController::class, 'settings_update'])->name('projects.widget_manager.settings_update');

Route::get('whatsapp_chat_preview/{widget_id}', [ProjectsController::class, 'whatsapp_chat_preview'])->name('whatsapp_chat_preview');


Route::get('project_type', [ProjectTypeController::class, 'index'])->name('project_type.index');
Route::get('project_type/create', [ProjectTypeController::class, 'create'])->name('project_type.create');
Route::post('project_type/store', [ProjectTypeController::class, 'store'])->name('project_type.store');
Route::get('project_type/getdetails', [ProjectTypeController::class, 'getdetails'])->name('project_type.getdetails');
Route::get('project_type/edit/{id}', [ProjectTypeController::class, 'edit'])->name('project_type.edit');
Route::post('project_type/update', [ProjectTypeController::class, 'update'])->name('project_type.update');
Route::get('project_type/delete/{id}', [ProjectTypeController::class, 'destroy'])->name('project_type.destroy');

Route::get('contact_us', [ContactUsController::class, 'index'])->name('contact_us.index');
Route::get('contact_us/getdetails', [ContactUsController::class, 'getDetails'])->name('contact_us.getDetails');
Route::get('contact_us/edit/{id}', [ContactUsController::class, 'edit'])->name('contact_us.edit');
Route::post('contact_us/update', [ContactUsController::class, 'update'])->name('contact_us.update');
Route::get('contact_us/delete/{id}', [ContactUsController::class, 'destroy'])->name('contact_us.destroy');

Route::get('tallentor_demo', [TallentorDemoController::class, 'index'])->name('tallentor_demo.index');
Route::get('tallentor_demo/getdetails', [TallentorDemoController::class, 'getDetails'])->name('tallentor_demo.getDetails');
Route::get('tallentor_demo/edit/{id}', [TallentorDemoController::class, 'edit'])->name('tallentor_demo.edit');
Route::post('tallentor_demo/update', [TallentorDemoController::class, 'update'])->name('tallentor_demo.update');
Route::get('tallentor_demo/delete/{id}', [TallentorDemoController::class, 'destroy'])->name('tallentor_demo.destroy');

Route::get('help_category', [HelpCategoryController::class, 'index'])->name('help_category.index');
Route::post('help_category/store', [HelpCategoryController::class, 'store'])->name('help_category.store');
Route::get('help_category/getdetails', [HelpCategoryController::class, 'getdetails'])->name('help_category.getdetails');
Route::get('help_category/edit/{id}', [HelpCategoryController::class, 'edit'])->name('help_category.edit');
Route::post('help_category/update', [HelpCategoryController::class, 'update'])->name('help_category.update');
Route::get('help_category/delete/{id}', [HelpCategoryController::class, 'destroy'])->name('help_category.destroy');

Route::get('help_supports', [HelpSupportsController::class, 'index'])->name('help_supports.index');
Route::get('help_supports/create', [HelpSupportsController::class, 'create'])->name('help_supports.create');
Route::post('help_supports/store', [HelpSupportsController::class, 'store'])->name('help_supports.store');
Route::get('help_supports/getdetails', [HelpSupportsController::class, 'getdetails'])->name('help_supports.getdetails');
Route::get('help_supports/edit/{id}', [HelpSupportsController::class, 'edit'])->name('help_supports.edit');
Route::post('help_supports/update', [HelpSupportsController::class, 'update'])->name('help_supports.update');
Route::get('help_supports/delete/{id}', [HelpSupportsController::class, 'destroy'])->name('help_supports.destroy');


Route::get('ims_pro_widgets', [IMSProWidgetsController::class, 'index'])->name('ims_pro_widgets.index');
Route::get('ims_pro_widgets/getdetails', [IMSProWidgetsController::class, 'getdetails'])->name('ims_pro_widgets.getdetails');
Route::get('ims_pro_widgets/edit/{id}', [IMSProWidgetsController::class, 'edit'])->name('ims_pro_widgets.edit');
Route::get('ims_pro_widgets/endpoint_settings/{id}', [IMSProWidgetsController::class, 'endpoint_settings'])->name('ims_pro_widgets.endpoint_settings');
Route::post('ims_pro_widgets/endpoint_settings_update', [IMSProWidgetsController::class, 'endpoint_settings_update'])->name('ims_pro_widgets.endpoint_settings_update');
Route::get('ims_pro_widgets/endpoint_settings_update_null/{id}', [IMSProWidgetsController::class, 'endpoint_settings_update_null'])->name('ims_pro_widgets.endpoint_settings_update_null');

Route::get('ims_pro_widgets/all_inquiries/{id}', [IMSProWidgetsController::class, 'all_inquiries'])->name('ims_pro_widgets.all_inquiries');
Route::get('ims_pro_widgets/all_inquiries_getdetails/{id}', [IMSProWidgetsController::class, 'all_inquiries_getdetails'])->name('ims_pro_widgets.all_inquiries_getdetails');

Route::get('project_bills_getdetails/{id}', [UserProjectController::class, 'project_bills_getdetails'])->name('project_bills_getdetails');
Route::get('project_bills_backend/{id}', [UserProjectController::class, 'project_bills_backend'])->name('project_bills_backend');


Route::post('ims_pro_widgets/update', [IMSProWidgetsController::class, 'update'])->name('ims_pro_widgets.update');
Route::get('ims_pro_widgets/delete/{id}', [IMSProWidgetsController::class, 'destroy'])->name('ims_pro_widgets.destroy');


Route::get('widget_detail/{id}', [UserProjectController::class, 'widget_detail'])->name('user.widget_detail');



Route::get('widget_settings_update', [WidgetSettingController::class, 'index'])->name('widget_settings_update.index');
Route::post('widget_settings_update/update', [WidgetSettingController::class, 'update'])->name('widget_settings_update.update');


Route::get('seo_management', [SeoManagementController::class, 'index'])->name('seo_management.index');
Route::get('seo_management/getdetails', [SeoManagementController::class, 'getDetails'])->name('seo_management.getDetails');


Route::get('privacy', [PrivacyController::class, 'index'])->name('privacy.index');
Route::get('privacy/getdetails', [PrivacyController::class, 'getDetails'])->name('privacy.getDetails');
Route::get('privacy/edit/{id}', [PrivacyController::class, 'edit'])->name('privacy.edit');
Route::post('privacy/update', [PrivacyController::class, 'update'])->name('privacy.update');
Route::get('privacy/delete/{id}', [PrivacyController::class, 'destroy'])->name('privacy.destroy');


Route::get('custom_payment', [CustomPaymentController::class, 'index'])->name('custom_payment.index');
Route::get('custom_payment/create', [CustomPaymentController::class, 'create'])->name('custom_payment.create');
Route::post('custom_payment/store', [CustomPaymentController::class, 'store'])->name('custom_payment.store');
Route::get('custom_payment/getdetails', [CustomPaymentController::class, 'getdetails'])->name('custom_payment.getdetails');
Route::get('custom_payment/edit/{id}', [CustomPaymentController::class, 'edit'])->name('custom_payment.edit');
Route::get('custom_payment/view/{id}', [CustomPaymentController::class, 'view'])->name('custom_payment.view');
Route::post('custom_payment/update', [CustomPaymentController::class, 'update'])->name('custom_payment.update');
Route::get('custom_payment/delete/{id}', [CustomPaymentController::class, 'destroy'])->name('custom_payment.destroy');


