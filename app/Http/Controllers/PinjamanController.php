<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PinjamanController extends Controller
{
    public function index(Request $request)
    {
        $data_pinjaman = \App\Pinjaman::orderBy('nama', 'asc')->get();
        return view('pinjaman.index',['data_pinjaman' => $data_pinjaman]);
    }

    public function create(Request $request)
    {
        $pinjaman = \App\Pinjaman::create($request->all());
        return redirect('/pinjaman')->with('sukses','Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $pinjaman = \App\Pinjaman::find($id);
        return view('pinjaman.edit',['pinjaman' => $pinjaman]);
    }

    public function update(Request $request, $id)
    {
        $pinjaman = \App\Pinjaman::find($id);
        $pinjaman->update($request->all());
        return redirect('/pinjaman')->with('sukses','Data berhasil diubah!');
        
    }

    public function delete($id)
    {
        $pinjaman = \App\Pinjaman::find($id);
        $pinjaman->delete();
        return redirect('/pinjaman')->with('sukses', 'Data berhasil dihapus!');
    }
}
