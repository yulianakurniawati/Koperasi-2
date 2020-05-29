<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemasukan extends Model
{
    protected $table = 'pemasukan';
    protected $fillable = ['nama','jenis_pemasukan','saldo_masuk','angsuran_ke',
    'tanggal','bulan','angsuran_id'];
}
