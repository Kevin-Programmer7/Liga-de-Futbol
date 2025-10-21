<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['name', 'founded_year', 'city_id', 'default_stadium_id'];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function defaultStadium()
    {
        return $this->belongsTo(Stadium::class, 'default_stadium_id');
    }
    public function president()
    {
        return $this->hasOne(President::class, 'team_id', 'id');
    }
    public function homeMatches()
    {
        return $this->hasMany(GameMatch::class, 'home_team_id');
    }
    public function awayMatches()
    {
        return $this->hasMany(GameMatch::class, 'away_team_id');
    }
    public function players()
    {
        return $this->belongsToMany(Player::class, 'players_teams')
            ->withPivot(['season_id', 'shirt_number', 'start_date', 'end_date'])
            ->withTimestamps();
    }
}
