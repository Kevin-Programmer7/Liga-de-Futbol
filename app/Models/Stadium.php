<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stadium extends Model
{
    protected $fillable = ['name', 'capacity', 'city_id'];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function matches()
    {
        return $this->hasMany(GameMatch::class, 'stadium_id');
    }
}
