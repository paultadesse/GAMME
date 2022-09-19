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
    public function show(Exhibition $exhibition)    
    {
        $exhibition->load(['artists', 'exhibitionImages']);

        return Inertia::render('Exhibition/ExhibitionDetail', compact('exhibition'));
    }
}
