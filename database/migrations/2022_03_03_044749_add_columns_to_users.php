<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->text('country')->nullable()->after('email');
            $table->text('zip_code')->nullable()->after('email');
            $table->text('province')->nullable()->after('email');
            $table->text('city')->nullable()->after('email');
            $table->text('address')->nullable()->after('email');
            $table->text('contact_number')->nullable()->after('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('country');
            $table->dropColumn('zip_code');
            $table->dropColumn('province');
            $table->dropColumn('city');
            $table->dropColumn('address');
            $table->dropColumn('contact_number');
        });
    }
}
