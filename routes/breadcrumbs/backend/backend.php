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

Breadcrumbs::for('admin.default_whatsapp_server', function ($trail) {
    $trail->push('Default Whatsapp Server', route('admin.default_whatsapp_server'));
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
Breadcrumbs::for('admin.ims_pro_widgets.all_inquiries', function ($trail) {
    $trail->push('All Inquiries', route('admin.ims_pro_widgets.all_inquiries',1));
});



Breadcrumbs::for('admin.auth.user.project_detail', function ($trail) {
    $trail->push('User Projects', route('admin.auth.user.project_detail',1));
});
Breadcrumbs::for('admin.user.widget_detail', function ($trail) {
    $trail->push('Widgets', route('admin.user.widget_detail',1));
});

Breadcrumbs::for('admin.auth.user.project_bills', function ($trail) {
    $trail->push('Project Bills', route('admin.auth.user.project_bills',1));
});
Breadcrumbs::for('admin.project_bills_backend', function ($trail) {
    $trail->push('Paid Invoices', route('admin.project_bills_backend',1));
});


Breadcrumbs::for('admin.tallentor_demo.index', function ($trail) {
    $trail->push('Tallentor Demo', route('admin.tallentor_demo.index'));
});
Breadcrumbs::for('admin.tallentor_demo.edit', function ($trail) {
    $trail->push('Edit', route('admin.tallentor_demo.edit',1));
});

Breadcrumbs::for('admin.projects.bots', function ($trail) {
    $trail->push('Bots', route('admin.projects.bots',1));
});
Breadcrumbs::for('admin.projects.bots_edit', function ($trail) {
    $trail->push('Edit Bots', route('admin.projects.bots_edit',1));
});


Breadcrumbs::for('admin.seo_management.index', function ($trail) {
    $trail->push('SEO Management', route('admin.seo_management.index'));
});

Breadcrumbs::for('admin.privacy.index', function ($trail) {
    $trail->push('Privacy', route('admin.privacy.index'));
});
Breadcrumbs::for('admin.privacy.edit', function ($trail) {
    $trail->push('Edit', route('admin.privacy.edit',1));
});