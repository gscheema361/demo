<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LeaderboardController extends Controller
{
    public function index()
    {
        $leaders = User::withCount('posts')
            ->orderByDesc('posts_count')
            ->take(20)
            ->get();

        return view('leaderboard', compact('leaders'));
    }
}
