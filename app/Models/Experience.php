<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'experience_image',
        'experience_name',
        'experience_link',
    ];

    public function setExperienceNameAttribute($value)
    {
        $this->attributes['experience_name'] = ucwords($value);
    }
}
