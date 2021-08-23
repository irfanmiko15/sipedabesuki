<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BerkasAdminModel extends Model
{
    protected $table = 'tb_berkas_admin';
    protected $fillable = [
        'id',
        
        'jenis',
        'jenjang',
        'nama_file',
        'created_at',
        'updated_at',
    ];
}
