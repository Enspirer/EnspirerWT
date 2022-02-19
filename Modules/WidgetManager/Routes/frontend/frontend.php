<?php

    /*
    * Frontend Prefix: blog
    * Author: Enspirer
    * Description: Blog Modules,
    */


Route::get('whatsapp_widget/{id}/tallentorw.js', 'WidgetController@index')->name('widgetController.index');
Route::post('whatsapp_widget/redirection', 'WidgetController@save_client')->name('save_client');
