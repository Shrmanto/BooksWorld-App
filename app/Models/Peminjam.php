<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Peminjam extends Model
{
    use HasFactory, HasRoles;

    protected $table = 'peminjam';
    protected $primaryKey = 'id';
    protected $fillable = [
        'alamat',
        'no_handphone',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
