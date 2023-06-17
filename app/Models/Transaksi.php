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

    public function transaksi_detail()
    {
        return $this->hasMany(Transaksi_Detail::class);
    }
}
