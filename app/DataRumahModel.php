<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataRumahModel extends Model
{
    protected $table = 'tb_data_rumah';
    protected $fillable = [
        'id',
        'id_user',
        'kepemilikan',
        'luas_bangunan',
        'luas_tanah',
        'jumlah_orang',
        'sumber_air',
        'sumber_listrik',
        'value_listrik',
        'transportasi_harian',
        'value_transportasi',
        'lama_menetap',
        'created_at'
    ];
}
