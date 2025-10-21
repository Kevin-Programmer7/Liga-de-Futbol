<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = ['full_name', 'birth_date', 'position_id', 'shirt_number'];
    protected $casts = ['birth_date' => 'date'];

    public function position()
    {
        return $this->belongsTo(Position::class);
    }
    public function teams()
    {
        return $this->belongsToMany(Team::class, 'players_teams')
            ->withPivot(['season_id', 'shirt_number', 'start_date', 'end_date'])
            ->withTimestamps();
    }
    public function goals()
    {
        return $this->hasMany(Goal::class);
    }
}
