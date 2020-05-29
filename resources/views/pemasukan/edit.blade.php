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
                            <h3 class="panel-title">Edit Data Pemasukan</h3>
                        </div>
                        <div class="panel-body">
                            <form action="/pemasukan/{{$angsuran_masuk->id}}/update" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                <label for="nama">Nama</label>
                                <input name="nama" type="text" class="form-control" id="nama" 
                                placeholder="Nama" value="{{$angsuran_masuk->nama}}" required>        
                                </div>
                
                                <div class="form-group">
                                <label for="jenis_pemasukan">Jenis Pemasukan</label>
                                <input name="jenis_pemasukan" type="text" class="form-control" id="jenis_pemasukan" 
                                placeholder="Jenis Pemasukan" value="{{$angsuran_masuk->jenis_pemasukan}}" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="saldo_masuk">Saldo</label>
                                    <input name="saldo_masuk" type="text" class="form-control" id="saldo_masuk"
                                    placeholder="Saldo" value="{{$angsuran_masuk->saldo_masuk}}" required>
                                </div>

                                <div class="form-group">
                                    <label for="angsuran_ke">Angsuran-ke</label>
                                    <input name="angsuran_ke" type="text" class="form-control" id="angsuran_ke" 
                                    placeholder="Angsuran-ke" value="{{$angsuran_masuk->angsuran_ke}}" required>            
                                </div>

                                <div class="form-group">
                                    <label for="tanggal">Tanggal</label>
                                    <input name="tanggal" type="text" class="form-control" id="tanggal" 
                                    placeholder="Tanggal" value="{{$angsuran_masuk->tanggal}}" required>            
                                </div>

                                <div class="form-group">
                                    <label for="bulan">Bulan</label>
                                    <input name="bulan" type="text" class="form-control" id="bulan" 
                                    placeholder="Bulan" value="{{$angsuran_masuk->bulan}}" required>            
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
       
