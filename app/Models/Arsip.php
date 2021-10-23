<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arsip extends Model
{
    use HasFactory;

    public function categorys(){
        return $this->belongsTo(Category::class,'id_kategori');
    }
}
