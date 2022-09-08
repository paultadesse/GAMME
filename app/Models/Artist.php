<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'slug', 'biography', 'date_of_birth', 'photo'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function setDateOfBirthAttribute($value)
    {
        $this->attributes['date_of_birth'] = Carbon::parse($value)->format('Y-m-d');
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
