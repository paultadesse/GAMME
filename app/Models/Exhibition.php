<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exhibition extends Model
{
    use HasFactory;
    
    public function artists()
    {
        return $this->belongsToMany(Artist::class);
    }

    public function exhibitionImages()
    {
        return $this->hasMany(ExhibitionImage::class);
    }
}
