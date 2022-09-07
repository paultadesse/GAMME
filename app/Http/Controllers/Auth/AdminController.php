<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use App\Models\Exhibition;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminController extends Controller
{
    public function index()
    {
        $totalArtists = Artist::count();
        $totalExhibitions = Exhibition::count();
        // dd($totalArtists);
        return Inertia::render('Admin/Dashboard', compact('totalArtists', 'totalExhibitions'));
    }
}
