<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = 'laporan';
    protected $fillable = ['rincian','saldo_masuk','saldo_keluar','saldo_akhir',
    'bulan','masuk_simpanan_id', 'masuk_angsuran_id','keluar_pinjaman_id'];
}
