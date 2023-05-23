<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminHomepage extends Model
{
    use HasFactory;

    protected $table = 'homepage_config';
    protected $fillable = [
        'web',
        'judul',
        'judul_kecil',
        'sub_judul',
        'gambar',
        'deskripsi',
    ];
}
