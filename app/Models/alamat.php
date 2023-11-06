<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alamat extends Model
{
    use HasFactory;
    protected $fillable = [
        'kantor',
        'telp',
        'email'
    ];

    protected $table ='alamat';
    public $timestamps = false;
}
