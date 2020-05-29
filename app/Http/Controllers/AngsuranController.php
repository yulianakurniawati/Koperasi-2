<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AngsuranController extends Controller
{
    public function index(Request $request)
    {
        $data_angsuran = \App\Angsuran::orderBy('nama', 'asc')->get();
        return view('angsuran.index',['data_angsuran' => $data_angsuran]);
    }

    public function create(Request $request)
    {
        $angsuran = \App\Angsuran::create($request->all());
        return redirect('/angsuran')->with('sukses','Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $angsuran = \App\Angsuran::find($id);
        return view('angsuran.edit',['angsuran' => $angsuran]);
        
    }

    public function update(Request $request, $id)
    {
        $angsuran = \App\Angsuran::find($id);
        $angsuran->update($request->all());
        return redirect('/angsuran')->with('sukses','Data berhasil diubah!');
        
    }

    public function delete($id)
    {
        $angsuran = \App\Angsuran::find($id);
        $angsuran->delete();
        return redirect('/angsuran')->with('sukses', 'Data berhasil dihapus!');
    }
}
