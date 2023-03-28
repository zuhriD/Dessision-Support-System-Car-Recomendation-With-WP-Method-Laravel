<?php

namespace App\Http\Controllers;

use App\Models\Penilaian;
use App\Models\Alternatif;
use App\Models\Bobot;
use App\Models\Skala;
use Illuminate\Http\Request;

class PenilaianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $penilaian = Penilaian::with('alternatif', 'bobot', 'skala')->get();
        $alternatif = Alternatif::all();
        $bobot = Bobot::all();
        $skala = Skala::all();
        return view('matrix.index', compact('penilaian', 'alternatif', 'bobot', 'skala'));
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
        $request->validate([
            'alternatif_id' => 'required',
            'bobot_id' => 'required',
            'skala_id' => 'required',
        ]);
        $penilaian = new Penilaian();
        $penilaian->idalternatif = $request->alternatif_id;
        $penilaian->id_bobot = $request->bobot_id;
        $penilaian->id_skala = $request->skala_id;
        $penilaian->save();
        return redirect()->route('penilaian.index')
            ->with('success', 'Penilaian created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penilaian  $penilaian
     * @return \Illuminate\Http\Response
     */
    public function show(Penilaian $penilaian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penilaian  $penilaian
     * @return \Illuminate\Http\Response
     */
    public function edit(Penilaian $penilaian)
    {
        //
        $penilaian = Penilaian::find($penilaian->id_nilai);
        $alternatif = Alternatif::all();
        $bobot = Bobot::all();
        $skala = Skala::all();
        return view('matrix.edit', compact('penilaian', 'alternatif', 'bobot', 'skala'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Penilaian  $penilaian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penilaian $penilaian)
    {
        //
        $request->validate([
            'alternatif_id' => 'required',
            'bobot_id' => 'required',
            'skala_id' => 'required',
        ]);
        $penilaian = Penilaian::find($penilaian->id);
        $penilaian->idalternatif = $request->alternatif_id;
        $penilaian->id_bobot = $request->bobot_id;
        $penilaian->id_skala = $request->skala_id;
        $penilaian->save();
        return redirect()->route('penilaian.index')
            ->with('success', 'Penilaian updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penilaian  $penilaian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penilaian $penilaian)
    {
        $penilaian->delete();
        return redirect()->route('penilaian.index')
            ->with('success', 'Penilaian deleted successfully');
    }
}
