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
        'masa_berlaku_ijin_lpk',
        'kantor',
        'telp',
        'email',
        'nomor_tgl_ijin',
        'jenis_lpk',
        'status_akreditasi',
        'nomor_sk_akreditasi',
        'ruang_lingkup',
        'nama_pimpinan',
        'telp_pimpinan',
        'nama_pj',
        'telp_pj',
        'jabatan_pj',
        'tgl_menjabat'
       
    ];

    protected $table ='lpk';
    public $timestamps = false;


    public function kegiatanpengembangan()
    {
        return $this->hasMany(kegiatanpengembangan::class, 'id_lpk');
    }
}