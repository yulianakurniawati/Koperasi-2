<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pinjaman extends Model
{
    protected $table = 'pinjaman';
    protected $fillable = ['nama','pinjaman','bunga','angsuran','jml_angsuran',
    'tanggal','ket','anggota_id'];

    public function anggota()
    {
        return $this->belongsTo(Anggota::Class);
    }
}
