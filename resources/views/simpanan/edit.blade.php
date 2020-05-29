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
                            <h3 class="panel-title">Edit Data Simpanan</h3>
                        </div>
                        <div class="panel-body">
                            <form action="/simpanan/{{$simpanan->id}}/update" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                <label for="nama">NAMA</label>
                                <input name="nama" type="text" class="form-control" id="nama" 
                                placeholder="Nama" value="{{$simpanan->nama}}" required>        
                                </div>
                
                                <div class="form-group">
                                <label for="simpanan_wajib">SIMPANAN WAJIB</label>
                                <input name="simpanan_wajib" type="text" class="form-control" id="simpanan_wajib" 
                                placeholder="Simpanan Wajib" value="{{$simpanan->simpanan_wajib}}" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="jumlah_simpanan">JUMLAH SIMPANAN</label>
                                    <input name="jumlah_simpanan" type="text" class="form-control" id="jumlah_simpanan"
                                    placeholder="Jumlah Simpanan" value="{{$simpanan->jumlah_simpanan}}" required>
                                </div>

                                <div class="form-group">
                                    <label for="tanggal">TANGGAL</label>
                                    <input name="tanggal" type="text" class="form-control" id="tanggal" 
                                    placeholder="Tanggal" value="{{$simpanan->tanggal}}" required>            
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
       
