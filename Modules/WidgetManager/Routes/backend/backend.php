<?php

Route::get('whatsappchat_widget', 'WhatsappChatWidgetTemplateController@index')->name('whatsappchat_widget.index');
Route::get('whatsappchat_widget/create', 'WhatsappChatWidgetTemplateController@create')->name('whatsappchat_widget.create');
Route::post('whatsappchat_widget/store', 'WhatsappChatWidgetTemplateController@store')->name('whatsappchat_widget.store');
Route::get('whatsappchat_widget/getdetails', 'WhatsappChatWidgetTemplateController@getdetails')->name('whatsappchat_widget.getdetails');
Route::get('whatsappchat_widget/edit/{id}', 'WhatsappChatWidgetTemplateController@edit')->name('whatsappchat_widget.edit');
Route::post('whatsappchat_widget/update', 'WhatsappChatWidgetTemplateController@update')->name('whatsappchat_widget.update');
Route::get('whatsappchat_widget/delete/{id}', 'WhatsappChatWidgetTemplateController@destroy')->name('whatsappchat_widget.destroy');




