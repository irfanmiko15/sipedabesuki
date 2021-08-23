<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PenghasilanModel extends Model
{
    protected $table = 'tb_penghasilan';
    protected $fillable = [
        'id',
        'id_user',
        'nama_file',
        'created_at',
        'updated_at',
       
    ];
}
