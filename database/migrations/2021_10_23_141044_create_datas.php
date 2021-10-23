<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datas', function (Blueprint $table) {
                    $table->bigIncrements('id');
                    $table->string('nomor_surat');
                    $table->BigInteger('id_kategori');
                    $table->foreign('id_kategori')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
                    $table->string('judul');
                    $table->date('tanggal_arsip');
                    $table->string('surat');
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
        Schema::dropIfExists('datas');
    }
}
