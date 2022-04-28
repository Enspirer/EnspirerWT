<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreColumnsToSeoBots extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('seo_bots', function (Blueprint $table) {
            $table->text('subtotal')->nullable()->after('total_score');
            $table->text('discount')->nullable()->after('total_score');
            $table->text('taxes_fees')->nullable()->after('total_score');
            $table->text('total')->nullable()->after('total_score');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('seo_bots', function (Blueprint $table) {
            $table->dropColumn('subtotal');
            $table->dropColumn('discount');
            $table->dropColumn('taxes_fees');
            $table->dropColumn('total');
        });
    }
}
