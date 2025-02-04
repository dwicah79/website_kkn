<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'thumbnail',
        'telp'
    ];

    public function jenis_umkm()
    {
        return $this->belongsTo(Jenis_UMKM::class, 'jenis_umkm_id');
    }
}
