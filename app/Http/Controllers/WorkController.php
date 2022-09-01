<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Work;
use Illuminate\Http\Request;
use Inertia\Inertia;

class WorkController extends Controller
{
    /**
     * i passed the Artist for route model binding ( to show the artist slug on the URL)
     */
    public function show(Artist $artist, Work $work)
    {
        $artist->load(['works']);
        // dd($artist);
        // $work->load(['artist']);
        // dd($work);
        return Inertia::render('Artist/Works/ArtistWork', compact('work','artist'));
    }
}
