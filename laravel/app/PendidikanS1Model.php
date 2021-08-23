<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PendidikanS1Model extends Model
{
    protected $table = 'tb_pendidikan_s1';
    protected $fillable = [
        'id',
        'id_user',
        'universitas',
        'fakultas',
        'id_jurusan',
        'prodi',
        'penerimaan',
        'created_at',
        'updated_at'
    ];
}
