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
                                <h3 class="text-primary">Data Anggota Koperasi</h3>
                                <div class="right">
                                    <span class="label label-primary" >Tambah Data Anggota</span>
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
                                            <th>ALAMAT</th>
                                            <th>NO.TELPON</th>
                                            <th>KETERANGAN</th>
                                            <th>AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data_anggota as $anggota)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td><a href="/anggota/{{$anggota->id}}/profile">{{$anggota->nama_anggota}}</a></td>
                                            <td>{{$anggota->alamat}}</td>
                                            <td>{{$anggota->no_telpon}}</td>
                                            <td>{{$anggota->ket}}</td>
                                            <td>
                                                <a href="/anggota/{{$anggota->id}}/edit" class="btn btn-warning btn-sm my-2">Edit</a>
                                                <a href="/anggota/{{$anggota->id}}/delete" class="btn btn-danger btn-sm my-2"
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
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah  Data Anggota</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <form action="/anggota/create" method="post">
                @csrf
                <div class="form-group">
                  <label for="nama_anggota">Nama Anggota</label>
                  <input name="nama_anggota" type="text" class="form-control" id="nama_anggota" 
                    placeholder="Masukkan Nama" value="{{old('nama_anggota')}}" required>
                </div>

                <div class="form-group{{$errors->has('email') ? 'has-error' : ''}}}">
                    <label for="email">email</label>
                    <input name="email" type="email" class="form-control" id="email" 
                    placeholder="Masukkan Email" value="{{old('email')}}" required>
                    @if($errors->has('email'))
                        <span class="help-block">{{$errors->first('email')}}</span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input name="alamat" type="text" class="form-control" id="alamat" 
                    placeholder="Masukkan Alamat" value="{{old('alamat')}}" required>
                </div>

                <div class="form-group">
                    <label for="no_telpon">No.Telpon</label>
                    <input name="no_telpon" type="text" class="form-control" id="no_telpon"
                    placeholder="Masukkan NO.Telpon" value="{{old('no_telpon')}}" required>
                </div>

                <div class="form-group">
                    <label for="ket">Keterangan</label>
                    <input name="ket" type="text" class="form-control" id="ket" 
                    placeholder="Masukkan Keterangan" value="{{old('ket')}}" required>
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


            