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
        $associations = Association::withCount('evenements')->get();
        return view('admins.associations.index',compact('associations'));
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
