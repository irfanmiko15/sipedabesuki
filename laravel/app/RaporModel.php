<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RaporModel extends Model
{
    protected $table = 'tb_rapor';
    protected $fillable = [
        'id',
        'id_user',
        'nama_file',
        'created_at',
        'updated_at',
    ];
}
