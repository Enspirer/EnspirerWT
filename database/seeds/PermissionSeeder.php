<?php

use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')
            ->insert(
                [
                    'name' => 'widget_lite',
                    'guard_name' => 'web',
                ]
            );

        DB::table('permissions')
            ->insert(
                [
                    'name' => 'widget_pro',
                    'guard_name' => 'web',
                ]
            );

        DB::table('permissions')
            ->insert(
                [
                    'name' => 'optimizer',
                    'guard_name' => 'web',
                ]
            );

        DB::table('permissions')
            ->insert(
                [
                    'name' => 'seo',
                    'guard_name' => 'web',
                ]
            );
        DB::table('permissions')
            ->insert(
                [
                    'name' => 'realtime',
                    'guard_name' => 'web',
                ]
            );
        DB::table('permissions')
            ->insert(
                [
                    'name' => 'analytics_center',
                    'guard_name' => 'web',
                ]
            );
        DB::table('permissions')
            ->insert(
                [
                    'name' => 'heatmap',
                    'guard_name' => 'web',
                ]
            );
        DB::table('permissions')
            ->insert(
                [
                    'name' => 'security',
                    'guard_name' => 'web',
                ]
            );

        DB::table('permissions')
            ->insert(
                [
                    'name' => 'ims_pro',
                    'guard_name' => 'web',
                ]
            );

        DB::table('permissions')
            ->insert(
                [
                    'name' => 'seo_bot',
                    'guard_name' => 'web',
                ]
            );
    }
}
