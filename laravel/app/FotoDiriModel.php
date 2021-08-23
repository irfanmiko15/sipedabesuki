<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FotoDiriModel extends Model
{
    protected $table = 'tb_foto_diri';
    protected $fillable = [
        'id',
        'id_user',
        'nama_file',
        'created_at',
        'updated_at',
       
    ];
}
