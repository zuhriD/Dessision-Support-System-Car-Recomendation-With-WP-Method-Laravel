<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use Illuminate\Http\Request;

class AlternatifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $alternatif = Alternatif::all();
        return view('alternatif.index', compact('alternatif'));
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
            'nmalternatif' => 'required',
        ]);
        $alternatif = new Alternatif;
        $alternatif->nmalternatif = $request->nmalternatif;
        $alternatif->save();
        return redirect()->route('alternatif.index')
                        ->with('success','Alternatif created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alternatif  $alternatif
     * @return \Illuminate\Http\Response
     */
    public function show(Alternatif $alternatif)
    {
        //
        $alternatif = Alternatif::find($alternatif->id);
        return view('alternatif.show', compact('alternatif'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alternatif  $alternatif
     * @return \Illuminate\Http\Response
     */
    public function edit(Alternatif $alternatif)
    {
        //
        $alternatif = Alternatif::find($alternatif->idalternatif);
        return view('alternatif.edit', compact('alternatif'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alternatif  $alternatif
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alternatif $alternatif)
    {
        //
        $request->validate([
            'nmalternatif' => 'required',
        ]);
        $alternatif = Alternatif::find($alternatif->idalternatif);
        $alternatif->nmalternatif = $request->nmalternatif;
        $alternatif->save();
        return redirect()->route('alternatif.index')
                        ->with('success','Alternatif updated successfully');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alternatif  $alternatif
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alternatif $alternatif)
    {
        
        $alternatif->delete();
        return redirect()->route('alternatif.index')
                        ->with('success','Alternatif deleted successfully');
    }
}
