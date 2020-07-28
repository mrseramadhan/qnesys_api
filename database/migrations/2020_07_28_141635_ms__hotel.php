<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MsHotel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Ms_Hotel', function (Blueprint $table) {
            $table->integerIncrements('id_hotel');
            $table->integer('id_perusahaan')->unsigned()->nullable(true);
            $table->string('nama_hotel',100);
            $table->string('alamat_hotel',255);
            $table->string('telepon_hotel',40);
            $table->smallInteger('kode_pos')->unsigned();
            $table->integer('kode_provinsi')->unsigned()->index();
            $table->integer('kode_kabupaten')->unsigned()->index();
            $table->integer('kode_kelurahan')->unsigned()->index();
            $table->bigInteger('npwp');
            $table->boolean('pkp_npkp')->default(false);
            $table->string('koordinat_map',50);
            $table->string('pict_map',50);
            $table->string('logo_hotel',50);
            $table->string('wallpaper',50);
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
        Schema::dropIfExists('Ms_Hotel');
    }
}
