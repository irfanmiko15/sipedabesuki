<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SaudaraModel extends Model
{
    protected $table = 'tb_saudara';
    protected $fillable = [
        'id',
        'id_user',
        'anak_ke',
        'nama_saudara',
        'umur',
        'pendidikan',
        'pekerjaan',
        'created_at',
        'updated_at'
    ];
}
