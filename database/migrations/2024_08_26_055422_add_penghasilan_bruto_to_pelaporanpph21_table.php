<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPenghasilanBrutoToPelaporanpph21Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pelaporanpph21', function (Blueprint $table) {
            $table->decimal('penghasilan_bruto', 15, 2)->after('alamat')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pelaporanpph21', function (Blueprint $table) {
            $table->dropColumn('penghasilan_bruto');
        });
    }
}
