<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('jenis_kelamin')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('agama')->nullable();
            $table->string('alamat_kk')->nullable();
            $table->string('no_telp')->nullable();
            $table->foreignId('asal_sekolah')->nullable()->constrained('tb_sekolah')->onDelete('cascade')->onUpdate('cascade');
            $table->string('alamat_user')->nullable();
            $table->string('role');
            $table->string('tahun_penerimaan')->nullable();
            $table->string('seleksi_berkas')->nullable();
            $table->string('seleksi_akhir')->nullable();
            $table->string('status_user')->nullable();
            $table->date('tanggal_wawancara')->nullable();
            $table->time('jam_wawancara')->nullable();
            $table->string('pic_wawancara')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
