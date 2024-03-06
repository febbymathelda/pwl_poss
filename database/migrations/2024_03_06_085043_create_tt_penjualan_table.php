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
        Schema::create('tt_penjualann', function (Blueprint $table) {
            $table->unsignedBigInteger('penjualan_id', 20);
            $table->unsignedBigInteger('users_id')->index();
            $table->string('pembeli', 50);
            $table->string('penjualan_kode', 20);
            $table->date('penjualan_tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tt_penjualann');
    }
};