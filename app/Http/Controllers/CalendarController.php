<?php

namespace App\Http\Controllers;

use App\Models\Kalendari;
use App\Models\Kartela;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class CalendarController extends Controller
{
        public function index()
    {
        $events = Kalendari::select('kartela_id', 'kontrollet', 'orari', 'id')->get();


        $formattedEvents = $events->map(function ($event) {
            return [
                'title' => $event->kartela_id,
                'start' => Carbon::parse($event->kontrollet . ' ' . $event->orari)->format('Y-m-d H:i:s'), 
                'id' => $event->id,
            ];        
        });

        return response()->json($formattedEvents);
    }

    public function view(){
        $kartela = Kartela::all();
        return view('contain.calendar', ['kartela' => $kartela]);
    }

    public function view2(){
        $kartela = Kartela::all()->map(function ($item) {
            return ['id' => $item->id, 'emri' => $item->name]; // Assuming 'id' and 'name' are the fields
        });
        return response()->json($kartela);
    }
    

    public function store(Request $request)
    {
        $request->validate([
            'kartela_id' => 'required',
            'kontrollet' => 'required',
            'orari' => 'required',
        ]);
    
        $kartelaId = $request->input('kartela_id');
        $orari = $request->input('orari');
        $newDate = $request->input('kontrollet');
    
        $secondTableData = [
            'kartela_id' => $kartelaId,
            'kontrollet' => $newDate,
            'orari' => $orari . ':00',
        ];
    
        $vizita = Kalendari::create($secondTableData);
    
        return redirect()->back()->with('success', 'Rezervimi u krye me sukses!');
    }
    
    public function update(Request $request,string $id) {
        $validated = $request->validate([
            'kontrollet' => 'required',
            'orari' => 'required',
        ]);

        $kalendari = Kalendari::findOrFail($id);
        $kalendari->kontrollet = $validated['kontrollet'];
        $kalendari->orari = $validated['orari'];
        $kalendari->save();

        // Return a JSON response
        return response()->json(['success' => 'Rezervimi u krye me sukses!']);
        
    }
    
    public function destroy(string $id)
    {
        $post = Kalendari::findOrFail($id);
        $post->delete();
    
        return redirect()->back()->with('success', 'Rezervimi u fshi me sukses!');
    }
}
