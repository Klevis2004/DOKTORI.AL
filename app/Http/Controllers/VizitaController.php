<?php

namespace App\Http\Controllers;

use App\Http\Requests\SherbimeRequest;
use App\Http\Requests\VizitaRequest;
use App\Models\Kalendari;
use App\Models\Kartela;
use App\Models\Sherbime;
use App\Models\Vizita;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class VizitaController extends Controller
{
    public function index()
    {
        $vizita = Vizita::all();
        return view('contain.historiku', ['vizita' => $vizita]);
    }
    public function store(VizitaRequest $request)
{
    $validated = $request->validated();
    $vizita = Vizita::create($validated);

    $kartelaId = $request->input('kartela_id');
    $orari = $request->input('orari');

    $dataFillimit = $request->input('data_fillimit');
    $perseritja = $request->input('perseritja');
    $reminder = $request->input('reminder');
    $dataFillimitDate = Carbon::parse($dataFillimit);

    for ($i = 0; $i < $reminder; $i++) {
        $newDate = $dataFillimitDate->addMonths($perseritja);

        $secondTableData = [
            'kartela_id' => $kartelaId,
            'kontrollet' => $newDate,
            'orari' => $orari.':00',
        ];

        $vizita = Kalendari::create($secondTableData);
    }

    return redirect()->back()->with('success', 'Vizita u krijua me sukses!');
}

    public function destroy(string $id)
    {
        $post = Vizita::findOrFail($id);
        $post->delete();

        return redirect()->back()->with('success', 'Vizita u fshi me sukses!');
    }
}
