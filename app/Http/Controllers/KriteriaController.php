<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kriteria = Kriteria::all();
        return view('kriteria.index', compact('kriteria'));
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
            'nm_kriteria' => 'required',
            'jenis' => 'required'
        ]);
         
        Kriteria::create($request->all());
        return redirect()->route('kriteria.index')
                        ->with('success','Kriteria created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kriteria  $kriteria
     * @return \Illuminate\Http\Response
     */
    public function show(Kriteria $kriteria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kriteria  $kriteria
     * @return \Illuminate\Http\Response
     */
    public function edit(Kriteria $kriterium)
    {
        //
        $kriterium = Kriteria::find($kriterium->id_kriteria);
        return view('kriteria.edit',compact('kriterium'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kriteria  $kriteria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kriteria $kriterium)
    {
        //
        $request->validate([
            'nm_kriteria' => 'required',
            'jenis' => 'required'
        ]);
        $kriterium = Kriteria::find($kriterium->id_kriteria);
        $kriterium->nm_kriteria = $request->nm_kriteria;
        $kriterium->jenis = $request->jenis;
        $kriterium->save();
        return redirect()->route('kriteria.index')
                        ->with('success','Kriteria updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kriteria  $kriteria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kriteria::find($id)->delete();
        return redirect()->route('kriteria.index')
                        ->with('success','Kriteria deleted successfully');
    }
}
