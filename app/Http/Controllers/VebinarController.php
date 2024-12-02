<?php

namespace App\Http\Controllers;

use App\Models\Vebinar;
use Illuminate\Http\Request;

class VebinarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vebinars = Vebinar::all();
        return view('vebinar.vebinars', compact('vebinars'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Vebinar $vebinar)
    {
        return view('vebinar.vebinar', compact('vebinar'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vebinar $vebinar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vebinar $vebinar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vebinar $vebinar)
    {
        //
    }
}
