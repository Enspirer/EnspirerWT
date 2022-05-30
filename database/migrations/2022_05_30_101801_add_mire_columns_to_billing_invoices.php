<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMireColumnsToBillingInvoices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('billing_invoices', function (Blueprint $table) {
            $table->text('name')->nullable()->after('project_id');
            $table->text('country')->nullable()->after('project_id');
            $table->text('city')->nullable()->after('project_id');
            $table->text('state')->nullable()->after('project_id');
            $table->text('invoice_no')->nullable()->after('project_id');
            $table->text('date')->nullable()->after('project_id');
            $table->text('discount')->nullable()->after('project_id');
            $table->text('discount_type')->nullable()->comment('Flat or Percentage')->after('project_id');
            $table->text('purchased_service_list')->nullable()->after('project_id');
            $table->text('payment_status')->nullable()->after('project_id');
            $table->text('due_date')->nullable()->after('project_id');
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
            $table->dropColumn('name');
            $table->dropColumn('country');
            $table->dropColumn('city');
            $table->dropColumn('state');
            $table->dropColumn('invoice_no');
            $table->dropColumn('date');
            $table->dropColumn('total_amount');
            $table->dropColumn('discount');
            $table->dropColumn('discount_type');
            $table->dropColumn('purchased_service_list');
            $table->dropColumn('payment_status');
            $table->dropColumn('contact_number');
            $table->dropColumn('due_date');
        });
    }
}
