<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use App\Models\Association;
use App\Http\Requests\StoreEvenementRequest;
use App\Http\Requests\UpdateEvenementRequest;

class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //evenements.index
    }
    public function affichageevenement(){
        $evenements=Evenement::all();
        return view ('/evenements/index',compact('evenements'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $associations = auth()->user()->associations;
        return view('evenements.ajoutEvenement', compact('associations'));
    }

    public function store(StoreEvenementRequest $request)
    {
        // $request->validate([
        //     'nom' => 'required|string|max:255',
        //     'description' => 'required|string',
        //     'localite' => 'required|string',
        //     'date_evenement' => 'required|date',
        //     'date_limite_inscription' => 'required|date|before:date_evenement',
        //     'nombre_place' => 'required|integer',
        //     'image' => 'required|string',
        //     'association_id' => 'required|exists:associations,id',
        // ]);
        $evenement = new Evenement();
        $evenement->nom = $request->nom;
        $evenement->description = $request->description;
        $evenement->localite = $request->localite;
        $evenement->date_evenement = $request->date_evenement;
        $evenement->date_limite_inscription = $request->date_limite_inscription;
        $evenement->nombre_place = $request->nombre_place;
        $evenement->image = $request->image;
        $evenement->association_id = $request->association_id;
        $evenement->save();

        // Vérifier si l'utilisateur authentifié est le propriétaire de l'association
        $association = auth()->user()->associations()->findOrFail($request->association_id);

        $association->evenements()->create($request->all());

        return redirect()->route('evenements.index')->with('success', 'Événement créé avec succès.');
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
