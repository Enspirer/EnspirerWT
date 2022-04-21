<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToImsProClientMessages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ims_pro_client_messages', function (Blueprint $table) {
            $table->text('is_media')->nullable()->after('user_id');
            $table->text('media_ids')->nullable()->after('user_id');
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
            $table->dropColumn('is_media');
            $table->dropColumn('media_ids');
        });
    }
}
