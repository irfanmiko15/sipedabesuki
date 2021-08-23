<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbNilaiAkhirTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_nilai_akhir', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('PA1')->nullable();
            $table->string('PA2')->nullable();
            $table->string('PA3')->nullable();
            $table->string('PA4')->nullable();
            $table->string('TT1')->nullable();
            $table->string('KK1')->nullable();
            $table->string('KK2')->nullable();
            $table->string('KK3')->nullable();
            $table->string('KK4')->nullable();
            $table->string('KK5')->nullable();
            $table->string('KK6')->nullable();
            $table->string('total_PA')->nullable();
            $table->string('total_TT')->nullable();
            $table->string('total_KK')->nullable();
            $table->string('total_nilai')->nullable();
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
        Schema::dropIfExists('tb_nilai_akhir');
    }
}
