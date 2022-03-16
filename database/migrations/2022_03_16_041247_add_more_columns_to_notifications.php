<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreColumnsToNotifications extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('notifications', function (Blueprint $table) {
            $table->text('status')->nullable()->after('id');
            $table->text('icon')->nullable()->after('id');
            $table->text('url')->nullable()->after('id');
            $table->text('user_id')->nullable()->after('id');
            $table->text('description')->nullable()->after('id');
            $table->text('title')->nullable()->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('notifications', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->dropColumn('icon');
            $table->dropColumn('url');
            $table->dropColumn('user_id');
            $table->dropColumn('description');
            $table->dropColumn('title');
        });
    }
}
