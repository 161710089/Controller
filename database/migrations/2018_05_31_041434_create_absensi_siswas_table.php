<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsensiSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absensi_siswas', function (Blueprint $table) {
            $table->increments('id');
            $table->UnsignedInteger('id_siswa');
            $table->foreign('id_siswa')->references('id')->on('siswas')->Ondelete('casade');
          
            $table->UnsignedInteger('id_kelas');
            $table->foreign('id_kelas')->references('id')->on('kelas')->Ondelete('casade');
        
            $table->date('tanggal');
            $table->string('keterangan');
          
            $table->UnsignedInteger('id_PetugasPiket');
            $table->foreign('id_PetugasPiket')->references('id')->on('Petugas_pikets')->Ondelete('casade');
        
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
        Schema::dropIfExists('absensi_siswas');
    }
}
