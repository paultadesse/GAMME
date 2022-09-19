<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Exhibition;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Inertia\Inertia;

class ExhibitionArtistController extends Controller
{
    public function create(Exhibition $exhibition)
    {
        $artists = Artist::with('exhibitions')->get();
        
        /**
         * i want to retrive artists who are not participated in this [$exhibition]
         * i do have [exhibibitions] relation, so can i filter through that make use of the reation you know..?
         * i don't want to compact all artists that are already in the relation...
         */

        return Inertia::render('Admin/Exhibition/AssignArtist', compact('exhibition', 'artists'));
    }

    public function store()
    {
        request()->validate([
            'artist_id' => ['required', 'integer', Rule::exists('artists', 'id')],
            'exhibition_id' => ['required'],
        ]);

        $exhibition = Exhibition::findOrFail(request()->exhibition_id);
        $artist = Artist::findOrFail(request()->artist_id);

        if($exhibition->artists->contains($artist->id)){
            return redirect()->back();
        }
        $exhibition->artists()->attach($artist);
    }
}
