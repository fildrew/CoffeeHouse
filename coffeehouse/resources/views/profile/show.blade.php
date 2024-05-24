@extends('layouts.app')

@section('content')
<div class="container">
    <h1>User Profile</h1>
    
    <div class="card mb-4">
        <div class="card-header">Profile Information</div>
        <div class="card-body">
            <p><strong>Name:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            <p><strong>Points Balance:</strong> {{ $pointsBalance }}</p>
        </div>
    </div>

    <div class="card">
        <div class="card-header">Available Rewards</div>
        <div class="card-body">
            @if($availableRewards->isEmpty())
                <p>No rewards available</p>
            @else
                <ul>
                    @foreach($availableRewards as $reward)
                        <li>
                            {{ $reward->description }} ({{ $reward->points_required }} points)
                            @if ($pointsBalance >= $reward->points_required)
                                - <a href="#">Redeem</a>  @endif
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
</div>
@endsection
