@extends('layouts.master')

@section('content')
    
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!-- TABLE HOVER -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="text-primary">Data Pemasukan Simpanan</h3>
                                <div class="right">
                                    <span class="label label-primary" >Tambah Data Pemasukan</span>
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
                                <div class="col-md-5">
                                    <form action="/tabungan/search" method="get">
                                        <div class="input-group">
                                            <input type="search" name="search" class="form-control">
                                            <span class="input-group-btn">
                                                <button type="submit" class="btn btn-primary">Search</button>
                                            </span>
                                        </div>
                                    </form>
                                    <br>
                                </div>
                                <table class="table table-hover table-sm">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Jenis Pemasukan</th>
                                            <th>Saldo</th>
                                            <th>Tanggal</th>
                                            <th>Bulan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data_tabungan as $tabungan)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{$tabungan->nama}}</td>
                                            <td>{{$tabungan->jenis}}</td>
                                            <td>@currency($tabungan->saldo)</td>
                                            <td>{{$tabungan->tanggal}}</td>
                                            <td>{{$tabungan->bulan}}</td>
                                            <td>
                                                <a href="/tabungan/{{$tabungan->id}}/edit" class="btn btn-warning btn-sm my-2">Edit</a>
                                                <a href="/tabungan/{{$tabungan->id}}/delete" class="btn btn-danger btn-sm my-2"
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
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data Pemasukan Simpanan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <form action="/tabungan/create" method="post">
                @csrf
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input name="nama" type="text" class="form-control" id="nama" 
                  placeholder="Nama" required>
                </div>

                <div class="form-group">
                    <label for="jenis">Jenis Pemasukan</label>
                    <input name="jenis" type="" class="form-control" id="jenis" 
                    placeholder="Jenis Pemasukan" required>
                </div>

                <div class="form-group">
                    <label for="saldo">Saldo</label>
                    <input name="saldo" type="text" class="form-control" id="saldo" 
                    placeholder="Saldo" required>
                </div>

                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input name="tanggal" type="text" class="form-control" id="tanggal"
                    placeholder="Tanggal" required>
                </div>

                <div class="form-group">
                    <label for="bulan">Bulan</label>
                    <input name="bulan" type="text" class="form-control" id="bulan"
                    placeholder="Bulan" required>
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