<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function dusun()
    {
        return $this->hasMany(Dusun::class, 'job_title_id');
    }
}
