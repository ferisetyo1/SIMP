<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class komkegiatan_siswa extends Model
{
    protected $table = ['komkegiatan_siswa','kegiatan'];
    protected $fillable = ['siswa_id','komkegiatan_id','tanggal','waktu_mulai','waktu_selesai','kegiatan'];

}
