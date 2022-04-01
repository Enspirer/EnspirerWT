<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImsProContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ims_pro_contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('project_id')->nullable();
            $table->text('user_id')->nullable();
            $table->text('phone_number')->nullable();
            $table->text('name');
            $table->text('address')->nullable();
            $table->text('email')->nullable();
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
        Schema::dropIfExists('ims_pro_contacts');
    }
}
