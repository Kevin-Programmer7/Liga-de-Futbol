<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Goal extends Model
{
    protected $fillable = ['match_id', 'player_id', 'team_id', 'minute', 'description'];

    public function match()
    {
        return $this->belongsTo(GameMatch::class, 'match_id');
    }
    public function player()
    {
        return $this->belongsTo(Player::class);
    }
    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
