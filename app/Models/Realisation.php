<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Realisation extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title',
        'link',
        'description',
        'company',
        'logo',
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
