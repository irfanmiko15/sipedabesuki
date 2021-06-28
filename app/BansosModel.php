<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BansosModel extends Model
{
    protected $table = 'tb_bansos';
    protected $fillable = [
        'id',
        'id_user',
        'jenis',
        'nama_file',
        'created_at',
        'updated_at',
       
    ];
}
