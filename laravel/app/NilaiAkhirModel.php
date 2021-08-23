<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NilaiAkhirModel extends Model
{
    protected $table = 'tb_nilai_akhir';
    protected $fillable = [
        'id',
        'id_user',
        'PA1',
        'PA2',
        'PA3',
        'PA4',
        'TT1',
        'KK1',
        'KK2',
        'KK3',
        'KK4',
        'KK5',
        'KK6',
        'total_PA',
        'total_TT',
        'total_KK',
        'total_nilai'
    ];
}
