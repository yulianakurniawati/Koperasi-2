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
                            <h3 class="panel-title">Edit Data Angsuran</h3>
                        </div>
                        <div class="panel-body">
                            <form action="/angsuran/{{$angsuran->id}}/update" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                <label for="nama">Nama</label>
                                <input name="nama" type="text" class="form-control" id="nama" 
                                placeholder="Nama" value="{{$angsuran->nama}}" required>        
                                </div>
                
                                <div class="form-group">
                                <label for="cicilan">Angsuran</label>
                                <input name="cicilan" type="text" class="form-control" id="cicilan" 
                                placeholder="Angsuran" value="{{$angsuran->cicilan}}" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="cicilan_ke">Angsuran_ke</label>
                                    <input name="cicilan_ke" type="text" class="form-control" id="cicilan_ke"
                                    placeholder="Angsuran_ke" value="{{$angsuran->cicilan_ke}}" required>
                                </div>

                                <div class="form-group">
                                    <label for="tanggal">Tanggal</label>
                                    <input name="tanggal" type="text" class="form-control" id="tanggal" 
                                    placeholder="Tanggal" value="{{$angsuran->tanggal}}" required>            
                                </div>

                                <div class="form-group">
                                    <label for="sisa">Sisa Angsuran</label>
                                    <input name="sisa" type="text" class="form-control" id="sisa" 
                                    placeholder="Tanggal" value="{{$angsuran->sisa}}" required>            
                                </div>

                                <div class="form-group">
                                    <label for="keterangan">Keterangan</label>
                                    <input name="keterangan" type="text" class="form-control" id="keterangan" 
                                    placeholder="Tanggal" value="{{$angsuran->keterangan}}" required>            
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
       
