<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pimpinan extends Model
{
    use HasFactory;
    protected $fillabel = [
        'nama',
        'telp',
        'id_lpk'
    ];


    protected $table ='pimpinan';
    public $timestamps = false;
}
