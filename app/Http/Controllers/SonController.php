<?php

namespace App\Http\Controllers;

use App\Models\Son;
use App\Http\Requests\StoreSonRequest;
use App\Http\Requests\UpdateSonRequest;

class SonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreSonRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSonRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Son  $son
     * @return \Illuminate\Http\Response
     */
    public function show(Son $son)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Son  $son
     * @return \Illuminate\Http\Response
     */
    public function edit(Son $son)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSonRequest  $request
     * @param  \App\Models\Son  $son
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSonRequest $request, Son $son)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Son  $son
     * @return \Illuminate\Http\Response
     */
    public function destroy(Son $son)
    {
        //
    }
}
