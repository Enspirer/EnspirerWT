<?php



// Switch between the included languages

/*
 * Frontend Routes
 * Namespaces indicate folder structure
 */
Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function () {
    include_route_files(__DIR__.'/frontend/');
});

/*
 * Backend Routes
 * Namespaces indicate folder structure
 */
Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    /*
     * These routes need view-backend permission
     * (good if you want to allow more than one group in the backend,
     * then limit the backend features by different roles or permissions)
     *
     * Note: Administrator has all permissions so you do not have to specify the administrator role everywhere.
     * These routes can not be hit if the password is expired
     */
    include_route_files(__DIR__.'/backend/');
});

Breadcrumbs::for('admin.whatsappchat_widget.index', function ($trail) {
    $trail->push('Whatsapp Chat Widget', route('admin.whatsappchat_widget.index'));
});
Breadcrumbs::for('admin.whatsappchat_widget.create', function ($trail) {
    $trail->push('Create Whatsapp Chat Widget', route('admin.whatsappchat_widget.create'));
});
Breadcrumbs::for('admin.whatsappchat_widget.edit', function ($trail) {
    $trail->push('Edit Whatsapp Chat Widget', route('admin.whatsappchat_widget.edit',1));
});

Breadcrumbs::for('admin.projects.seo_report', function ($trail) {
    $trail->push('SEO Report', route('admin.projects.seo_report',1));
});