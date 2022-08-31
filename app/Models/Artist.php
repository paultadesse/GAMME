<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function works()
    {
        return $this->hasMany(Work::class);
    }

    public function exhibitions()
    {
        return $this->belongsToMany(Exhibition::class);
    }
}
