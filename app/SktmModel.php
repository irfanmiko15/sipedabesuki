<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SktmModel extends Model
{
    protected $table = 'tb_sktm';
    protected $fillable = [
        'id',
        'id_user',
        'nama_file',
        'created_at',
        'updated_at',
       
    ];
}
