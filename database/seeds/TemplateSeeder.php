<?php

use Illuminate\Database\Seeder;

class TemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('whatsapp_chat_widget_templates')
        ->insert(
            [             
            'name' => 'Material',
            'description' => 'Lorem ipsum dolor sit amet, incididunt ut labore et dolore magna aliqua.', 
            'source' => '{"bubble_background_color":"#055147","bubble_icon_color":"#487662","button_color":"#79a37d","header_background_color":"#92967d","button_corner_radius":"53","custom_css":"No"}',
            'image' => 1,
            'user_id' => 1,
            'status' => 'Enabled',
            ]
        ); 
        DB::table('whatsapp_chat_widget_templates')
        ->insert(
            [             
            'name' => 'Classic',
            'description' => 'Lorem ipsum dolor sit amet, incididunt ut labore et dolore magna aliqua.', 
            'source' => '{"bubble_background_color":"#0224bd","bubble_icon_color":"#ffffff","button_color":"#b31e14","header_background_color":"#92967d","button_corner_radius":"53","custom_css":"No"}',
            'image' => 1,
            'user_id' => 1,
            'status' => 'Enabled',
            ]
        ); 
    }
}
