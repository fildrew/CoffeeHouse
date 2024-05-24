<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Purchase extends Model
{   
    use HasFactory;

    protected $fillable = [
        'user_id',
        'amount',
        'date',
        'drink_type',
        'other_items',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Additional methods specific to purchases (e.g., calculate points earned)
    public function calculatePointsEarned()
    {
        // Define your logic for calculating points based on amount
        // Assuming 1 point for every $10 spent
        $pointsPerDollar = 0.1;
        $points = $this->amount * $pointsPerDollar;
        
        return round($points);
    }
}

/* $purchase = Purchase::create([
    // ... other purchase data
]);

$pointsEarned = $purchase->calculatePointsEarned();

// Update user points or create a transaction record with $pointsEarned */

/* use App\Purchase;

// Assume you have a Purchase instance
$purchase = Purchase::find(1); // Fetch a purchase by its ID

// Calculate points earned for this purchase
$points = $purchase->calculatePoints();

echo "Points earned: " . $points; */
