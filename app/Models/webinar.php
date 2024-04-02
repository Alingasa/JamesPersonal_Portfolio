<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class webinar extends Model
{
    use HasFactory;

     
    protected $fillable = [
        'webinar_image',
        'host_name',
        'agenda',
        'date',
    ];

    public function setAgendaAttribute($value)
    {
        $this->attributes['agenda'] = ucwords($value);
    }
    public function setHostNameAttribute($value)
    {
        $this->attributes['host_name'] = ucwords($value);
    }
}
