<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;

class AboutController extends Controller
{
    public function index()
    {
        $user = User::with('profiles.links' , 'profiles.degrees.issuer')->first();
        $profile = $user?->profiles->first();
        $degrees = ($profile?->degrees ?? collect())->map(function($degree) {
            $degree->formatted_start = $degree->start_date 
                ? Carbon::parse($degree->start_date)->format('M Y') 
                : '?';
            $degree->formatted_end = $degree->end_date 
                ? Carbon::parse($degree->end_date)->format('M Y') 
                : 'Present';
            return $degree;
        });

        return view('pages.about', [
            'user' => $user,
            'profile' => $profile,
            'degrees' => $degrees
        ]);
    }
}
