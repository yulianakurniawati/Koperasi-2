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
                                <h3 class="text-primary">Data Simpanan Anggota</h3>
                                <div class="right">
                                    <span class="label label-primary" >Tambah Data Simpanan</span>
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
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NAMA</th>
                                            <th>SIMPANAN WAJIB</th>
                                            <th>JUMLAH SIMPANAN</th>
                                            <th>TANGGAL</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data_simpanan as $simpanan)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{$simpanan->nama}}</td>
                                            <td>@currency($simpanan->simpanan_wajib)</td>
                                            <td>@currency($simpanan->jumlah_simpanan)</td>
                                            <td>{{$simpanan->tanggal}}</td>
                                            <td>
                                                <a href="/simpanan/{{$simpanan->id}}/edit" class="btn btn-warning btn-sm my-2">Edit</a>
                                                <a href="/simpanan/{{$simpanan->id}}/delete" class="btn btn-danger btn-sm my-2"
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
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah  Data Simpanan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <form action="/simpanan/create" method="post">
                @csrf
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input name="nama" type="text" class="form-control" id="nama" 
                  placeholder="Nama" required>
                </div>

                <div class="form-group">
                    <label for="simpanan_wajib">SIMPANAN WAJIB</label>
                    <input name="simpanan_wajib" type="" class="form-control" id="simpanan_wajib" 
                    placeholder="Simpanan" required>
                </div>

                <div class="form-group">
                    <label for="jumlah_simpanan">JUMLAH SIMPANAN</label>
                    <input name="jumlah_simpanan" type="text" class="form-control" id="jumlah_simpanan" 
                    placeholder="Jumlah Simpanan" required>
                </div>

                <div class="form-group">
                    <label for="tanggal">TANGGAL</label>
                    <input name="tanggal" type="text" class="form-control" id="tanggal"
                    placeholder="Tanggal" required>
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

            