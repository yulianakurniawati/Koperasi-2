<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class LaporanController extends Controller
{
    public function index(Request $request)
    {
        $data_laporan = \App\Laporan::orderBy('bulan', 'desc')->get();
        return view('laporan.index',['data_laporan' => $data_laporan]);
    }

    public function create(Request $request)
    {
        $laporan = \App\Laporan::create($request->all());
        return redirect('/laporan')->with('sukses','Data berhasil ditambahkan!');
    }

    public function search(Request $request)
    {
        if($request->has('search')){
            $data_laporan = \App\Laporan::where('bulan','LIKE','%'.$request->search.'%')->get();
        }else{
            $data_laporan = \App\Laporan::orderBy('bulan', 'desc')->get();
        }
        return view('laporan.index',['data_laporan' => $data_laporan]);
    }

    public function edit($id)
    {
        $laporan = \App\Laporan::find($id);
        return view('laporan.edit',['laporan' => $laporan]);
        
    }

    public function update(Request $request, $id)
    {
        $laporan = \App\Laporan::find($id);
        $laporan->update($request->all());
        return redirect('/laporan')->with('sukses','Data berhasil diubah!');
        
    }

    public function delete($id)
    {
        $laporan = \App\Laporan::find($id);
        $laporan->delete();
        return redirect('/laporan')->with('sukses', 'Data berhasil dihapus!');
    }

    public function cetakPdf()   
    {
        
        $data_laporan = \App\Laporan::all();
        $pdf = PDF::loadview('laporan.pdf',['data_laporan'=>$data_laporan])->setPaper('A4','potrait' );
       
        return $pdf->download('Laporan.pdf');
        
        
    	
    }
}
