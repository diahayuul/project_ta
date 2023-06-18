<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user');
            $table->string('asal_sekolah');
            $table->string('alamat');
            $table->foreignId('id_program');
            $table->enum('jenis_pembayaran', ['Transfer Bank', 'Cash']);
            $table->enum('status', ['Belum Diverifikasi', 'Sudah Diverifikasi'])->default('Belum Diverifikasi');
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
        Schema::dropIfExists('pendaftars');
    }
}
