<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIMSProUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('i_m_s_pro_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('project_id');
            $table->text('widget_id');
            $table->text('name');
            $table->text('email');
            $table->text('phone_number');
            $table->text('role');
            $table->text('password');
            $table->text('status');
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
        Schema::dropIfExists('i_m_s_pro_users');
    }
}
