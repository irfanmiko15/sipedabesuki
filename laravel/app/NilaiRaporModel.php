<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiRaporModel extends Model
{
    protected $table = 'tb_nilai_rapor';
    protected $fillable = [
        'id',
        'id_user',
        'nilai',
        'jenis',
        'kelas',
        'semester',
        'peringkat',
        'created_at',
        'updated_at',
    ];
}
