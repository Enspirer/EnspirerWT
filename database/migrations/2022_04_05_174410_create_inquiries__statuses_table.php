<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInquiriesStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inquiries__statuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('project_id')->nullable();
            $table->text('widget_id')->nullable();
            $table->text('phone_number')->nullable();
            $table->text('assign_user')->nullable();
            $table->text('assign_user_type')->nullable();
            $table->text('status')->nullable();
            $table->text('bookmarked_messages')->nullable();
            $table->text('company')->nullable();
            $table->text('role')->nullable();
            $table->text('email')->nullable();
            $table->text('tags')->nullable();
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
        Schema::dropIfExists('inquiries__statuses');
    }
}
