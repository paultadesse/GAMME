<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exhibition extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'description', 'starting_date', 'end_date', 'is_active', 'cover_image'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function setStartingDateAttribute($value)
    {
        $this->attributes['starting_date'] = Carbon::parse($value)->format('Y-m-d');
    }

    public function setEndDateAttribute($value)
    {
        $this->attributes['end_date'] = Carbon::parse($value)->format('Y-m-d');
    }

    public function artists()
    {
        return $this->belongsToMany(Artist::class);
    }

    public function exhibitionImages()
    {
        return $this->hasMany(ExhibitionImage::class);
    }
}
