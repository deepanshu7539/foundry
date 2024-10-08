<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    protected $guarded = [];

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
