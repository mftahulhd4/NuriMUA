<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Costume extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // Relasi: Kostum ini milik 1 Kategori
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}