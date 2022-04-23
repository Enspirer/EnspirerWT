<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTallentorDemosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tallentor_demos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->text('time')->nullable();
            $table->text('date')->nullable();
            $table->text('phone')->nullable();
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
        Schema::dropIfExists('tallentor_demos');
    }
}
