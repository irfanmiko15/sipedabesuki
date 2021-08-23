<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PiagamModel extends Model
{
    protected $table = 'tb_piagam';
    protected $fillable = [
        'id',
        'id_user',
        'nama_file',
        'created_at',
        'updated_at',
       
    ];
}
