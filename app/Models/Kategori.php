<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori'; // Sesuaikan nama tabel
    protected $fillable = ['nama'];

    public function artikel()
    {
        return $this->hasMany(Artikel::class, 'kategori_id');
    }
}
