<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Realisation extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'link',
        'description',
        'type',
    ];

    /**
     * Get the user that owns the realisation.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the skills for the realisation.
     */
    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }
}
