<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    protected $fillable = [
        'name_resource',
        'type_resource',
    ];

    public function projects()
    {
        return $this->belongsToMany(Project::class, 'project_resource');
    }



}
