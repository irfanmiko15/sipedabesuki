<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrangTuaModel extends Model
{
    protected $table = 'tb_data_orang_tua';
    protected $fillable = [
        'id',
        'id_user',
        'nama',
        'jenis',
        'tempat_lahir',
        'tanggal_lahir',
        'no_telp',
        'penghasilan',
        'alamat',
        'pekerjaan',
        'created_at',
        'updated_at',
        
       
    ];
}
