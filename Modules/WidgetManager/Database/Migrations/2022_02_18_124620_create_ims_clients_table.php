<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImsClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ims_clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('project_id');
            $table->text('widget_id');
            $table->text('client_name');
            $table->text('client_email');
            $table->text('message')->nullable();
            $table->text('ip_address')->nullable();
            $table->text('assign_by')->nullable();
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
        Schema::dropIfExists('ims_clients');
    }
}
