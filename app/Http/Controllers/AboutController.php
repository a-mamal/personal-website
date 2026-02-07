<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AboutController extends Controller
{
    public function index()
    {
        $user = User::with('profiles.links' , 'profiles.degrees.issuer')->first();
        $profile = $user?->profiles->first();
        $degrees = $profile?->degrees ?? collect();

        return view('pages.about', [
            'user' => $user,
            'profile' => $profile,
            'degrees' => $degrees
        ]);
    }
}
