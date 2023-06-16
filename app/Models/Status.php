<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Status extends Model
{
    use HasFactory, HasRoles;

    protected $table = 'status';
    protected $fillable = ['status'];

    public function buku()
    {
        return $this->hasMany(Buku::class);
    }
}
