<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    /**
     * @var string
     */
    protected $typ;
    /**
     * @var string
     */
    protected $kennzeichen;
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
        'typ', 'kennzeichen', 'status',
    ];

}
