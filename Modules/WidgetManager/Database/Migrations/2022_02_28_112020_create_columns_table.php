<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColumnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ims_clients', function (Blueprint $table) {
            $table->text('status')->nullable()->after('assign_by');
            $table->text('action_taken')->nullable()->after('assign_by');
            $table->text('comment')->nullable()->after('assign_by');
            $table->text('manager_comment')->nullable()->after('assign_by');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ims_clients', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->dropColumn('action_taken');
            $table->dropColumn('comment');
            $table->dropColumn('manager_comment');
        });
    }
}
