<?php

namespace Modules\WidgetManager\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use DB;


class WidgetManagerDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call("OthersTableSeeder");

        DB::table('whatsapp_chat_widget_templates')
        ->insert(
            [             
            'name' => 'Material',
            'description' => 'Lorem ipsum dolor sit amet, incididunt ut labore et dolore magna aliqua.', 
            'source' => '{"bubble_background_color":"#055147","bubble_icon_color":"#487662","button_color":"#79a37d","header_background_color":"#92967d","button_corner_radius":"53","custom_css":"No"}',
            'user_id' => 1,
            'status' => 'Enabled',
            ]
        ); 
        DB::table('whatsapp_chat_widget_templates')
        ->insert(
            [             
            'name' => 'Classic',
            'description' => 'Lorem ipsum dolor sit amet, incididunt ut labore et dolore magna aliqua.', 
            'source' => '{"bubble_background_color":"#b31e14","bubble_icon_color":"#ffffff","button_color":"#0224bd","header_background_color":"#92967d","button_corner_radius":"53","custom_css":"No"}',
            'user_id' => 1,
            'status' => 'Enabled',
            ]
        );


    }
}
