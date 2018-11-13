<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListKunjinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('list_kunjins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_ketua');
            $table->string('anggota_1');
            $table->string('anggota_2');
            $table->string('anggota_3');
            $table->string('anggota_4');
            $table->string('anggota_5');
            $table->string('anggota_6');
            $table->string('anggota_7');
            $table->string('anggota_8');
            $table->string('anggota_9');
            $table->string('anggota_10')->nullable();
            $table->string('anggota_11')->nullable();
            $table->string('anggota_12')->nullable();
            $table->string('anggota_13')->nullable();
            $table->integer('perusahaan')->default(0);
            $table->string('kelas');
            $table->date('tanggal_keberangkatan');
            $table->string('ssemail');
            $table->string('pembimbing');
            $table->string('status')->default("Menungu konformasi");


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
        Schema::dropIfExists('list_kunjins');
    }
}
