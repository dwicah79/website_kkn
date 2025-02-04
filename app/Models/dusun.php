<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dusun extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'job_title',
        'image',
        'telp'
    ];

    public function job_title()
    {
        return $this->belongsTo(Jabatan::class, 'job_title_id');
    }
}
