<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImsProFileManagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ims_pro_file_managers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('project_id')->nullable();
            $table->text('port_number')->nullable();
            $table->text('file_name')->nullable();
            $table->text('file_path')->nullable();
            $table->text('user_id')->nullable();
            $table->text('message_id')->nullable();
            $table->text('extension')->nullable();
            $table->text('media_type')->nullable();
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
        Schema::dropIfExists('ims_pro_file_managers');
    }
}
