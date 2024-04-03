<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable = [
        'grade_level',
        'school_year',
        'school_name',
        'address',
    ];

    public function setGradeLevelAttribute($value)
    {
        $this->attributes['grade_level'] = ucwords($value);
    }

    public function setSchoolNameAttribute($value)
    {
        $this->attributes['school_name'] = ucwords($value);
    }

    public function setAddressAttribute($value)
    {
        $this->attributes['address'] = ucwords($value);
    }
}
