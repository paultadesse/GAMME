<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Exhibition;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ExhibitionController extends Controller
{

    public function index()
    {
        $exhibitions = Exhibition::with('artists')->latest()->get();

        return Inertia::render('Exhibitions', compact('exhibitions'));
    }

    /**
     * i passed the Artist for route model binding ( to show the artist slug on the URL)
     */
    public function show(Artist $artist, Exhibition $exhibition)    
    {
        $artist->load(['exhibitions']);
        $exhibition->load(['artists', 'exhibitionImages']);

        return Inertia::render('Artist/Exhibitions/ArtistExhibition', compact('exhibition', 'artist'));
    }
}
