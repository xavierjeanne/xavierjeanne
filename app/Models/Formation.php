<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'title',
        'level',
        'date',
        'description',
        'organisme',
    ];

    /**
     * Get the user that owns the formation.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
