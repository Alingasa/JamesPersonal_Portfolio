<?php
namespace App\Models;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'avatar',
        'role',
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'birth_date',
        'passion',
        'phone_number',
        'address',
        'city',
        'gender',
        'age',
        'municipality',
        'province',
        'zip_code',
        'status',
        'religion',
        'description',
        'fb_url',
        'instagram_url',
        'linkedin_url',
        'youtube_url',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Set the first name attribute.
     *
     * @param string $value
     * @return void
     */
    public function setFirstNameAttribute($value)
    {
        $this->attributes['first_name'] = ucwords($value);
    }

    /**
     * Set the middle name attribute.
     *
     * @param string $value
     * @return void
     */
    public function setMiddleNameAttribute($value)
    {
        $this->attributes['middle_name'] = ucwords($value);
    }

    /**
     * Set the last name attribute.
     *
     * @param string $value
     * @return void
     */
    public function setLastNameAttribute($value)
    {
        $this->attributes['last_name'] = ucwords($value);
    }

    /**
     * Set the passion attribute.
     *
     * @param string $value
     * @return void
     */
    public function setPassionAttribute($value)
    {
        $this->attributes['passion'] = ucwords($value);
    }

    /**
     * Set the address attribute.
     *
     * @param string $value
     * @return void
     */
    public function setAddressAttribute($value)
    {
        $this->attributes['address'] = ucwords($value);
    }

    /**
     * Set the municipality attribute.
     *
     * @param string $value
     * @return void
     */
    public function setMunicipalityAttribute($value)
    {
        $this->attributes['municipality'] = ucwords($value);
    }

    /**
     * Set the province attribute.
     *
     * @param string $value
     * @return void
     */
    public function setProvinceAttribute($value)
    {
        $this->attributes['province'] = ucwords($value);
    }

    /**
     * Set the status attribute.
     *
     * @param string $value
     * @return void
     */
    public function setStatusAttribute($value)
    {
        $this->attributes['status'] = ucwords($value);
    }

    /**
     * Set the religion attribute.
     *
     * @param string $value
     * @return void
     */
    public function setReligionAttribute($value)
    {
        $this->attributes['religion'] = ucwords($value);
    }

    public function setGenderAttribute($value)
    {
        $this->attributes['gender'] = ucwords($value);
    }

    /**
     * Get the age attribute.
     *
     * @return int
     */
    public function getAgeAttribute()
    {
        return Carbon::parse($this->attributes['birth_date'])->age;
    }

    
    /**
     * Set the last name attribute.
     *
     * @param string $value
     * @return void
     */
}

