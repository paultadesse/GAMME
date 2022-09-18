<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
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

    public function create(Artist $artist)
    {

        return Inertia::render('Admin/Work/Create', compact('artist'));
    }

    public function store()
    {
        request()->validate([
            'artist_id' => ['required'],
            'title' => ['required'],
            'description' => ['required'],
            'photo'  => ['required', 'mimes:jpeg,jpg,png', 'max:2000']
        ]);

        $artist = Artist::findOrFail(request()->artist_id);

        $filename = '';
        if (request()->hasFile('photo')) {
            $file = request()->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            request()->file('photo')->storeAs('public/uploads/works', $filename);
        }

        $artist->works()->create([
            'title' => request()->title,
            'description' => request()->description,
            'slug' => Str::slug(request()->title) . '-' . rand(1111, 9999),
            'photo' => 'uploads/works/' . $filename
        ]);

        return redirect()->route('admin.artist.show', $artist);
    }
}
