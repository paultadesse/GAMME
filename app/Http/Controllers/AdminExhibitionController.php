<?php

namespace App\Http\Controllers;

use App\Models\Exhibition;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Str;

class AdminExhibitionController extends Controller
{
    public function index()
    {
        $exhibitions = Exhibition::with('exhibitionImages')->orderBy('created_at')->paginate(7);

        return Inertia::render('Admin/Exhibition/Exhibitions', compact('exhibitions'));
    }

    public function show(Exhibition $exhibition)
    {
        $exhibition->load(['artists', 'exhibitionImages']);

        return Inertia::render('Admin/Exhibition/Show', compact('exhibition'));
    }

    public function create()
    {
        return Inertia::render('Admin/Exhibition/Create');
    }

    public function store()
    {
        request()->validate([
            'title' => ['required'],
            'description' => ['required'],
            'starting_date' => ['required'],
            'end_date' => ['required'],
            'cover_image'  => ['required', 'mimes:jpeg,jpg,png', 'max:2000']
        ]);

        $filename = '';
        if (request()->hasFile('cover_image')) {
            $file = request()->file('cover_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            request()->file('cover_image')->storeAs('public/uploads/exhibitions', $filename);
        }

        $exhibition = Exhibition::create([
            'title' => request()->title,
            'slug' => Str::slug(request()->title) . '-' . rand(1111, 9999),
            'description' => request()->description,
            'starting_date' => request()->starting_date,
            'end_date' => request()->end_date,
            'is_active' => true,
            'cover_image' => 'uploads/exhibitions/' . $filename
        ]);
    }
}
