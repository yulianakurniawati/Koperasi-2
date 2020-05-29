@extends('layouts.master')

@section('content')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-headline">
						<div class="panel-heading">
							<h2 class="text">Koperasi Lima Jaya Mandiri</h2>
							<p class="panel-subtitle">Periode: Januari 2020 - Desember 2020</p>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-4">
									<div class="metric">
										<span class="icon"><i class="lnr lnr-user"></i></span>
										<p>
                                            <span class="number"><b>48</b></span>
                                            <span class="title">Members</span>
										</p>
									</div>
								</div>
								<div class="col-md-4">
									<div class="metric">
										<span class="icon"><i class="fa fa-shopping-bag"></i></span>
										<p>
											<span class="number"><b>Rp 15.680.000</b></span>
											<span class="title">Balance</span>
										</p>
									</div>
								</div>
								<div class="col-md-4">
									<div class="metric">
										<span class="icon"><i class="fa fa-bar-chart"></i></span>
										<p>
											<span class="number"><b>35%</b></span>
											<span class="title">Conversions</span>
										</p>
									</div>
								</div>
								
							
							<div class="row">
								<div class="col-md-12">
									<div class="panel panel-headline">
										<div class="panel-heading">
											<p class="panel-title">Sejarah Koperasi</p>
											<p>Koperasi Lima Jaya Mandiri(LJM) terbentuk pertama kali pada tahun 2003. Awal mula koperasi ini didirikan karena pada masa itu pembayaran listrik
												masih susah dan mengantri cukup lama. Sehingga warga RT 05 berencana mengadakan koperasi dengan maksud dan tujuan yaitu : </p>
											<p>
												<ol type='1'>
													<li>Dapat mensejahterakan anggota koperasi</li>
													<li>Mengkoordinir pembayaran listrik dan telfon dengan jasa Rp 3000</li>
													<li>Mengadakan simpan pinjam</li>
												</ol>
											</p>
											<p>
												Dengan maksud dan tujuan tersebut maka terbentuklah <b>"Koperasi Lima Jaya Mandiri"</b> hingga sampai saat ini dan sudah berdiri selama 17 tahun lamanya.
												Dan sudah memiliki anggota sebanyak 48 orang.
											</p>
										</div>
										
									</div>
								</div>	
							</div>
						</div>
					</div>
                </div>
			</div>
			<div class="container-fluid">
				<div class="class row">
					<div class="col-md-4">
						<!-- PANEL DEFAULT -->
						<div class="panel">
							<div class="panel-heading bg-primary">
								<h5 class="panel-title">Struktur Pengurus</h5>
								<div class="right">
									<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
									<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
								</div>
							</div>
							<div class="panel-body" style="display: block;">
								<p>
									Struktur Kepengurusan Koperasi Lima Jaya Mandiri terdiri dari :
									<ol type='1'>
										<li>Ketua Koperasi : Purdiwiyono</li>
										<li>Sekretaris : Suhartono</li>
										<li>Sie. Simpan Pinjam : Jailani Bastoni</li>
										<li>Sie. Jasa Listrik  : Agus Mardiyanto</li>
									</ol>
								</p>
				
							</div>
						</div>
						<!-- END PANEL DEFAULT -->
					</div>	
					<div class="col-md-4">
						<!-- PANEL DEFAULT -->
						<div class="panel">
							<div class="panel-heading bg-primary">
								<h5 class="panel-title">Syarat Menjadi Anggota</h5>
								<div class="right">
									<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
									<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
								</div>
							</div>
							<div class="panel-body" style="display: block;">
								<p>Syarat menjadi anggota koperasi adalah dengan membuka simpanan terlebih dahulu sebesar Rp 25.000 maka sudah resmi mejadi anggota bagian Koperasi Lima Jaya Mandiri.
									Dan menabung rutinnya minimal sebesar Rp 5.000.
								</p>
							</div>
						</div>
						<!-- END PANEL DEFAULT -->
					</div>
					<div class="col-md-4">
						<!-- PANEL DEFAULT -->
						<div class="panel">
							<div class="panel-heading bg-primary">
								<h3 class="panel-title">Pinjaman Koperasi</h3>
								<div class="right">
									<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
									<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
								</div>
							</div>
							<div class="panel-body" style="display: block;">
								<p>Aturan pinjaman koperasi yaitu anggota diperbolehkan meminjam dengan syarat meminjam tidak melebihi jumlah simpanan yang dimiliki. Namun jika keadaan mendesak dan saldo koperasi memadai
									maka, anggota dapat diberikan pinjaman. Adapun syarat mengangsur cicilan dibebaskan sesuai kesanggupan anggota masing-masing dengan jasa sebesar 1%.
								</p>
							</div>
						</div>
						<!-- END PANEL DEFAULT -->
					</div>
				</div>
			</div>
        </div>
    </div>
</div>

@endsection