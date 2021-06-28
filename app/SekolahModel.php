<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SekolahModel extends Model
{
    protected $table = 'tb_sekolah';
    protected $fillable = [
        'id',
        'nama_sekolah',
        'alamat',
        'no_telp',
       
    ];
}
