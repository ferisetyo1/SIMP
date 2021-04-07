<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    protected $table = 'siswa';
    protected $fillable = ['user_id','nama', 'jenis_kelamin','kom_keahlian','nis','alamat',
                            'agama','kelas','nohp','nama_orangtua','nohp_orangtua','avatar'];

    public function getAvatar()
    {
        if(!$this->avatar){
            return asset('images/default.png');
        }
        return asset('images/'.$this->avatar); 
    }

    
    public function komkegiatan()
    {
        return $this->belongsToMany(komkegiatan::class)->withPivot(['id','tanggal','waktu_mulai','waktu_selesai','kegiatan'])->withTimeStamps();
    }
}
