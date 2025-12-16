<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'link_project',
        'description',
        'thumbnail',
        'status',
        'layanan_id',
    ];

    public function layanan()
    {
        return $this->belongsTo(Layanan::class, 'layanan_id');
    }

    public function resources()
    {
        return $this->belongsToMany(Resource::class, 'project_resource');
    }

}
