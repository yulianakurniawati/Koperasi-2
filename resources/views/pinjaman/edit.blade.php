@extends('layouts.master')

@section('content')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Edit Data Pinjaman</h3>
                        </div>
                        <div class="panel-body">
                            <form action="/pinjaman/{{$pinjaman->id}}/update" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                <label for="nama">NAMA</label>
                                <input name="nama" type="text" class="form-control" id="nama" 
                                placeholder="Nama" value="{{$pinjaman->nama}}" required>        
                                </div>
                
                                <div class="form-group">
                                <label for="pinjaman">PINJAMAN</label>
                                <input name="pinjaman" type="text" class="form-control" id="pinjaman" 
                                placeholder="Pinjaman" value="{{$pinjaman->pinjaman}}" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="bunga">BUNGA</label>
                                    <input name="bunga" type="text" class="form-control" id="bunga"
                                    placeholder="Bunga" value="{{$pinjaman->bunga}}" required>
                                </div>

                                <div class="form-group">
                                    <label for="angsuran">ANGSURAN</label>
                                    <input name="angsuran" type="text" class="form-control" id="angsuran"
                                    placeholder="Angsuran" value="{{$pinjaman->angsuran}}" required>
                                </div>

                                <div class="form-group">
                                    <label for="jml_angsuran">JUMLAH ANGSURAN</label>
                                    <input name="jml_angsuran" type="text" class="form-control" id="jml_angsuran"
                                    placeholder="Jumlah Angsuran" value="{{$pinjaman->jml_angsuran}}" required>
                                </div>

                                <div class="form-group">
                                    <label for="tanggal">TANGGAL</label>
                                    <input name="tanggal" type="text" class="form-control" id="tanggal" 
                                    placeholder="Tanggal" value="{{$pinjaman->tanggal}}" required>            
                                </div>

                                <div class="form-group">
                                    <label for="ket">KETERANGAN</label>
                                    <input name="ket" type="text" class="form-control" id="ket" 
                                    placeholder="Keterangan" value="{{$pinjaman->ket}}" required>            
                                </div>
                                
                                <button type="submit" class="btn btn-warning">Ubah Data</button>   
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
       
