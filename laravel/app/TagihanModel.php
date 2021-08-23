<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagihanModel extends Model
{
    protected $table = 'tb_tagihan';
    protected $fillable = [
        'id',
        'id_user',
        'jenis',
        'nama_file',
        'created_at',
        'updated_at',
       
    ];
}
