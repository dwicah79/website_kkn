<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis_UMKM extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    public function umkm()
    {
        return $this->hasMany(Umkm::class, 'jenis_umkm_id');
    }
}
