<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Nis')->unique();
            $table->string('Nama');
            $table->UnsignedInteger('id_kelas');
            $table->foreign('id_kelas')->references('id')->on('kelas')->Ondelete('casade');
            $table->string('jk');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->text('alamat');
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
        Schema::dropIfExists('siswas');
    }
}
