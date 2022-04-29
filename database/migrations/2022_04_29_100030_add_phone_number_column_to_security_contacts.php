<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPhoneNumberColumnToSecurityContacts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('security_contacts', function (Blueprint $table) {
            $table->text('phone_number')->nullable()->after('technology');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('security_contacts', function (Blueprint $table) {
            $table->dropColumn('phone_number');
        });
    }
}
