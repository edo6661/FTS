<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function getLogoUrlAttribute()
    {
        return asset('storage/' . $this->image);
    }
}
