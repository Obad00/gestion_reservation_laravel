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
        //
    }
    public function affichageevenement(){
        $evenement=Evenement::all();
        return view ('/evenement/index',compact('evenement'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $associations = Association::all();
        return view('evenements.ajoutEvenement');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEvenementRequest $request)
    {
        $evenement = new Evenement();
        $evenement->libelle = $request->libelle;
        $evenement->description = $request->description;
        $evenement->localite = $request->localite;
        $evenement->date_evenement = $request->date_evenement;
        $evenement->date_limite_inscription = $request->date_limite_inscription;
        $evenement->nombre_place = $request->nombre_place;
        // $evenement->image = $request->image;
        // $evenement->association_id = $request->association_id;
        // $evenement->association_id = $request->association_id;
        $evenement->save();
        dd($evenement);
        // Redirection vers une route nommée 'index/Evenement' après la création
        return redirect()->route('index.evenement');

        
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
