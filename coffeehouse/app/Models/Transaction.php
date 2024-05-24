<?php

namespace App;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \App\Models\User;
use \App\Models\Purchase;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'purchase_id',
        'points_awarded',
        'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function purchase()
    {
        return $this->belongsTo(Purchase::class);
    }

    // Methods related to tracking point transactions
}
