<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IdentitasModel extends Model
{
    protected $table = 'tb_identitas';
    protected $fillable = [
        'id',
        'id_user',
        'nama_file',
        'created_at',
        'updated_at',
       
    ];
}
