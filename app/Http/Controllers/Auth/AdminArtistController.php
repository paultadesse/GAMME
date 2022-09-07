<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminArtistController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $artists = Artist::with('exhibitions')->orderBy('created_at')->paginate(7);

        return Inertia::render('Admin/Artists', compact('artists'));
    }
}
