<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('foto')->default('default.png');
          $table->string('kelas')->default("Kelas 10");
          $table->string('email',120)->unique();
          $table->timestamp('email_verified_at')->nullable();
          $table->string('password');
          $table->string('status')->default("belum Mengisi Form");
          $table->string('api_token')->nullable();
          $table->string('id_perusahaan')->nullable();
          $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
