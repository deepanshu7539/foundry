<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $guarded = [];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function jobs()
    {
        return $this->hasManyThrough(Job::class, Order::class);
    }


}
