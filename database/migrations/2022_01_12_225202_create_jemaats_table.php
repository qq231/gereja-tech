<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJemaatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jemaats', function (Blueprint $table) {
            $table->id();
            $table->string('photo')->nullable();
            $table->string('nama_lengkap')->nullable();
            $table->tinyInteger('kelamin')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->string('alamat')->nullable();
            $table->string('kab_kota')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('mobile_phone')->nullable();
            $table->string('wa')->nullable();
            $table->string('fb')->nullable();
            $table->string('line')->nullable();
            $table->string('instagram')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->boolean('status_pernikahan')->default(false); // false: belum-menikah, true: sudah-menikah
            $table->integer('parent_id')->nullable();
            $table->boolean('has_family')->default(false);
            $table->string('pendidikan')->nullable();
            $table->string('status_jemaat')->nullable(); // SIMPATISAN, ANGGOTA
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
        Schema::dropIfExists('jemaats');
    }
}
