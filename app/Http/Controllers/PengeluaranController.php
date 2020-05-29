<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengeluaranController extends Controller
{
    public function index(Request $request)
    {
        $data_keluar = \App\Keluaran::orderBy('tanggal', 'asc')->get();
        return view('keluaran.index',['data_keluar' => $data_keluar]);
    }

    public function create(Request $request)
    {
        $keluaran= \App\Keluaran::create($request->all());
        return redirect('/keluar')->with('sukses','Data berhasil ditambahkan!');
    }

    public function search(Request $request)
    {
        if($request->has('search')){
            $data_keluar = \App\Keluaran::where('bulan','LIKE','%'.$request->search.'%')->get();
        }else{
            $data_keluar = \App\Keluaran::orderBy('bulan', 'asc')->get();
        }
        return view('keluaran.index',['data_keluar' => $data_keluar]);
    }

    public function edit($id)
    {
        $keluaran = \App\Keluaran::find($id);
        return view('keluaran.edit',['keluaran' => $keluaran]);
        
    }

    public function update(Request $request, $id)
    {
        $keluaran = \App\Keluaran::find($id);
        $keluaran->update($request->all());
        return redirect('/keluar')->with('sukses','Data berhasil diubah!');
        
    }

    public function delete($id)
    {
        $keluaran = \App\Keluaran::find($id);
        $keluaran->delete();
        return redirect('/keluar')->with('sukses', 'Data berhasil dihapus!');
    }
}
