<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suratmasuks extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'tanggal_surat',
        'judul_surat',
        'tautan_surat'
    ];
}
