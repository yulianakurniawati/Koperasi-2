<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PemasukanAngsuranController extends Controller
{
    public function index(Request $request)
    {
        $pemasukan_angsuran = \App\Pemasukan::orderBy('tanggal', 'asc')->get();
        return view('pemasukan.index',['pemasukan_angsuran' => $pemasukan_angsuran]);
    }

    public function create(Request $request)
    {
        $angsuran_masuk = \App\Pemasukan::create($request->all());
        return redirect('/pemasukan')->with('sukses','Data berhasil ditambahkan!');
    }

    public function search(Request $request)
    {
        if($request->has('search')){
            $pemasukan_angsuran = \App\Pemasukan::where('bulan','LIKE','%'.$request->search.'%')->get();
        }else{
            $pemasukan_angsuran = \App\Pemasukan::orderBy('bulan', 'asc')->get();
        }
        return view('pemasukan.index',['pemasukan_angsuran' => $pemasukan_angsuran]);
    }


    public function edit($id)
    {
        $angsuran_masuk = \App\Pemasukan::find($id);
        return view('pemasukan.edit',['angsuran_masuk' => $angsuran_masuk]);
        
    }

    public function update(Request $request, $id)
    {
        $angsuran_masuk = \App\Pemasukan::find($id);
        $angsuran_masuk->update($request->all());
        return redirect('/pemasukan')->with('sukses','Data berhasil diubah!');
        
    }

    public function delete($id)
    {
        $angsuran_masuk = \App\Pemasukan::find($id);
        $angsuran_masuk->delete();
        return redirect('/pemasukan')->with('sukses', 'Data berhasil dihapus!');
    }
}
