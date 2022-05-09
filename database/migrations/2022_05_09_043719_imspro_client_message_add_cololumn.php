<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ImsproClientMessageAddCololumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ims_pro_client_messages', function (Blueprint $table) {
            $table->text('message_id')->nullable()->after('is_media');
            $table->text('notify_name')->nullable()->after('user_id');
            $table->text('json_details')->nullable()->after('user_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
