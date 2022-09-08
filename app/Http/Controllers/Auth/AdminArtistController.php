<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Str;

class AdminArtistController extends Controller
{
    public function index()
    {
        $artists = Artist::with('exhibitions')->orderBy('created_at')->paginate(7);

        return Inertia::render('Admin/Artist/Artists', compact('artists'));
    }

    public function create()
    {
        return Inertia::render('Admin/Artist/Create');
    }

    public function store()
    {
        request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'biography' => ['required'],
            'birth_date' => ['required'],
            'photo'  => ['required', 'mimes:jpeg,jpg,png', 'max:2000']
        ]);

        $filename = '';
        if (request()->hasFile('photo')) {
            $file = request()->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            request()->file('photo')->storeAs('public/uploads/artists', $filename);
        }

        $artist = Artist::create([
            'first_name' => request()->first_name,
            'last_name' => request()->last_name,
            'slug' => Str::slug(request()->first_name . '_' . request()->last_name),
            'biography' => request()->biography,
            'date_of_birth' => request()->birth_date,
            'photo' => 'uploads/artists/' . $filename
        ]);

        return redirect()->route('artist.list');
    }
}
