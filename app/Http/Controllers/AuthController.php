<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.login');
    }
    public function create()
    {
        return view('auth.signup');
    }
    public function store(AuthRequest $request)
    {
        $validated = $request->validated();
        $validated['password'] = bcrypt($validated['password']);
        $user = User::create($validated);
        return redirect()->route('auth.login')->with('success', 'Llogaria u krijua me sukses!');
    }

    public function authenticate(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('contain.welcome')->with('success', 'Përshëndetje ' . Auth::user()->name . '!');
        }
    
        return back()->withErrors(['message' => 'Invalid login credentials.']);
    }
    

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('auth.login')->with('success', 'Ju dolët nga llogaria me sukses!');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(AuthRequest $request, string $id)
    {
        $validated = $request->validated();
        $user = User::findOrFail($id);
        
        $user->fill($validated);
        $user->save();

        return redirect()->back()->with('success', 'Informacioni personal u përditësua me sukses!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
