<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kegiatanpengembangan extends Model
{
    use HasFactory;
    protected $table ='kegiatan_pengembangan';
    public $timestamps = false;
    protected $fillable = [
        'nama_program',
        'inisiator',
        'durasi_pelatihan',
        'standar_kompetensi',
        'keterangan',
        'id_lpk'
    ];
    public function lpk()
    {
        return $this->belongsTo(lpk::class, 'id_lpk');
    }
}
