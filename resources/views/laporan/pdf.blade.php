<!DOCTYPE html>
<html>
<head>
	<title>Laporan Bulanan Koperasi Lima Jaya Periode Januari - Desember 2020</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan Bulanan Koperasi Lima Jaya</h5>
        <h5>Periode Januari - Desember 2020</h5>
		
    </center>
    <br>

	<table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Rincian</th>
                <th>Pemasukan</th>
                <th>Pengeluaran</th>
                <th>Saldo</th>
                <th>Bulan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_laporan as $laporan)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{$laporan->rincian}}</td>
                <td>{{$laporan->saldo_masuk}}</td>
                <td>{{$laporan->saldo_keluar}}</td>
                <td>{{$laporan->saldo_akhir}}</td>
                <td>{{$laporan->bulan}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>