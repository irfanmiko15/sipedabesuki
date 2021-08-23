<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrestasiModel extends Model
{
    protected $table = 'tb_prestasi';
    protected $fillable = [
        'id',
        'id_user',
        'prestasi',
        'tingkat',
        'tahun',
        'bukti'
       
    ];
}
