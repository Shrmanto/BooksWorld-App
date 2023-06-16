<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Kategori extends Model
{
    use HasFactory, HasRoles;

    protected $table = 'kategori';
    protected $fillable = ['jenis_kategori'];

    public function buku()
    {
        return $this->hasMany(Buku::class);
    }
}
