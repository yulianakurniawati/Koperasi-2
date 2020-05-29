<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Simpanan extends Model
{
    protected $table = 'simpanan';
    protected $fillable = ['nama','simpanan_wajib','jumlah_simpanan','tanggal','anggota_id'];

    public function anggota()
    {
        return $this->belongsTo(Anggota::Class);
    }
}
