<?php

namespace App\Http\Controllers;

use App\Http\Requests\OperacionRequest;
use App\Models\Analiza;
use App\Models\Kartela;
use App\Models\Operacioni;
use App\Models\Sherbimi;
use App\Models\Vizita;
use Illuminate\Http\Request;

class OperacionController extends Controller
{
    public function store(OperacionRequest $request)
    {
        $validated = $request->validated();

        $kartelaId = $request->input('kartela_id');
        $validated['kartela_id'] = $kartelaId;

        $user = Operacioni::create($validated);
        return redirect()->back()->with('success', 'Operacioni u krijua me sukses!');
    }

    public function show(string $id)
    {
        $operacioni = Operacioni::where('id', $id)->first();
        $vizita = Vizita::where('kartela_id', $id)->get();
        return view('contain.operimi', ['operacioni' => $operacioni]);
    }

    public function destroy(string $id)
    {
        $post = Operacioni::findOrFail($id);
        $post->delete();

        return redirect()->back()->with('success', 'Operacioni u fshi me sukses!');
    }
}
