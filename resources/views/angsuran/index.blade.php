@extends('layouts.master')

@section('content')
    
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-14">
                    <!-- TABLE HOVER -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="text-primary">Data Angsuran Anggota</h3>
                                <div class="right">
                                    <span class="label label-primary" >Tambah Data Angsuran</span>
                                    <button type="button" class="btn" data-toggle="modal" 
                                    data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
                                </div>
                            </div>
                            <div class="panel-body">
                                @if(session('sukses'))
                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <i class="fa fa-check-circle"></i> {{ session('sukses') }}
                                </div>
                                @endif
                                <table class="table table-hover table-sm">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Angsuran</th>
                                            <th>Angsuran-ke</th>
                                            <th>Tanggal</th>
                                            <th>Sisa Angsuran</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data_angsuran as $angsuran)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{$angsuran->nama}}</td>
                                            <td>@currency($angsuran->cicilan)</td>
                                            <td><center>{{$angsuran->cicilan_ke}}</center></td>
                                            <td>{{$angsuran->tanggal}}</td>
                                            <td>@currency($angsuran->sisa)</td>
                                            <td>{{$angsuran->keterangan}}</td>
                                            <td>
                                                <a href="/angsuran/{{$angsuran->id}}/edit" class="btn btn-warning btn-sm my-2">Edit</a>
                                                <a href="/angsuran/{{$angsuran->id}}/delete" class="btn btn-danger btn-sm my-2"
                                                    onclick="return confirm('Yakin akan dihapus ?')">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END TABLE HOVER -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data Angsuran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <form action="/angsuran/create" method="post">
                @csrf
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input name="nama" type="text" class="form-control" id="nama" 
                  placeholder="Nama" required>
                </div>

                <div class="form-group">
                    <label for="cicilan">Angsuran</label>
                    <input name="cicilan" type="" class="form-control" id="cicilan" 
                    placeholder="Angsuran" required>
                </div>

                <div class="form-group">
                    <label for="cicilan_ke">Angsuran-ke</label>
                    <input name="cicilan_ke" type="text" class="form-control" id="cicilan_ke" 
                    placeholder="Angsuran-ke" required>
                </div>

                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input name="tanggal" type="text" class="form-control" id="tanggal"
                    placeholder="Tanggal" required>
                </div>

                <div class="form-group">
                    <label for="sisa">Sisa Angsuran</label>
                    <input name="sisa" type="text" class="form-control" id="sisa"
                    placeholder="Sisa Angsuran" required>
                </div>

                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input name="keterangan" type="text" class="form-control" id="keterangan"
                    placeholder="Keterangan" required>
                </div>
    

        </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                
            </form>
    </div>
    </div>
</div>
@endsection
            