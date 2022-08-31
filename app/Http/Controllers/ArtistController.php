<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ArtistController extends Controller
{
    public function index()
    {
        $artists = Artist::orderBy('created_at')->get();
        // dd($artists);
        return Inertia::render('Artists', compact('artists'));
    }

    public function show(Artist $artist)
    {
        $artist->load(['works', 'exhibitions']);

        return Inertia::render('Artist/Show', compact('artist'));
    }
}
