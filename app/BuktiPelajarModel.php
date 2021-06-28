<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuktiPelajarModel extends Model
{
    protected $table = 'tb_bukti_pelajar';
    protected $fillable = [
        'id',
        'id_user',
        'nama_file',
        'created_at',
        'updated_at',
    ];
}
