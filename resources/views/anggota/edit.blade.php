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
                            <h3 class="panel-title">Edit Data Anggota</h3>
                        </div>
                        <div class="panel-body">
                            <form action="/anggota/{{$anggota->id}}/update" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                <label for="nama_anggota">Nama Anggota</label>
                                <input name="nama_anggota" type="text" class="form-control" id="nama_anggota" 
                                placeholder="Nama" value="{{$anggota->nama_anggota}}" required>        
                                </div>
                
                                <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input name="alamat" type="text" class="form-control" id="alamat" 
                                placeholder="Alamat" value="{{$anggota->alamat}}" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="no_telpon">No.Telpon</label>
                                    <input name="no_telpon" type="text" class="form-control" id="no_telpon"
                                    placeholder="Masukkan NO.Telpon" value="{{$anggota->no_telpon}}" required>
                                </div>

                                <div class="form-group">
                                    <label for="ket">Keterangan</label>
                                    <input name="ket" type="text" class="form-control" id="ket" 
                                    placeholder="Keterangan" value="{{$anggota->ket}}" required>            
                                </div>

                                <div class="form-group">
                                    <label for="avatar">Avatar</label>
                                    <input name="avatar" type="file" class="form-control" id="avatar" >            
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
