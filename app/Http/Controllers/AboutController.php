<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AboutController extends Controller
{
    public function index()
    {
        $user = User::with('profile')->first();

        return view('about', [
            'user' => $user,
            'profile' => $user?->profile,
        ]);
    }
}
