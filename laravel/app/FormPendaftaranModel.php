<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormPendaftaranModel extends Model
{
    protected $table = 'tb_form_pendaftaran';
    protected $fillable = [
        'id',
        'id_user',
        'nama_file',
        'created_at',
        'updated_at',
       
    ];
}
