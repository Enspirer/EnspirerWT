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
use App\Http\Controllers\Frontend\TestController;


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

Route::get('projects', [ProjectsController::class, 'index'])->name('projects.index');
Route::get('projects/create', [ProjectsController::class, 'create'])->name('projects.create');
Route::get('projects/show/{id}', [ProjectsController::class, 'show'])->name('projects.show');
Route::post('projects/store', [ProjectsController::class, 'store'])->name('projects.store');
Route::get('projects/getdetails', [ProjectsController::class, 'getdetails'])->name('projects.getdetails');
Route::get('projects/edit/{id}', [ProjectsController::class, 'edit'])->name('projects.edit');
Route::post('projects/update', [ProjectsController::class, 'update'])->name('projects.update');
Route::get('projects/delete/{id}', [ProjectsController::class, 'destroy'])->name('projects.destroy');
Route::get('projects/seo_report/{id}', [ProjectsController::class, 'seo_report'])->name('projects.seo_report');


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

