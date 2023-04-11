<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poll extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    function choises()
    {
        return $this->hasMany(Choise::class, 'poll_id');
    }

    function votes()
    {
        return $this->hasMany(Vote::class, 'poll_id');
    }
}
