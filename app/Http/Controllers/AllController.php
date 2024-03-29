<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnalizaReuqest;
use App\Http\Requests\AnamnezaRequest;
use App\Models\Analiza;
use App\Models\Anamneza;
use App\Models\Sherbime;
use App\Models\Sherbimi;
use App\Models\User;
use App\Models\Vizita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AllController extends Controller
{
    public function index()
    {
        return view('contain.welcome');
    }

    public function store(AnalizaReuqest $request)
    {
    $validated = $request->validated();

    $kartelaId = $request->input('kartela_id');
    $validated['kartela_id'] = $kartelaId;

    if ($request->hasFile('analizat_docs')) {
        $uploadedFile = $request->file('analizat_docs');
        $allowedExtensions = ['pdf', 'xlsx', 'docx'];
        $extension = $uploadedFile->getClientOriginalExtension();

        if (in_array($extension, $allowedExtensions)) {
            $fileName = uniqid('document_') . '.' . $extension;
            $filePath = $uploadedFile->move(public_path('uploads/analiza'), $fileName);
            $validated['analizat_docs'] = 'uploads/analiza/' . $fileName;
        } else {
            return redirect()->back()->with('error', 'Invalid file format. Please upload a PDF, DOC, or DOCX file.');
        }
    }

    $user = Analiza::create($validated);

    return redirect()->back()->with('success', 'Analiza u ngarkua me sukses!');
    }

    public function destroy(string $id)
    {
        $post = Analiza::findOrFail($id);
        $post->delete();

        return redirect()->back()->with('success', 'Analiza u fshi me sukses!');
    }

    public function profile()
    {
        $user = User::where('id', Auth::id())->first();
        return view('contain.profile', ['user' => $user]);
    }   
    
    public function anamneza(AnamnezaRequest $request)
    {
       
        $validated = $request->validated();
        
        $kartelaId = $request->input('kartela_id');
        $validated['kartela_id'] = $kartelaId;
        
        $anamneza = Anamneza::create($validated);
        return redirect()->back()->with('success', 'Anamneza u ngarkua me sukses!');
    }

    public function anamneza_index($id){

        $anamneza = Anamneza::where('id', $id)->first();
        return view('contain.anamneza', ['anamneza' => $anamneza]);
    }

    public function anamneza_destroy(string $id)
    {
        $post = Anamneza::findOrFail($id);
        $post->delete();

        return redirect()->back()->with('success', 'Anamneza u fshi me sukses!');
    }
}
