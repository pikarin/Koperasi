<?php

use Illuminate\Database\Migrations\Migration;

class CreateAnggotasTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('anggotas', function ($table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('no_identitas');
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->boolean('jenis_kelamin')->default(0);
            $table->string('alamat');
            $table->string('pekerjaan');
            $table->string('telepon');
            $table->date('tanggal_daftar');
            $table->string('photo');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('anggotas');
    }
}
