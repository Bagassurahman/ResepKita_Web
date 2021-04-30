<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResepTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resep', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_resep',255);
            $table->string('name',255);
            $table->string('gambar',255);
            $table->string('alat_bahan',255);
            $table->string('step',255);
            // $table->unsignedInteger('kategori_id');
            // $table->foreign('kategori_id')->references('id')->on('kategori')->onDelete('cascade');
            // $table->string('kategori_id',50, NULL);
            // $table->string('slug',255, NULL);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resep');
    }
}
