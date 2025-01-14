<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pelaporanpph21', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('npwp', 20);
            $table->text('alamat');
            $table->text('penghasilan_bruto');
            $table->text('ptkp');
            $table->text('tarif_pajak');
            $table->text('nominal_pajak');
            $table->date('masa_pajak');
            $table->string('status', 50);
            $table->text('bukti_potong')->nullable();
            $table->text('dokumen_lain')->nullable();
            $table->string('payment_status')->nullable();
            $table->string('payment_id')->nullable();
            $table->timestamps();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pelaporanpph21', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });
        Schema::dropIfExists('pelaporanpph21');
    }
};
