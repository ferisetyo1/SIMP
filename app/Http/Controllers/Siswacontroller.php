<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siswacontroller extends Controller
{
  public function index(request $REQUEST)
  {
    if ($REQUEST->has('cari')) {
      $data_siswa = \App\siswa::where('nama', 'LIKE', '%' . $REQUEST->cari . '%')->get();
    } else {
      $data_siswa = \App\siswa::all();
    }
    return view('Datasiswa', ['data_siswa' => $data_siswa]);
  }

  public function create(Request $REQUEST)
  {
    //insert ke table user
    $user = new \App\User;
    $user->role = 'siswa';
    $user->name = $REQUEST->nama;
    $user->email = $REQUEST->email;
    $user->password = bcrypt('rahasia');
    $user->remember_token = str_random(60);
    $user->save();
    //insert table ke siswa
    $REQUEST->request->add(['user_id' => $user->id]);
    $siswa = \App\siswa::create($REQUEST->all());
    return redirect('/Datasiswa')->with('sukses', 'Data Berhasil disimpan!');

    $this->validate($REQUEST, [
      'nama' => 'min:3',
      'jenis_kelamin' => 'required',
      'kom_keahlian' => 'required',
      'nis' => 'required',
      'alamat' => 'required',
      'agama' => 'required',
      'kelas' => 'required',
      'nphp' => 'required',
      'nama_orangtua' => 'required',
      'nohp_orangtua' => 'required',
    ]);
  }

  public function edit($id)
  {
    $siswa = \App\siswa::find($id);
    return view('siswa/edit', ['siswa' => $siswa]);
  }

  public function update(Request $REQUEST, $id)
  {
    $siswa = \App\siswa::find($id);
    if (
      $REQUEST->nama !== $siswa->nama ||
      $REQUEST->jenis_kelamin != $siswa->jenis_kelamin ||
      $REQUEST->kom_keahlian != $siswa->kom_keahlian ||
      $REQUEST->nis != $siswa->nis ||
      $REQUEST->alamat != $siswa->alamat ||
      $REQUEST->agama != $siswa->agama ||
      $REQUEST->nohp != $siswa->nohp ||
      $REQUEST->nama_orangtua != $siswa->nama_orangtua ||
      $REQUEST->nohp_orangtua != $siswa->nohp_orangtua ||
      $REQUEST->kelas != $siswa->kelas ||
      $REQUEST->hasFile('avatar')
    ) {
      $siswa->update($REQUEST->all());
      if ($REQUEST->hasFile('avatar')) {
        $REQUEST->file('avatar')->move('images/', $REQUEST->file('avatar')->getClientOriginalName());
        $siswa->avatar = $REQUEST->file('avatar')->getClientOriginalName();
        $siswa->save();
      }
      return redirect($REQUEST->previous_url)->with('sukses', 'Data Berhasil di Update');
    }
    return redirect($REQUEST->previous_url);
  }

  public function delete($id)
  {
    $siswa = \App\siswa::find($id);
    $siswa->delete();
    return redirect('/Datasiswa')->with('sukses', 'Data Berhasil di Hapus');
  }

  public function jurnal($id)
  {
    $siswa = \App\siswa::find($id);
    $komkegiatan = \App\komkegiatan::all();
    //dd($komkegiatan);
    return view('siswa.jurnal', ['siswa' => $siswa, 'komkegiatan' => $komkegiatan]);
  }

  public function addkegiatan(request $REQUEST, $idsiswa)
  {
    $siswa = \App\siswa::find($idsiswa);
    $siswa->komkegiatan()->attach($REQUEST->komkegiatan, [
      'tanggal' => $REQUEST->tanggal, 'waktu_mulai' => $REQUEST->waktu_mulai, 'waktu_selesai' => $REQUEST->waktu_selesai, 'kegiatan' => $REQUEST->kegiatan
    ]);
    return redirect('Datasiswa/' . $idsiswa . '/jurnal')->with('sukses', 'Data Berhasil disimpan!');;
  }

  public function deletejurnal($idsiswa,$idjurnal)
  {
    $siswa = \App\siswa::find($idsiswa);
    $siswa->komkegiatan()->wherePivot('id',$idjurnal )->detach();
    return redirect('Datasiswa/' . $idsiswa . '/jurnal');
  }

  public function jurnalkegiatan()
  {
    $siswaId = auth()->user()->id;
    $siswa = \App\siswa::where('user_id', $siswaId)->firstOrFail();
    $komkegiatan = \App\komkegiatan::all();
    return view('siswa.jurnal', ['siswa' => $siswa, 'komkegiatan' => $komkegiatan]);
  }
}
