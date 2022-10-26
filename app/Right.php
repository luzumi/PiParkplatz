<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Right extends Model
{


    public function user(): \Illuminate\Database\Eloquent\Relations\HasManyThrough
    {
        return $this->hasManyThrough(Group::class, User::class);
    }

    public function group(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Group::class);
    }
}
