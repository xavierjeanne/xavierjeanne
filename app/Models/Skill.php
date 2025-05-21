<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'level',
        'logo',
    ];

    /**
     * Get the user that owns the skill.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the experiences that have this skill.
     */
    public function experiences()
    {
        return $this->belongsToMany(Experience::class);
    }

    /**
     * Get the realisations that have this skill.
     */
    public function realisations()
    {
        return $this->belongsToMany(Realisation::class);
    }
}
