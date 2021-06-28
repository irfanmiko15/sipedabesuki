<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbDataRumahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_data_rumah', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('kepemilikan');
            $table->string('luas_bangunan');
            $table->string('luas_tanah');
            $table->string('jumlah_orang');
            $table->string('sumber_air');
            $table->string('sumber_listrik');
            $table->string('value_listrik');
            $table->string('transportasi_harian');
            $table->string('value_transportasi');
            $table->string('lama_menetap');
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
        Schema::dropIfExists('tb_data_rumah');
    }
}
