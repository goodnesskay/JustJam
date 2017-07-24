<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{
    public function searchView()
    {
        return view('dashboard.find-music-pal',['users'=>Auth::User()]);
    }
}
