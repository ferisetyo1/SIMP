<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';
    protected $fillable = ['nama','jenis_kelamin','nip', 'alamat','agama', 'nohp','user_id'];
}
