<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    /**
     * @var string
     */
    protected $manufacturer;

    /**
     * @var string
     */
    protected $model;

    /**
     * @var string
     */
    protected $sign;

    /**
     * @var string
     */
    protected $color;

    /**
     * @var boolean
     */
    protected $status;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'manufacturer', 'typ', 'color', 'sign',
    ];



    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function user(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(User::class);
    }
}
