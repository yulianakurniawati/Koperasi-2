<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpananController extends Controller
{
    public function index(Request $request)
    {
        $data_simpanan = \App\Simpanan::orderBy('nama', 'asc')->get();
        return view('simpanan.index',['data_simpanan' => $data_simpanan]);
    }

    public function create(Request $request)
    {
        $simpanan = \App\Simpanan::create($request->all());
        return redirect('/simpanan')->with('sukses','Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $simpanan = \App\Simpanan::find($id);
        return view('simpanan.edit',['simpanan' => $simpanan]);
        
    }

    public function update(Request $request, $id)
    {
        $simpanan = \App\Simpanan::find($id);
        $simpanan->update($request->all());
        return redirect('/simpanan')->with('sukses','Data berhasil diubah!');
        
    }

    public function delete($id)
    {
        $simpanan = \App\Simpanan::find($id);
        $simpanan->delete();
        return redirect('/simpanan')->with('sukses', 'Data berhasil dihapus!');
    }
}
