<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeluaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keluaran', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('jenis');
            $table->integer('saldo_pinjam');
            $table->date('tanggal');
            $table->string('bulan');
            $table->integer('pinjaman_id')->nullable();
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
        Schema::dropIfExists('keluaran');
    }
}
