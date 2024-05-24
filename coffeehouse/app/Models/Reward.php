<?php

namespace App;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Reward extends Model
{
    use HasFactory;

    protected $fillable = [
        'points_required',
        'description',
        'image',
        'status',
    ];

    // Methods related to reward management (e.g., check if user has enough points)
}
