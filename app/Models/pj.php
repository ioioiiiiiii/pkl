<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pj extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'jabatan',
        'telp',
        'id_lpk'

    ];

    protected $table ='pj';
    public $timestamps = false;
}
