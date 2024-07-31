<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Workout extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'durationTime',
        'user_id',
    ];

    /**
     * Get the user that owns the Workout
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function usersWhoFavorited(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'favorite_workouts', 'workout_id', 'user_id')
                    ->withTimestamps();
    }
}

