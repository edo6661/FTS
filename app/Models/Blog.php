<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
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
    public function getDescriptionTrimAttribute() {
        return Str::limit($this->description,100);
    }
}
