<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJemaatFamiliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jemaat_families', function (Blueprint $table) {
            $table->id();
            $table->integer('jemaat_id');
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
            $table->string('status_jemaat')->nullable(); // SIMPATISAN, ANGGOTA, BUKAN-ANGGOTA
            $table->integer('status_jemaat_id')->nullable(); // bila keluarga jemaat ini adalah anggota jemaat atau simpatisan, maka nilai ini diisi dengan id-jemaat pada table jemaat
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
        Schema::dropIfExists('jemaat_families');
    }
}
