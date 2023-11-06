<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lpk extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_lpk',
        'nomor_ijin_lpk',
        'masa_berlaku ijin lpk',
        'kantor',
        'telp',
        'email',
        'nomor_tlg_ijin',
        'jenis_lpk',
        'id_pimpinan',
        'id_pj',
        'status_akreditasi',
        'ruang_lingkup',
       
    ];

    protected $table ='lpk';
    public $timestamps = false;

    public function pimpinan()
    {
        return $this->hasMany(pimpinan::class,'id');
    }

    public function pj()
    {
        return $this->hasMany(pj::class,'id');
    }
}