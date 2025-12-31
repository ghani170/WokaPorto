<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    protected $fillable = [
        'nama_layanan',
        'deskripsi_layanan',
        'logo_layanan',
    ];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
