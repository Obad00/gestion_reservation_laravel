<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use App\Http\Requests\StoreEvenementRequest;
use App\Http\Requests\UpdateEvenementRequest;
use Illuminate\Http\Request;

class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Vérifier si l'utilisateur a déjà une association
        if (auth()->user()->association) {
            return redirect()->route('associations.index')->with('error', 'Vous avez déjà créé une association.');
        }

        return view('associations.create');
    }

    public function store(Request $request)
    {
        // Vérifier si l'utilisateur a déjà une association
        if (auth()->user()->association) {
            return redirect()->route('associations.index')->with('error', 'Vous avez déjà créé une association.');
        }

        $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'required|string',
            'logo' => 'required|string',
            'adresse' => 'required|string',
            'contact' => 'required|integer',
            'secteur' => 'required|string',
            'ninea' => 'required|string',
        ]);

        auth()->user()->association()->create($request->all());

        return redirect()->route('associations.index')->with('success', 'Association créée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Evenement $evenement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Evenement $evenement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEvenementRequest $request, Evenement $evenement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evenement $evenement)
    {
        //
    }
}
