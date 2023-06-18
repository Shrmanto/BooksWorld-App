<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $fillable = [
        'tanggal_pinjam',
        'tanggal_kembali',
        'status',
        'user_id'
    ];

    // Definisikan relasi dengan model Buku
    public function buku()
    {
        return $this->belongsTo(Buku::class);
    }

    // Definisikan relasi dengan model User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function transaksi_detail()
    {
        return $this->hasMany(transaksi_detail::class);
    }
}
