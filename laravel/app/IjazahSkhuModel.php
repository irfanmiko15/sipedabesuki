<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IjazahSkhuModel extends Model
{
    protected $table = 'tb_ijazah_skhu';
    protected $fillable = [
        'id',
        'id_user',
        'jenis',
        'nama_file',
        'created_at',
        'updated_at',
       
    ];
}
