<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreColumnsToProjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->text('package_available_days')->nullable()->after('project_type');
            $table->text('selected_package')->nullable()->after('project_type');
            $table->text('package_starting_date')->nullable()->after('project_type');
            $table->text('package_type')->nullable()->after('project_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn('package_available_days');
            $table->dropColumn('selected_package');
            $table->dropColumn('package_starting_date');
            $table->dropColumn('package_type');
        });
    }
}
