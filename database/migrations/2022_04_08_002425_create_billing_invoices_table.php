<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillingInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billing_invoices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('project_id');
            $table->text('purchased_package')->nullable();
            $table->text('price')->nullable();
            $table->text('payment_plan')->nullable()->comment('monthly or annually');
            $table->text('payment_method')->nullable();
            $table->text('expire_date')->nullable();
            $table->text('user_id')->nullable();
            $table->text('phone_number')->nullable();
            $table->text('address')->nullable();
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
        Schema::dropIfExists('billing_invoices');
    }
}
