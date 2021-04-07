<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Gurucontroller extends Controller
{
    public function index(request $REQUEST)
   {
        if($REQUEST->has('cari')){
          $data_guru = \App\Guru::where('nama','LIKE','%'.$REQUEST->cari.'%')->get();
        }else{
          $data_guru = \App\Guru::all();
        }
      return view ('Dataguru',['data_guru' => $data_guru]);
   }

   public function create(Request $REQUEST)
   {
        //insert ke table user
        $user = new \App\User;
        $user->role = 'guru';
        $user->name = $REQUEST->nama;
        $user->email = $REQUEST->email; 
        $user->password = bcrypt ('rahasia');
        $user->remember_token = str_random(60);
        $user->save();
        //insert table ke siswa
        $REQUEST->request->add(['user_id' => $user->id ]);
        $guru = \App\Guru::create($REQUEST->all());
        return redirect ('/Dataguru')->with('sukses','Data Berhasil disimpan!');
   }

   public function edit($id)
   {
       $guru = \App\Guru::find($id);
       return view ('guru/edit', ['guru' => $guru]);
   }

   public function update(Request $REQUEST, $id)
   {
        $guru = \App\Guru::find($id);
        $guru->update($REQUEST->all());
        return redirect('/Dataguru')->with('sukses','data berhasil diupdate!'); 
   }

   public function delete($id)
   {
       $guru = \App\Guru::find($id);
       $guru->delete();
       return redirect('/Dataguru')->with('sukses','data berhasil dihapus!');
   }
}
