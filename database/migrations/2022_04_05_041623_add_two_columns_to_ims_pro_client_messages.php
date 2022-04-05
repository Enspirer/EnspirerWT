<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTwoColumnsToImsProClientMessages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ims_pro_client_messages', function (Blueprint $table) {
            $table->text('user_type')->nullable()->after('facebook_user_name');
            $table->text('core_type')->nullable()->after('facebook_user_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ims_pro_client_messages', function (Blueprint $table) {
            $table->dropColumn('user_type');
            $table->dropColumn('core_type');
        });
    }
}
