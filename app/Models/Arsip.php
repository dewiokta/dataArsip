<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arsip extends Model
{
    use HasFactory;
    // protected $table = 'arsips';
    protected $fillable = ['nomor_surat', 'kategori', 'judul', 'tanggal_arsip', 'surat'];

    // public function categorys()
    // {
    //     return $this->belongsTo(Category::class, 'id_kategori');
    // }
}
