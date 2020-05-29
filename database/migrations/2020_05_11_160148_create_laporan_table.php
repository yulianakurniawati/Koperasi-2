<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rincian');
            $table->integer('saldo_masuk')->nullable();
            $table->integer('saldo_keluar')->nullable();
            $table->integer('saldo_akhir')->nullable();
            $table->string('bulan');
            $table->integer('masuk_simpanan_id')->nullable();
            $table->integer('masuk_angsuran_id')->nullable();
            $table->integer('keluar_pinjaman_id')->nullable();
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
        Schema::dropIfExists('laporan');
    }
}
