<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImsProClientMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ims_pro_client_messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('phone_number')->nullable();
            $table->text('name')->nullable();
            $table->text('type')->nullable();
            $table->text('email')->nullable();
            $table->text('status')->nullable();
            $table->text('project_id')->nullable();
            $table->text('widget_id')->nullable();
            $table->text('facebook_user_name')->nullable();
            $table->text('message')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ims_pro_client_messages');
    }
}
