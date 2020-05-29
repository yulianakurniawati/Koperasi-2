<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'anggota';
    protected $fillable = ['nama_anggota','alamat','no_telpon','ket','avatar','user_id'];

    public function getAvatar()
    {
        if(!$this->avatar){
            return asset('images/default.jpg');
        }
        return asset('images/'.$this->avatar);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function simpanan()
    {
        return $this->hasOne(Simpanan::class);
    }
    
    public function pinjaman()
    {
        return $this->hasOne(Pinjaman::class);
    }

    public function angsuran()
    {
        return $this->hasOne(Angsuran::class);
    }
}
