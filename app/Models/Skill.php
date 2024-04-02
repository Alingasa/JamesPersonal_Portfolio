<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'skill_name',
        'percentage',
    ];

    public function setSkillNameAttribute($value)
    {
        $this->attributes['skill_name'] = ucwords($value);
    }
}
