<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Mengizinkan semua kolom diisi data kecuali ID
    protected $guarded = ['id'];

    // Relasi: 1 Kategori memiliki banyak Kostum
    public function costumes()
    {
        return $this->hasMany(Costume::class);
    }
}