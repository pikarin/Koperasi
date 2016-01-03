<?php

use Illuminate\Database\Migrations\Migration;

class CreateSimpanansTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('simpanans', function ($table) {
          $table->increments('id');
          $table->integer('user_id');
          $table->integer('anggota_id');
          $table->integer('simpanan_wajib');
          $table->integer('simpanan_sukarela');
          $table->date('tanggal_pembayaran');

      });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('simpanans');
    }
}
