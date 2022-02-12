<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});

Breadcrumbs::for('admin.module.index', function ($trail) {
    $trail->push('Module Explorer', route('admin.module.index'));
});

require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';

Breadcrumbs::for('admin.file_manager.index', function ($trail) {
    $trail->push('File Manager', route('admin.file_manager.index'));
});

Breadcrumbs::for('admin.settings.index', function ($trail) {
    $trail->push('General Settings', route('admin.settings.index'));
});

Breadcrumbs::for('admin.about_us', function ($trail) {
    $trail->push('About Us', route('admin.about_us'));
});

Breadcrumbs::for('admin.privacy_policy', function ($trail) {
    $trail->push('Privacy Policy', route('admin.privacy_policy'));
});

Breadcrumbs::for('admin.terms_and_conditions', function ($trail) {
    $trail->push('Terms and Conditions', route('admin.terms_and_conditions'));
});

Breadcrumbs::for('admin.contactus_thanks', function ($trail) {
    $trail->push('Contact Us Thanks Email', route('admin.contactus_thanks'));
});

Breadcrumbs::for('admin.projects.index', function ($trail) {
    $trail->push('Projects', route('admin.projects.index'));
});
Breadcrumbs::for('admin.projects.create', function ($trail) {
    $trail->push('Create Project', route('admin.projects.create'));
});
Breadcrumbs::for('admin.projects.show', function ($trail) {
    $trail->push('Show Project', route('admin.projects.show',1));
});
Breadcrumbs::for('admin.projects.edit', function ($trail) {
    $trail->push('Edit Project', route('admin.projects.edit',1));
});

Breadcrumbs::for('admin.project_type.index', function ($trail) {
    $trail->push('Propject Type', route('admin.project_type.index'));
});
Breadcrumbs::for('admin.project_type.create', function ($trail) {
    $trail->push('Create Propject Type', route('admin.project_type.create'));
});
Breadcrumbs::for('admin.project_type.edit', function ($trail) {
    $trail->push('Edit Propject Type', route('admin.project_type.edit',1));
});