<?php

namespace App\Http\Controllers;

use App\Http\Requests\SherbimiRequest;
use App\Models\Sherbimi;
use Illuminate\Http\Request;

class SherbimiController extends Controller
{
    public function index()
    {
        $sherbimet = Sherbimi::all();
        return view('contain.sherbimi', ['sherbimet' => $sherbimet]);
    }

    public function store(SherbimiRequest $request)
    {
        $validated = $request->validated();
        $user = Sherbimi::create($validated);
        return redirect()->back()->with('success', 'Shërbimi u krijua me sukses!');
    }
    public function destroy(string $id)
    {
        $post = Sherbimi::findOrFail($id);
        $post->delete();

        return redirect()->back()->with('success', 'Shërbimi u fshi me sukses!');
    }
}
