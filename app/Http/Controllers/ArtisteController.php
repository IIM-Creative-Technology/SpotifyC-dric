<?php

namespace App\Http\Controllers;

use App\Models\Artiste;
use App\Http\Requests\StoreArtisteRequest;
use App\Http\Requests\UpdateArtisteRequest;
use Inertia\Inertia;

class ArtisteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Artiste/Index', [
            'artistes' => Artiste::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreArtisteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArtisteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artiste  $artiste
     * @return \Illuminate\Http\Response
     */
    public function show(Artiste $artiste)
    {
        return Inertia::render('Artiste/Show',[
            'artiste' => $artiste->load('albums')
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artiste  $artiste
     * @return \Illuminate\Http\Response
     */
    public function edit(Artiste $artiste)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateArtisteRequest  $request
     * @param  \App\Models\Artiste  $artiste
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateArtisteRequest $request, Artiste $artiste)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artiste  $artiste
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artiste $artiste)
    {
        //
    }
}
