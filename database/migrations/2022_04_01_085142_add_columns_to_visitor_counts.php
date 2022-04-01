<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToVisitorCounts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('visitor_counts', function (Blueprint $table) {
            $table->text('iso_code')->nullable()->after('ip_address');
            $table->text('city')->nullable()->after('ip_address');
            $table->text('country')->nullable()->after('ip_address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('visitor_counts', function (Blueprint $table) {
            $table->dropColumn('iso_code');
            $table->dropColumn('city');
            $table->dropColumn('country');
        });
    }
}
