<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Angsuran extends Model
{
    protected $table = 'angsuran';
    protected $fillable = ['nama','cicilan','cicilan_ke','tanggal',
    'sisa', 'keterangan', 'anggota_id'];

    public function anggota()
    {
        return $this->belongsTo(Anggota::Class);
    }
}
