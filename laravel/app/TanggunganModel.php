<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TanggunganModel extends Model
{
    protected $table = 'tb_tanggungan';
    protected $fillable = [
        'id',
        'id_user',
        'jumlah',
        'created_at',
        'updated_at'
    ];
}
