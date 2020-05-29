@extends('layouts.master')

@section('content')
    
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-16">
                    <!-- TABLE HOVER -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="text-primary">Data Laporan Bulanan</h3>
                                <div class="right">
                                    <span class="label label-primary" >Tambah Data Laporan</span>
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
                                    <form action="/laporan/search" method="get">
                                        <div class="input-group">
                                            <input type="search" name="search" class="form-control">
                                            <span class="input-group-btn">
                                                <button type="submit" class="btn btn-primary">Search</button>
                                            </span>
                                        </div>
                                    </form>
                                    <br>
                                </div>
                                <div class="col-md-2">
                                    <a href="/laporan/cetak_pdf" class="btn btn-success"><i class="lnr lnr-printer"></i>
                                        <span>Cetak PDF</span></a><br>
                                </div>
                                
                                <div class="col-mt-2">
                                    <table class="table table-bordered table-sm">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Rincian</th>
                                                <th>Pemasukan</th>
                                                <th>Pengeluaran</th>
                                                <th>Saldo</th>
                                                <th>Bulan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data_laporan as $laporan)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{$laporan->rincian}}</td>
                                                <td>@currency($laporan->saldo_masuk)</td>
                                                <td>@currency($laporan->saldo_keluar)</td>
                                                <td>@currency($laporan->saldo_akhir)</td>
                                                <td>{{$laporan->bulan}}</td>
                                                <td>
                                                    <a href="/laporan/{{$laporan->id}}/edit" class="btn btn-warning btn-xs">Edit</a>
                                                    <a href="/laporan/{{$laporan->id}}/delete" class="btn btn-danger btn-xs ml-2"
                                                        onclick="return confirm('Yakin akan dihapus ?')">Delete</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                
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
            <form action="/laporan/create" method="post">
                @csrf
                <div class="form-group">
                    <label for="rincian">Rincian</label>
                    <input name="rincian" type="" class="form-control" id="rincian" 
                    placeholder="Rincian" required>
                </div>

                <div class="form-group">
                    <label for="saldo_masuk">Pemasukan</label>
                    <input name="saldo_masuk" type="text" class="form-control" id="saldo_masuk" 
                    placeholder="Saldo Masuk" required>
                </div>

                <div class="form-group">
                    <label for="saldo_keluar">Pengeluaran</label>
                    <input name="saldo_keluar" type="text" class="form-control" id="saldo_keluar" 
                    placeholder="Saldo Masuk" required>
                </div>

                <div class="form-group">
                    <label for="saldo_akhir">Saldo</label>
                    <input name="saldo_akhir" type="text" class="form-control" id="saldo_akhir" 
                    placeholder="Saldo Masuk" required>
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