<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class komkegiatan extends Model
{
    protected $table = 'komkegiatan';
    protected $fillable = ['kode','nama_keahlian'];

    public function siswa()
    {
        return $this->belongsToMany(siswa::class)->withPivot(['id','tanggal','waktu_mulai','waktu_selesai','kegiatan']);
    }

}
