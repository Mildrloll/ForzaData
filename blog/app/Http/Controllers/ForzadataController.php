<?php

namespace App\Http\Controllers;

use App\Models\Forzadata;
use Illuminate\Http\Request;

class ForzadataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $forzadatas = Forzadata::latest()->paginate(5);
        return view('forzadatas.index', compact('forzadatas'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forzadatas.create');
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
            'year' => 'required',
            'manufacturer' => 'required',
            'model' => 'required',
            'value' => 'required',
            'division' => 'required',
            'pi' => 'required',
            'engine' => 'required',
            'engine_layout' => 'required',
            'drivetrain' => 'required',
            'power_kw' => 'required',
            'touge_nm' => 'required',
            'weight_kg' => 'required',
            'top_speed_kph' => 'required',
            'lap_time' => 'required',
        ]);
        Forzadata::create($request->all());
        return redirect()->route('forzadatas.index')->with('success', 'Forzadata created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Forzadata  $forzadata
     * @return \Illuminate\Http\Response
     */
    public function show(Forzadata $forzadata)
    {
        return view('forzadatas.show', compact('forzadata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Forzadata  $forzadata
     * @return \Illuminate\Http\Response
     */
    public function edit(Forzadata $forzadata)
    {
        return view('forzadatas.edit', compact('forzadata'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Forzadata  $forzadata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Forzadata $forzadata)
    {
        $request->validate([
            'year' => 'required',
            'manufacturer' => 'required',
            'model' => 'required',
            'value' => 'required',
            'division' => 'required',
            'pi' => 'required',
            'engine' => 'required',
            'engine_layout' => 'required',
            'drivetrain' => 'required',
            'power_kw' => 'required',
            'touge_nm' => 'required',
            'weight_kg' => 'required',
            'top_speed_kph' => 'required',
            'lap_time' => 'required',
        ]);
        $forzadata->update($request->all());
        return redirect()->route('forzadatas.index')->with('success', 'Forzadata updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Forzadata  $forzadata
     * @return \Illuminate\Http\Response
     */
    public function destroy(Forzadata $forzadata)
    {
        $forzadata->delete();
        return redirect()->route('forzadatas.index')->with('success', 'Forzadata deleted successfully');
    }
}
