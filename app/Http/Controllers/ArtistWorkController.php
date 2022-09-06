<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Work;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ArtistWorkController extends Controller
{
    public function index()
    {

    }

    public function show(Artist $artist, Work $work)
    {
        $work->load('artist');
        $artist->load(['works', 'exhibitions']);
        
        return Inertia::render('Artist/Works/ArtistWork', compact('artist', 'work'));
    }
}
