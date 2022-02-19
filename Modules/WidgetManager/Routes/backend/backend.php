<?php

Route::get('whatsappchat_widget', 'WhatsappChatWidgetTemplateController@index')->name('whatsappchat_widget.index');
Route::get('whatsappchat_widget/create', 'WhatsappChatWidgetTemplateController@create')->name('whatsappchat_widget.create');
Route::post('whatsappchat_widget/store', 'WhatsappChatWidgetTemplateController@store')->name('whatsappchat_widget.store');
Route::get('whatsappchat_widget/getdetails', 'WhatsappChatWidgetTemplateController@getdetails')->name('whatsappchat_widget.getdetails');
Route::get('whatsappchat_widget/edit/{id}', 'WhatsappChatWidgetTemplateController@edit')->name('whatsappchat_widget.edit');
Route::post('whatsappchat_widget/update', 'WhatsappChatWidgetTemplateController@update')->name('whatsappchat_widget.update');
Route::get('whatsappchat_widget/delete/{id}', 'WhatsappChatWidgetTemplateController@destroy')->name('whatsappchat_widget.destroy');

Route::get('ims/{id}', 'ImsClientsController@index')->name('ims.index');
Route::get('ims/create/{id}', 'ImsClientsController@create')->name('ims.create');
Route::post('ims/store', 'ImsClientsController@store')->name('ims.store');
Route::get('ims/getdetails/{id}', 'ImsClientsController@getdetails')->name('ims.getdetails');
Route::get('ims/edit/{id}', 'ImsClientsController@edit')->name('ims.edit');
Route::post('ims/update', 'ImsClientsController@update')->name('ims.update');
Route::get('ims/delete/{id}', 'ImsClientsController@destroy')->name('ims.destroy');



