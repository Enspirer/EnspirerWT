<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitorCountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitor_counts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('project_id');
            $table->text('widget_id');
            $table->text('ip_address');
            $table->text('country')->nullable();
            $table->text('city')->nullable();
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
        Schema::dropIfExists('visitor_counts');
    }
}
