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
        $artists = Artist::whereNotIn('id', $exhibition->artists()->pluck('id')->toArray())->get();

        return Inertia::render('Admin/Exhibition/AssignArtist', compact('exhibition', 'artists'));
    }

    public function store()
    {
        request()->validate([
            'artist_id' => ['required', 'integer', Rule::exists('artists', 'id')],
            'exhibition_id' => ['required'],
        ]);

        $exhibition = Exhibition::findOrFail(request()->exhibition_id);

        if ($exhibition->artists->contains(request('artist_id'))) {
            return redirect()->back();
        }
        $exhibition->artists()->attach(request('artist_id'));

        request()->session()->flash('alert', [
            'type' => "success",
            'message' => "Artist Assigned",
        ]);
    }
}
