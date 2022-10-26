<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'email', 'password', 'status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime'
    ];


    public function adresse(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne($this->newRelatedInstance(Adresse::class));
    }


    public function telephone(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Telephone::class);
    }


    public function car(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Car::class);
    }


    public function parkingSpot(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne($this->newRelatedInstance(ParkingSpot::class));
    }

    public function groups(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne($this->newRelatedInstance(Telephone::class));
    }
}
