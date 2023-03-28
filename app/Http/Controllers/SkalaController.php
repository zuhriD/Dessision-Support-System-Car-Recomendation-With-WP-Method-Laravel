<?php

namespace App\Http\Controllers;

use App\Models\Skala;
use Illuminate\Http\Request;

class SkalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $skala = Skala::all();
        return view('skala.index', compact('skala'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'value_skala' => 'required',
            'keterangan' => 'required',
        ]);

        $skala = new Skala();
        $skala->value = $request->value_skala;
        $skala->keterangan = $request->keterangan;
        $skala->save();
        return redirect()->route('skala.index')
            ->with('success', 'Skala created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Skala  $skala
     * @return \Illuminate\Http\Response
     */
    public function show(Skala $skala)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Skala  $skala
     * @return \Illuminate\Http\Response
     */
    public function edit(Skala $skala)
    {
        //
        $skala = Skala::find($skala->id_skala);
        return view('skala.edit', compact('skala'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Skala  $skala
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skala $skala)
    {
        //
        $request->validate([
            'value_skala' => 'required',
            'keterangan' => 'required',
        ]);
        
        $skala = Skala::find($skala->id);
        $skala->value = $request->value_skala;
        $skala->keterangan = $request->keterangan;
        $skala->save();
        return redirect()->route('skala.index')
            ->with('success', 'Skala updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Skala  $skala
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skala $skala)
    {
        //
        $skala->delete();
        return redirect()->route('skala.index')
            ->with('success', 'Skala deleted successfully');
    }
}
