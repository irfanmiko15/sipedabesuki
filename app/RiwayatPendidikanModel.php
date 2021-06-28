<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RiwayatPendidikanModel extends Model
{
    protected $table = 'tb_riwayat_pendidikan';
    protected $fillable = [
        'id',
        'id_user',
        'jenjang',
        'nama_sekolah',
        'lokasi',
        'tahun_lulus',
        'created_at',
        'updated_at'
    ];
}
