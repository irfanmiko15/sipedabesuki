<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JadwalWawancaraModel extends Model
{
    protected $table = 'tb_wawancara';
    protected $fillable = [
        'id',
        'id_user',
        'tanggal_wawancara',
        'jam_wawancara',
        'created_at',
        'updated_at'
       
    ];
}
