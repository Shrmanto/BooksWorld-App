<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Buku extends Model
{
    use HasFactory, HasRoles;

    protected $table = 'buku';
    protected $fillable = [
        'judul_buku',
        'image',
        'pengarang',
        'penerbit',
        'sinopsis',
        'kategori_id',
        'jumlah',
        'status_id'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}
