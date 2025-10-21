<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    protected $fillable = ['name', 'start_date', 'end_date', 'is_active'];
    protected $casts = ['is_active' => 'boolean', 'start_date' => 'date', 'end_date' => 'date'];

    public function matches()
    {
        return $this->hasMany(GameMatch::class, 'season_id');
    }
    public function playerTeams()
    {
        return $this->hasMany(PlayerTeam::class, 'season_id');
    }
}
