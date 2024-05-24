<?php

namespace App\Http\Controllers;

use App\Reward;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        $pointsBalance = $user->points;
        $availableRewards =  Reward::where('status', 'active')->get();

        return view('profile.show', compact('user', 'pointsBalance', 'availableRewards'));
    }
}
