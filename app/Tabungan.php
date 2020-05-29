<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tabungan extends Model
{
    protected $table = 'tabungan';
    protected $fillable = ['nama','jenis','saldo',
    'tanggal','bulan','simpanan_id'];
}
