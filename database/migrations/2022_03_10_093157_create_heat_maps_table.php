<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeatMapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heat_maps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('ip_address');
            $table->text('position');
            $table->text('widget_id');
            $table->text('url');
            $table->text('project_id');
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
        Schema::dropIfExists('heat_maps');
    }
}
