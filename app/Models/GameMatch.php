<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GameMatch extends Model
{
    protected $table = 'matches';
    protected $fillable = ['season_id', 'match_datetime', 'home_team_id', 'away_team_id', 'stadium_id', 'goals_home', 'goals_away'];
    protected $casts = ['match_datetime' => 'datetime'];

    public function season()
    {
        return $this->belongsTo(Season::class);
    }
    public function stadium()
    {
        return $this->belongsTo(Stadium::class);
    }
    public function homeTeam()
    {
        return $this->belongsTo(Team::class, 'home_team_id');
    }
    public function awayTeam()
    {
        return $this->belongsTo(Team::class, 'away_team_id');
    }
    public function goals()
    {
        return $this->hasMany(Goal::class, 'match_id');
    }
}
