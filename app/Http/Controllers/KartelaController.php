<?php

namespace App\Http\Controllers;

use App\Http\Requests\KartelaRequest;
use App\Models\Analiza;
use App\Models\Anamneza;
use App\Models\Kartela;
use App\Models\Operacioni;
use App\Models\Sherbimi;
use App\Models\User;
use App\Models\Vizita;
use Illuminate\Http\Request;

class KartelaController extends Controller
{
    public function index()
    {
        $kartela = Kartela::all();
        return view('contain.kartela', ['kartela' => $kartela]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function store(KartelaRequest $request)
    {
        $validated = $request->validated();

        $pacientId = $request->input('pacient_id');
        $validated['pacient_id'] = $pacientId;

        $user = Kartela::create($validated);
        return redirect()->route('contain.kartela')->with('success', 'Kartela u krijua me sukses!');
    }

    public function show(string $id)
    {
        $analiza = Analiza::where('kartela_id', $id)->get();
        $sherbimet = Sherbimi::all();
        $kartela = Kartela::where('id', $id)->first();
        $operacioni = Operacioni::where('kartela_id', $id)->get();
        $vizita = Vizita::where('kartela_id', $id)->get();
        $anamneza = Anamneza::where('kartela_id', $id)->get();
        return view('contain.kartela_single', ['kartela' => $kartela,'operacioni' => $operacioni , 'vizita' => $vizita, 'sherbimet' => $sherbimet, 'analiza' => $analiza, 'anamneza' => $anamneza]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(KartelaRequest $request, string $id)
    {
        $validated = $request->validated();
        $kartela = Kartela::findOrFail($id);
        
        $kartela->fill($validated);
        $kartela->save();

        return redirect('/kartela/' . $kartela->id)->with('success', 'Informacioni personal u përditësua me sukses!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
