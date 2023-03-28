<?php

namespace App\Http\Controllers;

use App\Models\Bobot;
use App\Models\Kriteria;
use Illuminate\Http\Request;

class BobotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bobot = Bobot::with('kriteria')->get();
        $kriteria = Kriteria::all();
        return view('bobot.index', compact('bobot', 'kriteria'));
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
            'id_kriteria' => 'required',
            'value_bobot' => 'required'
        ]);
        $bobot = new Bobot;
        $bobot->id_kriteria = $request->id_kriteria;
        $bobot->valuebobot = $request->value_bobot;
        $bobot->save();
        return redirect()->route('bobot.index')
                        ->with('success','Bobot created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bobot  $bobot
     * @return \Illuminate\Http\Response
     */
    public function show(Bobot $bobot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bobot  $bobot
     * @return \Illuminate\Http\Response
     */
    public function edit(Bobot $bobot)
    {
        //
        $bobot = Bobot::find($bobot->id_bobot);
        $kriteria = Kriteria::all();
        return view('bobot.edit', compact('bobot', 'kriteria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bobot  $bobot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bobot $bobot)
    {
        //
        $request->validate([
            'id_kriteria' => 'required',
            'valuebobot' => 'required'
        ]);
        $bobot = Bobot::find($bobot->id_bobot);
        $bobot->id_kriteria = $request->id_kriteria;
        $bobot->valuebobot = $request->valuebobot;
        $bobot->save();
        return redirect()->route('bobot.index')
                        ->with('success','Bobot updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bobot  $bobot
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bobot $bobot)
    {
        //
        $bobot->delete();
        return redirect()->route('bobot.index')
                        ->with('success','Bobot deleted successfully');
    }
}
