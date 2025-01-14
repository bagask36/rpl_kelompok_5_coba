<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPaymentColumnsToPelaporanpph21Table extends Migration
{
    public function up()
    {
        Schema::table('pelaporanpph21', function (Blueprint $table) {
            $table->string('payment_status')->nullable()->after('nominal_pajak');
            $table->string('payment_id')->nullable()->after('payment_status');
        });
    }

    public function down()
    {
        Schema::table('pelaporanpph21', function (Blueprint $table) {
            $table->dropColumn(['payment_status', 'payment_id']);
        });
    }
}
