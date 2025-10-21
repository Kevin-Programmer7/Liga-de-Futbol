<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('season_id')->constrained('seasons');
            $table->timestampTz('match_datetime');
            $table->foreignId('home_team_id')->constrained('teams');
            $table->foreignId('away_team_id')->constrained('teams');
            $table->foreignId('stadium_id')->constrained('stadiums');
            $table->unsignedSmallInteger('goals_home')->default(0);
            $table->unsignedSmallInteger('goals_away')->default(0);
            $table->timestamps();
        });

        DB::statement('ALTER TABLE matches ADD CONSTRAINT chk_home_away_diff CHECK (home_team_id <> away_team_id)');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matches');
    }
};
