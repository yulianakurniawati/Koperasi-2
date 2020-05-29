<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keluaran extends Model
{
    protected $table = 'keluaran';
    protected $fillable = ['nama','jenis','saldo_pinjam','tanggal','bulan','pinjaman_id'];
}
