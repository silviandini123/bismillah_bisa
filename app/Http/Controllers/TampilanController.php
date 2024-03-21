<?php

namespace App\Http\Controllers;

use App\Models\Tampilan;
use App\Http\Requests\StoreTampilanRequest;
use App\Http\Requests\UpdateTampilanRequest;

class TampilanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tampilan.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTampilanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Tampilan $tampilan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tampilan $tampilan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTampilanRequest $request, Tampilan $tampilan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tampilan $tampilan)
    {
        //
    }
}
