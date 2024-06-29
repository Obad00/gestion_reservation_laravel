<?php

namespace App\Http\Controllers;

use App\Models\Association;
use App\Http\Requests\StoreAssociationRequest;
use App\Http\Requests\UpdateAssociationRequest;

class AssociationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $associations = Association::withCount('evenements')->where('etat',true)->get();
        return view('admins.associations.index',compact('associations'));
    }

    // asssociations bloquees
    public function listeBloquee()
    {
        $associations = Association::withCount('evenements')->where('etat',false)->get();
        return view('admins.associations.bloquee',compact('associations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAssociationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Association $association)
    {
        
        // Use the relationship to get the events associated with the specific association
        $evenements = $association->evenements;
        
        // Return the view with the association and its related events
        return view('admins.associations.show', compact('association', 'evenements'));
    }

    // bloquee un association 
    public function bloquee_un_associatiation(Association $association){
    $association->update([
        'etat' => false,
    ]);
    return redirect()->back()->with('success','association est '.$association->nom.' bloquee');
    }


    public function debloquee_un_associatiation(Association $association){
        $association->update([
            'etat' => true,
        ]);
        return redirect()->back()->with('success','association est '.$association->nom.' debloquee');
        }
    

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Association $association)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAssociationRequest $request, Association $association)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Association $association)
    {
        //
    }
}
