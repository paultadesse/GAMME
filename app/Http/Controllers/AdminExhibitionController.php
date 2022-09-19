<?php

namespace App\Http\Controllers;

use App\Models\Exhibition;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminExhibitionController extends Controller
{
    public function index()
    {
        $exhibitions = Exhibition::with('exhibitionImages')->orderBy('created_at')->paginate(7);

        return Inertia::render('Admin/Exhibition/Exhibitions', compact('exhibitions'));
    }
}
