<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeoBotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seo_bots', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('project_id');
            $table->text('activated_bot_count')->nullable();
            $table->text('starting_time')->nullable();
            $table->text('ending_time')->nullable();
            $table->text('total_score')->nullable();
            $table->text('bot_type')->nullable();
            $table->text('status')->nullable();
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
        Schema::dropIfExists('seo_bots');
    }
}
