<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JurusanModel extends Model
{
    protected $table = 'tb_jurusan';
    protected $fillable = [
        'id',
        'nama_jurusan',
        'created_at',
        'updated_at',
    ];
}
