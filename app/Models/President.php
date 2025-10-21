<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class President extends Model
{
    protected $primaryKey = 'dni';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['dni', 'first_name', 'last_name', 'birth_date', 'team_id', 'elected_year'];
    protected $casts = ['birth_date' => 'date'];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
