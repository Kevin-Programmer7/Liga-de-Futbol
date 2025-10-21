<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlayerTeam extends Model
{
    protected $table = 'players_teams';
    protected $fillable = ['player_id', 'team_id', 'season_id', 'shirt_number', 'start_date', 'end_date'];
    protected $casts = ['start_date' => 'date', 'end_date' => 'date'];

    public function player()
    {
        return $this->belongsTo(Player::class);
    }
    public function team()
    {
        return $this->belongsTo(Team::class);
    }
    public function season()
    {
        return $this->belongsTo(Season::class);
    }
}
