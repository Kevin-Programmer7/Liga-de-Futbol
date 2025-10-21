<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = ['name', 'country'];

    public function stadiums()
    {
        return $this->hasMany(Stadium::class);
    }
    public function teams()
    {
        return $this->hasMany(Team::class);
    }
}
