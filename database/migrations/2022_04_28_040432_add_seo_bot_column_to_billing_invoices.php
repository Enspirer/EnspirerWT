<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSeoBotColumnToBillingInvoices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('billing_invoices', function (Blueprint $table) {
            $table->text('is_purchased_seo_bots_id')->nullable()->after('purchased_package');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('billing_invoices', function (Blueprint $table) {
            $table->dropColumn('is_purchased_seo_bots_id');
        });
    }
}
