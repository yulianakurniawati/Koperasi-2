@extends('layouts.master')

@section('content')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content col-md-12">
        <div class="container-fluid">
            <div class="panel panel-profile">
                <div class="clearfix">
                    <!-- LEFT COLUMN -->
                    <div class="profile-left">
                        <!-- PROFILE HEADER -->
                        <div class="profile-header">
                            <div class="overlay"></div>
                            <div class="profile-main">
                                <img src="{{$anggota->getAvatar()}}" class="img-circle" alt="Avatar">
                            <h3 class="name">{{$anggota->nama_anggota}}</h3>
                                <span class="online-status status-available">Available</span>
                            </div>
                            <div class="profile-stat">
                                <div class="row">
                                    <div class="col-md-4 stat-item">
                                        @currency($anggota->simpanan->jumlah_simpanan)<span>Simpanan</span>
                                    </div>
                                    <div class="col-md-4 stat-item">
                                        @if(!$anggota->pinjaman == 'null')
                                            {{'-'}}<span>Pinjaman</span> @else
                                            @currency($anggota->pinjaman->pinjaman)<span>Pinjaman</span>
                                        @endif
                                    </div>
                                    <div class="col-md-4 stat-item">
                                        @if(!$anggota->angsuran == 'null')
                                            {{'-'}}<span>Sisa Angsuran</span> @else 
                                            @currency($anggota->angsuran->sisa)<span>Sisa Angsuran</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END PROFILE HEADER -->
                        <!-- PROFILE DETAIL -->
                        <div class="profile-detail">
                            {{-- <div class="profile-info">
                                <h4 class="heading">Data Diri</h4>
                                <ul class="list-unstyled list-justify">
                                    <li>Nama<span>{{$anggota->nama_anggota}}</span></li>
                                    <li>Alamat<span>{{$anggota->alamat}}</span></li>
                                    <li>No.Telpon<span>{{$anggota->no_telpon}}</span></li>
                                </ul>
                            </div> --}}
                            <div class="profile-info">
                                <h4 class="heading">About</h4>
                                <ul class="list-unstyled list-justify">
                                    <li>Status Anggota<span>{{$anggota->ket}}</span></li>
                                </ul>
                            </div>
                            <div class="text-center"><a href="/anggota/{{$anggota->id}}/edit" class="btn btn-warning">Edit Profile</a></div>
                        </div>
                        <!-- END PROFILE DETAIL -->
                    </div>
                    <!-- END LEFT COLUMN -->
                    <!-- RIGHT COLUMN -->
                    <div class="profile-right">
                        
                        <!-- TABBED CONTENT -->
                        <div class="col-md-12">
							<!-- TABLE STRIPED -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Simpanan Anggota</h3>
								</div>
								<div class="panel-body">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>No</th>
												<th>Simpanan Wajib</th>
												<th>Jumlah Simpanan</th>
												<th>Tanggal</th>
											</tr>
										</thead>
										<tbody>
											<tr>
                                                <td>{{$anggota->simpanan->id}}</td>
                                                <td>@currency($anggota->simpanan->simpanan_wajib)</td>
                                                <td>@currency($anggota->simpanan->jumlah_simpanan)</td>
                                                <td>{{$anggota->simpanan->tanggal}}</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- END TABLE STRIPED -->
						</div>
                        <!-- END TABBED CONTENT -->
                    </div>
                    <div class="profile-right">
                        <h4 class="heading">DATA DIRI ANGGOTA</h4>
                        <!-- AWARDS -->
                        <div class="awards">
                            <div class="row">
                                <div class="col-md-4 col-sm-6">
                                    <div class="award-item">
                                        <div class="hexagon">
                                            <span class="lnr lnr-user award-icon"></span>
                                        </div>
                                        <ul class="list-unstyled list-justify">
                                            <span><li>{{$anggota->nama_anggota}}</li></span>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="col-md-4 col-sm-6">
                                    <div class="award-item ">
                                        <div class="hexagon">
                                            <span class="lnr lnr-smartphone award-icon"></span>
                                        </div>
                                        <ul class="list-unstyled list-justify">
                                            <span><li>{{$anggota->no_telpon}}</li></span>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-6">
                                    <div class="award-item">
                                        <div class="hexagon">
                                            <span class="lnr lnr-home award-icon"></span>
                                        </div>
                                        <ul class="list-unstyled list-justify">
                                            <span><li>{{$anggota->alamat}}</li></span>
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <!-- END AWARDS -->
                        
                    </div>
                    <!-- END RIGHT COLUMN -->
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>
@endsection