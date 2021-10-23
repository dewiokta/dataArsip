<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function arsips(){
        return $this->hasMany(Arsip::class,'id_kategori','id');
    }
}
