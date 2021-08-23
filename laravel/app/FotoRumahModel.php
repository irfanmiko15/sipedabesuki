<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FotoRumahModel extends Model
{
    protected $table = 'tb_foto_rumah';
    protected $fillable = [
        'id',
        'id_user',
        'jenis',
        'nama_file',
        'created_at',
        'updated_at',
       
    ];
}
