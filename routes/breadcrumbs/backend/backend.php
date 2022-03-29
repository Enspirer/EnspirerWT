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

Breadcrumbs::for('admin.contact_us.index', function ($trail) {
    $trail->push('Contact Us', route('admin.contact_us.index'));
});
Breadcrumbs::for('admin.contact_us.edit', function ($trail) {
    $trail->push('Edit', route('admin.contact_us.edit',1));
});

Breadcrumbs::for('admin.help_category.index', function ($trail) {
    $trail->push('Category', route('admin.help_category.index'));
});
Breadcrumbs::for('admin.help_category.edit', function ($trail) {
    $trail->push('Edit Category', route('admin.help_category.edit',1));
});

Breadcrumbs::for('admin.help_supports.index', function ($trail) {
    $trail->push('Help & Supports', route('admin.help_supports.index'));
});
Breadcrumbs::for('admin.help_supports.create', function ($trail) {
    $trail->push('Create Help & Support', route('admin.help_supports.create'));
});
Breadcrumbs::for('admin.help_supports.edit', function ($trail) {
    $trail->push('Edit Help & Support', route('admin.help_supports.edit',1));
});

Breadcrumbs::for('admin.projects.widget_manager', function ($trail) {
    $trail->push('Widgets Manager', route('admin.projects.widget_manager',1));
});
Breadcrumbs::for('admin.projects.widget_manager.create', function ($trail) {
    $trail->push('Create Widget Manager', route('admin.projects.widget_manager.create',1));
});
Breadcrumbs::for('admin.projects.widget_manager.edit', function ($trail) {
    $trail->push('Edit Widget Manager', route('admin.projects.widget_manager.edit',1));
});
Breadcrumbs::for('admin.projects.widget_manager.settings', function ($trail) {
    $trail->push('Widget Manager Settings', route('admin.projects.widget_manager.settings',1));
});


Breadcrumbs::for('admin.ims_pro_widgets.index', function ($trail) {
    $trail->push('IMS Pro Widgets', route('admin.ims_pro_widgets.index'));
});
Breadcrumbs::for('admin.ims_pro_widgets.edit', function ($trail) {
    $trail->push('IMS Pro Widgets Edit', route('admin.ims_pro_widgets.edit',1));
});



Breadcrumbs::for('admin.widget_settings_update.index', function ($trail) {
    $trail->push('Widget Settings Update', route('admin.widget_settings_update.index'));
});
Breadcrumbs::for('admin.ims_pro_widgets.endpoint_settings', function ($trail) {
    $trail->push('End Point Settings', route('admin.ims_pro_widgets.endpoint_settings',1));
});