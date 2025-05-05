<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'image_public_id'
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
