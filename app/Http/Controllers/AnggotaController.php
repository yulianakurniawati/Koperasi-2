<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AnggotaController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_anggota = \App\Anggota::where('nama_anggota','LIKE','%'.$request->cari.'%')->get();
        }else{
            $data_anggota = \App\Anggota::orderBy('nama_anggota', 'asc')->get();
        }
        return view('anggota.index',['data_anggota' => $data_anggota]);
    }

   

    public function create(Request $request)
    {
        $this->validate($request,[
            'nama_anggota' => 'required',
            'email' => 'required|email|unique:users',
            'alamat' => 'required',
            'no_telpon' => 'required',
            'ket' => 'required',
            'avatar' => 'mimes:jpg,png',

        ]);

        // insert ke table users
        $user = new \App\User;
        $user->role = 'anggota';
        $user->name = $request->nama_anggota;
        $user->email = $request->email;
        $user->password = bcrypt('rahasia');
        $user->remember_token = Str::random(60);
        $user->save();

        // insert ke table anggota
        $request->request->add(['user_id' => $user->id]);
        $anggota = \App\Anggota::create($request->all());
        return redirect('/anggota')->with('sukses','Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $anggota = \App\Anggota::find($id);
        return view('anggota.edit',['anggota' => $anggota]);
        
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $anggota = \App\Anggota::find($id);
        $anggota->update($request->all());
        //cek file avatarnya
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('images/',$request->file('avatar')->getClientOriginalName());
            $anggota->avatar = $request->file('avatar')->getClientOriginalName();
            $anggota->save();
        }
        return redirect('/anggota')->with('sukses', 'Data berhasil diubah!');
        
    }

    public function delete($id)
    {
        $anggota = \App\Anggota::find($id);
        $anggota->delete();
        return redirect('/anggota')->with('sukses', 'Data berhasil dihapus!');
    }

    public function profile($id)
    {
        $anggota = \App\Anggota::find($id);
        return view('anggota.profile',['anggota' => $anggota]);
    }

}
