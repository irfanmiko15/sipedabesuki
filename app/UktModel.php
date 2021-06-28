<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UktModel extends Model
{
    protected $table = 'tb_ukt';
    protected $fillable = [
        'id',
        'id_user',
        'nama_file',
        'created_at',
        'updated_at',
    ];
}
