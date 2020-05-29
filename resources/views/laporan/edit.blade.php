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
                            <h3 class="panel-title">Edit Data Laporan</h3>
                        </div>
                        <div class="panel-body">
                            <form action="/laporan/{{$laporan->id}}/update" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                <label for="rincian">Rincian</label>
                                <input name="rincian" type="text" class="form-control" id="rincian" 
                                placeholder="Rincian" value="{{$laporan->rincian}}" required>        
                                </div>
                
                                <div class="form-group">
                                <label for="saldo_masuk">Pemasukan</label>
                                <input name="saldo_masuk" type="text" class="form-control" id="saldo_masuk" 
                                placeholder="Saldo Masuk" value="{{$laporan->saldo_masuk}}" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="saldo_keluar">Pengeluaran</label>
                                    <input name="saldo_keluar" type="text" class="form-control" id="saldo_keluar"
                                    placeholder="Saldo Keluar" value="{{$laporan->saldo_keluar}}" required>
                                </div>

                                <div class="form-group">
                                    <label for="saldo_akhir">Saldo</label>
                                    <input name="saldo_akhir" type="text" class="form-control" id="saldo_akhir"
                                    placeholder="Saldo Akhir" value="{{$laporan->saldo_akhir}}" required>
                                </div>

                                <div class="form-group">
                                    <label for="bulan">Bulan</label>
                                    <input name="bulan" type="text" class="form-control" id="bulan" 
                                    placeholder="Bulan" value="{{$laporan->bulan}}" required>            
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
       
