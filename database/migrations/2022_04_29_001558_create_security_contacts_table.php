<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSecurityContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('security_contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('project_id')->nullable();
            $table->text('user_id')->nullable();
            $table->text('status')->nullable();
            $table->text('package')->nullable();
            $table->text('technology')->nullable();
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
        Schema::dropIfExists('security_contacts');
    }
}
