<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use App\Models\Artiste;
use App\Models\Playlist;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\StorePlaylistRequest;
use App\Http\Requests\UpdatePlaylistRequest;

class PlaylistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Playlist/Index', [
            'playlists' => Playlist::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $artistes = Artiste::all();
        return Inertia::render('Playlist/Create', [ "artistes" => $artistes ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePlaylistRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePlaylistRequest $request)
    {
        $request->validate([
            'nom' => 'required',
            'description' => 'required',
            'image' => 'required',
            'is_public' => 'required',
            'artiste_id' => 'required'
        ]);

        Playlist::create([
            'nom' => $request->nom,
            'description' => $request->description,
            'image' => $request->image,
            'is_public' => $request->is_public,
            'artiste_id' => $request->artiste_id
        ]);

        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function show(Playlist $playlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function edit(Playlist $playlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePlaylistRequest  $request
     * @param  \App\Models\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePlaylistRequest $request, Playlist $playlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Playlist $playlist)
    {
        //
    }
}
