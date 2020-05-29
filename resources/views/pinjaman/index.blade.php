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
                                <h3 class="text-primary">Data Pinjaman Anggota</h3>
                                <div class="right">
                                    <span class="label label-primary" >Tambah Data Pinjaman</span>
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
                                            <th>Pinjaman</th>
                                            <th>Bunga</th>
                                            <th>Angsuran</th>
                                            <th>Jumlah Angsuran</th>
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data_pinjaman as $pinjaman)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{$pinjaman->nama}}</td>
                                            <td>@currency($pinjaman->pinjaman)</td>
                                            <td>{{$pinjaman->bunga}}</td>
                                            <td>@currency($pinjaman->angsuran)</td>
                                            <td>{{$pinjaman->jml_angsuran}}</td>
                                            <td>{{$pinjaman->tanggal}}</td>
                                            <td>{{$pinjaman->ket}}</td>
                                            <td>
                                                <a href="/pinjaman/{{$pinjaman->id}}/edit" class="btn btn-warning btn-sm my-2">Edit</a>
                                                <a href="/pinjaman/{{$pinjaman->id}}/delete" class="btn btn-danger btn-sm my-2"
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
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah  Data Pinjaman</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <form action="/pinjaman/create" method="post">
                @csrf
                <div class="form-group">
                  <label for="nama">NAMA ANGGOTA</label>
                  <input name="nama" type="text" class="form-control" id="nama" 
                  placeholder="Nama" required>
                </div>

                <div class="form-group">
                    <label for="pinjaman">PINJAMAN</label>
                    <input name="pinjaman" type="" class="form-control" id="pinjaman" 
                    placeholder="Pinjaman" required>
                </div>

                <div class="form-group">
                    <label for="bunga">BUNGA</label>
                    <input name="bunga" type="text" class="form-control" id="bunga" 
                    placeholder="Bunga" required>
                </div>

                <div class="form-group">
                    <label for="angsuran">ANGSURAN</label>
                    <input name="angsuran" type="text" class="form-control" id="angsuran"
                    placeholder="Angsuran" required>
                </div>

                <div class="form-group">
                    <label for="jml_angsuran">JUMLAH ANGSURAN</label>
                    <input name="jml_angsuran" type="text" class="form-control" id="jml_angsuran"
                    placeholder="Jumlah Angsuran" required>
                </div>

                <div class="form-group">
                    <label for="tanggal">TANGGAL</label>
                    <input name="tanggal" type="text" class="form-control" id="tanggal"
                    placeholder="Tanggal" required>
                </div>

                <div class="form-group">
                    <label for="ket">KETERANGAN</label>
                    <input name="ket" type="text" class="form-control" id="ket"
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